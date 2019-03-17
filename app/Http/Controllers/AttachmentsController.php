<?php

namespace App\Http\Controllers;

use App\Attachments;
use Illuminate\Http\Request;

class AttachmentsController extends Controller
{

    private $page = [
        'name' => 'Файлы',
        'route' => 'attachments',
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

        return view('admin.files.index', compact('page'));
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

        return view('admin.files.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attachments $attachments
     * @return \Illuminate\Http\Response
     */
    public function show(Attachments $attachments)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;

        return view('admin.files.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attachments $attachments
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachments $attachments)
    {
        $page = $this->page;
        $page['action'] = __FUNCTION__;

        return view('admin.files.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Attachments $attachments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachments $attachments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attachments $attachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachments $attachments)
    {
        //
    }
}
