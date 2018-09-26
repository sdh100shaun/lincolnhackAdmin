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

    public function index($name)
    {

        try {
            $viewName = $name;
            $this->sponsor->findByName($name);
            if(!$this->sponsor->type === ' Gold')
            {
                $viewName = $this->sponsor->type;
            }

        }
        catch (ModelNotFoundException $nfe) {

            return redirect('home');

        }



        return view('sponsors.'.$viewName, ['sponsor' => ]);
    }
}