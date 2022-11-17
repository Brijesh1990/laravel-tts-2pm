<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
class BaseController extends Controller
{
    // success method response
    public function sendResponse($result,$message)
    {

        $response=[
            'success'=>true,
            'data'=>$result,
            'message'=>$message

        ];

        // json =>json stands for javascript object notations
        // 200=>response success
        // 404=>resposnse not get or error
        return response()->json($response,200);
    }
    // error method  respose 
    public function sendError($error,$errorMessage=[],$code=404)
    {

        $response=[
            'success'=>false,
            'message'=>$error
        ];
        if(!empty($errorMessage))
        {
            $response['data']=$errorMessage;

        }
        // json =>json stands for javascript object notations
        // 200=>response success
        // 404=>resposnse not get or error
        return response()->json($response,$code);
    }

}
