function validation()
{
    var fname = document.MyForm.fname.value;
    if (!validationOfName(fname, "first name")) {
        return false;
    }
    var lname = document.MyForm.lname.value;
    if (!validationOfName(lname, "last name")) {
        return false;
    }
    if (!validationForEmail()) {
        return false;
    }
    return true;
}
function validationOfName(NameId, NameDescription)
{
    var atPosition = NameId.indexOf('@');
    var dotPosition = NameId.indexOf('.');
 
    if(typeof NameId == "undefined" || NameId == " "|| NameId == "" )
    {
        alert(`Please type in your ${NameDescription} in the empty field`);
        return false;
    }
    else if (NameId.indexOf(' ') !== -1)
    {
        alert("Your input cant contain space between characters");
        return false;
    }
    return true;
}
function validationForEmail()
{
    var EmailID= document.MyForm.Email.value;
    if(EmailID == " ")
    {
        alert("Please enter your Email, to continue");
    }
    PositionForAt = EmailID.indexOf("@");
    PositionForDot = EmailID.lastIndexOf(".");
 
    if(PositionForAt<1 || PositionForDot - PositionForAt <2)
    {
        alert(" Please try again, check if you entered your email the correct way!")
        return false;
    }
    return true;
}