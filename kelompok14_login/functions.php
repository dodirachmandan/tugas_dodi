<?php

// LOGIN
function login($username, $password)
{
    if ($username == "admin" && $password == "1234") {
        return "berhasil";
    }
    return "gagal";
}

// CREATE KONTAK
function createKontak($data)
{
    if (!empty($data["nama"]) && !empty($data["telepon"])) {
        return "sukses";
    }
    return "gagal";
}

// UPDATE KONTAK
function updateKontak($id, $data)
{
    if ($id > 0 && !empty($data["nama"])) {
        return "sukses";
    }
    return "gagal";
}

// DELETE KONTAK
function deleteKontak($id)
{
    if ($id > 0) {
        return "sukses";
    }
    return "gagal";
}
