<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 20/09/2018
 * Time: 21:05
 */

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Lincolnhack\Model\Sponsor;


class SponsorController extends Controller
{
    /**
     * @var Sponsor
     */
    private $sponsor;



    public function __construct(Sponsor $sponsor)
    {

        $this->sponsor = $sponsor;
    }

    public function index($type, $name)
    {

        try {
            $viewName = $type;

            if($type === $this->sponsor::SPONSOR_TYPE_GOLD)
            {
                $this->sponsor->findByName($name);
                $viewName = $name;

            }
            else
            {
                $this->sponsor->findByType($type);
            }


        }
        catch (ModelNotFoundException $nfe) {

            return redirect('/');

        }



        return view('sponsors.'.$viewName, ['sponsor' => $this->sponsor]);
    }
}