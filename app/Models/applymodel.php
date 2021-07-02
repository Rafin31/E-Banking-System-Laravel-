<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applymodel extends Model
{
    use HasFactory;
    protected $table = 'requests_to_manager';
    public $timestamps = false;
}
