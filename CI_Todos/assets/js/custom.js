$(document).ready(function(){
    $(".js-switch").each(function(){
        new Switchery(this)
    })
})

//body altında js-switch classına sahip item'ın durumunda bir değişiklik varsa
$("body").on("change",".js-switch",function(){

    var $complated=$(this).prop("checked")

    //Verinin gelip gelmediği kontrol edildi.
    //alert($complated);
    
    var $url= $(this).data("url");

    //Controller içindeki metot ve id'nin  gelip gelmediği kontrol edildi.
    //alert($url);


    //Post Metodunun Yapısı
    //1:Url
    //2:Veri
    //3:Geri Dönüşünde Yapılacak İşlem
    $.post($url,{complated:$complated}, function(){

        //alert(response);

    })


})
