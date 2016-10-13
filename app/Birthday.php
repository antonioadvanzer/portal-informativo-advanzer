<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Birthday extends Model
{
    use SoftDeletes;

    protected $fillable = array('description', 'path');

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'birthday';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
