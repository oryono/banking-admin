<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $connection = 'banking';

    protected $fillable = ['name', 'phone', 'address', 'slug'];

    public $timestamps = false;
}
