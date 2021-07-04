<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financialmodel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='financial';
}
