<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-1</title>
</head>

<body>

    <h4>Php de Değişken Özellikleri</h4>
    <ol>
        <li>1. Değişken İsimleri Rakam İle Başlamaz</li>
        <li>Değişken isimlerinde Türkçe karakter kullanılması önerilmez.</li>
        <li>php'de değişken isimleri $ işareti ile başlar.</li>
        <li>Değişken isimlerinin içinde boşluk kullanılmaz.</li>
        <li>Küçük-Büyük harf duyarlılığı vardır. (model != Model)</li>
    </ol>

    <hr>

    <?php


    // Açıklama Satırı

    /* 
Açıklama  Satırları
*/

    $metin = "Aydın Adnan Menderes Üniversitesi";
    $sayi1 = 15;
    $sayi2 = 25;
    $sonuc;


    echo "\$metin Değişkeninin İçeriği: <i><b><u> $metin </i></b></u><br>";
    echo $sayi1 . "<br>";
    echo "$sayi2 <br>";


    echo $sayi1 + $sayi2;



    echo "<br><br><br>";

    if (($sayi1 + $sayi2) > 50 && $sayi2 > 30) {
        echo "Sonuç Doğru.";
    } else {
        echo "Sonuç Yanlış.";
    }




    /* 
1- 1'den 10'a kadar olan tek sayıları ekrana satır satır yazdırınız.
2- 1'den 10'a kadar tek sayıların toplamını yazdırınız.
3- 1'den 10'a kadar çift sayıların karesini, tek sayıların 2 katını yazdırınız.
4- Formdan gelen iki sayının arasındaki tek sayıları ekrana yazdırın.


*/

    ?>
    <br><br><br>

    <input type="text" value="<?php echo $metin; ?>">

    <br><br><br>

    <h5>Form İşlemleri</h5>

    <form action="ders1.php" method="get">

        <label> Sayı-1 <input type="text" name="sayi1" placeholder="Sayı 1 Değerini Giriniz."> </label>
        <label> Sayı-2 <input type="text" name="sayi2" placeholder="Sayı 2 Değerini Giriniz."> </label>
        <input type="submit" value="Formu Gönder">

    </form>

    <?php

    $sayi1 = @$_GET["sayi1"];
    $sayi2 = @$_GET["sayi2"];
    $tekToplam = 0;
    $tekDizi = [];
    $ciftDizi = [];

    $kareleri = [];




    while ($sayi1 <= $sayi2) {
        array_push($kareleri, ($sayi1 * $sayi1));
        $sayi1++;
    }

    echo "<pre>";
    print_r($kareleri);
    echo "</pre>";

    $isim= "Mehmet Ali";
    merhaba("Ali");
    merhaba("Kemal");
    merhaba($isim);


    function merhaba($isim)
    {
        echo  "Merhaba - $isim  <br>";
    }

   

























    //echo "Toplam : $tekToplam";

    /*    echo "<pre>";
    print_r($ciftDizi);
    echo "</pre>";

    echo $karesi = $ciftDizi[12] * 2;

    $sonuc = hesapla(1, 3);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    function hesapla($sayi1, $sayi2)
    {
        $karesi = [];

        while ($sayi1 <= $sayi2) {

            array_push($karesi, ($sayi1 * $sayi1));
            $sayi1++;
        }
        return $karesi;
    }
 */

    ?>


    <br><br><br><br><br>
</body>

</html>