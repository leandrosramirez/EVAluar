function selectRole(){
	//alert($('#selectRoleVal').val());
	var selectVal = document.getElementById("selectRoleVal").value;
	window.location = "selectrole.php?role=" + selectVal;
}

function backToLogin(){
	window.location = "logout.php";
}

const queryString = window.location.search;
var xmlhttp = new XMLHttpRequest(); 

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
       if (xmlhttp.status == 200) {
          document.getElementById("menu-ul").innerHTML = xmlhttp.responseText;
       }
       else if (xmlhttp.status == 400) {
          alert('There was an error 400');
       }
       else {
           alert('something else other than 200 was returned');
       }
    }
};

xmlhttp.open("GET", 'menu_new.php' + queryString, true);
xmlhttp.send();