<?php

namespace Tests\Feature;

use App\Author;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_can_be_created()
    {
        $response = $this->post('/authors', $this->data());

        $authors = Author::all();

        $this->assertCount(1, $authors);
        $this->assertInstanceOf(Carbon::class, $authors->first()->dob);
        $this->assertEquals('1988/14/05', $authors->first()->dob->format('Y/d/m'));

        $response->assertRedirect($authors->first()->path());
    }

    /** @test */
    public function a_name_is_required()
    {
        $response = $this->post('/authors',
            array_merge(
                $this->data(),
                ['name' => '']
            )
        );

        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_dob_is_required()
    {
        $response = $this->post('/authors',
            array_merge(
                $this->data(),
                ['dob' => '']
            )
        );

        $response->assertSessionHasErrors('dob');
    }

    private function data()
    {
        return [
            'name' => 'Author Name',
            'dob' => '05/14/1988',
        ];
    }
}
