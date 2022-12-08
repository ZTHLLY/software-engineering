function trip(obj, trip) {
    document.getElementById(obj).innerHTML = "<b>" + trip + "</b>";
}
function check_name(){
	// alert("1")
	var name = document.getElementById("name").value;
	if (name.length < 1 || name.length > 10) {
	    trip("name_trip", "The account contains 0 to 10 characters");
	    return false;
	} else {
	    trip("name_trip", "Allowed");
	}
	return true;
}
function check_phone_number(){
	var phone_number = document.getElementById("phone_number").value;
	if (isNaN(phone_number || phone_number.length == 0)) {
	    trip("phone_number_trip", "the phone number must be consist of figure");
	    return false;
	} else {
	    trip("phone_number_trip", "Allowed");
		return true;
	}
	
}

function check_address(){
	var address = document.getElementById("address").value
	if (address.length != 0){
		trip("address_trip", "Allowed")
		return true
	}
}

function check_email(){
	var email = document.getElementById("email").value;
	var reg = /^([a-zA-Z]|[0-9])(\w|\-)+@[a-zA-Z0-9]+\.([a-zA-Z]{2,4})$/;
	if(reg.test(email) || email.length == 0){
		trip("email_trip", "please type the correct email");
	}else{
		trip("email_trip", "Allowed");
		return true
	}
}

function check_identity(){
	var identity = document.getElementById("indentity").value;
	if (isNaN(identity) || identity.length == 0) {
	    trip("identity_trip", "the indentity number must be consist of figure");
	    return false;
	} else {
	    trip("identity_trip", "Allowed");
		return true;
	}
}

function Submit(){
	if(check_name() && check_phone_number() && check_email() && check_identity() && check_address() &&check_money){
		window.location.href="https://www.bilibili.com/";
	}else{
		alert("error");
	}
}
function Reset(){
    document.getElementById("name").value = "";
    document.getElementById("phone_number").value = "";
    document.getElementById("email").value = "";
    document.getElementById("identity").value = "";
    document.getElementById("address").value = ""; 
	document.getElementById("money").value="";
}
function check_money(){
	var Money = document.getElementById("money").value;
	if (isNaN(Money || Money.length == 0)) {
	    trip("money_trip", "the  number must be consist of figure");
	    return false;
	} else {
	    trip("money_trip", "Allowed");
		return true;
	}



}