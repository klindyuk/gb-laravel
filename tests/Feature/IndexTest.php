<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCategories()
    {
        $response = $this->get('/category');

        $response->assertStatus(200);
    }

    public function testCategoryShow()
    {
        $response = $this->get('/category/1');

        $response->assertStatus(200);
    }
    public function testAdminNewsCreate()
    {
        $response = $this->get('/admin/news/create');

        $response->assertStatus(200);
    }
    public function testCommentsCreate()
    {
        $response = $this->get('/comments/create');

        $response->assertStatus(200);
    }
    public function testNewsShow()
    {
        $response = $this->get('/news/1');

        $response->assertStatus(200);
    }
    public function testAdminNewsEdit()
    {
        $response = $this->get('/admin/news/edit/1');

        $response->assertStatus(200);
    }

}
