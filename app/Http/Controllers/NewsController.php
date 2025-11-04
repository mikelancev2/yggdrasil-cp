<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Public blog index
    public function blog(Request $request)
    {
        $query = News::published()->latest('published_at');

        if ($request->has('category')) {
            $query->category($request->category);
        }

        $news = $query->paginate(9);

        return view('blog', compact('news'));
    }

    // Public single post
    public function blogShow($slug)
    {
        $post = News::where('slug', $slug)->published()->firstOrFail();
        $relatedPosts = News::published()
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog-post', compact('post', 'relatedPosts'));
    }

    // Admin: List all news
    public function index()
    {
        $this->authorize('admin');
        
        $news = News::latest()->paginate(15);
        
        return view('admin.news.index', compact('news'));
    }

    // Admin: Show create form
    public function create()
    {
        $this->authorize('admin');
        
        return view('admin.news.create');
    }

    // Admin: Store new post
    public function store(Request $request)
    {
        $this->authorize('admin');

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|in:patch-notes,news-and-events,guidebook',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $validated['slug'] = Str::slug($validated['title']);

        News::create($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'Notícia criada com sucesso!');
    }

    // Admin: Show edit form
    public function edit(News $news)
    {
        $this->authorize('admin');
        
        return view('admin.news.edit', compact('news'));
    }

    // Admin: Update post
    public function update(Request $request, News $news)
    {
        $this->authorize('admin');

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|in:patch-notes,news-and-events,guidebook',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $validated['slug'] = Str::slug($validated['title']);

        $news->update($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'Notícia atualizada com sucesso!');
    }

    // Admin: Delete post
    public function destroy(News $news)
    {
        $this->authorize('admin');

        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Notícia deletada com sucesso!');
    }

    private function authorize($role)
    {
        // Verificar se está logado usando a sessão customizada
        if (!session('user_id')) {
            abort(403, 'Você precisa estar logado para acessar esta página.');
        }

        // Buscar o usuário e verificar a role
        $user = User::find(session('user_id'));
        
        if (!$user || $user->role !== $role) {
            abort(403, 'Acesso negado. Apenas administradores podem acessar esta área.');
        }
    }
}
