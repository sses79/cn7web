<?php

//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;

class TLItemTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testShow()
    {
        $this->get('/api/TLItem/1')
            ->seeJson(['imageUrl' => "3d.png"]);
    }

    public function testPut()
    {
        $this->put('/api/TLItem/1')
            ->see('get 1');
    }

}
