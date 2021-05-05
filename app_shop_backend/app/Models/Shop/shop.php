<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'shop';
    protected $fillable = ['name_shop,time_open,time_closed'];
    public $timestamps = true;
}
