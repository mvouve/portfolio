<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeLoad() {
        $response = $this->get('/');

        $response->assertViewIs('home');
        $response->assertSee('1-657-244-6826');
        $response->assertSee('mvouve@gmail.com');

    }
}
