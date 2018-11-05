<?php


namespace Lincolnhack\Model;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Lincolnhack\Traits\ServiceLoader;

class Tickets extends Model
{


    protected $collection = "tickets";


    public function model()
    {
        return __CLASS__;
    }




}