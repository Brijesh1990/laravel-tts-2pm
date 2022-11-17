<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use App\Http\Resources\Product as ProductResource;
class ProductController extends Controller
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
        $input=$request->all();
        $data=Product::create($input);
        $success['token']=$data->createToken('token')->accessToken;
        $success['name']=$data->name;
        return $this->sendResponse($success,'Products Added  successfully');

        // return $this->sendResponse(new ProductResource($product),'Product created successfully');

    }
}
