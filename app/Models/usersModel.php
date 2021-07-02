<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    use HasFactory;
    protected $fillable = array('user_name', 'password', 'email');
    public $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function login()
    {
        return $this->hasOne(loginModel::class, 'id', 'id');
    }
    public function request()
    {
        return $this->hasMany(requestsModel::class, 'id', 'id');
    }


    public function post_notice()
    {
        return $this->hasMany(postNotice::class, 'id', 'id');
    }

    public function transaction()
    {
        return $this->hasMany(transactionModel::class, 'id', 'id');
    }
    public function client()
    {
        return $this->hasOne(clientModel::class, 'id', 'id');
    }



    // public function post_notice()
    // {
    //     return $this->hasMany(postNotice::class, 'id', 'id');
    // }

}
