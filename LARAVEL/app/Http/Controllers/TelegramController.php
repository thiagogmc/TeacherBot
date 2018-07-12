<?php

namespace tb\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Telegram\Bot\Api;

class TelegramController extends BaseController
{
    protected $telegram;

    public function __construct() {
        $this->telegram = new Api('559333951:AAH8MmwPo-LEWsXI3UjETfnzAUpMGLSn-oA');
        // dd($this->telegram->getUpdates());
    }

    public function getUpdates()
    {
        $updates = $this->telegram->getUpdates();

        return response()->json($updates);
    }

    public function postSendMessage()
    {
        $rules = [
            'message' => 'required'
        ];

        $validator = \Validator::make(\Input::all(), $rules);
        if($validator->fails())
        {
            return redirect()->back()
                ->with('status', 'danger')
                ->with('message', 'Message is required');
        }

        $response = $this->telegram->sendMessage([
            'chat_id' => '430816084',
            'text' => \Input::get('message')
        ]);

        $messageId = $response->getMessageId();
        return redirect('/')
            ->with('status', 'success')
            ->with('message', $messageId);
    }

}
