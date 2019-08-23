<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDocument extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'service_documents';    

    public function school()
    {
        return $this->hasOne('App\Models\School', 'id', 'school_id');
    }     
}
