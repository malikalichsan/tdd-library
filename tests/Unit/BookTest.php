<?php

namespace Tests\Unit;


use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_id_is_recorded()
    {
        Book::create([
            'title' => 'Cool Title',
            'author_id' => 'Victor',
        ]);

        $this->assertCount(1, Book::all());
    }
}
