<?php

class Account
{
    public $nama;
    public $saldo;
    public $norek;

    public function __construct($nam, $sal, $rek)
    {
        $this->nama = $nam;
        $this->saldo = $sal;
        $this->norek = $rek;
    }


    public function deposit($nominal)
    {
        $this->saldo += $nominal;
    }

    public function withdraw($jumlah)
    {
        $this->saldo -= $jumlah;
    }

    public function cetak()
    {

        echo "No Account : " . $this->norek . "<br>";
        echo "Atas Nama : <b>" . $this->nama . "</b><br>";
        echo "Saldo Anda Sebesar : <b>" . $this->saldo . "</b><br><br>";

        // echo "Rekening Atas Nama <b>" . $this->nama . "</b> <br> Mempunyai Saldo Sebesar " . $this->saldo . "<br><br>";
    }
}

class AccountBank extends Account
{
    public function customerTransfer(Account $nam, $duit)
    {
        $this->saldo -= $duit;
        $nam->deposit($duit);
    }
}

$ahmad = new AccountBank('ahmad', 6000000, 'C001');
$budi = new AccountBank('budi', 5350000, 'C002');
$kurniawan = new AccountBank('kurniawan', 2500000, 'C003');

echo "Saldo awal <br>";

$ahmad->cetak();
$ahmad->deposit(1000000);
echo "Saldo deposit 1juta <br>";
$ahmad->cetak();

echo "Saldo awal <br>";
$budi->cetak();
$ahmad->customerTransfer($budi, 1500000);
echo "Setelah Transfer 1,5jt oleh ahmad <br>";
$budi->cetak();

echo "Kemudian budi menarik uangnya 2,5 jt <br>";
$budi->withdraw(2500000);
$budi->cetak();
