<?php

class Account{

    private $id;
    private $name;
    private $balance;

    public function __construct($id,$name,$balance)
    {
        $this->id=$id;
        $this->name=$name;
        $this->balance=$balance;
    }

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        return $this->name=$name;
    }

    function getBalance()
    {
        return $this->balance;
    }

    function setBalance($newBalance)
    {
        return $this->balance = $newBalance;
    }

    public function showInfo()
    {
        echo "<br> Nesnenin Bilgileri<br>";
        echo "İd: "     . $this->id         . "<br>";
        echo "Adı: "    . $this->name       . "<br>";
        echo "Bakiyesi:". $this->balance    . "<br>";

    }

}



$account1=new Account(1,"Mehmet",3000);
echo "Account1 Id: " . $account1->getId();


echo "<hr>";

class SpecialAccount extends Account{


    private $interest;

    public function __construct($id,$name,$balance,$interest)
    {

        //Parent Class'ın constructor metodunun kullanılacağı belirtildi.
        parent::__construct($id,$name,$balance);
        $this->interest=$interest;
        
    }

    public function getInterest()
    {
        return $this->interest;
    }

    public function setInterest($newInterest)
    {
        return $this->interest=$newInterest;
    }


    public function showInfo()
    {
        parent::showInfo();
        echo "Vadeli Bakiyesi:". $this->interest    . "<br>";

        
    }

}


$ozelHesap=new SpecialAccount(2,"Kerim",5000,3000);

echo $ozelHesap->getId();

$ozelHesap->setInterest(8000);

echo "<br> Özel Hesabın Yeni Bakiyesi: " .$ozelHesap->getInterest();

$ozelHesap->showInfo();



/* 

Öğrenci isimli bir class tanımlayınız ve içerisine genel istediğiniz
özellikleri ve metotları yazınız.

Öğrenci sınıfını inherit eden
[OnlisansOgrenci , LisansOgrenci, LisansUstuOgrenci] sınıflarını oluşturunuz.

Her sınıf içinde not hesaplama fonksiyonu yazınız.
OnlisansOgrenci Notu Hesaplanırken: Vize %30 - Final %70 
LisansOgrenci Notu Hesaplanırken: Vize %40 - Final %60 
LisansUstuOgrenci Notu Hesaplanırken: Vize %20 - Proje %30- Final %50

olacak şekilde bir algoritma kurunuz.

Her sınıftan en az bir nesne oluşturup o nesnenin 
tüm özelliklerini ekrana yazdırınız.


*/




?>