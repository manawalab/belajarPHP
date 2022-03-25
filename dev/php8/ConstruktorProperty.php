<?php 
class produk {

    public function __construct(public string $id, 
                                public string $nama, 
                                public int $harga = 0, 
                                public int $jumlah = 0,
                                private bool $expensive = false)
    {
    }
}

$produk = new produk (id: "1", nama: "engka umar", harga: 15000);
var_dump ($produk);

echo $produk->nama .PHP_EOL;