
// fetch email from user session

var email = localStorage.getItem("email");

// append to the url
var url = 'http://localhost/botAPI/REST/API/index.php?interface=formlist&email='+email;



