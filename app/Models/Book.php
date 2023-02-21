<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Book extends Model
{
    protected $table = "book";
//    protected $fillable = ['name', 'author', 'published', 'description', 'link', 'tags', 'image'];
    use HasFactory;

    // This is a custom method (scopeFilter) that filters data by the tag sent through the request.
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['tag'] ?? false, fn($query, $filter) =>
            $query->where(fn($query) =>
                $query->where('tags', 'like', '%' . request('tag') . '%')
            )
        );

        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('author', 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . request('search') . '%')
        )
        );
    }

    // Relationship with Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // fu
}
