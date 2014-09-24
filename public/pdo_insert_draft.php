<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'codeuprocks');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT UNSIGNED NOT NULL,
    description VARCHAR(300) NOT NULL, 
    PRIMARY KEY (id)
)';

$dbc->exec($query);

$national_parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => 'February 26, 1919','area_in_acres' => 47389.67,                       'description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => 'October 31, 1988', 'area_in_acres' => 9000.00,       'description' => 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches. The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => 'June 28, 1980', 'area_in_acres' => 172924.07,                     'description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. Threatened animals include the West Indian Manatee, American crocodile, various sea turtles, and peregrine falcon.'],
    ['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => 'November 10, 2003', 'area_in_acres' => 249561.00,          'description' => 'On the Congaree River, this park is the largest portion of old-growth floodplain forest left in North America. Some of the trees are the tallest in the Eastern US. An elevated walkway called the Boardwalk Loop guides visitors through the swamp.'],
    ['name' => 'Carlsbad Caverns','location' => 'New Mexico','date_established' => 'May 14, 1930', 'area_in_acres' => 46766.45 ,             'description' => 'Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs.'],
    ['name' => 'Death Valley','location' => 'California, Nevada','date_established' => 'October 31, 1994',  'area_in_acres' => 3372401.96,   'description' => 'Death Valley is the hottest, lowest, and driest place in the United States. Daytime temperatures have topped 130 °F (54 °C) and it is home to Badwater Basin, the lowest elevation in North America. A diversity of colorful canyons, desolate badlands, shifting sand dunes, sprawling mountains, and over 1000 species of plants populate this geologic graben. Additional points of interest include salt flats, historic mines, and springs.'],
    ['name' => 'Everglades','location' => 'Florida', 'date_established' => 'May 30, 1934', 'area_in_acres' => 1508537.90,                    'description' => 'The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology.'],
    ['name' => 'Glacier','location' => 'Montana', 'date_established' => 'October 27, 1986', 'area_in_acres' => 77180.00 ,                    'description' => "The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of Rocky Mountain peaks. There are historic hotels and a landmark road in this region of rapidly receding glaciers. The local mountains, formed by an overthrust, expose the world's best-preserved sedimentary fossils from the Proterozoic era."],
    ['name' => 'Great Basin','location' => 'Nevada', 'date_established' => 'May 14, 1930', 'area_in_acres' => 46766.45 ,                     'description' => "Based around Wheeler Peak, the Great Basin has 5,000-year-old bristlecone pines, glacial moraines, and the limestone Lehman Caves. It has some of the country's darkest night skies, and there are animal species including Townsend's big-eared bat, pronghorn, and Bonneville cutthroat trout."],
    ['name' => 'Hawaii Volcanoes','location' => 'Hawaii', 'date_established' => 'August 1, 1916', 'area_in_acres' => 323431.38,              'description' => "This park on the Big Island protects the famous Kīlauea and Mauna Loa volcanoes, two of the world's most active geological features. Diverse ecosystems range from tropical forests at sea level to barren lava beds at more than 13,000 feet (4,000 m)."]
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
					   VALUES (:name, :location, str_to_date(:date_established, \'%M %e, %Y\'), :area_in_acres, :description)');

foreach ($national_parks as $park) {
    $stmt->bindValue(':name', $park ['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park ['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park ['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park ['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park ['description'], PDO::PARAM_STR);

    $stmt->execute();
}

?>








