<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Unlesstest extends TestCase
{
    public function testUnless()
    {
        $this->view("conditional.unless", ["isAdmin" => true])
            ->assertDontSeeText("You are not admin.");

        $this->view("conditional.unless", ["isAdmin" => false])
            ->assertSeeText("You are not admin.");
    }

}
