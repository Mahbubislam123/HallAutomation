<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillInformation extends Model
{
    protected $table = 'billinformations';

    public function hallutilityfees()  
    
    {   

    	return $this->belongsTo('App\HallUtilityFee');

    }
}
