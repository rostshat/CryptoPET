/*POP-UP*/
$(document).ready(function(){
    PopUpRegHide();
});
function PopUpRegShow(){
    $("#popup_register").show();
}

function sentPupUpRegisterForm(){
    $("#popup_register").hide();

}

/*PASSWORD-CHECK*/
/*
    function checkPassword (var password, var verifyPassword)
    {
        var firstPass = $(#{password});
        var verifyPass = $(#{verifyPassword});

        (firstPass == verifyPass) ?
    }
*/
function checkPassword (var passwordID, var verifyPasswordID){
  var userPass = getElementBiId(passwordID);
  var verifyPass = getElementBiId(verifyPasswordID);
  //(userPass == verifyPass) ?  sentPupUpRegisterForm() :
}
