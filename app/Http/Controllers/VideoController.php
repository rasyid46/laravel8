<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Buchin\GoogleImageGrabber\GoogleImageGrabber;

class VideoController extends Controller

{
    public function tes(){

    $keyword = 'makan nasi';

    $images = GoogleImageGrabber::grab($keyword);
    dd($images);
    }
}
