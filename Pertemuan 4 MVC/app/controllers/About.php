<?php

class About
{
  public function index($nama = 'Hannan', $pekerjaan = 'Duktek')
  {
    echo "Hallo, Nama saya $nama, saya adalah seorang $pekerjaan";
  }

  public function page()
  {
    echo 'About/page';
  }
}
