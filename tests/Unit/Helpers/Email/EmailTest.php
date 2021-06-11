<?php

namespace Tests\Unit\Helpers\Email;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;
class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $result = Email::validate('earhackerdem@gmail.com');
        $this->assertTrue($result);

        $result = Email::validate('earhackerdem@@gmail.com');
        $this->assertFalse($result);
    }
}
