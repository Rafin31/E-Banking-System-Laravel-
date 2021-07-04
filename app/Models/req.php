<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class req extends Model
{
    protected $table = 'requests';
    use HasFactory;
    public $timestamps =false;
}
