<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{
    public function index()
    {
        // Verificar se o usuário é admin
        $userId = session('user_id');
        if (!$userId) {
            return redirect('/account');
        }

        $user = User::find($userId);
        if (!$user || $user->role !== 'admin') {
            return redirect('/account')->with('message', 'Acesso negado.')->with('message_type', 'error');
        }

        // Buscar configuração do sistema de referências
        $referralSystemEnabled = DB::connection('mysql')->table('settings')
            ->where('key', 'referral_system_enabled')
            ->value('value') ?? '1'; // Ativado por padrão

        // Buscar usuários com suas contagens de referências
        $usersWithReferrals = User::select('users.*', DB::raw('COUNT(referred.id) as referral_count'))
            ->leftJoin('users as referred', 'referred.referred_by', '=', 'users.id')
            ->groupBy('users.id')
            ->having('referral_count', '>', 0)
            ->orderBy('referral_count', 'DESC')
            ->get();

        return view('admin.referrals.index', [
            'usersWithReferrals' => $usersWithReferrals,
            'referralSystemEnabled' => $referralSystemEnabled === '1',
        ]);
    }

    public function toggle(Request $request)
    {
        // Verificar se o usuário é admin
        $userId = session('user_id');
        if (!$userId) {
            return redirect('/account');
        }

        $user = User::find($userId);
        if (!$user || $user->role !== 'admin') {
            return redirect('/account')->with('message', 'Acesso negado.')->with('message_type', 'error');
        }

        $enabled = $request->input('enabled') === 'true' ? '1' : '0';

        // Criar tabela de settings se não existir
        DB::connection('mysql')->statement('CREATE TABLE IF NOT EXISTS settings (
            id INT AUTO_INCREMENT PRIMARY KEY,
            `key` VARCHAR(255) UNIQUE NOT NULL,
            value TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )');

        // Atualizar ou inserir configuração
        DB::connection('mysql')->table('settings')->updateOrInsert(
            ['key' => 'referral_system_enabled'],
            ['value' => $enabled]
        );

        $message = $enabled === '1' 
            ? 'Sistema de referências ativado com sucesso!' 
            : 'Sistema de referências desativado com sucesso!';

        return back()->with('message', $message)->with('message_type', 'success');
    }

    public function show($userId)
    {
        // Verificar se o usuário é admin
        $adminId = session('user_id');
        if (!$adminId) {
            return redirect('/account');
        }

        $admin = User::find($adminId);
        if (!$admin || $admin->role !== 'admin') {
            return redirect('/account')->with('message', 'Acesso negado.')->with('message_type', 'error');
        }

        // Buscar usuário e suas referências
        $user = User::findOrFail($userId);
        $referrals = User::where('referred_by', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('admin.referrals.show', [
            'user' => $user,
            'referrals' => $referrals,
            'totalReferrals' => $referrals->count(),
        ]);
    }
}
