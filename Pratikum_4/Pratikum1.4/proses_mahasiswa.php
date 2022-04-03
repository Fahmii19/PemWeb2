<?php

class NilaiMahasiswa
{
    var $nim;
    var $nama;
    var $matakuliah;
    var $nilai;


    public function __construct($nim, $nama, $matakuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    function grade()
    {
        if ($this->nilai >= 0 && $this->nilai <= 35) {
            $this->grade = "E";
        } elseif ($this->nilai > 35 && $this->nilai <= 55) {
            $this->grade = "D";
        } elseif ($this->nilai > 55 && $this->nilai <= 69) {
            $this->grade = "C";
        } elseif ($this->nilai > 69 && $this->nilai <= 84) {
            $this->grade = "B";
        } elseif ($this->nilai > 84 && $this->nilai <= 100) {
            $this->grade = "A";
        } else {
            $this->grade = "Data Wajib Diisi";
        }
        return $this->grade;
    }


    function kelulusan()
    {
        if ($this->nilai < 56 && $this->nilai >= 0) {
            return "Tidak Lulus!!";
        } elseif ($this->nilai > 56 && $this->nilai <= 100) {
            return "Lulus!!";
        } else {
            return "Data Wajib Diisi";
        }
    }

    function hasil()
    {
        echo "<b>NIM</b> : " . $this->nim;
        echo "<br/><b>Nama</b> : " . $this->nama;
        echo "<br/><b>Mata Kuliah</b> : " . $this->matakuliah;
        echo "<br/><b>Nilai</b> : " . $this->nilai;
    }
}
