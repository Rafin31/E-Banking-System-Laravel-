<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bugreportmodel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='bug_report';
}
