function hide(){
  document.getElementById("splashscreen").style.display='none';
  return false;
}
function printLetterByLetter(destination, message, speed){
    var i = 0;
    var interval = setInterval(function(){
        document.getElementById(destination).innerHTML += message.charAt(i);
        i++;
        if (i > message.length){
            clearInterval(interval);
        }
    }, speed);
}


printLetterByLetter("letterbyletter", "Choose Life. Choose a job. Choose a career. Choose a family. Choose a fucking big television, choose washing machines, cars, compact disc players and electrical tin openers. Choose good health, low cholesterol, and dental insurance. Choose fixed interest mortgage repayments. Choose a starter home. Choose your friends. Choose leisurewear and matching luggage. Choose a three-piece suit on hire purchase in a range of fucking fabrics. Choose DIY and wondering who the fuck you are on Sunday morning. Choose sitting on that couch watching mind-numbing, spirit-crushing game shows, stuffing fucking junk food into your mouth. Choose rotting away at the end of it all, pissing your last in a miserable home, nothing more than an embarrassment to the selfish, fucked up brats you spawned to replace yourselves. Choose your future. Choose life... But why would I want to do a thing like that? I chose not to choose life. I chose somethin' else. And the reasons? There are no reasons. Who needs reasons when you've got heroin?", 70);


function myfunc() {
     describe = parseInt(document.querySelector('input[name = "describe"]:checked').value);
	   superpower = parseInt(document.querySelector('input[name = "superpower"]:checked').value);
	   drink = parseInt(document.querySelector('input[name = "drink"]:checked').value);
	   animal = parseInt(document.querySelector('input[name = "animal"]:checked').value);
     weapon = parseInt(document.querySelector('input[name = "weapon"]:checked').value);


	   result = describe + superpower + drink + animal + weapon;
     result = (result)*(0.2);
	//document.getElementById("grade").innerHTML = result;
  if (result == 1) {result2 = "<p >You got The Joker!</p><p>You're absolutely crazy, and very cruel. You should get checked.</p>"};
  if (result >1 && result<=1.5) {result2 = "<p>You got Renton!</p><p id='letterbyletter'></p>"};
  if (result >2 && result<=2.5 ) {result2 = "<p >You got Princess Leia!</p><p>You're extremely brave, and have a strong political mind for justice.</p>"};
  if (result >2.5 && result<=3) {result2 = "<p >You got Hermoine!</p><p>You're the most intelligent person you've ever known, and also extremely brave. You're very loyal to your friends.</p>"};
  if (result>3.5 && result <=4) {result2 = "<p >You got Katniss!</p><p>You will always fight for what's right, and family is the most important thing to you.</p>"};
  if (result >3 && result <=3.5) {result2 = "<p >You got Will Hunting!</p><p>You're the smartest person in the room, and probaly the most rebellious too.</p>"};
  if (result >1.5 && result<=2) {result2 = "<p >You got John McLane!</p><p>Justice in your number one priority; wrongdoers beware.</p>"};

  document.getElementById("grade2").innerHTML = result2;

  if (result == 1) {result3 = "<img src='images/jokerpopart.png' width='400px' height='400px' /><br><audio controls autoplay><source src='whysoserious.ogg' type='audio/ogg'><source src='whysoserious.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>"};
  if (result >1 && result<=1.5) {result3 = "<img src='images/rentonts.png' width='600px' height='400px' />"};
  if (result >2 && result<=2.5 ) {result3 = "<img src='images/leia.png' width='650px' height='450px' />"};
  if (result >2.5 && result<=3) {result3 = "<img src='images/hermoine.png' width='600px' height='400px' />"};
  if (result>3.5 && result <=4) {result3 = "<img src='images/katnissmj.png' width='600px' height='400px' /><br><audio controls autoplay><source src='RuesWhistle.ogg' type='audio/ogg'><source src='RuesWhistle.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>"};
  if (result >3 && result <=3.5) {result3 = "<img src='images/willhuntingmaths.jpg' width='600px' height='400px' />"};
  if (result >1.5 && result<=2) {result3 = "<img src='images/johnmclane.gif' width='800px' height='600px' />"};

  document.getElementById("grade3").innerHTML = result3;
  document.getElementById("section1").style.display="none";
  document.getElementById("section2").style.display="none";
  document.getElementById("section3").style.display="none";
  document.getElementById("section4").style.display="none";
  document.getElementById("section5").style.display="none";
  document.getElementById("mybtn").style.display="none";
  document.body.style.backgroundImage='none';
  window.scrollTo(0,0);


return false; // required to not refresh the page; just leave this here
} //this ends the submit function
