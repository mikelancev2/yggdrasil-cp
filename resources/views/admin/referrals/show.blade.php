@extends('layouts.app')

@section('title', 'Detalhes de Referências - Admin')
@section('description', 'Visualizar todas as referências de um usuário')

@section('content')
<div class="flex-1 small:py-12">
    <div class="flex-1 h-full max-w-6xl mx-auto bg-white flex flex-col px-8 py-12">
        
        <!-- Breadcrumb -->
        <div class="mb-6">
            <a href="{{ route('admin.referrals.index') }}" class="text-brand-main hover:underline font-robotoCond">← Voltar ao Gerenciamento</a>
        </div>

        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-3xl font-core uppercase text-center text-brand-main mb-2">Detalhes de Referências</h1>
            <p class="text-base-regular font-robotoCond text-center text-gray-600">Usuário: {{ $user->name }}</p>
        </header>

        <!-- Info do Usuário -->
        <div class="mb-8 bg-gradient-to-r from-purple-50 to-purple-100 border border-purple-200 rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <span class="font-robotoCond text-gray-700 text-xs uppercase block mb-1">Nome</span>
                    <span class="font-semibold text-lg text-gray-900 font-robotoCond">{{ $user->name }}</span>
                </div>
                <div>
                    <span class="font-robotoCond text-gray-700 text-xs uppercase block mb-1">Email</span>
                    <span class="font-semibold text-lg text-gray-900 font-robotoCond">{{ $user->email }}</span>
                </div>
                <div>
                    <span class="font-robotoCond text-gray-700 text-xs uppercase block mb-1">Código de Referência</span>
                    <code class="bg-white px-3 py-1 rounded text-base font-semibold">{{ $user->referral_code ?? 'N/A' }}</code>
                </div>
            </div>
        </div>

        <!-- Estatística -->
        <div class="mb-8 text-center">
            <div class="inline-block p-8 bg-gradient-to-r from-green-50 to-green-100 rounded-lg border border-green-200">
                <span class="font-robotoCond text-gray-700 text-sm uppercase block mb-2">Total de Pessoas Referidas</span>
                <span class="font-bold text-6xl text-green-700 font-core">{{ $totalReferrals }}</span>
            </div>
        </div>

        <!-- Lista de Referências -->
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <h2 class="text-2xl font-core uppercase text-brand-main mb-6 text-center">📋 Lista Completa de Referências</h2>
            
            @if($totalReferrals > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">#</th>
                                <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">Nome</th>
                                <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                                <th class="px-4 py-3 text-left text-xs font-robotoCond font-semibold text-gray-700 uppercase tracking-wider">Data de Cadastro</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($referrals as $index => $referral)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-robotoCond text-gray-900">{{ $index + 1 }}</td>
                                    <td class="px-4 py-4 text-sm font-robotoCond text-gray-900">{{ $referral->name }}</td>
                                    <td class="px-4 py-4 text-sm font-robotoCond text-gray-600">{{ $referral->email }}</td>
                                    <td class="px-4 py-4 text-sm font-robotoCond text-gray-600">{{ $referral->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-12 bg-gray-50 rounded-lg border border-gray-200">
                    <p class="text-gray-600 font-robotoCond text-lg">Este usuário ainda não possui referências</p>
                </div>
            @endif
        </div>

    </div>
</div>
@endsection
