<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../functions.php";

class LoginTest extends TestCase
{
    public function test_login_valid()
    {
        $result = login("admin", "1234");
        $this->assertEquals("berhasil", $result);
    }

    public function test_login_invalid()
    {
        $result = login("salah", "password");
        $this->assertEquals("gagal", $result);
    }
}
