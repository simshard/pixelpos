<?php

use App\Models\Job;
use App\Models\Employer;

test('it belongs to an employer', function () {
    //arrange
     $employer = Employer::factory()->create();
     $job = Job::factory()->create(['employer_id' => $employer->id]);

    //act & assert
    expect($job->employer->is($employer))->toBeTrue();

    
});

test('it has tags', function () {
    $job = Job::factory()->create();

    $job->tag('weird');

    expect($job->tags)->toHaveCount(1);
    
});
