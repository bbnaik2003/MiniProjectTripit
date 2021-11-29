function validate() {
    var pin = document.getElementById("pin").value;
    var uname = document.getElementById("uname").value;
    var pass = document.getElementById("pass").value;
    if (pin == "1513" && uname == "adima" && password == "0310") {
        alert("Login successfully");
        window.location = "success.html";
        return false;

    } else {
        alert("NOT SUCCESSFUL");
        return false;
    }
}