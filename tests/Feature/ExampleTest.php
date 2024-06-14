<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentTest extends TestCase
{
    use RefreshDatabase; // Use RefreshDatabase trait to reset database state between tests

    /**
     * Test creating a student.
     */
    public function testCreateStudent(): void
    {
        $student = Student::create([
            'name' => 'John Doe',
            'email' => 'john.doe@itc.edu.kh',
            'phone' => '012 345 678',
            'dob' => '2003-10-01'
        ]);

        $this->assertTrue($student->exists);
    }

    /**
     * Test if the application root endpoint returns a successful response.
     */
    public function testApplicationRootEndpoint(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
