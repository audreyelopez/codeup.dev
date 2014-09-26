<?php
 // Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'codeuprocks');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// ================================================

$userStmt = $dbc->query('SELECT * FROM users');
$users = $userStmt->fetchAll(PDO::FETCH_ASSOC);

// sql query to get back all the parks
$stmt = $dbc->query('SELECT name, location, date_established, area_in_acres, description FROM                national_parks');

$national_parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($national_parks);

?>

<html>
<head>
<!-- HTML page to list all the parks in a table -->
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Date Established</th>
            <th>Area (acres)</th>
            <th>Description</th>
        </tr>

    <?php foreach ($national_parks as $park): ?>
    <tr> 
        <td><?= $park['name'];?><br></td>
        <td><?= $park['location'];?><br></td> 
        <td><?= $park['date_established'];?><br></td> 
        <td><?= $park['area_in_acres'];?><br></td> 
        <td><?= $park['description'];?><br></td> 
         <?php endforeach; ?>
    </tr> 
    
<!-- removed second foreach (for form) originally here -->

      
    <h2>Add another National Park</h2>
    <form method='POST' action='national_parks.php'>
        <p>
            <label for="natPark">National Park:</label>
            <input id="natPark" required name="natPark" type="text" placeholder="What's the name of the park?">
        </p>
        <p>
            <label for="loc">Location:</label>
            <input id="loc" required name="loc" type="text" placeholder="Where is the park?">
        </p>
        <p>
            <label for="date">Date Established:</label>
            <input id="date" required name="date" type="text" placeholder="When was it established">
        </p>
        <p>
            <label for="area">Park Area:</label>
            <input id="area" required name="area" type="text" placeholder="What is the park area in acres?">
        </p>
        <p>
            <label for="Descript">Description:</label>
            <textarea id="Description" required name="Description" placeholder="Type Park Info here"></textarea>
        </p>
        <button type="submit">Send</button>
    </form>
</body>
</html> 