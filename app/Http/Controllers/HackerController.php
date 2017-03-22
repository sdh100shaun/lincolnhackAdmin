<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 22/03/2017
 * Time: 20:48
 */

namespace app\Http\Controllers;


class HackerController
{
    
    public function __construct()
    {
        
    }
    
    public function index()
    {
        return view('hackers.index');
    }
}