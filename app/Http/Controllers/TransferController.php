<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rezervation;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Rezervation::where('user_id',Auth::id())->get();
        return view('home.user_transfer',['datalist'=>$datalist]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('home.user_transfer_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data= new Rezervation();
        $data->user_id=$name=$request->input('user_id');
        $data->transfer_id=$name=$request->input('transfer_id');
        $data->from_location_id=$name=$request->input('from_location');
        $data->to_location_id=$name=$request->input('to_location');
        $data->price=$name=$request->input('price');

        $data->save();
        return redirect()->route('user_transfer')->with('success','Transfer Eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer,$id)
    {
       // $data=Transfer::find($id);
       // $datalist = Category::with('children')->get();

        //return view('home.user_transfer_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer,$id)
    {
        $data=Transfer::find($id);
        $data->user_id=$name=$request->input('user_id');
        $data->transfer_id=$name=$request->input('transfer_id');
        $data->from_location_id=$name=$request->input('from_location_id');
        $data->to_location_id=$name=$request->input('to_location_id');
        $data->price=$name=$request->input('price');
        $data->flightnumber=$name=$request->input('flightnumber');
        $data->flightarrivedate=$name=$request->input('flightarrivedate');

        $data->save();
        return redirect()->route('user_transfer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer,$id)
    {
        $data=Transfer::find($id);
        $data->delete();
        return redirect()->route('user_transfer');
    }
}
