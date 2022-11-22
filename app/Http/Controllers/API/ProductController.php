<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use App\Http\Resources\Product as ProductResource;
class ProductController extends BaseController
{
    //display all listing of api
    public function index()
    {
        $products=Product::all();
        return $this->sendResponse(ProductResource::collection($products),'Products Retrieved successfully');
    }
    // stored product api
    public function store(Request $request)
    {
        $input=$request->all();
        // validator apply
        $validator=Validator::make($input,[
            'name'=>'required',
            'detail'=>'required'
        ]);

        if($validator->fails()) 
        {
            return $this->sendError('Validation Error.',$validator->errors());
        }

        $product=Product::create($input);
        return $this->sendResponse(new ProductResource($product),'Product created successfully');

    }
}
