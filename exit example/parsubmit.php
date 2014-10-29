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
 * Description: Example Submit Script for PAR Program. 
 * For full documentation: http://shmny.me/parapidocs
 * User: Jeremy Schoemaker
 * Date: 10/16/14
 * Time: 10:14 AM
 */ 

#The following assumes you used name and email for the submit names in your form. If you used something else you will need to use that in the _$REQUEST

# REQUIRED VARIABLES

$email=urlencode($_REQUEST["email"]); #REQUIRED This gets the persons email from the submitted form if its passed)
$apikey="YOUR API KEY"; #You can find this in the api link in your PAR account
$list="LISTNAME"; #This is the short code name of the list you are submitting to.

#OPTIONAL VARIABLES

$name=urlencode($_REQUEST["name"]); #This gets the persons name from the submitted form if its passed (Optional)
$source=urlencode($_REQUEST["source"]); #This passes over the source variable (Optional - Must use if you want to track by source)
$ip=$_SERVER["REMOTE_ADDR"]; #This grabs the IP of the person submitting the form (Optional - Must use if you want geographic data in PAR) 

# # API CALL TO TO PUT INTO PAR BLOG AQUISITION SEQUENCE

$putinpar = file_get_contents("http://api.parprogram.com/?do=add_subscriber&list=$list&name=$name&email=$email&key=$apikey&source=$source&ip=$ip");

/* DEBUG Example 

print "$putinpar";

Error messages:
ERROR: Invalid API Key
ERROR: No email and list code given
ERROR: No email given
ERROR: Invalid email address
ERROR: No list code given
ERROR: List not found
ERROR: List is deleted
ERROR: Subscriber exists
ERROR: Unknown sequence
ERROR: Error while adding subscriber

*/

header("Location: http://www.parprogram.com/thankyou.html"); #This redirects the user to the URL after the data is submitted to the PAR API

# ALL DONE!

?>
