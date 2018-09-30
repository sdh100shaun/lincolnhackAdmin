<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/09/2018
 * Time: 08:18
 */

namespace App\Http\Controllers;


class PartnersController extends Controller
{

    public function index()
    {
        return view('partners.partners', ['type'=>'partner']);
    }
}