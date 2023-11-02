$(document).ready(function(){
    $btn = $("#btn-hero");

    $($btn).click(function(e){
        e.preventDefault();
        $name = $("#name-hero-input");
        $tel = $("#tel-hero-input");


        if(($name.val() == "") || ($tel.val() == "") ){
            $name.val("Заполните данные");
            $tel.val("Заполните данные");
        }
        else{
            console.log($name.val())
            console.log($tel.val())
            sendAjaxForm("./mailer/mailTovar.php",$name.val(), $tel.val());
            $btn.text("Отправлено");
        }
    })
})
function sendAjaxForm(url,name,tel ){
    $.post(url, {"name": name,"tel": tel}).done(
        function(data){
            // alert(data);
        }
    );
}