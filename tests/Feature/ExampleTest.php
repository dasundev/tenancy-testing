<?php

use App\Models\Tenant;

beforeEach(function () {
    $tenant = Tenant::factory()->create();

    tenancy()->initialize($tenant);
});

it('can run tests fast', function () {
    $this->assertTrue(true);
})->with(range(1, 100));
