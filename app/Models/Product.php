<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'taille',
        'quantity',
    ];
 
}
