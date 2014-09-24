<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'codeuprocks');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABLE national_parks (
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established VARCHAR(50) NOT NULL,
    area_in_acres VARCHAR(50) NOT NULL,
    PRIMARY KEY (id, AUTO_INCREMENT)
)';

$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Acadia', 'Maine', 'February 26, 1919', '47389.67 acres')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('American Samoa', 'American Samoa', 'October 31, 1988', '9000.00 acres')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Biscayne', 'Florida', 'June 28, 1980', '172924.07 acres')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Carlsbad Caverns', 'New Mexico', 'May 14, 1930', '46766.45 acres ')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Congaree', 'South Carolina', 'November 10, 2003', '249561.00 acres')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Death Valley', 'California, Nevada', 'October 31, 1994', '3372,401.96 acres')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Everglades', 'Florida', 'May 30, 1934', '1508537.90 acres')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Glacier', 'Montana', 'October 27, 1986', '77180.00 acres ')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Great Basin', 'Nevada', 'May 14, 1930', '46766.45 acres ')";
$dbc->exec($query);

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres ) VALUES ('Hawaii Volcanoes', 'Hawaii', 'August 1, 1916', '323431.38 acres ')";
$dbc->exec($query);
?>