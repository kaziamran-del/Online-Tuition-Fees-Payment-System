<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationFee extends Model
{
	protected $table = 'registration_fees';
    protected $primaryKey = 'id';
    protected $fillable = ['english', 'cse', 'eee', 'bba', 'law_justice', 'economics'];
}

