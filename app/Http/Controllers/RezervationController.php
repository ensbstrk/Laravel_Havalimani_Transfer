<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Rezervation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RezervationController extends Controller
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

    public function user_index()
    {
        $locations = Location::all();
        return view('home.user_transfer_add', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Category::with('children')->get();
        return view('home.user_transer_add', ['locations' => $locations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Rezervation();
        $data->user_id = Auth::user()->id;
        $data->transfer_id = $name = $request->input('transfer_id');
        $data->from_location_id = $name = $request->input('from_location_id');
        $data->to_location_id = $name = $request->input('to_location_id');
        $data->booking_time = $name = $request->input('booking_time');
        $data->return_time = $name = $request->input('return_time');
        $data->price = $name = $request->input('price');

        $data->save();
        return redirect()->route('user_transfer')->with('success', 'Transfer Eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rezervation = Rezervation::find($id);
        return view('home.user_transfer_edit', compact('rezervation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Rezervation::find($id);
        $data->transfer_id = $name = $request->input('transfer_id');
        $data->from_location_id = $name = $request->input('from_location_id');
        $data->to_location_id = $name = $request->input('to_location_id');
        $data->booking_time = $name = $request->input('booking_time');
        $data->return_time = $name = $request->input('return_time');
        $data->save();
        return redirect()->route('user_transfer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('rezervations')->where('id', '=', $id)->delete();
        return redirect()->route('user_transfer');
    }
}
