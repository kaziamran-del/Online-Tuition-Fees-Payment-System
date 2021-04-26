<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporary extends Model
{
    //
    protected $table = 'temporaries';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'student_name', 'program_batch', 'payment_type', 'payment_val', 'late_fine', 'amount'];

    public function paymented()
    {
    	return $this->belongsTo(Payment::class);
    }
}
