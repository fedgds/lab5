<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $view;
    public function __construct()
    {
        $this->view = [];
    }
    public function index()
    {
        $objCate = new Category();

        $this->view['listCate'] = $objCate->loadDataWithPager();
        return view('admin.list-category', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=> ['required', 'string', 'max:255'],
                'status' => ['required']
            ],
            [
                'name.required'=>'Trường tên không được bỏ trống',
                'name.string'=>'Tên bắt buộc là chuỗi',
                'name.max'=>'Trường tên không được vượt quá 255 ký tự',
                'status.required'=>'Chưa trọn trạng thái'
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
