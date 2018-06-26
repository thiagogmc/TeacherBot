<?php

namespace tb;

use Illuminate\Database\Eloquent\Model;

class Bot extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bots';

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
    protected $fillable = ['name'];


}
