////////////////////////
/////I HAVE CHANCE//////
////////////////////////


// select a random page

var arrayPage = ["contact.html", "portfolio.html", "about.html"];
function randomiZe() {
	return arrayPage[Math.floor(Math.random() * arrayPage.length)];
}
var randomPage = randomiZe();


// redirect to the randompage

function redirection(){
	document.location.href= randomPage;
}

// assign a variable to the button element

var randomButton = document.getElementById("random");
console.log(randomPage);
randomButton.onclick = redirection;
