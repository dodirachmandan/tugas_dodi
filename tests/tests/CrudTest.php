<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../functions.php";

class CrudTest extends TestCase
{
    public function test_create_kontak()
    {
        $data = ["nama" => "Dodi", "telepon" => "0822334455"];
        $result = createKontak($data);
        $this->assertEquals("sukses", $result);
    }

    public function test_update_kontak()
    {
        $result = updateKontak(1, ["nama" => "Baru"]);
        $this->assertEquals("sukses", $result);
    }

    public function test_delete_kontak()
    {
        $result = deleteKontak(1);
        $this->assertEquals("sukses", $result);
    }
}
