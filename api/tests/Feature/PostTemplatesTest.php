<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTemplatesTest extends TestCase
{


    public function test_CategoryIndex()
    {
        $response = $this->get(route('client.post.templates'));

        $data = $response->json();
        if (self::isJson($response)){
            $response->assertStatus(200);
        }
    }







}
