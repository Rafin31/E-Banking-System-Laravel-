<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    use HasFactory;
    // protected $fillable = array('user_name', 'password', 'email', 'address', 'phone_number', 'user_type');
    protected $table = 'login';
    //protected $primaryKey = "id";
    public $timestamps = false;
}
