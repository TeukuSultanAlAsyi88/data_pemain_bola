<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemain';

    protected $fillable = [
        'nama',
        'posisi',
        'no_punggung',
        'negara'
    ];
}