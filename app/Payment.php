<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Payment model
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'student_name', 'payment_method', 'payment_type', 'payment_val', 'amount', 'payment_status'];

}


