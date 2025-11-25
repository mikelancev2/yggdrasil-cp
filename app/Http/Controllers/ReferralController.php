<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function index()
    {
        $userId = session('user_id');
        
        if (!$userId) {
            return redirect()->route('login');
        }

        $user = User::find($userId);
        
        if (!$user) {
            return redirect()->route('login');
        }

        // Verificar se o sistema de referências está ativo
        $referralSystemEnabled = \DB::connection('mysql')->table('settings')
            ->where('key', 'referral_system_enabled')
            ->value('value') ?? '1';

        if ($referralSystemEnabled !== '1') {
            return redirect('/account')->with('message', 'O sistema de referências está temporariamente desativado.')->with('message_type', 'error');
        }

        // Gerar código de referência se não existir
        if (!$user->referral_code) {
            $user->referral_code = $this->generateUniqueReferralCode();
            $user->save();
        }

        // Buscar usuários que se cadastraram com o código desta pessoa
        $referrals = User::where('referred_by', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        // Total de referências
        $totalReferrals = $referrals->count();

        // Últimos 5 emails
        $recentReferrals = $referrals->take(5);

        // Gerar link de referência
        $referralLink = config('app.url') . '/account?ref=' . $user->referral_code;

        return view('referrals.index', [
            'totalReferrals' => $totalReferrals,
            'recentReferrals' => $recentReferrals,
            'referralLink' => $referralLink,
            'referralCode' => $user->referral_code
        ]);
    }

    /**
     * Gera um código de referência único
     */
    private function generateUniqueReferralCode()
    {
        do {
            // Gera código alfanumérico de 8 caracteres
            $code = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8));
        } while (User::where('referral_code', $code)->exists());

        return $code;
    }
}
