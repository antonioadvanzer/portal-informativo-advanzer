<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageCircular extends Model
{   
    use SoftDeletes;

    protected $fillable = array('path', 'id_circular');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'img_circular';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
