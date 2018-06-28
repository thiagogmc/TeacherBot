<?php

namespace tb\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use tb\Http\Requests;
use tb\Http\Controllers\Controller;

use tb\Question;
use tb\Bot;

use Illuminate\Http\Request;

class QuestionsController extends Controller
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

        $bots = Auth::user()
            ->bots;
        $ids = array();            
        foreach ($bots as $bot) {
            $ids[] = $bot->id;
        }

        if (!empty($keyword)) {
            $questions = Question::whereIn('bot_id', $ids)->paginate($perPage);
        } else {
            $questions = Question::whereIn('bot_id', $ids)->paginate($perPage);
        }

        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $bots = Bot::all(['id', 'name']);
        return view('questions.create', compact('bots'));
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

        Question::create($requestData);

        return redirect('questions')->with('flash_message', ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);
        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $bots = Bot::all(['id', 'name']);
        return view('questions.edit', compact('question', 'bots'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $question = Question::findOrFail($id);
        $question->update($requestData);

        return redirect('questions')->with('flash_message', ' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Question::destroy($id);

        return redirect('questions')->with('flash_message', ' deleted!');
    }
}
