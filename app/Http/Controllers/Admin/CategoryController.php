<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title)
    {
        if ($category->parent_id == 0) {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . '>' . $title;
        return CategoryController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datalist = Category::with('children')->get();
        return view('admin.category', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {


        $datalist = Category::with('children')->get();


        return view('admin.category_add', ['datalist' => $datalist]);


    }

    /**
     *Insert data
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        DB::table('categories')->insert([
            'parent_id' => $name = $request->input('parent_id'),
            'title' => $name = $request->input('title'),
            'keywords' => $name = $request->input('keywords'),
            'description' => $name = $request->input('description'),
            'slug' => $name = $request->input('slug'),
            'status' => $name = $request->input('status'),
        ]);
        return redirect()->route('admin_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param \Illuminate\Http\Request $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $data = Category::find($id);
        $datalist = Category::with('children')->get();

        return view('admin.category_edit', ['data' => $data, 'datalist' => $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\Request $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $data = Category::find($id);
        $data->parent_id = $name = $request->input('parent_id');
        $data->title = $name = $request->input('title');
        $data->keywords = $name = $request->input('keywords');
        $data->description = $name = $request->input('description');
        $data->slug = $name = $request->input('slug');
        $data->status = $name = $request->input('status');
        $data->save();
        return redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('admin_category');
    }
}
