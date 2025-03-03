<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Iftest extends TestCase
{
    public function testIf()
    {
        $this->view("conditional.if", ["hobbies" => []] )
            ->assertSeeText("I don't have any hobbies!", false);

        $this->view("conditional.if", ["hobbies" => ["Coding"]] )
            ->assertSeeText("I have one hobby!");

        $this->view("conditional.if", ["hobbies" => ["Coding", "Gaming"]] )
            ->assertSeeText("I have multiple hobbies!");
    }


}
