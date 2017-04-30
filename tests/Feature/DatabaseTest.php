<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 17:29
 */

namespace Feature;


use Tests\TestCase;

class DatabaseTest extends TestCase
{
    
    public function testUserSeeded()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'shaun@shaunhare.co.uk'
        ]);
    }
}