<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders2</title>
</head>

<body>

    <?php
    //Değişken tanımlama
    $sayi1 = 50;
    $sayi2 = 75;

    //tanımlayarak atama yapma
    $sayi3 = 0;
    $metin = "Merhaba Dünya...";

    //Değişkeni Ekrana Yazdırma

    echo $sayi3 . "<br>"; // => echo "$sayi3<br>"
    echo "$metin";

    //Diziler
    $dizi1 = [];   // $dizi1=array();
    $dizi2 = array();


    //Diziyi ekrana yazdırmak 

    echo "<br>Dizi 1 İçeriği <br>";
    print_r($dizi1);

    echo "<br>Dizi 2 İçeriği <br>";
    print_r($dizi2);

    //Dizinin İçerisine Bir Eleman Eklemek
    array_push($dizi1, "1");

    echo "<br>Dizi 1 İçeriği <br>";
    print_r($dizi1);

    //İndise Göre Bir Elemana Erişmek 
    echo "<br>Dizi 1 İçindeki 0 numaralı indisteki eleman <br>";
    echo $dizi1[0];

    //Dizinin 1. Elemanına rasgele bir sayı ekleme işlemi.
    $dizi1[1] = rand(15, 50);
    array_push($dizi1, rand(20, 80));

    echo "<br>Dizi 1 İçeriği <br>";
    print_r($dizi1);

    //Foreach 
    echo "<br>Dizi 1 İçeriği <br>";

    foreach ($dizi1 as $key => $value) {
        echo "$key  - $value <br>";
    }


    //Koşul İfadesi

    if (rand(0, 50) > rand(0, 50)) {
        echo "Sayı1 Sayı2'den büyük.";
    } else if (rand(0, 50) > rand(0, 50)) {
        echo "Sayı2 Sayı1'den büyük.";
    } else {
        echo "Eşittir.";
    }

    for ($i = 0; $i < 5; $i++) {
        echo " <br> $i - Merhaba <br>";
    }

    $diziSiniri = 10;

    $dizi = [];

    for ($i = 0; $i < $diziSiniri; $i++) {
        $dizi[$i] = rand(0, 100);
    }

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";



    ?>
    <hr>
    <form action="ders2.php" method="get">
        <input type="text" name="sayi1" placeholder="Dizi Limitini Giriniz.">
        <input type="submit" value="Formu Gönder...">
    </form>

    <?php

    $deger = @$_GET["sayi1"];
    $dizi2 = [];

    /*    while($deger>0){
                array_push($dizi2,rand(0,20));
                $deger--;
            }
            
            echo "<pre>";
            print_r($dizi2);
            echo "</pre>"; */


    do {
        array_push($dizi2, rand(0, 20));
        $deger--;
    } while ($deger > 0);

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";



    ?>
    <hr>


    <form action="ders2.php" method="post">

        <input type="text" name="vize" id="" placeholder="vize notunu giriniz.">
        <input type="text" name="final" id="" placeholder="final notunu giriniz.">
        <input type="submit" value="Not Hesapla">

    </form>

    <?php

    $vize = @$_POST["vize"];
    $final = @$_POST["final"];

    notHesapla($vize, $final);

    echo "<br>";
    notHesapla(rand(90, 100), rand(90, 100));
    echo "<br>";
    notHesapla(rand(90, 100), rand(90, 100));
    echo "<br>";
    notHesapla(rand(90, 100), rand(90, 100));
    echo "<br>";
    notHesapla(rand(90, 100), rand(90, 100));
    echo "<br>";
    notHesapla(rand(90, 100), rand(90, 100));

    function notHesapla($vize, $final)
    {
        $not = ($vize * 0.4) + ($final * 0.6);

        if ($vize > 100 || $final > 100) {
            echo "Notlar 100'den büyük olamaz";
        } else if ($not >= 80) {
            echo "Geçme Notunuz: AA - $not";
        } else if ($not >= 60 && $not < 80) {
            echo "Geçme Notunuz: BB - $not";
        } else {
            echo "Kaldınız.";
        }
    }

    /* 
    1- Klavyeden Girilen Sayıya Kadar her satırda 1 arttırarak - oluşturan bir fonksiyon yazınız.
    2- Rasgele 10 öğrencinin geçme notlarını hesaplayıp $notlar dizisinin içerisine yazdırınız.
    3- Klavyeden girilen sayıya kadar olan tek sayıların ve çift sayıların karelerini iki ayrı diziye kaydediniz.
        Dizileri ayrı ayrı ekrana yazdırınız. 
        Son olarak 2 diziyi birleştiriniz.
    4- Form üzerinden gelen dersler dizisinin value değerlerini bir dizi içerisine kaydediniz. (Multiple Selection)
    
    */




    ?>



</body>

</html>