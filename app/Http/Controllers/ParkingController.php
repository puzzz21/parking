<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Space;
use DB;

class ParkingController extends Controller
{
    public function index($lat, $lng, $radius)
    {
        $datas = DB::select(
            "SELECT * FROM `spaces` WHERE ACOS( SIN( RADIANS( `latitude` ) ) * SIN( RADIANS( $lat) ) + COS( RADIANS( `latitude` ) )
* COS( RADIANS( $lat )) * COS( RADIANS( `longitude` ) - RADIANS( $lng )) ) * 6380 < $radius"
        );
        if ($datas) {
            foreach ($datas as $data) {
                $record[] = [
                    "id" => $data->id,
                    "name" => $data->name,
                    "image1" => asset("images/" . $data->image1),
                    "opening_time" => $data->opening_time,
                    "closing_time" => $data->closing_time,
                    "price_bike_day_hr" => $data->price_bike_day_hr,
                    "price_car_day_hr" => $data->price_car_day_hr,
                    "price_bike_night_hr" => $data->price_bike_night_hr,
                    "price_car_night_hr" => $data->price_car_night_hr,
                    "latitude" => $data->latitude,
                    "longitude" => $data->longitude,
                    "description" => $data->description,
                    "car_ability" => $data->car_ability,
                    "bike_ability" => $data->bike_ability,
                    "current_car_ability" => $data->current_car_ability,
                    "current_bike_ability" => $data->current_bike_ability
                ];
            }
            return response()->json($record,200);
        }else{
            return response()->json(["parking not available"],500);
        }

    }
}
