<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientModel extends Model
{
    use HasFactory;
    protected $table = 'client_table';
    public $timestamps = false;
}
