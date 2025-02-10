alert("Fill The Form To Register!")

function checkpassword()
{
	var pw1=document.getElementById('password').value;
	var pw2=document.getElementById('repassword').value;
	
	if(pw1!=pw2)
	{
		alert("Password Mismatch!");
		return false;
	}
	else
	{
		alert("Password Match!");
		return true;
	}
}

function enableButton() {
	var checkBox = document.getElementById("agree");
	
	if(checkBox.checked == true) {
		document.getElementById("mybtn").disabled = false;
	}
	else {
		document.getElementById("mybtn").disabled = true;
	}
}

function home() {
	
	var hom = confirm("Let's go to Homepage!");
	
	if (hom == true) {
		location.href=("home.html");
	}
	else {
		alert("Returned to the same page!");
		location.reload();
	}
}