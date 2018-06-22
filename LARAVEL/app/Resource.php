<?php

namespace tb;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Resource';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bot_id', 'name', 'content'];

    
}
