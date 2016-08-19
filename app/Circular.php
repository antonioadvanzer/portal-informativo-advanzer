<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Circular extends Model
{   
    use SoftDeletes;
    
    protected $fillable = array('title', 'summary', 'content');

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
        return $this->hasMany('ImageCircular');
    }
}
