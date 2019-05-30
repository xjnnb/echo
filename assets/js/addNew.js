$(document).ready(function () {
    //响应文件添加成功事件
    var feedback = $("#feedback");
    $("#inputfile").change(function(){
        if (feedback.children('img').length>0) {
            alert("只能选择一张图片");
            return false;
        }
        //创建FormData对象
        var data = new FormData();
        //为FormData对象添加数据
        $.each($('#inputfile')[0].files, function(i, file) {
            data.append('upload_file'+i, file);
        });
        $(".loading").show();    //显示加载图片
        //发送数据
        $.ajax({
            url:'upload.php', /*去过那个php文件*/
            type:'POST',  /*提交方式*/
            data:data,
            cache: false,
            contentType: false,        /*不可缺*/
            processData: false,         /*不可缺*/
            success:function(data){
                data = $(data).html();        /*转格式*/

                //第一个feedback数据直接append，其他的用before第1个（ .eq(0).before() ）放至最前面。
                //data.replace(/&lt;/g,'<').replace(/&gt;/g,'>') 转换html标签，否则图片无法显示。
                if($("#feedback").children('img').length == 0)
                {
                    $("#feedback").append(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                }
                else{
                    $("#feedback").children('img').eq(0).before(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                }
            },
            error:function(){
                alert('上传出错');
            }
        });
    });
    $(".close").on("click",function(){
        $("#feedback").empty();
    });

    $("#displayNotif").click(function () {
        var fileurl=$("#uploadphoto").attr("src");;
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
        console.log(fileurl);
        console.log(password);
        if (fileurl==="./uploadImages/error.jpg"){
            alert("请重新上传照片！");
        }
        else if(typeof(fileurl) == "undefined"){
            alert("请选择并上传照片！");
        }else {
            $.post("../common/addNew.php", {
                "id": id,
                "user_name": user_name,
                "real_name": real_name,
                "mobilb": mobilb,
                "business": business,
                "card_no": card_no,
                "address": address,
                "zipcode": zipcode,
                "enter_year": enter_year,
                "notify_state": notify_state,
                "password": password,
                "fileurl":fileurl
            }, function (data) {
                var json = JSON.parse(data);
                console.log("DEBUG");
                console.log(json[0].result);
                if (json[0].result === '0') {
                    alert("添加成功，即将跳转！");
                    setTimeout(function(){ window.location.href="mainPage.php"; }, 200);
                } else {
                    alert("添加失败，该学号已经被添加！");
                }
            })
        }
    })
})