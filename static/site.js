

//window.alert("This webpage isn't finished")



function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome back " + user);
    } else {
       user = prompt("Please tell us your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}


// Form



      // Form validation code will come here.
      function validateForm() {
    var x = document.forms["form"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
   
// Form validation code will come here.
      function validateForm() {
    var x = document.forms["form"]["drop"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}

// Form validation code will come here.
      function validateForm() {
    var x = document.forms["form"]["email"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}  

// Form validation code will come here.
      function validateForm() {
    var x = document.forms["form"]["message"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}

// Form validation code will come here.
      function validateForm() {
    var x = document.forms["form"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
