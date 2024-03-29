<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

class Homecontroller extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    //
    public function index()
    {
        $setting = Setting::first();
        $slider = Transfer::select('id', 'title', 'image', 'baseprice', 'slug')->limit(4)->get();
        $daily = Transfer::select('id', 'title', 'image', 'baseprice', 'slug')->limit(3)->inRandomOrder()->get();
        $last = Transfer::select('id', 'title', 'image', 'baseprice', 'slug')->limit(3)->orderByDesc('id')->get();
        #print_r($last);
        #exit();

        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'last' => $last,
            'page' => 'home'

        ];
        return view('home.index', $data);
    }

    public function transfer($id, $slug)
    {
        $data = Transfer::find($id);

     #   print_r($data);
      #  exit();
        return view('home.transfer_detail', ['data'=>$data]);
    }
    public function gettransfer(Request $request)
    {
        $search=$request->input('search');
        $count=Transfer::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1){
            $data = Transfer::where('title','like','%'.$search.'%')->first();
            return redirect()->route('transfer',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else{
            return redirect()->route('transferlist',['search'=>$search]);


        }

    }
    public function transferlist($search)
    {
        $datalist = Transfer::where('title','like','%'.$search.'%')->get();
        return view('home.search_transfers',['search'=>$search,'datalist'=>$datalist]);

    }
    public function rezervasion($id)
    {
        echo "rezervesyon <br>";
        $data = Transfer::find($id);
        print_r($data);
        exit();
    }
    public function categorytransfers($id, $slug)
    {
        $datalist = Transfer::where('category_id',$id)->get();
        $data = Category::find($id);
       # print_r($data);
        #exit();
        return view('home.category_transfers', ['data' => $data,'datalist' => $datalist]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function fag()
    {
        return view('admin.aboutus');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success', 'Mesajınız kaydedilmiştir');
    }


    public function login()
    {
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {

            return view('admin.login');
        }
    }


}


