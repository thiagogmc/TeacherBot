<?php

namespace tb\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use tb\Http\Requests;
use tb\Http\Controllers\Controller;

use tb\Resource;
use tb\Bot;
use Illuminate\Http\Request;

class ResourcesController extends Controller
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
            $resources = Resource::whereIn('bot_id', $ids)->paginate($perPage);
        } else {
            $resources = Resource::whereIn('bot_id', $ids)->paginate($perPage);
        }

        return view('resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $bots = Bot::all(['id', 'name']);
        return view('resources.create', compact('bots'));
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

        Resource::create($requestData);

        return redirect('resources')->with('flash_message', ' added!');
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
        $resource = Resource::findOrFail($id);

        return view('resources.show', compact('resource'));
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
        $resource = Resource::findOrFail($id);
        $bots = Bot::all(['id', 'name']);
        return view('resources.edit', compact('resource', 'bots'));
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

        $resource = Resource::findOrFail($id);
        $resource->update($requestData);

        return redirect('resources')->with('flash_message', ' updated!');
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
        Resource::destroy($id);

        return redirect('resources')->with('flash_message', ' deleted!');
    }
}
