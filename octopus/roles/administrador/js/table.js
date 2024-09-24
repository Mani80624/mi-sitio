const xhttp = new XMLHttpRequest();
xhttp.open("GET","/octopus/roles/administrador/php/query_courses.php",true);
xhttp.send()

xhttp.onreadystatechange = function(){
    if(this.readyState==4 && this.status == 200){

        let dates = JSON.parse(this.responseText);
        let answer = document.querySelector("#views_courses");
        answer.innerHTML = '';

        for(let item of dates){
            answer.innerHTML += `
            <tr>
                <td>${item.id_course}</td>
                <td>${item.name_course}</td>
                <td>${item.hours}</td>
                <td>${item.description}</td>
                <td class="actions-hover">
                    <a href=""><i class="fa fa-pencil"></i></a>
                    <a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            `
        }
    }
}


