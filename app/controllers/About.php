<?php

class About {
    public function index($nama = 'Lidya' , $pekerjaan = 'mahasiswa')
    {
        echo"Halo, nama saya $nama, saya seorang $pekerjaan";
    }
    public function page()
    {
        echo'About/page';
    }
}