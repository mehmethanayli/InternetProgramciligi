<?php


class Account{
    public $id=1;
    public $name= "Ahmet";
    public $balance= 1000;

    /* Access Modifier
        Public:Genel erişim. 
        Protected:Bu class dışından erişim sağlanamaz. Eğer inherit edildiyse alabilir.
        Private: Bu class içinde erişilebilir.
    
    */

    
}

    //Nesne Üretimi:
    $account= new Account;
    
    //Özelliklere Erişim:
    echo $account->id . "<br>";
    echo $account->name . "<br>";
    echo $account->balance. "<br>";


