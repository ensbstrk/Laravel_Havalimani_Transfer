<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rezervation;
use Illuminate\Http\Request;
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
        $rezervations = Rezervation::all();
        return view('admin.rezervation', compact('rezervations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = Rezervation::find($id);
        return view('admin.rezervation_edit', compact('data'));
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
        $data = Rezervation::find($id);
        $data->transfer_id = $name = $request->input('transfer_id');
        $data->from_location_id = $name = $request->input('from_location_id');
        $data->to_location_id = $name = $request->input('to_location_id');
        $data->booking_time = $name = $request->input('booking_time');
        $data->return_time = $name = $request->input('return_time');
        $data->save();
        return redirect()->route('admin_rezervation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('rezervations')->where('id', '=', $id)->delete();
        return redirect()->route('admin_rezervation');
    }
}
