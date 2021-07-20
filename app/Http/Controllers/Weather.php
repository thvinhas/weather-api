<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Weather extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getwather(Request $request)
    {
        $country =  empty($request->input('country'))  ?  'Dublin,city,Ireland' : $request->input('country');

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://community-open-weather-map.p.rapidapi.com/find?q=" . $country . "&cnt=1&mode=null&lon=0&type=link%2C%20accurate&lat=0&units=metric",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
                "x-rapidapi-key: 4444cb46d6mshe95da202f75d55bp119af0jsna5a4f7ce243c"
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            Log::error("cURL Error #:" . $err);
        } else {
            // echo $response;
            if (json_decode($response)->cod != 200) {
                Log::error("Error #:" . json_decode($response)->message);
            }
            return $response;
        }
    }
}
