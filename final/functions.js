//var el = document.getElementById('mybtn');
//el.addEventListener("onclick",showme,false);
//document.getElementById("days").addEventListener("onclick",function(e){
  //el.style.backgroundColor="#1abc9c";
  //el.style.display="none";
  //if(e.target){
    //window.alert("hello");
  //}
  //e.target.style.display="none";
//});
function Sendletter(){
  document.getElementById('myForm').style.display="none";
  document.getElementById('myimage').style.display="block";
  document.getElementById('showme').style.display="block";
  var elem = document.getElementById("myimage");
  var pos = -100;
  var id = setInterval(frame, 20);

  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++;
      elem.style.bottom = pos + 'px';
    //  elem.style.left = pos + 'px';
    }
  }

  return false;

}
window.onload = function(){
  var d = new Date();
  var day = d.getDate();
  var count =1;
  var l = document.getElementById("days").getElementsByTagName("li");
  for(count=1;count<=31;count++){
    var temp = l[count];
    if(parseInt(temp.innerHTML)==day){
      temp.style.backgroundColor="#1abc9c";
      break;
    }
  }
}


ScrollRate = 50;

function scrollDiv_init() {
	DivElmnt = document.getElementById('box');
	ReachedMaxScroll = false;

	DivElmnt.scrollTop = 0;
	PreviousScrollTop  = 0;

	ScrollInterval = setInterval('scrollDiv()', ScrollRate);
}

function scrollDiv() {

	if (!ReachedMaxScroll) {
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop++;

		ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
	}
	else {
		ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;

		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop--;
	}
}

function pauseDiv() {
	clearInterval(ScrollInterval);
}

function resumeDiv() {
	PreviousScrollTop = DivElmnt.scrollTop;
	ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
}
