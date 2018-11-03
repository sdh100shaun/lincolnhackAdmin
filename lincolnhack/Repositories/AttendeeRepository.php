<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 17/04/2017
 * Time: 12:25
 */

namespace Lincolnhack\Repositories;

    
use Illuminate\Contracts\Container\Container;
use Lincolnhack\Model\Attendee;

class AttendeeRepository
{
    /**
     * @var Container
     */
    private $container;
    
    /**
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    /**
     *
     * @return Attendee
     */
    private function makeModel():Attendee
    {
        $modelName = str_replace('Repositories', 'Model', __CLASS__);
        $modelName = str_replace('Repository', '', $modelName);
        
        return $this->container->make($modelName);
        
    }
    
    public function getAll()
    {
        return $this->makeModel()->all();
    }

    public function whereYear()
    {
        return $this->makeModel()->whereYear('created_on', date('Y'));
    }
    
}