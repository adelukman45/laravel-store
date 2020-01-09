<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DataTables;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = [
            'title' => __('Product'),
            'breadcrumbs' => [
                route('product.index') => __('Product'),
                null => __('Data')
            ],
        ];
        return view('product.product', $view);
    }

    public function list(Request $request)
    {
        if ($request->ajax());{
            $account = Product::get();
            return DataTables::of($account)
            ->addColumn('DT_RowIndex', function ($data) {
                return '<div class="checkbox icheck"><label><input type="checkbox" name="selectedData[]" value="'.$data->id.'"></label></div>';
            })
            ->editColumn('created_at', function($data) {
                return (date('d-m-Y H:i:s', strtotime($data->created_at)));
            })
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-success" href="'.route('user.show', $data->id).'" title="'.__('See detail').'"><i class="fa fa-eye"></i> '.__('See').'</a> <a class="btn btn-sm btn-warning" href="'.route('user.edit', $data->id).'" title="'.__('Edit').'"><i class="fa fa-edit"></i> '.__('Edit').'</a>';
            })
            ->rawColumns(['DT_RowIndex', 'action'])
            ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = [
            'title' => __('Create Product'),
            'breadcrumbs' => [
                route('product.index') => __('Product'),
                null => __('Create')
            ],
        ];
        return view('product.create', $view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
