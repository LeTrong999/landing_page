<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($link)
    {

    	//thay số 1 = id của bảng users
    	$data = DB::table('cates')
    					->join('products', 'cates.id', '=', 'products.cate_id')
    					->orderBy('cates.id')
    					->where('cates.user_id','1')
    					->select('cates.id as cate_id','cates.name as name_cate','products.name as name_product')
    					->get()
    					->toArray();
    	$result = array();
		foreach ($data as $item) {
			$result[$item->cate_id][] = $item;
		}
		echo "<pre>";
    	print_r($result);die;
    	//$grouped = array_group_by( $data,"cate_id" );
    	// echo "<pre>";
    	// print_r($result[]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('cates::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('cates::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('cates::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
