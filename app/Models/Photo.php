<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'src', 'description', 'isPublic', 'category_id'
    ];
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
