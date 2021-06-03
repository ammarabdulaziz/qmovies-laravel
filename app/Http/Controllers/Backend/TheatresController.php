<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theatre;
use App\Models\Screens;
use App\Models\ScreenSeatings;

class TheatresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($theatres);
        // $theatres = DB::table('theatres')->get();
        $theatres = Theatre::all();
        return view('backend.theatres.index', ['theatres' => $theatres]); //compact
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/theatres/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->outer_group[0]);

        $rules = [
            'outer_group.theatre_name' => 'required',
        ];

        $messages = array(
            'outer_group.theatre_name' => 'The field is required.',
        );

        $attributes = [
            'outer_group.theatre_name' => 'theatre name',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        // $request->validate([
        //     // 'outer_group.theatre_name' => 'required',
        //     // 'outer_group.location' => 'required',
        //     // 'custom' => [
        //     //     'outer_group.theatre_name' => ['required' => 'Its required'],
        //     //     'outer_group.location' => ['required' => 'Its required']
        //     // ]
        // ]);


        dd();


        $theatre = new Theatre(); // fillable
        $theatre->name = $request->outer_group[0]['theatre_name'];
        $theatre->location = $request->outer_group[0]['location'];
        $theatre->screens = count($request->outer_group[0]['inner_group']);

        $theatre->save();
        $theatre_id = $theatre->id;

        foreach ($request->outer_group[0]['inner_group'] as $screenArr) {
            $screen = new Screens();
            $screen->theatre_id = $theatre_id;
            $screen->name = $screenArr['screen_name'];
            $screen->total_capacity = $screenArr['total_capacity'];

            $screen->save();
            $screen_id = $screen->id;

            $screenSeatings = new ScreenSeatings();
            $screenSeatings->screen_id = $screen_id;
            $screenSeatings->type = 'Mezzanine';
            $screenSeatings->capacity = $screenArr['mez_capacity'];
            $screenSeatings->price = $screenArr['mez_price'];

            $screenSeatings->save();

            $screenSeatings = new ScreenSeatings();
            $screenSeatings->screen_id = $screen_id;
            $screenSeatings->type = 'Balcony';
            $screenSeatings->capacity = $screenArr['balc_capacity'];
            $screenSeatings->price = $screenArr['balc_price'];

            $screenSeatings->save();
        }
        // dd($theatre_id);

        // DB::table('theatres')->insert(
        //     [
        //         'name' => $request->outer_group[0]['theatre_name'],
        //         'location' => $request->outer_group[0]['location']
        //     ]
        // );
        $theatres = Theatre::all();
        return view('backend/theatres/index', ['theatres' => $theatres]);
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
        $theatre = DB::table('theatres')
            ->select('theatre_id', 'name', 'duration', 'journer')
            ->where('theatre_id', $id)
            ->get();

        return view('backend/theatres/edit', array('theatre' => $theatre));
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
        $result = DB::table('theatres')
            ->where('theatre_id', $id)
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
        DB::table('theatres')->where('theatre_id', $id)->delete();
        return redirect('/theatres');
    }
}
