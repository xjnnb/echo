$("#editBtn").click(function(e) {
    console.log(1);
    var creditNum = $(this).parent().parent().siblings().eq(1).text();
    console.log(creditNum);
    $.ajax({
        type: "post",
        url: "../common/editGet.php",
        data: {
            creditNum: creditNum
        },
        success: function(msg) {
            console.log(msg);
            window.location.href='../common/edit.html';
        },
    });
});