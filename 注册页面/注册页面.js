function trip(obj, trip) {
    document.getElementById(obj).innerHTML = "<b>" + trip + "</b>";
}
function check_username(){
	// alert("1")
	var username = document.getElementById("userName").value;
	if (username.length < 1 || username.length > 10) {
	    trip("name_trip", "The account contains 0 to 10 characters ");
	    return false;
	} else {
	    trip("name_trip", "Allowed");
	}
	return true;
}
function check_password(){
	var password = document.getElementById("password").value;
	if (password.length < 6) {
	    trip("password_trip", "密码要大于6位!!");
	    return false;
	} else {
	    trip("password_trip", "Allowed");
	}
	//获取确认密码框的值 var
	var surePassword = document.getElementById("surePassword").value;
	if (password !== surePassword) {
	    trip("surePassword_trip", "两次密码不一致!!");
	    return false;
	} else {
	    trip("surePassword_trip", "Allowed");
	}
	return true;
}
function Submit(){
	if(check_password() || check_username()){
		window.location.href="https://www.bilibili.com/";
	}else{
		alert("error");
	}
}
function Reset(){
    document.getElementById("userName").value = "";
    document.getElementById("password").value = "";
    document.getElementById("surePassword").value = ""
}