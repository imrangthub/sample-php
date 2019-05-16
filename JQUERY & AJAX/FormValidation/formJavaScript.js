
$(function(){
    $("#nameMsg").hide();
    $("#emailMsg").hide();
    $("#passwordMsg").hide();
    $("#confPasswordMsg").hide();

    var errorUserName = false;
    var errorUserEmail = false;
    var errorUserPassword = false;
    var errorUserConfPassword = false;

    function checkUserName(){
        var userNameLength = $("#userName").val().length;
        if(userNameLength=null || userNameLength < 5 || userNameLength > 20 ){
            $("#nameMsg").html("User name should be 5-20 character.")
            $("#nameMsg").show();
            errorUserName = true;
        }else{
            $("#nameMsg").hide();
            errorUserName = false;
        }
    }
    function checkUserPassword(){
        var userPasswordLength = $("#userPassword").val().length;
        if(userPasswordLength=null || userPasswordLength < 6 ){
            $("#passwordMsg").html("User Password should be minimum 6 character.")
            $("#passwordMsg").show();
            errorUserPassword = true;
        }else{
            $("#passwordMsg").hide();
            errorUserPassword = false;
        }
    }
    function checkConfUserPassword(){
        var userPassword = $("#userPassword").val();
        var userConfPassword = $("#userConfPassword").val();
        if(userPassword != userConfPassword){
            $("#confPasswordMsg").html("User Password Does not match..")
            $("#confPasswordMsg").show();
            errorUserConfPassword = true;
        }else{
            $("#confPasswordMsg").hide();
            errorUserConfPassword = false;
        }
    }
    function checkUserEmail(){
        var pattern = new RegExp(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i);
        if(!pattern.test($("#userEmail").val())){
            $("#emailMsg").html("Invalid email address !!")
            $("#emailMsg").show();
            errorUserEmail = true;
        }else{
            $("#emailMsg").hide();
            errorUserEmail = false;
        }
    }




    $("#userName").focusout(function(){
        checkUserName()
    });
    $("#userPassword").focusout(function(){
        checkUserPassword()
    });
    $("#userConfPassword").keyup(function(){
        checkConfUserPassword()
    });
    $("#userEmail").focusout(function(){
        checkUserEmail()
    });


    $("#myForm").submit(function(){
     if(errorUserName == true || errorUserPassword == true || errorUserConfPassword== true || errorUserEmail== true){
         return false;
     }else{
         return true;
     }
    });


});


