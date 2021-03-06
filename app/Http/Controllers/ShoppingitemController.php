<?php

namespace App\Http\Controllers;

use App\Shoppinglist;
use App\Shoppingitem;
use Illuminate\Http\Request;

class ShoppingitemController extends Controller
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
        $shoppinglists = Shoppinglist::orderBy('title')->get();
        $shoppingitems = Shoppingitem::orderBy('name')->get();


        return view('/shoppingitems/create', [
            'shoppinglists'     => $shoppinglists,
            'shoppingitems'     => $shoppingitems
        ]);
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
            'shoppinglist_id'   => 'required',
            'name'              => 'required',
            'quantity'          => 'required',
            'category'          => 'required'
        ]);

        $shoppingitem = Shoppingitem::create($validData);

        return redirect('shoppingitems/create')->with('status', 'Shopping item created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shoppingitem  $shoppingitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoppingitem $shoppingitem)
    {
        //dd($shoppingitem);
        return view('shoppingitems/edit', [
            'shoppingitem'  => $shoppingitem
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shoppingitem  $shoppingitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoppingitem $shoppingitem)
    {

        $validData = $request->validate([
            'category'  => 'required',
            'name'      => 'required',
            'quantity'  => 'required'
            ]);

            $shoppingitem->category = $validData['category'];
            $shoppingitem->name     = $validData['name'];
            $shoppingitem->quantity = $validData['quantity'];

        $shoppingitem->save();

        return redirect('/shoppingitems/create')->with('status', 'Shoppingitem edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shoppingitem  $shoppingitem
     * @return \Illuminate\Http\Response
     */
    public function deleteMany(Request $request)
    {
        $idsToDelete = $request->input('ids');
        Shoppingitem::destroy($idsToDelete);

        return redirect('/shoppingitems/create')->with('status', 'Shoppingitem deleted successfully');
    }
}
