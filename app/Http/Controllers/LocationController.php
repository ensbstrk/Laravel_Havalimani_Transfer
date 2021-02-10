<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datalist = Location::all();
        return view('admin.location', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response


    /**
     *Insert data
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datalist = Location::with('children')->get();
        return view('admin.location_add', ['datalist' => $datalist]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Location();
        $data->type=$name=$request->input('type');
        $data->name=$name=$request->input('name');
        $data->lat=$name=$request->input('lat');
        $data->long=$name=$request->input('long');

        $data->save();
        return redirect()->route('admin_location')->with('success','Transfer Eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \Illuminate\Http\Request $Location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $Location, $id)
    {
        $data = Location::find($id);
        $datalist = Location::with('children')->get();

        return view('admin.location_edit', ['data' => $data, 'datalist' => $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\Request $Location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $Location, $id)
    {
        $data = Location::find($id);
        $data->parent_id = $name = $request->input('parent_id');
        $data->type = $name = $request->input('type');
        $data->name = $name = $request->input('name');
        $data->lat = $name = $request->input('lat');
        $data->long = $name = $request->input('long');
        $data->save();
        return redirect()->route('admin_location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('locations')->where('id', '=', $id)->delete();
        return redirect()->route('admin_location');
    }
}
