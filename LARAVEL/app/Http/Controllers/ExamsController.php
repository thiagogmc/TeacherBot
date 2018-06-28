<?php

namespace tb\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use tb\Http\Requests;
use tb\Http\Controllers\Controller;

use tb\Exam;
use tb\Bot;
use Illuminate\Http\Request;

class ExamsController extends Controller
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
            $exams = Exam::whereIn('bot_id', $ids)->paginate($perPage);
        } else {
            $exams = Exam::whereIn('bot_id', $ids)->paginate($perPage);
        }

        return view('exams.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $bots = Bot::all(['id', 'name']);
        return view('exams.create', compact('bots'));
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

        Exam::create($requestData);

        return redirect('exams')->with('flash_message', ' added!');
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
        $exam = Exam::findOrFail($id);

        return view('exams.show', compact('exam'));
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
        $exam = Exam::findOrFail($id);
        $bots = Bot::all(['id', 'name']);
        return view('exams.edit', compact('exam', 'bots'));
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

        $exam = Exam::findOrFail($id);
        $exam->update($requestData);

        return redirect('exams')->with('flash_message', ' updated!');
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
        Exam::destroy($id);

        return redirect('exams')->with('flash_message', ' deleted!');
    }
}
