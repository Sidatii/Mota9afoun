<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
 */
class Category extends Model
{
    protected $table = "category";
    use HasFactory;

    // Relationship with Book model
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
