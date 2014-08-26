<?php
var_dump($_POST);
var_dump($_GET);
?> 

<html>
	<head>
		<h2>My First Form</h2>
	</head>

<body>
    <form method="POST">
    	<p>
    		<label for="first_name">First Name</label>	
    		<input type="text"  name="first_name" placeholder="First" id="first_name" />
        </p>

        <p>
    		<label for="last_name">Last Name</label>	
        	<input type="text"  name="last_name" placeholder="Last" id="last_name" />
        </p>

        <input type="submit" /> <br><br>

        <p><h2>User Login</h2></P>
        	<p>
        	<label for ="username">Username</label>	
        	<input type="text" id="username" name="username" placeholder="username">
        </p>
        <p>
        	<label for ="password">Password</label>	
            <input type="password" id="Password" name="Password" placeholder="password">

        </p>
            <input type="submit" value="Enter"/>	
        

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
	 	<label><input type="checkbox" name="Save_copy" value="Would you like to save a copy of this email to your Sent Mail folder?" checked>"Would you like to save a copy of this email to your Sent Mail folder?"</label><br>
        </p>
        

        <p>
	 	<input type="submit" value="Send" />
        </p>
    </form>

<!--  -->

    <form>
	     <h2>"Multiple Choice Test"</h2>
      	<p> 1) Which is the scarier labrinth to be stuck in? </p>
        
        <p>       
           <label><input type="radio" name="Question 1" value="The Labrinth">David Bowie's Labrinth, in <em>The</em> Labrinth</label>
         <br> 
           <label><input type="radio" name="Question 1" value="The Labrinth">Guillermo Del Toro's labrinth, in Pans Labrinth</label>
        </p>


        <p> 2) Who's movies do you like more? </p>

        <p>
           <label><input type="radio" name="Question 2" value="Wes Anderson">Wes Anderson</label>
         <br>
           <label><input type="radio" name="Question 2" value="Quentin Tarantino">Quentin Tarantino</label>
	    </p>

	    <p>
        <input type="submit" value="Submit Test Answers"/>
        </p>

        
        <p> 3) What are your favorite movies genres?</p>

        <label><input type="checkbox" name="genre" value="comedy">Comedy</label>
        <label><input type="checkbox" name="genre" value="independent">Independent</label>
        <label><input type="checkbox" name="genre" value="Horror">Horror</label>
        <label><input type="checkbox" name="genre" value="Drama">Drama</label>
        <label><input type="checkbox" name="genre" value="Documentary">Documentary</label>
        <label><input type="checkbox" name="genre" value="Foreign Film">Foreign Film</label><br>



        <p> 4) What do most people think of you? </p>
        <label><input type="radio" name="subject" value="You rock!">You ROCK!</label>
        <label><input type="radio" name="subject" value="You're awesome!">You're awesome!</label>
        <label><input type="radio" name="subject" value="You're ok">You're ok</label>
        <label><input type="radio" name="subject" value="Meh">Meh.</label>

        <label><input type="radio" name="subject" value="yes" checked>You send me spam mail</label>
        </p>

        <p> 5) What do you use the internet for most often?</p>       
        <select id="websites" name="websites[]" multiple>
           <option value="Work Related">Work or school Related</option>
           <option value="Reference">Personal reference and self enrichment</option>
           <option value="Entertainment">Social media or other entertainment</option>
           </select>
        
        <p> 6) What Codeup cohort are you on?</p>
        <p>
        <label for="cohort">Cohort:</label>
        <select name="Cohort[]" id="Cohort">
        	<option value="1">Arches</option> 
        	<option value="1">Badlands</option> 
           	<option value="1">Carlsbad</option> 
           </select> <br> <br>
        </p>

        <p>
          <input type="submit" value="Select Choices"/>
         </p>

      </form>


      <form>
         <h2>Select Testing</h2>
         <p>
         	1) Are you male or female?
         <label for="male_female"></label>
         <select name="Yes/No" id="Yes/No">
        	<option value="1">Yes</option> 
        	<option value="0">No</option>
         </select>
         </p>

         <p>
          <input type="submit" value="Submit"/>
         </p>

      </form>
      	
</body> 
</html>   
