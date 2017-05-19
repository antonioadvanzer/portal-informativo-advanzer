<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkCircular extends Model
{
    use SoftDeletes;

    protected $fillable = array('url', 'description', 'id_circular');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'link_circular';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
