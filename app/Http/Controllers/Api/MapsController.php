<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MapsResource;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $q = 'vanadzor';
       $leng = 'en';

       $options = array(
        'q' => $q,
        'APPID' => $_ENV['MAP_KEY'],
        'units' => 'metric',
        'lang' => $leng,
       );

       $ch = curl_init();
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
       curl_setopt($ch,CURLOPT_URL,$_ENV['MAP_URL'].'?'.http_build_query($options));

       $response = curl_exec($ch);
       $data = json_decode($response, true);
        curl_close($ch);

       // MapsResource::collection($data)

       return view('site.index',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
