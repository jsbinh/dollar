function deleteContacts(id)
{
    var r=confirm(" Bạn có chắc chắn xóa không ? ");
    if (r==true)
    {
        var data = "id="+ id;
        $.ajax({
            type: "Contact", 
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url:baseurl+"admin/contacts/delete/"+id, // URL to request
            success: function(response) {
                //alert('Thanh Cong');
                window.location = "contacts";
            },
            error:function () {
             
                window.location = "contacts";
            }
        });
        return false;
    }
}



function deleteallContacts()
{ 
    var count=0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if(count==0)
    {
        alert('Bạn Chưa Chọn tin Để Xóa');
        return;
    }
    var r=confirm(" Bạn có chắc chắn xóa không ? ");
    if (r==true)
    {
        $.each($("input[name='cbID']:checked"), function() {
      
            // deletecontact($(this).attr('value'));
            id=$(this).attr('value');
      
            var data = "id="+ id;
            $.ajax({
                type: "Contact", 
                async: false,
                data: data,  // Form variables
                dataType: "json", // Expected response type
                url:baseurl+ "admin/contacts/delete/"+id, // URL to request
                success: function(response) {
              
                },
                error:function () {
             
                }
            });
       
        });
        
        window.location = "contacts";
    }
}

function deleteallContactsAjax()
{ 
    var count=0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if(count==0)
    {
        alert('Bạn Chưa Chọn tin  Để Xóa');
        return;
    }
    $.each($("input[name='cbID']:checked"), function() {
        id=$(this).attr('value');
        var data = "id="+ id;
        //alert(id);
        // alert(baseurl+ "admin/mails/admin_updateContact/"+id);
        $.ajax({
            type: "Contact", 
            async: false,
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url:baseurl+ "admin/mails/updateContact/"+id, // URL to request
            success: function(response) {
                    
            },
            error:function () {
            }
        });
    });
    getlength();
     document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Hộp thư đã được chuyển tới thùng rác </div>';
//window.location = "contacts";
}



function deleteoneContactsAjax(id)
{ 
        var data = "id="+ id;
        $.ajax({
            type: "Contact", 
            async: false,
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url:baseurl+ "admin/mails/updateContact/"+id, // URL to request
            success: function(response) {
                    
            },
            error:function () {
            }
        });
    
    getlength();
     document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Hộp thư đã được chuyển tới thùng rác </div>';

}


function deleteallContactsAjaxAll()
{ 
    var count=0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if(count==0)
    {
        alert('Bạn Chưa Chọn tin  Để Xóa');
        return;
    }
     var r=confirm(" Bạn có chắc chắn xóa không ? ");
      if (r==false)
          return;
    if (r==true)
    {
    
    $.each($("input[name='cbID']:checked"), function() {
        id=$(this).attr('value');
        var data = "id="+ id;
        //alert(id);
        // alert(baseurl+ "admin/mails/admin_updateContact/"+id);
        $.ajax({
            type: "Contact", 
            async: false,
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url:baseurl+ "admin/mails/deleteContact/"+id, // URL to request
            success: function(response) {
            },
            error:function () {
            }
        });
    });
    }
    mailGarabage();
     document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Hộp thư đã được Xóa Vĩnh Viễn </div>';
}



function deleteallMailsAjax()
{ 
    var count=0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if(count==0)
    {
        alert('Bạn Chưa Chọn tin  Để Xóa');
        return;
    }
     var r=confirm(" Bạn có chắc chắn xóa không ? ");
      if (r==false)
          return;
    if (r==true)
    {
    
    $.each($("input[name='cbID']:checked"), function() {
        id=$(this).attr('value');
        var data = "id="+ id;
       
        $.ajax({
            type: "Mails", 
            async: false,
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url:baseurl+ "admin/mails/deleteEmail/"+id, // URL to request
            success: function(response) {
            },
            error:function () {
            }
        });
    });
    }
     mailSendGetlength();
     document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Hộp thư đã được Xóa Vĩnh Viễn </div>';
}




function deleteoneMailsAjax(id)
{ 
  
     var r=confirm(" Bạn có chắc chắn xóa không ? ");
      if (r==false)
          return;
    if (r==true)
    {
        var data = "id="+ id;
       
        $.ajax({
            type: "Mails", 
            async: false,
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url:baseurl+ "admin/mails/deleteEmail/"+id, // URL to request
            success: function(response) {
            },
            error:function () {
            }
        });
   
    }
     mailSendGetlength();
     document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Hộp thư đã được Xóa Vĩnh Viễn </div>';
}



function deleteCandidates(id)
{
    var r=confirm(" Bạn có chắc chắn xóa không ? ");
    if (r==true)
    {
        var data = "id="+ id;
        $.ajax({
            type: "Candidates", 
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url: baseurl+ "admin/candidates/delete/"+id, // URL to request
            success: function(response) {
                window.location = "candidates";
            },
            error:function () {
                window.location = "candidates";
            }
        });
        return false;
    }
}




function newMail(mail)
{
   
   
    if(mail==' ' || mail==null )
        mail='';
    
    document.getElementById("buttonDelete").innerHTML='';
     document.getElementById("buttonNew").innerHTML='';
     document.getElementById('pageNumberPre').innerHTML='';
document.getElementById('pageNumberNext').innerHTML = '';
document.getElementById('pageNumberContent').innerHTML='';
    document.getElementById("messageGarbage").innerHTML='';
    var nameMail='1';
    var html='</br><form class="form-horizontal" method="post" action=""> <fieldset>';
    html+='<div class="control-group"> <label class="control-label" for="typeahead">Tới (*)</label>';
    html+='<div class="controls"><input type="text" class="span6 typeahead"  id="nameMail" value="'+mail+'"> ';
    html+='</div></div><div class="control-group"><label class="control-label" for="typeahead">Chủ Đề</label>';
    html+='<div class="controls"><input type="text" class="span6 typeahead"  id="nameSubject"></div></div>';
    html+='<div class="control-group"><label class="control-label" for="textarea2" >Nội dung chi tiết</label>';
    html+=' <div class="controls"><textarea class="cleditor" rows="3" id="nameContent" style="width: 441px; height: 197px;"></textarea> ';
    html+=' </div></div><div class="control-group"><label class="control-label" for="date01">&nbsp;</label>';
    html+='<div class="controls"><p class="help-block note">(*): Thông tin bắt buộc</p>';
    html+='</div></div><div class="form-actions">';
   // html+='  <button type="submit" class="btn btn-primary" onclick="sendMail('+nameMail+')">Gửi Mail</button>';
    html+=' <input  class="btn btn-primary"  type="button"  name="bttim" id="bttim" value="Gửi Mail" onclick="sendMail('+nameMail+')" />';
    //html+='<a href="#" class="btn btn-primary" onclick="sendMail()">Gửi Mail</a>';
    html+=' &nbsp;&nbsp;<input type="reset" value="Hủy" class="btn">';
    html+='</fieldset></form>';
    document.getElementById("contenmail").innerHTML=html;
    
    
   
}

function newMail2(id)
{
     var data = "id="+ id;
    var data = "id="+ id;
    var html='';
    //document.getElementById("headermessage").innerHTML =''; 
    // alert(baseurl+ "admin/mails/viewDetail/"+id);
    $.ajax({
        type: "Contact", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/viewDetail/"+id, // URL to request
          
        success: function(response) {
                document.getElementById("buttonNew").innerHTML='';
          document.getElementById("buttonDelete").innerHTML='';
          document.getElementById('pageNumberPre').innerHTML='';
document.getElementById('pageNumberNext').innerHTML = '';
document.getElementById('pageNumberContent').innerHTML='';
    document.getElementById("messageGarbage").innerHTML='';
    var nameMail='1';
    var html='</br><form class="form-horizontal" method="post" action=""> <fieldset>';
    html+='<div class="control-group"> <label class="control-label" for="typeahead">Tới (*)</label>';
    html+='<div class="controls"><input type="text" class="span6 typeahead"  id="nameMail" value="'+response.data['Contact'].email+'"> ';
    html+='</div></div><div class="control-group"><label class="control-label" for="typeahead">Chủ Đề</label>';
    html+='<div class="controls"><input type="text" class="span6 typeahead"  id="nameSubject"></div></div>';
    html+='<div class="control-group"><label class="control-label" for="textarea2" >Nội dung chi tiết</label>';
    html+=' <div class="controls"><textarea class="cleditor" rows="3" id="nameContent" style="width: 441px; height: 197px;"></textarea> ';
    html+=' </div></div><div class="control-group"><label class="control-label" for="date01">&nbsp;</label>';
    html+='<div class="controls"><p class="help-block note">(*): Thông tin bắt buộc</p>';
    html+='</div></div><div class="form-actions">';
   // html+='  <button type="submit" class="btn btn-primary" onclick="sendMail('+nameMail+')">Gửi Mail</button>';
    html+=' <input  class="btn btn-primary"  type="button"  name="bttim" id="bttim" value="Gửi Mail" onclick="sendMail('+nameMail+')" />';
    //html+='<a href="#" class="btn btn-primary" onclick="sendMail()">Gửi Mail</a>';
    html+=' &nbsp;&nbsp;<input type="reset" value="Hủy" class="btn">';
    html+='</fieldset></form>';
    document.getElementById("contenmail").innerHTML=html;
        },
        error:function () {
            alert('eroor');
        }
    });
}

function sendMail(nameMail)
{
   
    //alert($("#nameMail").val());
    var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
    
   var nameMail= document.getElementById("nameMail").value;
   var email=$.trim(nameMail);
    var nameSubject= document.getElementById("nameSubject").value;
     var nameContent= document.getElementById("nameContent").value;
    var urlPath= baseurl+ "admin/mails/sendmail/" + email +"/" +nameSubject +"/"+nameContent ;
    if(filter.test(email)){
        }
        else{
           alert('không đúng Định dạng Email');
           return;
        }
            if(nameContent=='')
            {
                var r=confirm(" Bạn có muốn gửi thư mà không có tiêu đề không ?");
                if (r==false)
                {
                return;
                }
            }
    var data = "id="+ nameMail;
        $.ajax({
            type: "Candidates", 
            data: data,  // Form variables
            dataType: "json", // Expected response type
            url: urlPath, // URL to request
            success: function(response) {
               getlength();
     document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Thư Của Bạn Đã được gửi đi Thành Công</div>';
        return false;
            },
            error:function () {
                   getlength();
                  document.getElementById("messageGarbage").innerHTML ='<div class="vh"> Việc gửi thư thất bại</div>';
                    return false;
            }
        });
        
    
}

function countString(buff,count)
{
    var myString = buff;
    var countbuff=0;
    var buff2=buff;
    var mySplitResult = myString.split(" ");
    var result='';
    for(i = 0; i < mySplitResult.length; i++){
        //alert(mySplitResult[i]); 
        result=mySplitResult + '';
    }
    var n1=result.replace(/,/gi," ");
    var splitted = n1.split(" ", count);
    return splitted.join(" ");
                            
}
        
var checkmusic=true;


function NewGetLength(){
    
    document.getElementById("contenmail").innerHTML ='';
   
   document.getElementById('selectall').style.visibility = 'visible';
    var data = "id="+ 2;
    var data = "id="+ 2;
    var html='';
    var header='';
    var buttonNew='<a class="btn btn-info" href="#" onclick="NewGetLength();"> làm mới</a>';
    var buttonDelete='';
    buttonDelete+=' &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="#" onclick="deleteallContactsAjax();">';
    buttonDelete+=' Xóa';
    buttonDelete+='</a>';
    document.getElementById("buttonDelete").innerHTML=buttonDelete;
    
    
    document.getElementById("buttonNew").innerHTML=buttonNew;
    
    
    document.getElementById("messageGarbage").innerHTML='';
    header+='<div id="headermessage"> <div class="box-header well" data-original-title>'; 
    header+='<h2><div id="contenHeader"></div></h2><div id="message" align="right"></div></div>';
    header+='<div class="box-content"><div class="action">';
    header+='<a class="btn btn-danger" href="#" onclick="deleteallContactsAjax();"> Xóa';
    header+='</a> </br> </br>';
    header+='<div class="controls"> <input type="checkbox" id="selectall"/> </div>';
    header+='</div></div></div>';
    // document.getElementById("headermessage").innerHTML =header;
    //document.getElementById("headermessage").innerHTML =header;
    var countChecked=0;
    $.ajax({
        type: "Contact", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/getlength", // URL to request
        success: function(response) {
   document.getElementById('pageNumberPre').innerHTML = '<a class="btn btn-round" href="#" onclick="decreasePage();"> <</a>';
  document.getElementById('pageNumberNext').innerHTML = '<a class="btn btn-round " href="#" onclick="incerasePage();"> > </a>';
            var pre=maxElement*(pageNumber-1) +1;
            var next= maxElement*pageNumber;
            if(next>=response.data.length)
                {
                next=response.data.length;
                 document.getElementById('pageNumberNext').innerHTML = '<button type="button"  class="btn btn-round " disabled="disabled">></button>';
                }
                if(pre==1)
                    {
                        document.getElementById('pageNumberPre').innerHTML = '<button type="button"  class="btn btn-round " disabled="disabled"><</button>';
                    }
   document.getElementById('pageNumberContent').innerHTML = pre + ' - '+ next + ' trong tổng số ' +response.data.length ;
   
   
   if(response.data.length<=maxElement)
       {
           document.getElementById('pageNumberPre').innerHTML='';
           document.getElementById('pageNumberNext').innerHTML='';
       }
   
            html+='<table class="table2"><thead>';
            html+=' </thead>  <tbody>';
            var i = pre-1;
            var CountElement=0;
            for (; i < response.data.length; i++) 
            {               
                CountElement=CountElement+1;
                var str1 = response.data[i]['Contact'].send_date;
                var yr1  = str1.substring(0,4); 
                var mon1 = str1.substring(5,7); 
                var dt1  = str1.substring(8,10);
                var date=dt1+' / '+ mon1;
                var result="";
                // alert(response.data[i]['Contact'].content);
                if(response.data[i]['Contact'].content!=null)
                {
                    result = countString(response.data[i]['Contact'].content,15);
                    if(response.data[i]['Contact'].content.length > result.length )
                        result = result +' ...';
                }
                if(response.data[i]['Contact'].checked==0)
                {
                   html+='<tr><td class="center mailTitle" class="mailTitle"><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Contact'].id +'"</div></td>';
                    html+=' <td class="mailTitle"><b>'+response.data[i]['Contact'].name+' </b></td> ';
                    html+='<td class="mailTitle"> <b><a  href="#" onclick="viewDetail('+response.data[i]['Contact'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td class="mailTitle"><b>'+ date +'</b></td></tr>';
                    countChecked=countChecked+1;
                }
                
                else
                {
                     html+='<tr><td class="center "><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Contact'].id +'"</div></td>';
                    html+=' <td>'+response.data[i]['Contact'].name+' </td> ';
                    html+='<td> <a  href="#" onclick="viewDetail('+response.data[i]['Contact'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td>'+ date +'</td></tr>';
                }
//                if(response.data.length==10)
//                    {
//                          html+='</tbody> </table>'; 
//                        document.getElementById("contenmail").innerHTML =html; 
//                        return;;
//                    }
                    if(CountElement==maxElement)
                        {
                            break;
                        }
            }			
                html+='</tbody> </table>'; 
                
              document.getElementById("contenmail").innerHTML =html;  
              
                            
            			
        },
        error:function () {
        // alert('eroor');
                        
        }
    });
    getlengthMail();
    
    return false;
}

function incerasePage()
{
    pageNumber=pageNumber+1;
    getlength();
    $("#selectall").removeAttr("checked");
}
function decreasePage()
{
    pageNumber=pageNumber-1;
    getlength();
    $("#selectall").removeAttr("checked");
}


function getlengthMail(){
    
    var data = "id="+ 2;
    var data = "id="+ 2;
   
    $.ajax({
        type: "Contact", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/getlengthMailChecked", // URL to request
        success: function(response) {
        
              document.getElementById("message").innerHTML =  response.data.length+' message';
            if(response.data.length>0)
                document.getElementById("numberMail").innerHTML ='<a href="#" onclick="getlength();" >Hộp Thư Đến (' + response.data.length +')</a>';
            else
                document.getElementById("numberMail").innerHTML ='<a href="#">Hộp Thư Đến </a>';
            
             
            if(response.data.length==0)
                            {
                                document.getElementById("messageGarbage").innerHTML='<div class="vh">không có hộp thư nào</div>';
                                document.getElementById("buttonDelete").innerHTML='';
                            }
                            
                            
                            
        },
        error:function () {
        // alert('eroor');
        }
    });
    
   
    return false;
      
}

//window.setInterval(getlengthMail, 10000);

//AAAAAAAAAAAAAAAAAA
function getlength(){
    
   
   
    document.getElementById('selectall').style.visibility = 'visible';
    var data = "id="+ 2;
    var data = "id="+ 2;
    var html='';
    var header='';
    var buttonNew='<a class="btn btn-info" href="#" onclick="NewGetLength();"> làm mới</a>';
    var buttonDelete='';
    buttonDelete+=' &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="#" onclick="deleteallContactsAjax();">';
    buttonDelete+=' Xóa';
    buttonDelete+='</a>';
    document.getElementById("buttonDelete").innerHTML=buttonDelete;
    
    
    document.getElementById("buttonNew").innerHTML=buttonNew;
    
    
    document.getElementById("messageGarbage").innerHTML='';
    header+='<div id="headermessage"> <div class="box-header well" data-original-title>'; 
    header+='<h2><div id="contenHeader"></div></h2><div id="message" align="right"></div></div>';
    header+='<div class="box-content"><div class="action">';
    header+='<a class="btn btn-danger" href="#" onclick="deleteallContactsAjax();"> Xóa';
    header+='</a> </br> </br>';
    header+='<div class="controls"> <input type="checkbox" id="selectall"/> </div>';
    header+='</div></div></div>';
    // document.getElementById("headermessage").innerHTML =header;
    //document.getElementById("headermessage").innerHTML =header;
    var countChecked=0;
    $.ajax({
        type: "Contact", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/getlength", // URL to request
        success: function(response) {
   document.getElementById('pageNumberPre').innerHTML = '<a class="btn btn-round" href="#" onclick="decreasePage();"> <</a>';
  document.getElementById('pageNumberNext').innerHTML = '<a class="btn btn-round " href="#" onclick="incerasePage();"> > </a>';
            var pre=maxElement*(pageNumber-1) +1;
            var next= maxElement*pageNumber;
            if(next>=response.data.length)
                {
                next=response.data.length;
                 document.getElementById('pageNumberNext').innerHTML = '<button type="button"  class="btn btn-round " disabled="disabled">></button>';
                }
                if(pre==1)
                    {
                        document.getElementById('pageNumberPre').innerHTML = '<button type="button"  class="btn btn-round " disabled="disabled"><</button>';
                    }
   document.getElementById('pageNumberContent').innerHTML = pre + ' - '+ next + ' trong tổng số ' +response.data.length ;
   
   
   if(response.data.length<=maxElement)
       {
           document.getElementById('pageNumberPre').innerHTML='';
           document.getElementById('pageNumberNext').innerHTML='';
       }
   
            html+='<table class="table2"><thead>';
            html+=' </thead>  <tbody>';
            var i = pre-1;
            var CountElement=0;
            for (; i < response.data.length; i++) 
            {               
                CountElement=CountElement+1;
                var str1 = response.data[i]['Contact'].send_date;
                var yr1  = str1.substring(0,4); 
                var mon1 = str1.substring(5,7); 
                var dt1  = str1.substring(8,10);
                var date=dt1+' / '+ mon1;
                var result="";
                // alert(response.data[i]['Contact'].content);
                if(response.data[i]['Contact'].content!=null)
                {
                    result = countString(response.data[i]['Contact'].content,15);
                    if(response.data[i]['Contact'].content.length > result.length )
                        result = result +' ...';
                }
                if(response.data[i]['Contact'].checked==0)
                {
                   html+='<tr><td class="center mailTitle" class="mailTitle"><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Contact'].id +'"</div></td>';
                    html+=' <td class="mailTitle"><b>'+response.data[i]['Contact'].name+' </b></td> ';
                    html+='<td class="mailTitle"> <b><a  href="#" onclick="viewDetail('+response.data[i]['Contact'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td class="mailTitle"><b>'+ date +'</b></td></tr>';
                    countChecked=countChecked+1;
                }
                
                else
                {
                     html+='<tr><td class="center "><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Contact'].id +'"</div></td>';
                    html+=' <td>'+response.data[i]['Contact'].name+' </td> ';
                    html+='<td> <a  href="#" onclick="viewDetail('+response.data[i]['Contact'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td>'+ date +'</td></tr>';
                }
//                if(response.data.length==10)
//                    {
//                          html+='</tbody> </table>'; 
//                        document.getElementById("contenmail").innerHTML =html; 
//                        return;;
//                    }
                    if(CountElement==maxElement)
                        {
                            break;
                        }
            }			
                html+='</tbody> </table>'; 
                
              document.getElementById("contenmail").innerHTML =html;  
              
                            
            			
        },
        error:function () {
        // alert('eroor');
                        
        }
    });
    getlengthMail();
    
    return false;
      
}

//window.setInterval(getlength, 10000);



function mailSendGetlength(){
    
    document.getElementById('selectall').style.visibility = 'visible';
    var data = "id="+ 2;
    var data = "id="+ 2;
    var html='';
    var buttonDelete='';
    buttonDelete+=' &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" onclick="deleteallMailsAjax();">';
    buttonDelete+=' Xóa Vĩnh Viễn';
    buttonDelete+='</a>';
    document.getElementById("buttonDelete").innerHTML=buttonDelete;
    document.getElementById("buttonNew").innerHTML='';
    document.getElementById('pageNumberPre').innerHTML='';
document.getElementById('pageNumberNext').innerHTML = '';
document.getElementById('pageNumberContent').innerHTML='';
    document.getElementById("messageGarbage").innerHTML='';
    var countChecked=0;
    $.ajax({
        type: "Mails", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/getlengthEmail", // URL to request
        success: function(response) {
            html+='<table class="table"><thead>';
            html+=' </thead>  <tbody>';
            for (var i = 0; i < response.data.length; i++) 
            {                     
                var str1 = response.data[i]['Mails'].start_send;
                var yr1  = str1.substring(0,4); 
                var mon1 = str1.substring(5,7); 
                var dt1  = str1.substring(8,10);
                var date=dt1+' / '+ mon1;
                var result="";
                // alert(response.data[i]['Contact'].content);
                if(response.data[i]['Mails'].content!=null)
                {
                    result = countString(response.data[i]['Mails'].content,15);
                    if(response.data[i]['Mails'].content.length > result.length )
                    result = result +' ...';
                }
              
                    html+='<tr><td class="center"><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Mails'].id +'"</div></td>';
                    html+=' <td>'+response.data[i]['Mails'].email+' </td> ';
                    html+='<td> <a  href="#" onclick="viewDetailMail('+response.data[i]['Mails'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td>'+ date +'</td></tr>';
            }			
                html+='</tbody> </table>'; 
              document.getElementById("contenmail").innerHTML =html;  
              if(response.data.length==0)
             {
                                document.getElementById("messageGarbage").innerHTML='<div class="vh">không có hộp thư nào</div>';
                                document.getElementById("buttonDelete").innerHTML='';
             }
        },
        error:function () {
        // alert('eroor');
                        
        }
    });
    return false;
      
}


function mailGarabage()
{
    document.getElementById('selectall').style.visibility = 'visible';
    var data = "id="+ 2;
    var data = "id="+ 2;
    var buttonDelete='';
    buttonDelete+='&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-danger" href="#" onclick="deleteallContactsAjaxAll();">';
    buttonDelete+='  Xóa Vĩnh Viễn ';
    buttonDelete+='</a>';
    document.getElementById("buttonDelete").innerHTML=buttonDelete;
    document.getElementById("buttonNew").innerHTML='';
    document.getElementById('pageNumberPre').innerHTML='';
document.getElementById('pageNumberNext').innerHTML = '';
document.getElementById('pageNumberContent').innerHTML='';
    var html='';
    html+='<table class="table"><thead>';
    html+=' </thead>  <tbody>';
    $.ajax({
        type: "Contact", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/getlengthGarbage", // URL to request
        success: function(response) {
            
            for (var i = 0; i < response.data.length; i++) 
            {                  
                
                var str1 = response.data[i]['Contact'].send_date;
                var yr1  = str1.substring(0,4); 
                var mon1 = str1.substring(5,7); 
                var dt1  = str1.substring(8,10);
                var date=dt1+' / '+ mon1;
                var result="";
                // alert(response.data[i]['Contact'].content);
                if(response.data[i]['Contact'].content!=null)
                {
                        result = countString(response.data[i]['Contact'].content,15);
                    if(response.data[i]['Contact'].content.length > result.length )
                        result = result +' ...';
                }
                
                if(response.data[i]['Contact'].checked==0)
                {
                    html+='<tr><td class="center mailTitle"><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Contact'].id +'"</div></td>';
                    html+=' <td class="mailTitle"><b>'+response.data[i]['Contact'].name+' </b></td> ';
                    html+='<td class="mailTitle"> <b><a  href="#" onclick="viewDetail('+response.data[i]['Contact'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td class="mailTitle"><b>'+ date +'</b></td></tr>';
                    
                }
                
                else
                {
                    html+='<tr><td class="center"><div> <input type="checkbox"';
                    html+=' name="cbID"  class="case"  value="' +response.data[i]['Contact'].id +'"</div></td>';
                    html+=' <td>'+response.data[i]['Contact'].name+' </td> ';
                    html+='<td> <a  href="#" onclick="viewDetail('+response.data[i]['Contact'].id+')">'+  result +'</a>  </b>  </td> ';
                    html+='<td>'+ date +'</td></tr>';
                    
                }
            }		
            
            html+='</tbody> </table>'; 	
            document.getElementById("contenmail").innerHTML =html;  
            
            		if(response.data.length==0)
                            {
                                document.getElementById("messageGarbage").innerHTML='<div class="vh">không có hộp thư nào</div>';
                                document.getElementById("buttonDelete").innerHTML='';
                            }
        },
        error:function () {
        // alert('eroor');
                        
        }
    });
    return false;
}

function viewDetail(id)
{
    //document.getElementByID(selectall).style.display = 'inline';
    // var hiddenOne = $('#selectall');
    //hiddenOne.style.display = 'none';
    
    
   var buttonDelete='';
    buttonDelete+=' &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="#" onclick="deleteoneContactsAjax('+id+');">';
    buttonDelete+=' Xóa';
    buttonDelete+='</a>';
    document.getElementById("buttonDelete").innerHTML=buttonDelete;
    document.getElementById("buttonNew").innerHTML='';
    document.getElementById('pageNumberPre').innerHTML='';
document.getElementById('pageNumberNext').innerHTML = '';
document.getElementById('pageNumberContent').innerHTML='';
    document.getElementById('selectall').style.visibility = 'hidden';
    
    var data = "id="+ id;
    var data = "id="+ id;
    var html='';
    //document.getElementById("headermessage").innerHTML =''; 
    // alert(baseurl+ "admin/mails/viewDetail/"+id);
    $.ajax({
        type: "Contact", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/viewDetail/"+id, // URL to request
          
        success: function(response) {
            // html+='<div class="box-header well"><h2>Nội dung Liên hệ</h2></div>';
            html+='<div class="box-content">';
                  
            html+='<legend><b>Người gửi : </b>' + response.data['Contact'].name + '<br > <b>Email </b>:'+ response.data['Contact'].email +' <br>';
                
            html+='<b>Ngày gửi : </b>'+ response.data['Contact'].send_date + '<br > </legend>';
               
            html+=response.data['Contact'].content;
            var newMail=response.data['Contact'].id;
            //alert(response.data[i]['Contact'].content);
            html+='<p class="center"><a href="#" onclick="newMail2('+newMail+');" class="btn btn-large btn-primary">';
            // html+='<p class="center"><a href='+baseurl+'admin/mails class="btn btn-large btn-primary">';
            html+=' Trả lời </span> </a> </p><div class="clearfix"></div></div>';
            document.getElementById("contenmail").innerHTML =html;  
        },
        error:function () {
            alert('eroor');
        }
    });
        
    $.ajax({
        type: "Contact", 
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/updatechecked/"+id, // URL to request
        success: function(response) {
        },
        error:function () {
        }
    });
        
        
        getlengthMail();
        
        
    return false;
}




function viewDetailMail(id)
{
    
    
   var buttonDelete='';
    buttonDelete+=' &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" onclick="deleteoneMailsAjax('+id+');">';
    buttonDelete+=' Xóa Vĩnh Viễn';
    buttonDelete+='</a>';
    document.getElementById("buttonDelete").innerHTML=buttonDelete;
    document.getElementById("buttonNew").innerHTML='';
    document.getElementById('pageNumberPre').innerHTML='';
document.getElementById('pageNumberNext').innerHTML = '';
document.getElementById('pageNumberContent').innerHTML='';
    document.getElementById('selectall').style.visibility = 'hidden';
    
    var data = "id="+ id;
    var data = "id="+ id;
    var html='';
    //document.getElementById("headermessage").innerHTML =''; 
    // alert(baseurl+ "admin/mails/viewDetail/"+id);
    $.ajax({
        type: "Mails", 
        async: false,
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/viewDetailMail/"+id, // URL to request
          
        success: function(response) {
            // html+='<div class="box-header well"><h2>Nội dung Liên hệ</h2></div>';
            html+='<div class="box-content">';
                  
            html+='<legend><b>Tiêu Đề : </b>' + response.data['Mails'].title + '<br > <b> Email </b>:'+ response.data['Mails'].email +' <br>';
                
            html+='<b>Ngày gửi : </b>'+ response.data['Mails'].start_send + '<br > </legend>';
               
            html+=response.data['Mails'].content;
            var newMail=response.data['Mails'].id;
            //alert(response.data[i]['Contact'].content);
           
            document.getElementById("contenmail").innerHTML =html;  
        },
        error:function () {
            alert('eroor');
        }
    });
        
    $.ajax({
        type: "Contact", 
        data: data,  // Form variables
        dataType: "json", // Expected response type
        url: baseurl+ "admin/mails/updatechecked/"+id, // URL to request
        success: function(response) {
        },
        error:function () {
        }
    });
        
        
        
        
        
    return false;
}


$(document).ready(function () {
    
 
    
   
    
   
     
    $('#accordion a.item').click(function () {
                
        //slideup or hide all the Submenu
        $('#accordion li').children('ul').slideUp('fast');	
			
        //remove all the "Over" class, so that the arrow reset to default
        $('#accordion a.item').each(function () {
            if ($(this).attr('rel')!='') {
            //$(this).removeClass($(this).attr('rel') + 'Over');
                                       
            }
        });
			
        //show the selected submenu
        $(this).siblings('ul').slideDown('fast');
			
        //add "Over" class, so that the arrow pointing down
        $(this).addClass($(this).attr('rel') + 'Over');			
                        
        return false;

    });
		
                        
    getlength();
// document.getElementById("contenmail").
   
       
   
});

function deleteallCandidates()
{ 
    var count=0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    
    if(count==0)
    {
        alert('Bạn Chưa Chọn tin Để Xóa');
        return;
    }
            
    var r=confirm(" Bạn có chắc chắn xóa không ? ");
    if (r==true)
    {
        $.each($("input[name='cbID']:checked"), function() {
      
            // deletecontact($(this).attr('value'));
            id=$(this).attr('value');
      
            var data = "id="+ id;
            $.ajax({
                type: "Candidates", 
                async: false,
                data: data,  // Form variables
                dataType: "json", // Expected response type
                url: baseurl+ "admin/candidates/delete/"+id, // URL to request
                success: function(response) {
                },
                error:function () {
                }
            });
        });
        window.location = "candidates";
    }
}



$(function(){

    $("#selectall").click(function () {
        $('.case').attr('checked', this.checked);
                
    });

    $(".case").click(function(){
       
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
                         
        } else {
            $("#selectall").removeAttr("checked");
                         
        }

    });
});