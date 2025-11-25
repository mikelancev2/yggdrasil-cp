@extends('layouts.app')

@section('title', 'Sistema de Votação - Myth of Yggdrasil')
@section('description', 'Vote no servidor e ganhe recompensas!')

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
                                <li><a class="hover:underline hover:text-ui-fg-base font-semibold uppercase font-robotoCond text-brand-main" href="/account/votes">Votos</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/roulette">Roleta</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/orders">Transactions</a></li>
                                <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" href="/account/referrals">References</a></li>
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
            <div class="flex-1">
                <div class="w-full">
                    <header class="text-center mb-8">
                        <h1 class="text-3xl font-bold font-robotoCond text-brand-main mb-2">Sistema de Votação</h1>
                        <p class="text-gray-600 mb-4">Vote nos sites abaixo e ganhe pontos para trocar por recompensas!</p>
                        <div class="bg-brand-main text-white px-6 py-2 rounded-lg inline-block">
                            <span class="font-bold text-lg">Seus Pontos: {{ $userPoints }}</span>
                        </div>
                    </header>
                    </header>

    @if(session('message'))
    <div class="mb-6 p-4 rounded-md {{ session('message_type') === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
        {{ session('message') }}
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($sites as $site)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            @if($site->cover)
            <div class="h-40 bg-gray-200">
                <img src="{{ asset('storage/' . $site->cover) }}" alt="{{ $site->name }}" class="w-full h-full object-cover">
            </div>
            @else
            <div class="h-40 bg-gradient-to-br from-brand-main to-brand-green flex items-center justify-center">
                <span class="text-white text-3xl font-bold">{{ substr($site->name, 0, 1) }}</span>
            </div>
            @endif
            
            <div class="p-5">
                <h2 class="text-xl font-bold font-robotoCond text-brand-main mb-2">{{ $site->name }}</h2>
                <p class="text-gray-600 mb-4">
                    <span class="font-bold text-brand-green">+{{ $site->points }} pontos</span>
                </p>
                
                @if($site->can_vote)
                <button onclick="vote({{ $site->id }}, '{{ $site->name }}')" 
                    class="w-full bg-brand-main text-white px-4 py-2 rounded-md font-bold hover:bg-brand-green transition-colors vote-btn"
                    data-site-id="{{ $site->id }}">
                    Votar Agora
                </button>
                @else
                <div class="text-center">
                    <div class="bg-gray-200 text-gray-600 px-4 py-2 rounded-md font-bold mb-2">
                        Aguarde
                    </div>
                    <p class="text-sm text-gray-500">
                        Próximo voto em: <span class="font-mono font-bold time-left" data-site-id="{{ $site->id }}">{{ $site->time_left }}</span>
                    </p>
                </div>
                @endif
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-10">
            <p class="text-gray-500 text-lg">Nenhum site de votação disponível no momento.</p>
        </div>
        @endforelse
    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function vote(siteId, siteName) {
    const btn = document.querySelector(`.vote-btn[data-site-id="${siteId}"]`);
    const originalText = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = 'Processando...';
    
                fetch(`/account/votes/${siteId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            // Abrir site de votação em nova aba
            window.open(data.url, '_blank');
            // Recarregar página após 1 segundo
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            alert(data.message);
            btn.disabled = false;
            btn.innerHTML = originalText;
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        alert('Ocorreu um erro ao processar seu voto. Tente novamente.');
        btn.disabled = false;
        btn.innerHTML = originalText;
    });
}

// Atualizar contadores de tempo a cada segundo
setInterval(() => {
    document.querySelectorAll('.time-left').forEach(el => {
        const timeStr = el.textContent;
        const parts = timeStr.split(':');
        if (parts.length === 3) {
            let hours = parseInt(parts[0]);
            let minutes = parseInt(parts[1]);
            let seconds = parseInt(parts[2]);
            
            if (seconds > 0) {
                seconds--;
            } else if (minutes > 0) {
                minutes--;
                seconds = 59;
            } else if (hours > 0) {
                hours--;
                minutes = 59;
                seconds = 59;
            } else {
                // Tempo acabou, recarregar página
                window.location.reload();
                return;
            }
            
            el.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }
    });
}, 1000);
</script>
@endsection
