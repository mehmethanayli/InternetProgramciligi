<?php

function toplama($sayi1, $sayi2)
{
    return "Toplama Fonksiyonu: " . $sayi1 + $sayi2 . "<br>";
}

function cikartma($sayi1, $sayi2)
{
    echo "Çıkarma Fonksiyonu:" . ($sayi1 - $sayi2) . "<br>";
}

echo toplama(20, 30);
cikartma(10, 3);




class islemler
{
    function carp($a, $b)
    {
        return "<br> Çarpım Sonucu:" . $a * $b;
    }

    function bol($a, $b)
    {
        echo  "<br>Bölüm Sonucu:" . $a / $b;
    }
}

//$islemler değişkeni islemler sınıfından türetildi.
$islemler = new islemler;

//Return işlemi olduğu için echo kullanarak yazdırıldı.
echo $sonuc = $islemler->carp(10, 2);

//Fonksiyon kendisi ekrana yazdırdığı için çağrılarak çalıştırıldı.
$islemler->bol(10,2);




/* 2.Hatırlatma */
echo "<br><br><br><br>";

/* class Bilgiler{

    function isimler(){
        echo "Merhaba Ali ";
    }

    function soyisimler(){
         $this->isimler();
        echo " Bozkurt Hoşgeldiniz...";
    }

}

$bilgiler=new Bilgiler;
$bilgiler->soyisimler();
 */


class Bilgiler{

    function __construct()
    {   
        echo "<h3>Construct Metodu Çalıştı.</h3>";
        
    }

    function isimler($isim = "Ali"){
        return $isim;
    }

    function soyisimler($soyisim= "Bozkurt"){
        echo $this->isimler("Mehmet");
        echo "$soyisim Hoşgeldiniz.";
    }


    function __destruct()
    {
        echo "<h3>Destruct Metodu Çalıştı.</h3>";

    }



}

$bilgiler=new Bilgiler;
$bilgiler->soyisimler(" Karaca");

