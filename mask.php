<!DOCTYPE html>
<html>
<head>
<style type="text/css">
a:focus, a:active
{
color:green;
}
.wrapper {
    border:1px solid #000;
    display:inline-block;
}

input,
button {
    background-color:transparent;
    border:0;
}
</style>

<script>
var dig = new Array();
var digTxt = "0.00";

function runScript(e) {
//alert(String.fromCharCode(e.keyCode));
    if(e.keyCode === 13){
            alert("Enter was pressed was presses");
    }
    if (e.keyCode ===8){
alert("Return press");
}
 if (e.keyCode ===46){
alert("Delete");
}
      dig.push(String.fromCharCode(e.keyCode));
	var i=0;
        digTxt = "";
	for (i=0; i < dig.length-1; i++)
	{
		if (i==dig.length-2)
		{
		  digTxt +='.';
		  digTxt += dig[i];
		}
		else
		  digTxt += dig[i];
	}
	//alert(digTxt);
    var element = document.getElementById("dt");
    element.value = "";
    element.value = digTxt;
}
function recorreDigito(digit)
{
   dig.push(digit);
  
}
function btnDel()
{
	var element = document.getElementById("dt");
	element.value = "";
	dig.splice(0,dig.length);
}
</script>
</head>

<body>
<a id="myAnchor" href="http://www.w3schools.com">Visit W3Schools.com</a>
<br><br/>
<input type="button" onclick="getfocus()" value="Get focus">
<input type="button" onclick="losefocus()" value="Lose focus">
<div class="wrapper">
<input type="text" id="dt" onkeypress="return runScript(event)" style="text-align:right">
<button onClick="btnDel();">X</button>
</div>
</body>

</html>
