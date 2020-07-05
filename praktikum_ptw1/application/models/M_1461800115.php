<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_1461800115 extends CI_Model
{

    public function home()
    {
        return "Manusia biasa yang lahir tanpa punya keahlian istimewa.";
    }

    public function artikel()
    {
        $paragraf = array("Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh
        dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak
        digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya.", "Framework ini mengikuti struktur MVC (Model View Controller), MVC adalah sebuah metode aplikasi
        dengan memisahkan data dari tampilan berdasarkan komponen- komponen aplikasi, seperti : manipulasi
        data, controller, dan user interface.", "Dengan menggunakan struktur MVC maka membuat laravel mudah untuk dipelajari dan mempercepat proses
        pembuatan prototipe aplikasi web. Framework ini juga menyediakan fitur bawaan seperti otentikasi,
        mail, perutean, sesi, dan daftar berjalan.", "Framework ini banyak disukai oleh para web developer, Sesuai sedikit penjelasan diatas. Kelebihan
        lainnya yaitu Laravel sangat mudah untuk disesuaikan, Karena kemudahan itulah kamu dapat membuat
        suatu struktur proyek kamu sendiri yang memenuhi permintaan aplikasi web kamu.");
        return $paragraf;
    }
}
