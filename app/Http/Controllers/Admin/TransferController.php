<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $datalist=Transfer::all();
        return view('admin.transfer',['datalist'=>$datalist]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist=Category::all();
        return view('admin.transfer_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data= new Transfer();
        $data->title=$name=$request->input('title');
        $data->keywords=$name=$request->input('keywords');
        $data->description=$name=$request->input('description');
        $data->slug=$name=$request->input('slug');
        $data->status=$name=$request->input('status');
        $data->category_id=$name=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->baseprice=$name=$request->input('baseprice');
        $data->kmprice=$name=$request->input('kmprice');
        $data->capacity=$name=$request->input('capacity');
        $data->detail=$name=$request->input('detail');
        $data->fueltype=$name =$request->input('fueltype');
        $data->image = Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_transfer');
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
        $data=Transfer::find($id);
        $datalist =Category::all();

        return view('admin.transfer_edit',['data'=>$data,'datalist'=>$datalist]);
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
        $data->title=$name=$request->input('title');
        $data->keywords=$name=$request->input('keywords');
        $data->description=$name=$request->input('description');
        $data->slug=$name=$request->input('slug');
        $data->status=$name=$request->input('status');
        $data->category_id=$name=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->baseprice=$name=$request->input('baseprice');
        $data->kmprice=$name=$request->input('kmprice');
        $data->capacity=$name=$request->input('capacity');
        $data->detail=$name=$request->input('detail');
        $data->fueltype=$name =$request->input('fueltype');
        $data->image=Storage::putFile('images',$request->file('image'));
        if ($request->file('image')!=null){
                $data->image=Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_transfer');
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
        return redirect()->route('admin_transfer');
    }
}
