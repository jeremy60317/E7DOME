var star = document.getElementsByClassName("e_str");
for(var i=0; i<star.length; i++){
	star[i].addEventListener('click',changecolor,false);
	star[i].addEventListener('mouseover',mouseovercolor,false);
}

function mouseovercolor(e){
	var star_content = document.getElementById('star');

	switch(e.target){
		case star[0]:
		if(star[1].style.color=="#E7E7E7" && star[0].style.color=="#f4e30c"){
			star[0].style.color="#f4e30c";
			star_content.value="1";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#E7E7E7";
			star[2].style.color="#E7E7E7";
			star[3].style.color="#E7E7E7";
			star[4].style.color="#E7E7E7";
			star_content.value="1";
			console.log(star_content.value);
		}
		break;

		case star[1]:
		if(star[2].style.color=="#E7E7E7" && star[1].style.color=="#f4e30c"){
			star[1].style.color="#f4e30c";
			star_content.value="2";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#E7E7E7";
			star[3].style.color="#E7E7E7";
			star[4].style.color="#E7E7E7";
			star_content.value="2";
			console.log(star_content.value);
		}
		break;

		case star[2]:
		if(star[3].style.color=="#E7E7E7" && star[2].style.color=="#f4e30c"){
			star[2].style.color="#f4e30c";
			star_content.value="3";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#f4e30c";
			star[3].style.color="#E7E7E7";
			star[4].style.color="#E7E7E7";
			star_content.value="3";
			console.log(star_content.value);
		}
		break;

		case star[3]:
		if(star[4].style.color=="#E7E7E7" && star[3].style.color=="#f4e30c"){
			star[3].style.color="#f4e30c";
			star_content.value="4";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#f4e30c";
			star[3].style.color="#f4e30c";
			star[4].style.color="#E7E7E7";
			star_content.value="4";
			console.log(star_content.value);
		}
		break;

		case star[4]:
		if(star[4].style.color=="#f4e30c"){
			star[4].style.color="#f4e30c";
			star_content.value="5";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#f4e30c";
			star[3].style.color="#f4e30c";
			star[4].style.color="#f4e30c";
			star_content.value="5";
			console.log(star_content.value);
		}


	}

}




function changecolor(e){
	var star_content = document.getElementById('star');

	switch(e.target){
		case star[0]:
		if(star[1].style.color=="#E7E7E7" && star[0].style.color=="#f4e30c"){
			star[0].style.color="#E7E7E7";
			star_content.value="";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#E7E7E7";
			star[2].style.color="#E7E7E7";
			star[3].style.color="#E7E7E7";
			star[4].style.color="#E7E7E7";
			star_content.value="1";
			console.log(star_content.value);
		}
		break;

		case star[1]:
		if(star[2].style.color=="#E7E7E7" && star[1].style.color=="#f4e30c"){
			star[1].style.color="#E7E7E7";
			star_content.value="1";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#E7E7E7";
			star[3].style.color="#E7E7E7";
			star[4].style.color="#E7E7E7";
			star_content.value="2";
			console.log(star_content.value);
		}
		break;

		case star[2]:
		if(star[3].style.color=="#E7E7E7" && star[2].style.color=="#f4e30c"){
			star[2].style.color="#E7E7E7";
			star_content.value="2";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#f4e30c";
			star[3].style.color="#E7E7E7";
			star[4].style.color="#E7E7E7";
			star_content.value="3";
			console.log(star_content.value);
		}
		break;

		case star[3]:
		if(star[4].style.color=="#E7E7E7" && star[3].style.color=="#f4e30c"){
			star[3].style.color="#E7E7E7";
			star_content.value="3";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#f4e30c";
			star[3].style.color="#f4e30c";
			star[4].style.color="#E7E7E7";
			star_content.value="4";
			console.log(star_content.value);
		}
		break;

		case star[4]:
		if(star[4].style.color=="#f4e30c"){
			star[4].style.color="#E7E7E7";
			star_content.value="4";
			console.log(star_content.value);
		}else{
			star[0].style.color="#f4e30c";
			star[1].style.color="#f4e30c";
			star[2].style.color="#f4e30c";
			star[3].style.color="#f4e30c";
			star[4].style.color="#f4e30c";
			star_content.value="5";
			console.log(star_content.value);
		}


	}

}


 
