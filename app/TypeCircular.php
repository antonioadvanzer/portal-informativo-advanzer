<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeCircular extends Model
{
    use SoftDeletes;

    protected $fillable = array('name', 'description');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'type_circular';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // Find a get all circulares
    public function getCirculares(){
        return $this->hasMany('App\Circular','type');
    }
}
