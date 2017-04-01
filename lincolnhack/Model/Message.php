<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/04/2017
 * Time: 19:57
 */

namespace lincolnhack\Model;


use Jenssegers\Mongodb\Eloquent\Model;

class Message extends Model
{
    
    protected $collection = 'siteMessages';
    
}