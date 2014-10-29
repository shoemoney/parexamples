<?php

######## ######## ########
#     ## ###  ### #     ##
#  ##  # ##    ## #  ##  #
#  ##  # #  ##  # #  ##  #
#     ## #      # #     ##
#  ##### #  ##  # #  #  ##
#  ##### #  ##  # #  ##  #
######## ######## ########

# People Aquisition & Retention - http://www.ParProgram.com


/**
 * Description: Example HTML EXIT Popup Code. 
 * User: Jeremy Schoemaker
 * Date: 10/16/14
 * Time: 10:14 AM
 */
?>

<html>
<title>PAR PROGRAM INTEGRATION EXIT DEMO</title>
<head>
<!-- FancyBox Code Portion 1 -->
<!-- Add jQuery library -->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox scripts - the kitchen sink! -->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.js" type="text/css" media="screen" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-thumbs.js"></script>

<!-- Your html for your popup box.  Must have a trailing \ at the end of every line -->

<script type="text/javascript">
var cookie_length = 30;

function setCookie(c_name,value,exdays) {
   var exdate=new Date();
   exdate.setDate(exdate.getDate() + exdays);
   var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
   document.cookie=c_name + "=" + c_value;
}

function getCookie(c_name) {
   var i,x,y,ARRcookies=document.cookie.split(";");

   for (i=0;i<ARRcookies.length;i++) {
      x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
      y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
      x=x.replace(/^s+|s+$/g,"");
      if (x.trim()==c_name) {
         return unescape(y);
      }
   }
}

var show = getCookie("ugpar");

if(show==null || show=="") {
  setCookie('ugpar','1',cookie_length);

	$(document).one('mouseleave', function() { $.fancybox('\
           <div style="width:310px;\
                 height:205px;\
		 font-family:sans-serif;\
		 border:0px solid #fff;\
		 background:url(acme_popup.png) 0 0 no-repeat #FFFFFF;\
		 padding: 365px 0 0 45px;\
		 position: relative;\
	     	 text-align: left;">\
            <form name="popup" action="parsubmit.php" method="post">\
             <input type="hidden" name="source" value="popup" />\
             <table style="border-radius:4px; color: #FFFFFF; width:259px; height:110px; text-align:left; font-size:18px;">\
               <tr>\
	         <td style="text-align:left; color:#FFFFFF;text-shadow:1px 1px #000000;">NAME:</td>\
	       </tr>\
	       <tr>\
	         <td style="width:190px; height:30px;">\
	     	   <input name="name" type="text" style="width:180px; height:30px; border-radius:6px; font-size:18px; color:#000000;box-shadow: 2px 2px 0px #000000;">\
	   	 </td>\
	       </tr>\
	       <tr>\
	         <td style="text-align:left; color:#FFFFFF;text-shadow:1px 1px #000000;padding-top:10px;">EMAIL:</td>\
	       </tr>\
	       <tr>\
	         <td style="width:190px; height:30px;">\
	     	   <input name="email" type="text" style="width:180px; height:30px; border-radius: 6px; font-size:16px; color:#000000;box-shadow: 2px 2px 0px #000000;"></td>\
	       </tr>\
	       <tr>\
	         <td style="text-align:center;padding-top:10px;">\
	     	   <input type="image" src="add_me.png" width="259" height="37" alt="Add Me!" name="submit" /></td>\
	       </tr>\
             </table>\
             </form>\
             </div>', {padding: 0}); });
     }
</script>

<!-- End of HTML Code for PopUp Appearance -->
</body>
</html>
