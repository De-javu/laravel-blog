<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post'; // Asegúrate de que el nombre de la tabla sea correcto
    protected $fillable = ['title', 'category', 'content']; // Asegúrate de que los campos sean fillable


    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }
}
