$(document).ready(function () {
    $("#displayNotif").click(function () {
        var id=$("#id").val();
        var user_name=$("#user_name").val();
        var real_name=$("#real_name").val();
        var mobilb=$("#mobilb").val();
        var business=$("#business").val();
        var card_no=$("#card_no").val();
        var address=$("#address").val();
        var password=$("#password").val();
        var zipcode=$("#zipcode").val();
        var enter_year=$("#enter_year").val();
        var notify_state=$("#notify_state").val();
        console.log(password);
        $.post("../common/addNew.php",{"id":id,"user_name":user_name,"real_name":real_name, "mobilb":mobilb,"business":business,
            "card_no":card_no,"address":address,"zipcode":zipcode,"enter_year":enter_year,"notify_state":notify_state,"password":password},function (data) {
            var json=JSON.parse(data);
            console.log(json[0].result);
            var html="";
            if(json[0].result== '0'){
                alert("添加成功，2秒后跳转！");
                setTimeout(function(){ window.location.href="../../index.html"; }, 2000);
            }else{
                alert("添加失败，该学号已经被添加！");
            }
        })
    })
})