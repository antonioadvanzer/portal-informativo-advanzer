<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ElementCarrusel extends Model
{   
    use SoftDeletes;

    protected $fillable = array('id_circular', 'id_img_circular', 'location', 'used');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carrusel';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the Circular that owns the image.
     */
    public function circular()
    {
        return $this->belongsTo('App\Circular','id_circular');
    }

    public function image(){
        return $this->belongsTo('App\ImageCircular','id_img_circular');
    }
}
