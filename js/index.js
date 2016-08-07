//////////////////////////////
/////INDEX/I have chance//////
//////////////////////////////


 //Store the differents pages of the site in arrayPage 
var arrayPage = ["contact.html", "portfolio.html", "about.html"];
 //Select a random page and store the result in randomPage
var randomPage = arrayPage[Math.floor(Math.random() * arrayPage.length)];
 //Create a function to redirect to the randomPage URL
function randomRedirection() { 	
	document.location.href= randomPage;
}
 //Assign a variable to the button element
var randomButton = document.getElementById("random");
 //Call randomRedirection on randomButton click event
randomButton.onclick = randomRedirection;
