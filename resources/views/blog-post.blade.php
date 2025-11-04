@extends('layouts.app')

@section('title', $post->title . ' - Myth of Yggdrasil')
@section('description', Str::limit(strip_tags($post->content), 160))

@section('content')
<main class="max-w-[1200px] mx-auto p-5">
    <div class="mb-6">
        <a href="{{ route('blog') }}" class="text-brand-main hover:underline font-robotoCond">← Voltar para o blog</a>
    </div>
    
    <article class="bg-white rounded-lg shadow-md overflow-hidden">
        @if($post->image)
        <div class="w-full h-96 bg-gray-200">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        </div>
        @endif
        
        <div class="p-8">
            <div class="flex flex-wrap gap-2 mb-4">
                @php
                    $categoryLabels = [
                        'guidebook' => 'Guia Oficial',
                        'news-and-events' => 'Novidades & Eventos',
                        'patch-notes' => 'Notas de Atualização'
                    ];
                @endphp
                <span class="text-sm font-robotoCond uppercase bg-brand-main text-white px-3 py-1 rounded-sm">
                    {{ $categoryLabels[$post->category] ?? $post->category }}
                </span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold font-robotoCond text-brand-main mb-4">{{ $post->title }}</h1>
            
            <p class="text-gray-500 mb-8">
                <time datetime="{{ $post->published_at->toIso8601String() }}">
                    {{ $post->published_at->format('d/m/Y') }}
                </time>
            </p>
            
            <div class="prose prose-lg max-w-none">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
    </article>
    
    @if($relatedPosts->count() > 0)
    <section class="mt-12">
        <h2 class="text-3xl font-bold font-robotoCond text-brand-main mb-6">Notícias Relacionadas</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedPosts as $related)
            <div class="border rounded-md overflow-hidden shadow hover:shadow-md transition-all">
                <a href="{{ route('blog.show', $related->slug) }}">
                    <div class="relative w-full h-48 bg-gray-200">
                        @if($related->image)
                            <img alt="{{ $related->title }}" src="{{ asset('storage/' . $related->image) }}" class="w-full h-full object-cover" />
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                <span>Sem imagem</span>
                            </div>
                        @endif
                    </div>
                </a>
                <div class="p-4">
                    <a href="{{ route('blog.show', $related->slug) }}">
                        <h3 class="text-xl font-bold font-robotoCond mb-2 hover:text-brand-main">{{ $related->title }}</h3>
                    </a>
                    <p class="text-gray-500 text-sm">{{ $related->published_at->format('d/m/Y') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif
</main>
@endsection
