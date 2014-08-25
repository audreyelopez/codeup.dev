<?php
var_dUmp($_POST);
var_dump($_GET);
?> 

<html>
<head>
	<title>My First Form</title>
</head>
<body>
    <form method="GET">
    	<p>
    	<label for="first_name">First Name</label>	
    	<input type="text"  name="first_name" placeholder="First" id="first_name" />
        </p>

        <p>
    	   <label for="last_name">Last Name</label>	
           <input type="text"  name="last_name" placeholder="Last" id="last_name" />
        </p>

        <input type="submit" />
        

	 <h2>Compose an email</h2>
	    <p>
	    <label for="to">To:</label>	
    	<input type="text"  name="to" id="To:" />
	    </p>
	    <p>
	    <label for="from">From:</label>	
    	<input type="text"  name="from"id="From" />
	    </p>
	     <p>
	    <label for="subject">Subject:</label>	
    	<input type="text"  name="subject"id="Subject:" />
	    </p>
	 	<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Draft email here"></textarea>

        
      <p>   
        <label><input type="radio" name="subject" value="You rock!">You ROCK!</label>
        <label><input type="radio" name="subject" value="You're awesome!">You're awesome!</label>
        <label><input type="checkbox" name="subject[]" value="You're ok">You're ok</label>
        <label><input type="checkbox" name="subject[]" value="Meh">Meh.</label><br>

        <label><input type="checkbox" name="subject[]" value="yes" checked>Send me spam mail></label>
      </p>

        <p>
	 	<input type="submit" value="Send" />
        </p>
    </form>  
</body> 
</html>   
