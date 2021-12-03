function validate() {
    var uname = document.getElementById('uname').value;
    var pass = document.getElementById('pass').value;
    if (uname == "adima" && pass == "1513") {
        alert('login successfully');

    } else {
        alert('invalid username or password');
    }
    return false;
}