document.querySelector("#cursos").addEventListener("click",consulta);

function consulta(){
	const https = new XMLHttpRequest();
	https.open("GET","/octopus/roles/administrador/php/query_courses.php",true);
	https.send();
	https.onreadystatechange = function(){
		if(this.status==200 && this.readyState==4){
			//let datos = JSON.parse(this.responseText);

			localStorage.setItem("coursesData", JSON.stringify(this.responseText));

			window.location.href = "/octopus/roles/administrador/curses.php";
			//console.log(this.responseText);
		}
	};

}