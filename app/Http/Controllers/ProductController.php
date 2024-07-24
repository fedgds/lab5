<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        // $products = Product::all();
        // Khoi tao model
        $objPro = new Product();
        // $listPro = $objPro->loadDataWithPager();
        $this->view['listPro'] = $objPro->loadDataWithPager();
        return view('admin.list-product', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objCate = new Category();
        $this->view['listCate'] = $objCate->loadAllCate();
        return view('admin.create-product', $this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=> ['required', 'string', 'max:255'],
                'price' => ['required', 'integer', 'min:1'],
                'quantity' => ['required', 'integer', 'min:1'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
                'category_id' => ['required', 'exists:categories,id']
            ],
            [
                'name.required'=>'Trường tên không được bỏ trống',
                'name.string'=>'Tên bắt buộc là chuỗi',
                'name.max'=>'Trường tên không được vượt quá 255 ký tự',
                'price.required'=>'Trường giá không được bỏ trống',
                'price.integer'=>'Trường giá bắt buộc là số',
                'price.min'=>'Trường giá không được nhỏ hơn 1',
                'quantity.required'=>'Trường số lượng không được bỏ trống',
                'quantity.integer'=>'Trường số lượng bắt buộc là số',
                'quantity.min'=>'Trường số lượng không được nhỏ hơn 1',
                'image.required'=>'Trường hình ảnh không được bỏ trống',
                'image.image'=>'Trường hình ảnh bắt buộc là hình ảnh',
                'image.mimes'=>'Trường hình ảnh chỉ được phép là jpg,jpeg,png',
                'image.max'=>'Trường hình ảnh không được vượt quá 2048 kb',
                'category_id.required'=>'Trường danh mục không được bỏ trống',
                'category_id.exists'=>'Trường danh mục không tồn tại'
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
