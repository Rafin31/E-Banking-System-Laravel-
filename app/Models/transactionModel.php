<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionModel extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    public $timestamps = false;
}
