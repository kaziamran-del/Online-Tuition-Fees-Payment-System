<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LateFine extends Model
{
    protected $table = 'late_fines';
    protected $primaryKey = 'id';
	protected $fillable = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
}
