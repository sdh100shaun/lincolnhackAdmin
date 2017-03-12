<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 11:18
 */

namespace App\Http\Controllers;


class CountdownController extends Controller
{
    
    public function index()
    {
        return view('countdown');
    }
    
}