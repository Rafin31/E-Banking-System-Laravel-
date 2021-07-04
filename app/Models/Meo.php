<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meo extends Model
{
    use HasFactory;
      protected $table = 'login';
    //protected $primaryKey = "id";
    public $timestamps = false;
}
