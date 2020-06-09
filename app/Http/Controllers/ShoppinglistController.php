<?php

namespace App\Http\Controllers;

use App\Shoppinglist;
use App\Shoppingitem;
use Illuminate\Http\Request;

class ShoppinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/shoppinglists/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required'
        ]);

        $shoppinglist = Shoppinglist::create($validData);

        return redirect('/shoppingitems/create')->with('status', 'Shoppinglist created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function show(Shoppinglist $shoppinglist)
    {
        $shoppingitems = $shoppinglist->shoppingitem;
        //$Shoppinglist = Shoppinglist::findOrFail($id);

        return view('/shoppinglists/show', [
            'shoppingitems'  => $shoppingitems,
            'shoppinglist'  => $shoppinglist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoppinglist $shoppinglist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoppinglist $shoppinglist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shoppinglist  $shoppinglist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoppinglist $shoppinglist)
    {
        //
    }
}
