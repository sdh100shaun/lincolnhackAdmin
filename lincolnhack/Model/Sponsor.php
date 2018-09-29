<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 22/09/2018
 * Time: 10:30
 */

namespace Lincolnhack\Model;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Sponsor extends Model
{

    protected $collection = 'sponsors';

    const SPONSOR_TYPE_GOLD = 'gold';
    const SPONSOR_TYPE_SILVER = 'silver';
    const SPONSOR_TYPE_PARTNER = 'partner';

    public function findByName($name)
    {
        return $this->where('name', $name)->firstOrFail();
    }

}