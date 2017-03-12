<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApplicationTest extends TestCase
{
    
    public function testIndex()
    {
        $response = $this->get('/');
    
        $response->assertStatus(200);
    }
    
    public function testCountdown()
    {
        $response = $this->get('/countdown');
    
        $response->assertStatus(200);
    }
    
    public function testLogin()
    {
        $response = $this->get('/login');
    
        $response->assertStatus(200);
    }
    
    public function testAuthRedirect()
    {
        $response = $this->get('/home');
    
        $response->assertStatus(302);
    }
}
