<?php 

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Category;

use \Response;

class CategoryController extends Controller
{
	function getIndex()
	{
		try
		{
			$data = Category::get()->toArray();

			$response =[
				'success' => true,
				'result' => $data,
			];

		}catch (Exception $e)
		{
			$response = [
				'success' => false,
				'message' => 'Something went wrong.',
				'detail' => $e->getMessage()
			];
		}

		return Response::json($response,200);
	}
}
