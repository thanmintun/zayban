<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'items';
    protected $fillable = ['code-name', 'name', 'image', 'price', 'discount', 'in-stock', 'description', 'category_id'];
}
