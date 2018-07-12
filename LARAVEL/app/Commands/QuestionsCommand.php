<?php

namespace Longman\TelegramBot\Commands\UserCommands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Request;
use tb\Question;

class QuestionsCommand extends UserCommand
{
    protected $name = 'questions';                      // Your command's name
    protected $description = 'Te entrega questões'; // Your command description
    protected $usage = '/questions';                    // Usage of your command
    protected $version = '1.0.0';                  // Version of your command

    public function execute()
    {
        $message = $this->getMessage();            // Get Message object

        $chat_id = $message->getChat()->getId();   // Get the current Chat ID
        $questions = Question::where('bot_id', session('bot_id'))->all();
        $questions = $questions->toArray();
        $data = [                                  // Set up the new message data
            'chat_id' => $chat_id,                 // Set Chat ID to send the message to
            'text'    => 'This is just a Test...', // Set message to send
        ];

        return Request::sendMessage($data);        // Send message!
    }
}