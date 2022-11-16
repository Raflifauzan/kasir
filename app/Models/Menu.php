<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori');
    }

}
