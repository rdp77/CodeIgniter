<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calc
{
    public function Tambah($angka1, $angka2)
    {
        return $angka1 + $angka2;
    }
    public function Kurang($angka1, $angka2)
    {
        return $angka1 - $angka2;
    }
    public function Kali($angka1, $angka2)
    {
        return $angka1 * $angka2;
    }
    public function Bagi($angka1, $angka2)
    {
        return $angka1 / $angka2;
    }
}
