<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public $timestamps = false;
    protected $table="home_landing";
    protected $fillable = [
        'id',
        'title',
        'deskripsi',
        'visi',
        'misi'
    ];
}
