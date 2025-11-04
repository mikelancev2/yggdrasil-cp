@extends('layouts.app')

@section('title', 'Blog - Myth of Yggdrasil')
@section('description', 'Latest news and updates from Myth of Yggdrasil.')

@section('content')
<main class="max-w-[1200px] mx-auto p-5">
    <header class="flex flex-row items-center justify-center gap-3 mb-10" aria-labelledby="blog-title">
        <img alt="Amanda Guide" loading="lazy" width="59" height="98" decoding="async" data-nimg="1" class="object-contain scale-x-[-1]" style="color:transparent" src="{{ asset('img/guide_amanda.gif') }}"/>
        <h1 class="text-4xl my-auto md:text-5xl text-start font-core text-brand-main uppercase">fofocando <br/> com amanda</h1>
    </header>
    <div class="flex md:flex-row-reverse flex-col-reverse w-full items-center justify-between gap-6 mb-10">
        <a class="py-3 rounded-md font-robotoCond font-bold text-lg w-full text-center bg-white text-brand-main border-2 border-brand-main hover:bg-brand-green hover:text-white hover:border-brand-green transition-colors duration-150 ease-in-out" href="{{ url('/blog?category=guidebook') }}">Guia Oficial</a>
        <a class="py-3 rounded-md font-robotoCond font-bold text-lg w-full text-center bg-white text-brand-main border-2 border-brand-main hover:bg-brand-green hover:text-white hover:border-brand-green transition-colors duration-150 ease-in-out" href="{{ url('/blog?category=news-and-events') }}">Novidades &amp; Eventos</a>
        <a class="py-3 rounded-md font-robotoCond font-bold text-lg w-full text-center bg-white text-brand-main border-2 border-brand-main hover:bg-brand-green hover:text-white hover:border-brand-green transition-colors duration-150 ease-in-out" href="{{ url('/blog?category=patch-notes') }}">Notas de Atualização</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($news as $post)
        <div class="border rounded-md overflow-hidden shadow hover:shadow-md transition-all">
            <a href="{{ route('blog.show', $post->slug) }}">
                <div class="relative w-full h-48 bg-gray-200">
                    @if($post->image)
                        <img alt="{{ $post->title }}" src="{{ asset('storage/' . $post->image) }}" class="w-full h-full object-cover" />
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400">
                            <span>Sem imagem</span>
                        </div>
                    @endif
                </div>
            </a>
            <div class="p-5">
                <div class="flex flex-wrap gap-2 mb-2">
                    @php
                        $categoryLabels = [
                            'guidebook' => 'Guia Oficial',
                            'news-and-events' => 'Novidades & Eventos',
                            'patch-notes' => 'Notas de Atualização'
                        ];
                    @endphp
                    <a class="text-xs font-robotoCond uppercase bg-gray-200 px-2 py-1 rounded-sm hover:bg-gray-300" href="{{ url('/blog?category=' . $post->category) }}">
                        {{ $categoryLabels[$post->category] ?? $post->category }}
                    </a>
                </div>
                <a href="{{ route('blog.show', $post->slug) }}">
                    <h2 class="text-2xl font-bold font-robotoCond mb-2 hover:text-brand-main">{{ $post->title }}</h2>
                </a>
                <p class="text-gray-500 text-sm">{{ $post->published_at->format('d/m/Y') }}</p>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-10">
            <p class="text-gray-500 text-lg">Nenhuma notícia encontrada.</p>
        </div>
        @endforelse
    </div>
    
    @if($news->hasPages())
    <div class="mt-8">
        {{ $news->links() }}
    </div>
    @endif
</main>
@endsection
