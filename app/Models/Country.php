<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    public $timestamps = true;

    protected $fillable = [
        'code',
        'initials',
        'name',
        'created_at',
        'updated_at',
    ];
}
