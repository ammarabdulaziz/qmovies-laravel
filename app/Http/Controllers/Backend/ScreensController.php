<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Theatre;
use App\Models\Screens;
use App\Models\ScreenSeatings;
use Illuminate\Http\Request;

class ScreensController extends Controller
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
    public function create(Request $request)
    {
        if ($request->has('id'))
            $theatre_id = $request->input('id');
        else
            return redirect('/theatres');

        return view('backend.screens.create', compact('theatre_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mezzanine_capacity' => 'required|numeric',
            'mezzanine_price' => 'required|numeric',
            'balcony_capacity' => 'required|numeric',
            'balcony_price' => 'required|numeric'
        ]);

        $screen = Screens::create([
            'theatre_id' => $request->theatre_id,
            'name' => $request->name,
            'total_capacity' => $request->mezzanine_capacity + $request->balcony_capacity,
        ]);

        ScreenSeatings::insert([[
            'screen_id' => $screen->screen_id,
            'type' => 'Mezzanine',
            'capacity' => $request->mezzanine_capacity,
            'price' => $request->mezzanine_price
        ], [
            'screen_id' => $screen->screen_id,
            'type' => 'Balcony',
            'capacity' => $request->balcony_capacity,
            'price' => $request->balcony_price
        ]]);


        return redirect('/theatres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $screens = Screens::with('screenSeatings')->where('theatre_id', $id)->get();
        return response()->json([
            'data' => $screens
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if ($request->has('id'))
            $theatre_id = $request->input('id');
        else
            return redirect('/theatres');

        $screen = Screens::with('screenSeatings')->where('screen_id', $id)->first();
        return view('backend/screens/edit', compact('screen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mezzanine_capacity' => 'required|numeric',
            'mezzanine_price' => 'required|numeric',
            'balcony_capacity' => 'required|numeric',
            'balcony_price' => 'required|numeric'
        ]);

        $screen = [
            'name' => $request->name,
            'total_capacity' => $request->mezzanine_capacity + $request->balcony_capacity,
        ];

        $mezzanine = [
            'type' => 'Mezzanine',
            'capacity' => $request->mezzanine_capacity,
            'price' => $request->mezzanine_price
        ];

        $balcony = [
            'type' => 'Balcony',
            'capacity' => $request->balcony_capacity,
            'price' => $request->balcony_price
        ];

        Screens::where('screen_id', $id)->update($screen);
        ScreenSeatings::where('seating_id', $request->mez_seating_id)->update($mezzanine);
        ScreenSeatings::where('seating_id', $request->balc_seating_id)->update($balcony);


        return redirect('/theatres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Screens::where('screen_id', $id)->delete();
        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }
}
