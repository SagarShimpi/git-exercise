// for avoid resubmision error popup on refresh
if(window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}// if(window.history.replaceState)

// for copy text
function CopyToClipboard(containerid)
{
	if(document.selection)
	{
		var range = document.body.createTextRange();
		range.moveToElementText(document.getElementById(containerid));
		range.select().createTextRange();
		document.execCommand("copy");
	}// if(document.selection)
	
	else if(window.getSelection)
	{
		var range = document.createRange();
		range.selectNode(document.getElementById(containerid));
		window.getSelection().addRange(range);
		document.execCommand("copy");
		var text = document.getElementById(containerid).innerHTML;
		alert("TEXT COPIED: \n\n"+text);
	}// else if(window.getSelection)
	
}// function CopyToClipboard(containerid)

// for hide div
function hideDiv()
{
	document.getElementById('input_div').style.display = "none";
	document.getElementById('mysqli_div').style.display = "none";
	document.getElementById('ts_class_div').style.display = "none";
	document.getElementById('validation_div').style.display = "none";
	document.getElementById('sms_div').style.display = "none";
	
	document.getElementById('input_li').classList.remove("active");
	document.getElementById('mysqli_li').classList.remove("active");
	document.getElementById('ts_class_li').classList.remove("active");
	document.getElementById('validation_li').classList.remove("active");
	document.getElementById('sms_li').classList.remove("active");
}// function hideDiv()

// for show div
function showDiv(id)
{
	hideDiv();
	
	var liName = id+'_li';
	var divName = id+'_div';
	document.getElementById(divName).style.display = "";
	document.getElementById(liName).classList.add("active");
	
}// function showDiv(id)

// for copy text
function expandDiv(id)
{
	var titleId = id+"_title";
	var spanId = id+"_expandSpan";
	var tblId = id+"_tbl";
	
	// set expand span
	var currExpandStatus = document.getElementById(tblId).style.display;
	if(currExpandStatus==="none")
	{
		document.getElementById(spanId).innerHTML = "&ndash;";
		document.getElementById(tblId).style.display = "";
		document.getElementById(titleId).classList.add("active");
	}
	else
	{
		document.getElementById(spanId).innerHTML = "+";
		document.getElementById(tblId).style.display = "none";
		document.getElementById(titleId).classList.remove("active");
	}
}

