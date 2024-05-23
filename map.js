function validateForm() {

let x= document.forms ["myForm"] ["name","email","message"].value;
if (x=="") {alert ("Please fill out the forms");
    return false;
}
}

