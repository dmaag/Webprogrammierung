function getCookie(login) {
    var name = login + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) 
        	return c.substring(name.length, c.length);
    }
    return ;
}

function checkCookie() {
    var user = getCookie("login");
    if (user != "") {
        
        p.appendChild(document.createTextNode("Your shopping cart is empty"));
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}