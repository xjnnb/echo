
$(document).ready(function(){
        //console.log("debug");
        $.post("../common/main.php",{ },function (data) {
            var html="";
            //console.log(data);
            //console.log((data.length));
            var json = JSON.parse(data);
            //console.log(json.length);
            //console.log(json);
            for(var i = 0 ; i<json.length;i++){
                html+='<tr>';

                html+="<td>"+json[i].real_name+"</td>"
                    +"<td>"+json[i].card_no+"</td>"
                    +"<td>"+json[i].enter_year+"</td>"
                    +"<td>"+json[i].class_id+"</td>"
                    +"<td>"+json[i].mobile+"</td>";
                html+='<td>\n' +
                    '                                                        <div class="form-button-action">\n' +
                    '                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-primary editBtn" data-original-title="Edit Task" id="editBtn">\n' +
                    '                                                            <i class="la la-edit"></i>\n' +
                    '                                                        </button>\n' +
                    '                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-simple-danger deleteBtn" data-original-title="Remove" id="deleteBtn">\n' +
                    '                                                            <i class="la la-times"></i>\n' +
                    '                                                        </button>\n' +
                    '                                                        </div>\n' +
                    '                                                    </td>';
                html+='</tr>';
            }

            $("#selectInfoTable").html(html);
        });


        // $("#editBtn").click(function () {
        //     window.location.href='edit.html';
        // });
    });