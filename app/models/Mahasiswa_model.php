<?php

class Mahasiswa_model
{
  private $mhs = [
    [
      "nama" => "ujang fatah",
      "nrp" => "193040174",
      "email" => "ujang@gmail.com",
      "jurusan" => "teknik informatika"
    ],
    [
      "nama" => "fatah",
      "nrp" => "193040175",
      "email" => "jang@gmail.com",
      "jurusan" => "teknik informatika"
    ],
    [
      "nama" => "ujang",
      "nrp" => "193040176",
      "email" => "ujan@gmail.com",
      "jurusan" => "teknik informatika"
    ]
  ];

  public function getALLMahasiswa()
  {
    return $this->mhs;
  }
}
