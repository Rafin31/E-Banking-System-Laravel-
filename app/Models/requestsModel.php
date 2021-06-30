<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestsModel extends Model
{
    use HasFactory;
    //protected $fillable = array('user_name', 'password', 'email');
    public $table = "requests";
    //protected $primaryKey = "id";
    public $timestamps = false;
}
