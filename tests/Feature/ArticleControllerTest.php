<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertOk()
                 ->assertViewIs('articles.index')
                 ->assertSee('タイトル1')
                 ->assertSee('ユーザー登録');
                // Articleモデル作成まで完了
    }
}

