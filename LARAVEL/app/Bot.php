<?php

namespace tb;

use Illuminate\Database\Eloquent\Model;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Telegram;

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
    protected $fillable = ['name', 'token', 'username'];

    public function question()
    {
        return $this->hasMany('tb\Question');
    }

    public function exam()
    {
        return $this->hasMany('tb\Exam');
    }

    public function resource()
    {
        return $this->hasMany('tb\Resource');
    }

    public function users()
    {
        return $this->belongsToMany('tb\User', 'users_bots');
    }

    public static function setWebHook(array $request)
    {
        $apiKey = $request['token'];
        $username = $request['username'];
        $url = env('APP_URL') . '/bots/' . $apiKey . '/hook';

        try {
            $telegram = new Telegram($apiKey, $username);
            $result = $telegram->setWebhook($url);
        } catch (TelegramException $e) {
            return false;
        }

        return true;
    }

}
