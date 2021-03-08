function selectRole() {
	//alert($('#selectRoleVal').val());
	var selectVal = document.getElementById("selectRoleVal").value;
	window.location = "selectrole.php?role=" + selectVal;
}

function backToLogin() {
	window.location = "logout.php";
}