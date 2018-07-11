<?php

namespace tb\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use tb\Http\Requests;
use tb\Http\Controllers\Controller;

use tb\Bot;
use Illuminate\Http\Request;
use tb\User;

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
        dd($token);
    }
}
