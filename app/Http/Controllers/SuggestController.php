<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Suggest;
use DB;
use Illuminate\Http\Request;

class SuggestController extends Controller
{
    public function index()
    {
        return response()->view('suggest');
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            "address" => "required",
            "number" => "numeric|digits:10"
        ]);

        if ($validator->fails()) {
            $status = 500;
            $body = $validator->errors()->all()[0];
            return response()->view("response", compact('status','body'));
        }

        $response = Suggest::firstOrCreate([
            "name" => $request->name,
            "address" => $request->address,
            "number" => $request->number,
            "description" => $request->description
        ]);
        if ($response) {
            $status = "200";
            $body="Your suggestion has been sent";
            return response()->view("response", compact('status','body'));
        } else {
            $status = "500";
            $body="Your suggestion could not be sent";
            return response()->view("response", compact('status','body'));
        }

    }

    public function suggestData()
    {
        $data = Suggest::all();
        return ["data" => $data, "status" => 200];
    }
}
