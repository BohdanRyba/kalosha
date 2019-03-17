<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    private $page = [
        'name' => 'Подписки',
        'route' => 'subscribes',
        'default'=>'index',
        'action' => 'index'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;


        return view('admin.subscribes.index',compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;


        return view('admin.subscribes.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;

        return view('admin.subscribes.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;

        return view('admin.subscribes.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
