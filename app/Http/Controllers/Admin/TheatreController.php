<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = Theatre::all();
        // dd($movies);
        $movies = DB::table('movies')->get();
        return view('admin/theatres/index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/theatres/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('movies')->insert(
            [
                'name' => $request->name,
                'duration' => $request->duration,
                'journer' => $request->journer,
                'description' => 'hello',
                'plot' => 'hello',
                'rating' => 'hello',
            ]
        );
        return view('admin/theatres/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = DB::table('movies')
            ->select('movie_id', 'name', 'duration', 'journer')
            ->where('movie_id', $id)
            ->get();

        return view('admin/theatres/edit', array('movie' => $movie));
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
        $result = DB::table('movies')
            ->where('movie_id', $id)
            ->update([
                'name' => $request->name,
                'duration' => $request->duration,
                'journer' => $request->journer,
                'description' => 'hello',
                'plot' => 'hello',
                'rating' => 'hello',
            ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('movies')->where('movie_id', $id)->delete();
        return redirect('/');
    }
}
