<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
        'SKU',
        'nama_product',
        'kategory',
        'harga',
        'quantity',
        'quantity_out',
        'foto',
    ];
    protected $hidden;
}
