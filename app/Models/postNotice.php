<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postNotice extends Model
{
    use HasFactory;
    protected $table = 'post_notice';
    //protected $dateFormat = 'U';
    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'updated_date';
}
