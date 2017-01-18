<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageBirthdayHistory extends Model
{
    use SoftDeletes;

    protected $fillable = array('path', 'id_birthday_history');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'img_birthday_history';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
