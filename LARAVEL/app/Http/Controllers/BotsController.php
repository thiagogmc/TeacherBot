<?php

namespace tb\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use tb\Commands\ExamsCommand;
use tb\Commands\StartCommand;
use tb\Exam;
use tb\Http\Requests;
use tb\Http\Controllers\Controller;

use tb\Bot;
use Illuminate\Http\Request;
use tb\Question;
use tb\Resource;
use tb\User;
use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Exception\TelegramLogException;
use Telegram\Bot\Api as TelegramApi;
use Telegram\Bot\Keyboard\Keyboard;

class BotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bots = Auth::user()
                ->bots()
                ->latest()
                ->paginate($perPage);
        } else {
            //TODO Ajeitar a busca
            $bots = Auth::user()
                ->bots()
                ->latest()
                ->paginate($perPage);
        }

        return view('bots.index', compact('bots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if (!Bot::setWebHook($requestData)) {
            return redirect()->back()->with(
                'error',
                'Desculpe-nos, não foi possível processar a transação. Confira os valores digitados.'
            );
        }

        $user = User::find(Auth::id());

        $bots = Bot::create($requestData);
        $bots->users()->attach($user);

        return redirect('bots')->with('flash_message', ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $bot = Bot::findOrFail($id);

        return view('bots.show', compact('bot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $bot = Bot::findOrFail($id);

        return view('bots.edit', compact('bot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        if (!Bot::setWebHook($requestData)) {
            return redirect()->back()->with(
                'error',
                'Desculpe-nos, não foi possível processar a transação. Confira os valores digitados.'
            );
        }

        $bot = Bot::findOrFail($id);
        $bot->update($requestData);

        return redirect('bots')->with('flash_message', ' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Bot::destroy($id);
        return redirect('bots')->with('flash_message', ' deleted!');
    }

    public function webhook($token)
    {
//        $bot = Bot::where('token', $token)->firstOrFail();
//        session(['bot_id' => $bot->id]);
//        $commands_paths = [
//            __DIR__.'/../../app/Commands',
//        ];
//        try {
//            $telegram = new Telegram($token, $bot->username);
//            $telegram->addCommandsPaths($commands_paths);
//            $telegram->handle();
//        } catch (TelegramException $e) {
//            dd($e);
//        } catch (TelegramLogException $e) {
//        // Silence is golden!
//        // Uncomment this to catch log initialisation errors
//            echo $e;
//        }

        $telegram = new TelegramApi($token);
        $updates = $telegram->getWebhookUpdates();
        $chatId = $updates->getChat()['id'];
        $command = $updates->getMessage()['text'];

        if ($command == '/provas') {
            $bot = Bot::where('token', $token)->firstOrFail();
            $result = Exam::where('bot_id', $bot->id)->get();
            $array = $result->toArray();
            foreach ($array as $item) {
                $text =
                    'Conteúdo: '.$item['content'].chr(10).
                    'Data: '.$item['date'].chr(10).
                    'Valor: '.$item['score'].chr(10);

                $telegram->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $text,
                ]);
                return;
            }
        }

        if ($command == '/questoes') {
            $bot = Bot::where('token', $token)->firstOrFail();
            $result = Question::where('bot_id', $bot->id)->get();
            $array = $result->toArray();
            foreach ($array as $item) {
                $text =
                    'Título: '.$item['name'].chr(10).
                    'Assunto: '.$item['subject'].chr(10).
                    'Enunciado: '.$item['statement'].chr(10);

                $telegram->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $text,
                ]);
                return;
            }
        }

        if ($command == '/materiais') {
            $bot = Bot::where('token', $token)->firstOrFail();
            $result = Resource::where('bot_id', $bot->id)->get();
            $array = $result->toArray();
            foreach ($array as $item) {
                $text =
                    'Título: '.$item['name'].chr(10).
                    'Conteúdo: '.$item['content'].chr(10);

                $telegram->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $text,
                ]);

                return;
            }
        }
        $keyboard = [
            ['/provas', '/questoes', '/materiais']
        ];
        $reply_markup = Keyboard::make([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        ]);

        $response = $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => 'Olá, Escolha seu comando',
            'reply_markup' => $reply_markup
        ]);
    }
}
