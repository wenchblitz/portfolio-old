//On Resume Next
function stoperror(){
return true
}
window.onerror=stoperror

//Hint
$(document).ready(function(){
	$('input[title]').inputHints();
	$('textarea[title]').inputHints();
});

//Digital Calendar
<!-- hide from old browsers
  function GetDay(intDay){
    var DayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", 
                         "Thursday", "Friday", "Saturday")
    return DayArray[intDay]
    }

  function GetMonth(intMonth){
    var MonthArray = new Array("January", "February", "March",
                               "April", "May", "June",
                               "July", "August", "September",
                               "October", "November", "December") 
    return MonthArray[intMonth] 	  	 
    }
  function getDateStrWithDOW(){
    var today = new Date()
    var year = today.getYear()
    if(year<1000) year+=1900
    var todayStr = GetDay(today.getDay()) + ", "
    todayStr += GetMonth(today.getMonth()) + " " + today.getDate()
    todayStr += ", " + year
    return todayStr
    }
//-->

/* Disable RightClick */
<!--
var message="";

function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 

/* Modified to support Opera */
/* Bookmark Script */
function bookmarksite(title,url){
if (window.sidebar) // firefox
	window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
} 
else if(document.all)// ie
	window.external.AddFavorite(url, title);
}

/* TextArea & TextField */
function SelectAll(id)
{
    document.getElementById(id).focus();
    document.getElementById(id).select();
}