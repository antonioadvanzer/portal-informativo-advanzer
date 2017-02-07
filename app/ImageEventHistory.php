<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageEventHistory extends Model
{
    use SoftDeletes;

    protected $fillable = array('path', 'id_event_history');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'img_event_history';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
