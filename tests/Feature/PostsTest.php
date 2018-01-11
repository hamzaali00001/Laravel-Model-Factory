<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use DatabaseTransactions;

    public function testPostsCreation()
    {
        $title = 'Some subject!';
        $description = 'Some description';
        factory('App\Post')->create([
            'title' => $title,
            'description' => $description,
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => $title,
            'description' => $description
        ]);
    }
}