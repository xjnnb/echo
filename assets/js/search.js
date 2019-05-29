
$(document).ready(function(){

    $("#searchBt").click(function(){
        var flag=1;
        var id=$("#searchText").val();
        var seltype=$("#seltype").val();
        $.post("../common/search.php",{"searchText":id,"seltype":seltype,"flag":flag},function (data) {
            var html="";
            //console.log(data);
            //console.log((data.length));
            var json = JSON.parse(data);
            //console.log(json.length);
            //console.log(json);
            for(var i = 0 ; i<json.length;i++){
                html+='<tr>';
                html+="              <td>\n" +
                    "                                                        <div class=\"form-check\">\n" +
                    "                                                            <label class=\"form-check-label\">\n" +
                    "                                                                <input class=\"form-check-input task-select\" type=\"checkbox\">\n" +
                    "                                                                <span class=\"form-check-sign\"></span>\n" +
                    "                                                            </label>\n" +
                    "                                                        </div>\n" +
                    "                                                    </td>";
                html+="<td>"+json[i].name+"</td>"
                    +"<td>"+json[i].card_no+"</td>"
                    +"<td>"+json[i].year+"</td>"
                    +"<td>"+json[i].class+"</td>"
                    +"<td>"+json[i].mobile+"</td>";
                html+='</tr>';
            }
            $("#selectInfoTable").html(html);
        });
    });
});