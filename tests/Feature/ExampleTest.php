<?php

use App\Models\Tenant;

beforeEach(function () {
    $tenant = Tenant::factory()->create();

    tenancy()->initialize($tenant);
});

it('measures testcase performance', function () {
    $this->assertTrue(true);
})->with(range(1, 500));
