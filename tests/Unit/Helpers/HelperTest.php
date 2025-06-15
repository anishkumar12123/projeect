<?php

namespace Tests\Unit\Helpers;

use Tests\TestCase;
use App\Helpers\Helper;

class HelperTest extends TestCase
{
    public function test_it_returns_correct_age()
    {
        $dob = "2005/05/20";

        $response = Helper::getAge($dob);
        $this->assertNotEmpty($response);
    }

    public function test_it_returns_error_for_invalid_date()
    {
        $dob = "2050/05/20";

        $response = Helper::getAge($dob);
        $this->assertEquals("Could Not Parse", $response);
    }
}

