<?php

class ATM
{
    private $saldo;

    public function __contruct($saldoAwal)
    {
        $this->saldo = $saldoAwal;
    }

    public function ceksaldo()
    {
        echo "saldo anda saat ini: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;

    }

    public function tarikTunai($jumlah)
    {
        if ($jumlah <= 0) {
            echo "jumlah penarikan tidak valid" . PHP_EOL;
            return;
        }
        if ($jumlah > $this->saldo) {
            echo "saldo tidak mencukupi" . PHP_EOL;
            return;
        }

        $this->saldo -= $jumlah;
        echo "penarikan tunai berhasil. saldo anda sekarang: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;

    }

    public function setortunai($jumlah)
    {
        if ($jumlah <= 0) {
            echo "jumlah setoran tidak valid" . PHP_EOL;
            return;
        }

        $this->saldo += $jumlah;
        echo "setoran tunai berhasil. saldo anda sekarang: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
    }
}

// contoh penggunaan
$atm = new ATM(1000000);

$atm->ceksaldo();

$atm->tariktunai(500000);
$atm->ceksaldo();

$atm->setortunai(200000);
$atm->ceksaldo();

$atm->tarikTunai(1000000);
$atm->ceksaldo();
?>


