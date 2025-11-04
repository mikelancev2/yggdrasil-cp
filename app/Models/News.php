<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'image',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Auto-generate slug from title
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });

        static::updating(function ($news) {
            if ($news->isDirty('title') && empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });
    }

    // Scope for published posts
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    // Scope for category filter
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    // Get category display name
    public function getCategoryNameAttribute()
    {
        $categories = [
            'patch-notes' => 'Notas de Atualização',
            'news-and-events' => 'Novidades & Eventos',
            'guidebook' => 'Guia Oficial',
        ];

        return $categories[$this->category] ?? $this->category;
    }
}
