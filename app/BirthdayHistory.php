<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BirthdayHistory extends Model
{
    use SoftDeletes;

    protected $fillable = array('title', 'summary', 'content', 'date');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'birthday_history';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // Find a get all pictures 
    public function getImages(){
        return $this->hasMany('App\ImageBirthdayHistory','id_birthday_history');
    }
}
