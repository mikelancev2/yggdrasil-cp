@extends('layouts.app')

@section('title', 'Gerenciar Referências - Admin')
@section('description', 'Gerenciamento do sistema de referências')

@section('content')
<main class="max-w-[1200px] mx-auto p-5">
    <h1 class="text-4xl font-bold font-robotoCond text-brand-main mb-8">Gerenciar Referências</h1>

    @if(session('message'))
        <div class="mb-6 p-4 rounded-md {{ session('message_type') === 'success' ? 'bg-green-100 border border-green-400' : 'bg-red-100 border border-red-400' }}">
            <p class="font-robotoCond text-sm {{ session('message_type') === 'success' ? 'text-green-700' : 'text-red-700' }}">
                {{ session('message_type') === 'success' ? '✓' : '✗' }} {{ session('message') }}
            </p>
        </div>
    @endif

    <!-- Toggle Sistema -->
    <div class="mb-6 bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold font-robotoCond text-gray-800 mb-2">Sistema de Referências</h2>
                <p class="text-sm font-robotoCond text-gray-600">
                    {{ $referralSystemEnabled ? 'Sistema atualmente ATIVO' : 'Sistema atualmente DESATIVADO' }}
                </p>
            </div>
            <form method="POST" action="{{ route('admin.referrals.toggle') }}">
                @csrf
                <input type="hidden" name="enabled" value="{{ $referralSystemEnabled ? 'false' : 'true' }}">
                <button type="submit" style="color: white !important; {{ $referralSystemEnabled ? 'background-color: #dc2626 !important;' : 'background-color: #16a34a !important;' }}" class="px-6 py-3 rounded-md font-robotoCond font-bold transition-colors border-2 {{ $referralSystemEnabled ? 'border-red-700' : 'border-green-700' }}">
                    {{ $referralSystemEnabled ? 'Desativar' : 'Ativar' }}
                </button>
            </form>
        </div>
    </div>

    <!-- Estatísticas -->
    <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <span class="font-robotoCond text-gray-600 text-xs uppercase block mb-2">Usuários com Referências</span>
            <span class="font-bold text-3xl text-purple-600 font-robotoCond">{{ $usersWithReferrals->count() }}</span>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <span class="font-robotoCond text-gray-600 text-xs uppercase block mb-2">Total de Cadastros</span>
            <span class="font-bold text-3xl text-green-600 font-robotoCond">{{ $usersWithReferrals->sum('referral_count') }}</span>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <span class="font-robotoCond text-gray-600 text-xs uppercase block mb-2">Líder</span>
            <span class="font-bold text-2xl text-yellow-600 font-robotoCond">
                @if($usersWithReferrals->count() > 0)
                    {{ $usersWithReferrals->first()->referral_count }} refs
                @else
                    0 refs
                @endif
            </span>
        </div>
    </div>

    <!-- Ranking -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6 border-b">
            <h2 class="text-2xl font-bold font-robotoCond text-brand-main">🏆 Ranking de Referências</h2>
        </div>
        
        @if($usersWithReferrals->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Posição</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Código</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Referências</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($usersWithReferrals as $index => $userRef)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-lg font-bold font-robotoCond {{ $index === 0 ? 'text-yellow-600' : ($index === 1 ? 'text-gray-400' : ($index === 2 ? 'text-orange-600' : 'text-gray-600')) }}">
                                        @if($index === 0) 🥇
                                        @elseif($index === 1) 🥈
                                        @elseif($index === 2) 🥉
                                        @else {{ $index + 1 }}º
                                        @endif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm font-robotoCond text-gray-900">{{ $userRef->name }}</td>
                                <td class="px-6 py-4 text-sm font-robotoCond text-gray-600">{{ $userRef->email }}</td>
                                <td class="px-6 py-4 text-sm font-robotoCond">
                                    <code class="bg-gray-100 px-2 py-1 rounded text-xs">{{ $userRef->referral_code ?? 'N/A' }}</code>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-bold font-robotoCond bg-purple-100 text-purple-800">
                                        {{ $userRef->referral_count }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('admin.referrals.show', $userRef->id) }}" class="text-brand-main hover:underline font-robotoCond text-sm font-bold">
                                        Ver Detalhes
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="p-12 text-center">
                <p class="text-gray-600 font-robotoCond text-lg">Nenhum usuário com referências ainda</p>
            </div>
        @endif
    </div>
</main>
@endsection
