titlefirstname=document.getElementById("input-titlefirst");
firstname=document.getElementById("input-firstname");

titlelasttname=document.getElementById("input-titlelast");
lastname=document.getElementById("input-lastname");

mailtitle=document.getElementById("input-titlemail");
mail=document.getElementById("input-mail");

firstempty=document.getElementById("emptyfirst");
firstvalid=document.getElementById("emptyvalid");

lastempty=document.getElementById("emptylast");

mailempty=document.getElementById("emptymail");
mailvalid=document.getElementById("");

mobilenumber=document.getElementById("input-number");
titlenumber=document.getElementById("title-number");
emptynumber=document.getElementById("emptynumber");

function formSubmition(event){
    event.preventDefault();
    validFirstname();
    validLastname();
    validEmail();
    validNumber();
}

function validFirstname(){
    if(firstname.value.length==0){
        firstempty.style.display="flex";
        firstname.style.border="2px solid red";
        titlefirstname.style.color="red";
    }
    else if(firstname.value.length>2 && firstname.value.length<100){
        firstname.style.border="2px solid green";
        titlefirstname.style.color="green";
        firstempty.style.display="none";

    }else{
        firstname.style.border="2px solid red";
        titlefirstname.style.color="red";
        firstvalid.style.display="flex";
    }
}
function validLastname(){
    if(lastname.value.length==0){
        lastempty.style.display="flex";
        lastname.style.border="2px solid red";
        titlelasttname.style.color="red";
    }
    if(lastname.value.length>2 && lastname.value.length<100){
        titlelasttname.style.color="green";
        lastname.style.border="2px solid green";
        lastempty.style.display="none";

    }else{
        lastname.style.border="2px solid red";
        titlelasttname.style.color="red";
    }
}

function validEmail(){
    special=/[@.]/g;
    lowercase=/[a-z]/g;
    let count=0;
    if(mail.value.match(special)){
        count++;
    }
    if(mail.value.match(lowercase)){
        count++;
    }

    if(mail.value.length==0){
        mailempty.style.display="flex";
    }
    console.log(count);
    if(count==2){
        mail.style.border="2px solid green";
        mailtitle.style.color="green";
    }
    else{
        mail.style.border="2px solid red";
        mailtitle.style.color="red";
    }
}
function validNumber(){
    if(mobilenumber.value.length==0){
        titlenumber.style.color="red";
        mobilenumber.style.border="2px solid red";
        emptynumber.style.display="flex";
    } else if(mobilenumber.value.length==10){
        titlenumber.style.color="green";
        mobilenumber.style.border="2px solid green";
        emptynumber.style.display="none";
    }
}