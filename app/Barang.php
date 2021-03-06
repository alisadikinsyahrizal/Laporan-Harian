<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;

    protected $table = "barang";
    protected $fillable = ['name', 'harga'];

    protected $hidden = [];
}
