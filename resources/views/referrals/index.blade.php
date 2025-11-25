@extends('layouts.app')

@section('title', 'Referências - Myth of Yggdrasil')
@section('description', 'Compartilhe seu link e ganhe pontos')

@section('content')
<div class="flex-1 small:py-12" data-testid="account-page">
    <div class="flex-1 h-full max-w-5xl mx-auto bg-white flex flex-col">
        <div class="grid grid-cols-1 small:grid-cols-[240px_1fr] py-12">
            <!-- Sidebar -->
            <div>
                <div class="small:hidden" data-testid="mobile-account-nav">
                    <div class="text-xl-semi mb-4 px-8">Hello {{ session('first_name') ?? 'User' }}</div>
                    <div class="text-base-regular">
                        <ul>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account"><div class="flex items-center gap-x-2"><span>Overview</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/game-accounts"><div class="flex items-center gap-x-2"><span>Game Accounts</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/ygg-points"><div class="flex items-center gap-x-2"><span>Ygg Points</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/votes"><div class="flex items-center gap-x-2"><span>Votos</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/roulette"><div class="flex items-center gap-x-2"><span>Roleta</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/orders"><div class="flex items-center gap-x-2"><span>Transactions</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/referrals"><div class="flex items-center gap-x-2"><span>References</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/download"><div class="flex items-center gap-x-2"><span>Download</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/profile"><div class="flex items-center gap-x-2"><span>Profile</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li>
                                <form method="POST" action="/logout" class="w-full">
                                    @csrf
                                    <button type="submit" class="flex items-center justify-between py-4 border-b border-gray-200 px-8 w-full">
                                        <div class="flex items-center gap-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.167 1.944h3.11c.983 0 1.779.796 1.779 1.778v7.556c0 .982-.796 1.778-1.778 1.778H8.167"></path>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 10.611 8.611 7.5 5.5 4.389M8.611 7.5H1.944"></path>
                                            </svg>
                                            <span>Log out</span>
                                        </div>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden small:block text-lg font-robotoCond">
                    <div>
                        <div class="pb-4 flex flex-row items-start gap-x-2">
                            <h3 class="font-core text-2xl uppercase leading-5">
                                <div class="flex items-center gap-x-1">Global<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" class="text-brand-main"><g fill="currentColor" clip-path="url(#a)"><path d="M11.016 2.825c.181.03.368-.02.513-.132l.136-.106A6.4 6.4 0 0 0 7.5 1.057a6.44 6.44 0 0 0-6.075 4.31c.606 1.364 1.388 2.429 2.354 3.135l.212.15q.119.083.23.164l.021.016c.262.196.488.41.603.728.084.233.074.418.06.652-.018.35-.043.783.26 1.286.278.462.638.652.901.79.201.106.294.159.379.287.248.372.124.943.059 1.17l-.033.111c.336.055.677.09 1.028.09a6.44 6.44 0 0 0 6.006-4.119c-.43-.971-.974-1.517-1.658-1.647-.724-.137-1.267.244-1.705.55-.37.256-.61.415-.853.366-.14-.025-.205-.09-.426-.356-.206-.247-.49-.587-.97-.87-.784-.458-1.756-.575-2.898-.35-.113-.32-.197-.784.02-1.224.047-.095.305-.577.774-.707.372-.103.732.073 1.11.259.424.208 1.004.492 1.564.136.627-.4.559-1.15.504-1.753-.04-.436-.086-.93.11-1.174.24-.301.948-.385 1.939-.23z"></path><path d="M7.5 14.611c-3.92 0-7.111-3.19-7.111-7.111S3.579.389 7.5.389s7.111 3.19 7.111 7.111-3.19 7.111-7.111 7.111m0-12.889A5.784 5.784 0 0 0 1.722 7.5 5.784 5.784 0 0 0 7.5 13.278 5.784 5.784 0 0 0 13.278 7.5 5.784 5.784 0 0 0 7.5 1.722"></path></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h15v15H0z"></path></clipPath></defs></svg></div>Account
                            </h3>
                        </div>
                        <div class="text-base-regular">
                            <ul class="flex mb-0 justify-start items-start flex-col gap-y-4">
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account">Overview</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/game-accounts">Game Accounts</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/ygg-points">Ygg Points</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/votes">Votos</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/roulette">Roleta</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/orders">Transactions</a></li>
                                <li><a class="hover:underline hover:text-ui-fg-base font-semibold uppercase font-robotoCond text-brand-main" href="/account/referrals">References</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/download">Download</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/profile">Profile</a></li>
                                <li>
                                    <form method="POST" action="/logout" class="w-full">
                                        @csrf
                                        <button type="submit">
                                            <span class="flex gap-x-1 items-center text-grey-700 text-md uppercase font-robotoCond">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.167 1.944h3.11c.983 0 1.779.796 1.779 1.778v7.556c0 .982-.796 1.778-1.778 1.778H8.167"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 10.611 8.611 7.5 5.5 4.389M8.611 7.5H1.944"></path>
                                                </svg>
                                                Log out
                                            </span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 px-8">
                <div class="w-full">
                    <!-- Header -->
                    <header class="mb-6">
                        <h1 class="text-3xl font-core uppercase text-center text-brand-main">Programa de Referências</h1>
                        <p class="text-base-regular font-robotoCond text-center text-gray-600 mt-2">Compartilhe seu link e ganhe pontos a cada novo jogador!</p>
                    </header>

                    <!-- Estatísticas -->
                    <div class="mb-6 grid grid-cols-1 gap-4">
                        <div class="p-6 bg-gradient-to-r from-purple-50 to-purple-100 rounded-lg border border-purple-200 text-center">
                            <div class="flex flex-col items-center">
                                <span class="font-robotoCond text-gray-700 text-sm uppercase mb-2">Total de Referências</span>
                                <span class="font-bold text-5xl text-purple-700 font-core">{{ $totalReferrals }}</span>
                                <p class="text-xs text-gray-600 font-robotoCond mt-2">{{ $totalReferrals === 1 ? 'pessoa se cadastrou' : 'pessoas se cadastraram' }} usando seu link</p>
                            </div>
                        </div>
                    </div>

                    <!-- Link de Referência -->
                    <div class="mb-6 bg-white border border-gray-200 rounded-lg p-6">
                        <h2 class="text-xl font-core uppercase text-brand-main mb-4 text-center">Seu Link de Referência</h2>
                        
                        <div class="bg-gray-50 p-4 rounded-md border border-gray-200 mb-4">
                            <div class="flex items-center justify-between gap-4">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-xs font-robotoCond text-gray-600 mb-1">Link:</p>
                                    <input 
                                        type="text" 
                                        id="referralLink" 
                                        value="{{ $referralLink }}" 
                                        readonly 
                                        class="w-full px-3 py-2 bg-white border border-gray-300 rounded font-robotoCond text-sm text-gray-700"
                                    />
                                </div>
                                <button 
                                    onclick="copyReferralLink()" 
                                    class="px-4 py-2 bg-brand-main text-white rounded-md hover:bg-brand-green transition-colors font-robotoCond font-semibold whitespace-nowrap"
                                >
                                    📋 Copiar
                                </button>
                            </div>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-md border border-blue-200">
                            <p class="text-sm font-robotoCond text-blue-800">
                                <strong>💡 Dica:</strong> Compartilhe este link com seus amigos nas redes sociais, Discord, ou onde quiser! Cada pessoa que criar uma conta usando seu link conta como 1 ponto de referência.
                            </p>
                        </div>
                    </div>

                    <!-- Lista dos Últimos 5 Cadastros -->
                    @if($totalReferrals > 0)
                        <div class="bg-white border border-gray-200 rounded-lg p-6">
                            <h2 class="text-xl font-core uppercase text-brand-main mb-4 text-center">Últimos Cadastros</h2>
                            
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50 border-b border-gray-200">
                                        <tr>
                                            <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">#</th>
                                            <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                                            <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">Data</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($recentReferrals as $index => $referral)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-4 py-3 text-sm font-robotoCond text-gray-900">{{ $index + 1 }}</td>
                                                <td class="px-4 py-3 text-sm font-robotoCond text-gray-900">{{ $referral->email }}</td>
                                                <td class="px-4 py-3 text-sm font-robotoCond text-gray-600">{{ $referral->created_at->format('d/m/Y H:i') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @if($totalReferrals > 5)
                                <p class="text-center text-sm text-gray-600 font-robotoCond mt-4">
                                    Mostrando os 5 cadastros mais recentes de {{ $totalReferrals }} no total
                                </p>
                            @endif
                        </div>
                    @else
                        <div class="text-center py-8 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-gray-600 font-robotoCond mb-2">Você ainda não possui referências.</p>
                            <p class="text-sm text-gray-500 font-robotoCond">Compartilhe seu link para começar a acumular pontos!</p>
                        </div>
                    @endif

                    <!-- Informações Adicionais -->
                    <div class="mt-6 bg-yellow-50 p-4 rounded-md border border-yellow-200">
                        <h3 class="text-sm font-robotoCond font-semibold text-yellow-800 mb-2">📢 Como funciona?</h3>
                        <ul class="text-sm font-robotoCond text-yellow-800 space-y-1 list-disc list-inside">
                            <li>Compartilhe seu link de referência com amigos</li>
                            <li>Quando alguém criar uma conta usando seu link, você ganha 1 ponto</li>
                            <li>Os administradores podem premiar os jogadores com mais referências</li>
                            <li>Não há limite de referências!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyReferralLink() {
        const linkInput = document.getElementById('referralLink');
        linkInput.select();
        linkInput.setSelectionRange(0, 99999); // Para mobile
        
        navigator.clipboard.writeText(linkInput.value).then(function() {
            // Feedback visual
            const button = event.target.closest('button');
            const originalText = button.innerHTML;
            button.innerHTML = '✓ Copiado!';
            button.classList.add('bg-green-600');
            button.classList.remove('bg-brand-main');
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.classList.remove('bg-green-600');
                button.classList.add('bg-brand-main');
            }, 2000);
        }, function(err) {
            alert('Erro ao copiar: ' + err);
        });
    }
</script>
@endsection
