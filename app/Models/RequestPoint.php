<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestPoint extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $fillable = ['server_id','user_id','listed_id','amount','transaction_id','custom_date','status'];
}
