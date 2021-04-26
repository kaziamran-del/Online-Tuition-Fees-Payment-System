<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'student_id', 'student_name', 'department_name', 'program_batch','term_fee', 'month_fee', 're_ad_fee', 'retake_fee', 'suppply_fee', 'late_fine', 'others_fee', 'hostel_rent', 'miscellaneous_fee', 'mobile_no'
    ];

    public function temporary()
    {
    	return $this->belongsTo('App\Temporary', 'student_id');
    }
}