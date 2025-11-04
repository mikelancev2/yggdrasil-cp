@extends('layouts.app')

@section('title', 'Nova Notícia - Admin')

@section('content')
<div class="max-w-[1200px] mx-auto p-5">
    <div class="mb-6">
        <a href="{{ route('admin.news.index') }}" class="text-brand-main hover:underline font-robotoCond">← Voltar para gerenciar notícias</a>
    </div>

    <h1 class="text-4xl font-bold font-robotoCond text-brand-main mb-8">Nova Notícia</h1>

    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8 max-w-full">
        @csrf

        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Título *</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-brand-main focus:border-brand-main"
                placeholder="Digite o título da notícia">
        </div>

        <div class="mb-6">
            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Categoria *</label>
            <select name="category" id="category" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-brand-main focus:border-brand-main">
                <option value="">Selecione uma categoria</option>
                <option value="guidebook" {{ old('category') == 'guidebook' ? 'selected' : '' }}>Guia Oficial</option>
                <option value="news-and-events" {{ old('category') == 'news-and-events' ? 'selected' : '' }}>Novidades & Eventos</option>
                <option value="patch-notes" {{ old('category') == 'patch-notes' ? 'selected' : '' }}>Notas de Atualização</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Conteúdo *</label>
            <textarea name="content" id="content" rows="12" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-brand-main focus:border-brand-main"
                placeholder="Digite o conteúdo da notícia">{{ old('content') }}</textarea>
        </div>

        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Imagem</label>
            <input type="file" name="image" id="image" accept="image/*"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-brand-main focus:border-brand-main">
            <p class="text-sm text-gray-500 mt-1">Formatos aceitos: JPG, PNG, GIF. Tamanho máximo: 2MB</p>
            <div id="image-preview" class="mt-4 hidden">
                <img src="" alt="Preview" class="max-w-md rounded-md shadow">
            </div>
        </div>

        <div class="mb-6">
            <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">Data de Publicação</label>
            <input type="datetime-local" name="published_at" id="published_at" value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-brand-main focus:border-brand-main">
            <p class="text-sm text-gray-500 mt-1">Deixe em branco para salvar como rascunho</p>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-brand-main text-white px-6 py-3 rounded-md font-robotoCond font-bold hover:bg-brand-green transition-colors">
                Criar Notícia
            </button>
            <a href="{{ route('admin.news.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-md font-robotoCond font-bold hover:bg-gray-400 transition-colors">
                Cancelar
            </a>
        </div>
    </form>
</main>

<script>
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('image-preview');
            const img = preview.querySelector('img');
            img.src = e.target.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
});
</script>
</div>
@endsection
