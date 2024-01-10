<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EloquentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_model_with_uuids_based_primery_key()
    {
        $book = Book::create(['name'=>'Book09011100']);        
        $this->assertTrue(strlen($book->id)==36);
    }
}
