<!doctype html>
<html style="min-height:100%;">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Welcome To My Website</title>
<script type='text/javascript' 
        src='jquery-1.8.0.min.js'>
    </script>
    <script>
        $(function() {
            $('input[id$=btnSubmit]').click(function(e) {
                var checked = $(':checkbox:checked').length;
                if (checked < 4) {
                    alert('At least 4 checkboxes in the\n"Select Which Words Describe You" Field\nMust be selected');
                    e.preventDefault();
                }
            });
        });
    </script>
<link rel="stylesheet" type="text/css" href="doc.css" />
<style>
.load{color:#aaaaaa;
  border: 0px solid;
background: -moz-linear-gradient(top, #ff0000 0, #500000);
background: -webkit-linear-gradient(top, #ff0000 0, #500000);
background: linear-gradient(top, #ff0000 0, #500000);}
textarea{
background-color:000000;
color:ffffff;
}

</style>
<link rel="stylesheet" type="text/css" href="doc.css" />
</head>
<body onload="window.alert('This is a fake form i created\nya know, one those surveys ya fill\nout on the internet\nexcept this one is just a joke');text();" class="th1 txt1" style="text-align:center;">

<script>
var spyX=0;

function text()
{
	if(document.getElementById("txt").value.length>0)
	{
		document.getElementById("txt").value="I\'m Retarded";
	}
	setTimeout("text()",1);
}
function changeAtLastMinute()
{
	document.getElementById("spyware").innerHTML="If you want us to upload all your personal info to us<br>click the button bellow<br><input type=button value=\"upload personal info\" style=\"position:absolute;left:0px;\" class=\"btn txt1\">";
	alert("thank you for choosing to upload all your personal info to our servers");
}
function moveAwayFromMouse()
{
	if(spyX==0)
	{
		spyX=1;
		document.getElementById("stopspy").style.left=(spyX*100)+"px";
	}
	else
	{
		spyX=0;
		document.getElementById("stopspy").style.left=(spyX*100)+"px";
	}
}
</script>


<form name=f>
Select Which Words Describe You<br>
<input id="cb1" type="checkbox" value="1"/> Gay <br>
<input id="cb2" type="checkbox" value="2"/> Retarded <br>
<input id="cb3" type="checkbox" value="3"/> Incontinent<br>
<input id="cb4" type="checkbox" value="4"/> Transgender<br><br><br>
Enter A Blurb About You<br>
<textarea id=txt cols=20 rows=5>
</textarea>
<br><p>
Do You Accept All Our Viruses Adware And Spyware<br>
<input type=radio id=virusY>Yes<br>
<input type=radio id=virusN onclick="document.getElementById('virusN').checked=false;document.getElementById('virusY').checked=true;">No<br>
<p>
please enter your credit card number so we can steal it<br>
<input id=a Class=load onfocus="this.value=''; this.onfocus=null; this.className='btn';"  value="Credit Card Number Goes Here Stupid" size=60 type=text><p>
please enter your social security number number so we can steal that too<br>
<input id=b Class=load size=60 type=text onfocus="this.value=''; this.onfocus=null; this.className='btn';" value="Social Security Number Goes Here Retard"><p>please enter your E-Mail address so we can bombard you with spam<br>
<input id=c Class=load size=60 type=text onfocus="this.value=''; this.onfocus=null; this.className='btn';" value="E-Mail Address Obviously Goes Here"><p>
<input class="btn txt1" id="btnSubmit" type="submit" value="Submit" onclick="valbutton(f);return false;"/><p>
by connecting with this site, you just got bombarded with a ton of viruses and spyware<br>
we are not liable<br><br>
<div id="spyware">we are now downloading your personal information<br>click the button below to optout<br><input id=stopspy type=button value=optout onclick="changeAtLastMinute();" class="btn txt1" onmouseover="moveAwayFromMouse();" style="position:relative;left:0px;"></div>
</form>
</body>
</html>
