<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolPaymentHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'school_payments_history';     

    public function payumoney()
    {
        return $this->hasOne('App\Models\PayuMoney', 'id', 'pay_id');
    }     
}
