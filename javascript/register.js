function namefunction(name1)
{
    if (name1.length==0) {
        test="Please Enter Your name";
        
    }
    else
    {test="";
}   document.getElementById("demo").innerHTML=test;
    var x = document.getElementById("name");
    x.value = x.value.toUpperCase();
    
}

function mobilefunction(name)
{
    if (name.length==0) {
        test="Please Enter Your Mobile Number";
        
    }
    else if(name.length!=10)
    {test="Please Enter a 10 digit valid number";
    var x = document.getElementById("mobile");
    x.value = "";
}
    else
    {test=""}
    document.getElementById("demo1").innerHTML=test;
}

function enrollmentfunction(name)
{
    if (name.length==0) {
        test="Please Enter Your Enrollment Number";
    }
    else
    {test="";
}       
    document.getElementById("demo2").innerHTML=test;
    var x = document.getElementById("vid");
    x.value = x.value.toUpperCase();
}

function passwordfunction(name)
{
    if (name.length<8) {
        test="Password Should be of minimum 8 Characters";
        var x = document.getElementById("password");
        x.value = "";
    }
    else
    {test="";
}
    document.getElementById("demo3").innerHTML=test;
}

function addressfunction(name)
{
    if (name.length==0) {
        test="Please Enter Your Address";
        
    }
    else
    {test="";
}
    document.getElementById("demo4").innerHTML=test;
}