<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function getPoint() {
        return [
                'data'=>[
                    "lat"=>10.74,
                    "lng"=>106.61,
                ]];
    }
    public function getMarker() {
        return [
            'data'=>[
                [
                    "lat"=>10.74,
                    "lng"=>106.61,
                    "name"=>"Binh Tan"
                ],
                [
                    "lat"=>10.81,
                    "lng"=>106.65,
                    "name"=>"San Bay"
                ]
            ]];
    }
}
