<?php 
    class Bmi_pasien {
        private $nama;
        private $umur;
        private $jk;
        private $berat;
        private $tinggi;
        function __construct ( $nama , $umur , $jk , $berat , $tinggi ) {
            $this->nama = $nama;
            $this->umur = $umur;
            $this->jk = $jk;
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        function getNama () {
            return $this->nama;
        }

        function getUmur () {
            return $this->umur;
        }

        function getJk () {
            return $this->jk;
        }

        function getBerat () {
            return $this->berat;
        }

        function getTinggi () {
            return $this->tinggi;
        }

        function getBmi () {
            $bb = $this->berat;
            $tb = $this->tinggi;

            $a = $tb * 0.01;
            $b = $a * 2;
            $c = $bb / $b;
            $angka = number_format($c, 2);

            return $angka;
        }

        function getStatus ($massa) {
            if($massa >= 30.0) {
                $status = "Kegemukan/Obesitas";
            }
            elseif($massa >= 25.0 && $massa <= 29.0) {
                $status = "Kelebihan berat badan";
            }
            elseif($massa >= 18.5 && $massa <= 24.9) {
                $status = "Normal/Ideal";
            }
            elseif($massa <= 18.4) {
                $status = "Kekurangan berat badan";
            }

            return $status;
        }
    }
?>