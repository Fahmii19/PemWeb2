<?php

class AccountBank extends Account
{
    public $user;

    function __construct($norek, $user, $saldo)
    {
        parent::__construct($norek, $saldo);
        $this->user = $user;
    }
}

class Account
{
    public $nomor;
    public $saldo;

    function __construct($norek, $saldo)
    {
        $this->nomor = $norek;
        $this->saldo = $saldo;
    }
}
