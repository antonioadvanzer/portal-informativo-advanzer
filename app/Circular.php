<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Circular extends Model
{   
    use SoftDeletes;
    
    protected $fillable = array('title', 'summary', 'content', 'date', 'type');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'circular';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // Find a get all pictures 
    public function getImages(){
        return $this->hasMany('App\ImageCircular','id_circular');
    }

    // Find a get one element by circular
    public function getElementsCarrusel(){
        return $this->hasMany('App\ElementCarrusel','id_circular');
    }

    // Find a get links by circular
    public function getLinks(){
        return $this->hasMany('App\LinkCircular','id_circular');
    }

    // Find a type of circular
    public function getType(){
        return $this->belongsTo('App\TypeCircular','type');
    }
}
