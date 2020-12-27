<?php

namespace App\Http\Controllers;

use App\Blogtest;
use Illuminate\Http\Request;

class BlogtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogtests = Blogtest::latest()->paginate(5);
        return view('blogtests.index', compact('blogtests'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogtests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'blog_title'=>'required',
            'blog_short_description'=>'required',
            'blog_description'=>'required'
        ]);

        Blogtest::create($request->all());

        return redirect()->route('blogtests.index')
            ->with('success','Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogtest  $blogtest
     * @return \Illuminate\Http\Response
     */
    public function show(Blogtest $blogtest)
    {
        //
        return view('blogtests.show',compact('blogtest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogtest  $blogtest
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogtest $blogtest)
    {
        //
        return view('blogtests.edit', compact('blogtest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogtest  $blogtest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogtest $blogtest)
    {
        //
        $request->validate([
            'blog_title'=>'required',
            'blog_short_description'=>'required',
            'blog_description'=>'required'
        ]);
        $blogtest->update($request->all());

        return redirect()->route('blogtests.index')
            ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogtest  $blogtest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogtest $blogtest)
    {
        //
        $blogtest->delete();

        return redirect()->route('blogtests.index')
            ->with('success','Blog deleted successfully');
    }
}
