<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requesttomanagermodel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='requests_to_manager';
}
