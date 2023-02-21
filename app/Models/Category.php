<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Category extends Model
{
    protected $table = "category";
    use HasFactory;

    // Relationship with Book model
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
