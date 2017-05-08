<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 17:29
 */

namespace Feature;


use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    
    
    public function setUp()
    {
        parent::setUp();
        
        
    }
    
    public function testUserSeeded()
    {
        $this->artisan('db:seed');
        $this->assertDatabaseHas('users', [
            'email' => 'shaun@shaunhare.co.uk'
        ]);
    }
    
    public function tearDown()
    {
        $this->artisan('migrate:rollback');
       
        parent::tearDown();
    }
}