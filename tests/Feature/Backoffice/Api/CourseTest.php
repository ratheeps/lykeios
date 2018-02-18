<?php

namespace Tests\Feature\Backoffice\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_can_see_all_courses()
    {
        $user = factory(\App\User::class)->create();
        factory(\App\Models\Course::class, 5)->create();

        $this->actingAs($user, 'api');
        $response = $this->get('/backoffice/api/courses');
        $entries = json_decode($response->getContent(), true);

        $this->assertCount(5, $entries);
    }

    /** @test */
    public function users_can_see_a_single_course()
    {
        $user = factory(\App\User::class)->create();
        $course = factory(\App\Models\Course::class)->create([
            'name' => 'How to become a web artisan with Laravel',
        ]);

        $this->actingAs($user, 'api');
        $response = $this->get("/backoffice/api/courses/{$course->id}");

        $response->assertJsonFragment([
            'id' => $course->id,
            'name' => 'How to become a web artisan with Laravel',
        ]);
    }
}
