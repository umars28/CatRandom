<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\CatHelper;

class CatController extends Controller
{
    public function index() {
        $getRandomCat = CatHelper::connectApi();
        $getImageCat = CatHelper::changeToJson($getRandomCat);
        return view('index', compact('getImageCat'));
    }

    public function search() {
        $randomKeyArray = CatHelper::randomKeyArray();
        $getRandomCat = CatHelper::concatString($randomKeyArray);
        return view('index', compact('getRandomCat'));

    }
}
