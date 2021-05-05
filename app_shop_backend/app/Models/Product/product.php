<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'product';
    protected $fillable = ['name,price,detail,id_shop'];
    public $timestamps = true;
}
