<script language="javascript" type="text/javascript">

var xmlhttp;

if (window.ActiveXObject){
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} else {

xmlhttp = new XMLHttpRequest();
}


        function makerequest(serverPage, objID) {

            var xmlhttp;
            //If, the activexobject is available, we must be using IE.
            if (window.ActiveXObject) {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } else {
                //Else, we can use the native Javascript handler.
                xmlhttp = new XMLHttpRequest();
            }
           
            var obj = document.getElementById(objID);

            var data = "?imgfile=" + "dddd.jpg";

            xmlhttp.open("GET", serverPage + data ,true);
          //  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8")
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var parentElement = document.getElementById(objID);
                    var wrappingDiv = document.createElement('div');
                    parentElement.innerHTML = "";
                    wrappingDiv.innerHTML = document.getElementById(objID).value + ' ' + xmlhttp.responseText;
                    wrappingDiv.innerHTML = xmlhttp.responseText;
                    parentElement.appendChild(wrappingDiv);
                }
                else {
                    var parentElement = document.getElementById(objID);
                    var wrappingDiv = document.createElement('div');
                    parentElement.innerHTML = "";
                    wrappingDiv.innerHTML = "";
                    wrappingDiv.innerHTML = "<div align='center' class=\"bold\">" + "<img alt='' height='50' src='images/ajax-loader.gif' width='50' />" + "</div>";
                    parentElement.appendChild(wrappingDiv);


                }
            }
            xmlhttp.send(null);

        }




function ajaxFunction(serverPage, objID,queryString){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById(objID);
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var iig = serverPage;
	
	ajaxRequest.open("GET", "tt.php" + queryString, true);
	ajaxRequest.send(null); 
}


</script>

<table style="width: 100%">
	<tr>
		<td onclick="ajaxFunction('tt.php','');">play</td>
		
		<td onclick="ajaxFunction();">ff</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>

	</tr>
</table>
<div id="sh">

</div>

<div id="ajaxDiv">
</div>


