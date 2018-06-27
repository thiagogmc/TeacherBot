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
    protected $fillable = ['name', 'token'];

    public function question(){
        return $this->hasMany('tb\Question');
    }

    public function exam(){
        return $this->hasMany('tb\Exam');
    }

    public function resource(){
        return $this->hasMany('tb\Resource');
    }

}
