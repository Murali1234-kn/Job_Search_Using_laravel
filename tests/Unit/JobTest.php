<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

class JobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a job belongs to an employer.
     */
    public function test_job_belongs_to_an_employer(): void
    {
        //we use AAA  logic here.....    Arrange, Act , Assert
        // Arrange: Create an employer
        $employer = Employer::factory()->create();

        // Act: Create a job associated with the employer
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // Assert: Check if the job's employer is the same as the created employer
        $this->assertTrue($job->employer->is($employer));
    }
    public function test_can_have_tags(): void
    {
        // Create a Job instance
        $job = Job::factory()->create();

        // Add a tag to the job
        $job->tag('Frontend');

        // Assert that the job has 1 tag
        $this->assertCount(1, $job->tags);
    }
}
