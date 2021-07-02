<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exchangecurrencymodel extends Model
{
    use HasFactory;
    protected $table = 'money_exchange';
    public $timestamps = false;
}
