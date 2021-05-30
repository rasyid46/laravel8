<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function tes(){

        $keyword = 'makan nasi';
    
        $images = GoogleImageGrabber::grab($keyword);
        
        }
}
