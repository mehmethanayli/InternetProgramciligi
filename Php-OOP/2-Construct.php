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
}

//Nesne Üretimi:
$account1 = new Account(1,"Kerim",3000);

//Özelliklere Erişim:
echo $account1->getName() . "<br>";
