<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Product;
use App\Models\ProductDetail;

use Illuminate\Support\Facades\Input;
use \Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Input::get('page')? Input::get('page'):1;
		$limit = Input::get('limit')? Input::get('limit'): 50;
		$categoryId = Input::get('categoryId');

		try {

			$query = Product::with('detail')->with('photos')->with('category');

			if (isset($categoryId)) {
				$query = $query->where('category_id',$categoryId);
			}

			$query = $query->paginate($limit, ['*'], 'page', $page)->toArray();

			$response = [
				'success' => true,
				'result' => $query
			];

		} catch (Exception $e) {
			$response = [
				'success' => false,
				'message' => 'Something went wrong.',
				'detail' => $e->getMessage()
			];
		}
        sleep(1.5);
		return Response::json($response,200);
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
        try {

            $query = Product::where('id', $id)->with('detail')->with('photos')->with('category')->first();

            $response = [
                'success' => true,
                'result' => $query
            ];

        } catch (Exception $e) {
            $response = [
                'success' => false,
                'message' => 'Something went wrong.',
                'detail' => $e->getMessage()
            ];
        }
        sleep(1.5);
        return Response::json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
