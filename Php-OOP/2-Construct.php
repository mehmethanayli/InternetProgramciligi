<?php


class Account
{
    private $id = 1;
    private $name = "Ahmet";
    private $balance = 1000;

    function __construct($id, $name, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }


    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        return $this->name=$name;
    }


    function getId()
    {
        return $this->id;
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

//Nesne Üretimi:
$account1 = new Account(1, "Kerim", 3000);

//Özelliklere Erişim:
echo "Account1 Nesnesinin: " . $account1->getName() . "<br>";

echo "Account1 Nesnesinin: " . $account1->getBalance() . "<br>";

echo "Account1 Nesnesinin: " . $account1->getId() . "<br>";

$account1->setBalance(1000);

echo "Account1 Nesnesinin Yeni Bakiyesi: " . $account1->getBalance() . "<br>";

$account1->setName("Asiye");

echo "Account1 Nesnesinin Yeni Adı: " . $account1->getName() . "<br>";

$account1->showInfo();
