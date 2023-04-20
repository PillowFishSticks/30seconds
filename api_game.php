<?php

$theme = $_POST['theme'];
if($theme == '1'){
  $heading = 'Cars';
} elseif($theme == '2'){
  $heading = 'Plants';
} elseif($theme == '3'){
  $heading = 'Countries';
} elseif($theme == '4'){
  $heading = 'Clothing';
} elseif($theme == '5'){
  $heading = 'Family';
} elseif($theme == '6'){
  $heading = 'Movies';
} elseif($theme == '7'){
  $heading = 'Genres';
} elseif($theme == '8'){
  $heading = 'Food';
} elseif($theme == '9'){
  $heading = 'Places';
} elseif($theme == '10'){
  $heading = 'Musicians';
} elseif($theme == '11'){
  $heading = 'Actors';
} elseif($theme == '12'){
  $heading = 'Animals';
} elseif($theme == '13'){
  $heading = 'Technology';
} elseif($theme == '14'){
  $heading = 'Clothing Brands';
} elseif($theme == '15'){
  $heading = 'Music Genres';
} elseif($theme == '16'){
  $heading = 'Series';
} elseif($theme == '17'){
  $heading = 'Cartoons';
} elseif($theme == '18'){
  $heading = 'Stationary';
} elseif($theme == '19'){
  $heading = 'Video Games';
} elseif($theme == '20'){
  $heading = 'Adjectives';
}
?>
<h2 class="text-center mb-4">Catergory:<?php echo $heading; ?></h2>
<h2 class="text-center">Time elapsed: <span id="timer">0</span> seconds</h2>
<h4 class="text-center mt-4 mb-4">Points: <span id="points">0</span></h4>
<div class="text-center">
  <button id="generateBtn" class="btn btn-green">Correct</button>
  <button id="skipBtn" class="btn btn-red">Skip</button>
  <button id="goback" class="btn btn-blue">Go Back</button>
</div>

<h4 class="text-center mt-5" id="word"></h4>

<script>
	$(document).ready(function() {
		// Define an array of words
    <?php
    if($theme == '1'){
      ?>

var words = [
  "Acura",
  "Alfa Romeo",
  "Aston Martin",
  "Audi",
  "Bentley",
  "BMW",
  "Bugatti",
  "Buick",
  "Cadillac",
  "Chevrolet",
  "Chrysler",
  "Citroen",
  "Dodge",
  "Ferrari",
  "Fiat",
  "Ford",
  "Geely",
  "General Motors",
  "GMC",
  "Honda",
  "Hyundai",
  "Infiniti",
  "Jaguar",
  "Jeep",
  "Kia",
  "Koenigsegg",
  "Lamborghini",
  "Land Rover",
  "Lexus",
  "Lincoln",
  "Lotus",
  "Maserati",
  "Mazda",
  "McLaren",
  "Mercedes-Benz",
  "Mini",
  "Mitsubishi",
  "Nissan",
  "Pagani",
  "Peugeot",
  "Porsche",
  "Ram Trucks",
  "Renault",
  "Rolls-Royce",
  "Saab",
  "Subaru",
  "Suzuki",
  "Tesla",
  "Toyota",
  "Volkswagen",
  "Volvo"
];

      <?php
    } elseif($theme == '2'){
      ?>
var words = [
  "Aloe Vera",
  "Bamboo",
  "Begonia",
  "Bird of Paradise",
  "Cactus",
  "Calathea",
  "Carnation",
  "Chrysanthemum",
  "Clematis",
  "Daffodil",
  "Daisy",
  "Dandelion",
  "Fern",
  "Ficus",
  "Gardenia",
  "Geranium",
  "Hibiscus",
  "Hosta",
  "Hyacinth",
  "Hydrangea",
  "Iris",
  "Jasmine",
  "Lavender",
  "Lilac",
  "Lily",
  "Magnolia",
  "Marigold",
  "Narcissus",
  "Orchid",
  "Pansy",
  "Peony",
  "Petunia",
  "Philodendron",
  "Plumeria",
  "Primrose",
  "Rose",
  "Sage",
  "Succulent",
  "Sunflower",
  "Tulip",
  "Venus Flytrap",
  "Violet",
  "Wisteria",
  "Yarrow",
  "Yucca",
  "Zinnia"
];
      <?php
    } elseif($theme == '3'){
?>

var words = [
  "Argentina",
  "Australia",
  "Brazil",
  "Canada",
  "China",
  "Colombia",
  "Denmark",
  "Egypt",
  "France",
  "Germany",
  "Greece",
  "India",
  "Indonesia",
  "Iran",
  "Iraq",
  "Israel",
  "Italy",
  "Japan",
  "Kenya",
  "Malaysia",
  "Mexico",
  "Morocco",
  "Netherlands",
  "New Zealand",
  "Nigeria",
  "Norway",
  "Pakistan",
  "Peru",
  "Philippines",
  "Poland",
  "Portugal",
  "Russia",
  "Saudi Arabia",
  "South Africa",
  "South Korea",
  "Spain",
  "Sweden",
  "Switzerland",
  "Taiwan",
  "Thailand",
  "Turkey",
  "Ukraine",
  "United Arab Emirates",
  "United Kingdom",
  "United States of America",
  "Venezuela",
  "Vietnam"
];

      <?php
    } elseif($theme == '4'){
?>

var words = [
  "Blouse",
  "Boots",
  "Button-up shirt",
  "Cap",
  "Cardigan",
  "Coat",
  "Crop top",
  "Denim jacket",
  "Dress",
  "Flannel shirt",
  "Flip flops",
  "Gloves",
  "Hat",
  "Hoodie",
  "Jacket",
  "Jeans",
  "Joggers",
  "Jumpsuit",
  "Leather jacket",
  "Leggings",
  "Long-sleeved shirt",
  "Maxi dress",
  "Midi skirt",
  "Overalls",
  "Pajamas",
  "Parka",
  "Polo shirt",
  "Poncho",
  "Puffer jacket",
  "Raincoat",
  "Sandals",
  "Scarf",
  "Shirt",
  "Shorts",
  "Skirt",
  "Slippers",
  "Sneakers",
  "Socks",
  "Sweater",
  "Sweatpants",
  "Sweatshirt",
  "Tank top",
  "Tights",
  "T-shirt",
  "Turtleneck",
  "Vest",
  "Windbreaker",
  "Yoga pants"
];

      <?php
    } elseif($theme == '5'){
?>

var words = [
  "Mother",
  "Father",
  "Sister",
  "Brother",
  "Grandmother",
  "Grandfather",
  "Aunt",
  "Uncle",
  "Cousin",
  "Niece",
  "Nephew",
  "Daughter",
  "Son",
  "Stepmother",
  "Stepfather",
  "Stepsister",
  "Stepbrother",
  "Stepdaughter",
  "Stepson",
  "Half-sister",
  "Half-brother",
  "Mother-in-law",
  "Father-in-law",
  "Sister-in-law",
  "Brother-in-law",
  "Daughter-in-law",
  "Son-in-law",
  "Granddaughter",
  "Grandson",
  "Great-grandmother",
  "Great-grandfather",
  "Great-aunt",
  "Great-uncle",
  "Second cousin",
  "Third cousin",
  "Godmother",
  "Godfather",
  "Goddaughter",
  "Godson",
  "Foster mother",
  "Foster father",
  "Foster sister",
  "Foster brother",
  "Foster daughter",
  "Foster son",
  "Adoptive mother",
  "Adoptive father",
  "Adoptive sister",
  "Adoptive brother",
  "Adoptive daughter",
  "Adoptive son"
];

      <?php
    } elseif($theme == '6'){
?>

var words = [
  "The Godfather",
  "The Shawshank Redemption",
  "The Dark Knight",
  "The Godfather: Part II",
  "Pulp Fiction",
  "The Lord of the Rings: The Return of the King",
  "Schindler's List",
  "12 Angry Men",
  "The Lord of the Rings: The Fellowship of the Ring",
  "Forrest Gump",
  "Inception",
  "Star Wars: Episode V - The Empire Strikes Back",
  "The Lord of the Rings: The Two Towers",
  "The Matrix",
  "Goodfellas",
  "One Flew Over the Cuckoo's Nest",
  "Seven Samurai",
  "Se7en",
  "City of God",
  "Saving Private Ryan",
  "The Silence of the Lambs",
  "It's a Wonderful Life",
  "The Usual Suspects",
  "Life is Beautiful",
  "Interstellar",
  "The Green Mile",
  "Gladiator",
  "The Prestige",
  "The Departed",
  "The Lion King",
  "Back to the Future",
  "The Intouchables",
  "American History X",
  "The Terminator",
  "The Shining",
  "Alien",
  "Die Hard",
  "Fight Club",
  "The Silence",
  "The Grand Budapest Hotel",
  "The Truman Show",
  "Jaws",
  "The Social Network",
  "Whiplash",
  "The Sixth Sense",
  "Eternal Sunshine of the Spotless Mind",
  "The Exorcist",
  "Apocalypse Now",
  "Blade Runner",
  "The Breakfast Club"
];

      <?php
    } elseif($theme == '7'){
?>

var words = [
  "Action",
  "Adventure",
  "Animation",
  "Biography",
  "Comedy",
  "Crime",
  "Documentary",
  "Drama",
  "Family",
  "Fantasy",
  "Film-Noir",
  "History",
  "Horror",
  "Music",
  "Musical",
  "Mystery",
  "News",
  "Reality-TV",
  "Romance",
  "Sci-Fi",
  "Short",
  "Sport",
  "Talk-Show",
  "Thriller",
  "War",
  "Western",
  "Adult",
  "Anime",
  "Blaxploitation",
  "Bollywood",
  "Experimental",
  "Exploitation",
  "Fairy Tale",
  "Fan Film",
  "Film Noir",
  "Gay and Lesbian",
  "Holiday",
  "Independent",
  "Instructional",
  "LGBTQ",
  "Martial Arts",
  "Mockumentary",
  "Road Movie",
  "Satire",
  "Silent Film",
  "Superhero",
  "Suspense",
  "TV movie",
  "Urban",
  "Vampire",
  "Zombie"
];

      <?php
    } elseif($theme == '8'){
?>

var words = [
  "Pizza",
  "Burgers",
  "Sushi",
  "Tacos",
  "Pasta",
  "Fried Chicken",
  "Burritos",
  "Sandwiches",
  "Salads",
  "BBQ Ribs",
  "Pad Thai",
  "Enchiladas",
  "Fish and Chips",
  "Curry",
  "Falafel",
  "Gyros",
  "Pho",
  "Ramen",
  "Biryani",
  "Chicken Tikka Masala",
  "Hummus",
  "Pierogi",
  "Ceviche",
  "Chili",
  "Shawarma",
  "Gumbo",
  "Peking Duck",
  "Lobster",
  "Clam Chowder",
  "Crab Cakes",
  "Oysters",
  "Mussels",
  "Sashimi",
  "Escargot",
  "Quiche",
  "Croissants",
  "Crepes",
  "Tamales",
  "Empanadas",
  "Poutine",
  "Kebabs",
  "Dumplings",
  "Dim Sum",
  "Beef Stroganoff",
  "Lasagna",
  "Pot Roast",
  "Shepherd's Pie",
  "Cassoulet",
  "Bouillabaisse",
  "Fondue"
];

      <?php
    } elseif($theme == '9'){
?>

var words = [
  "Great Wall of China",
  "Machu Picchu",
  "Taj Mahal",
  "Petra",
  "Chichen Itza",
  "Colosseum",
  "Eiffel Tower",
  "Statue of Liberty",
  "Pyramids of Giza",
  "Acropolis",
  "Big Ben",
  "Sagrada Familia",
  "Burj Khalifa",
  "Neuschwanstein Castle",
  "Golden Gate Bridge",
  "Mount Rushmore",
  "Stonehenge",
  "Uluru",
  "Angkor Wat",
  "Sydney Opera House",
  "Christ the Redeemer",
  "Buckingham Palace",
  "Alhambra",
  "Bran Castle",
  "St. Basil's Cathedral",
  "Red Square",
  "The Louvre",
  "Grand Canyon",
  "Yellowstone National Park",
  "Niagara Falls",
  "The Great Barrier Reef",
  "Victoria Falls",
  "Easter Island",
  "The Parthenon",
  "The Vatican",
  "The Great Sphinx",
  "The Dead Sea",
  "Mont Saint Michel",
  "Banaue Rice Terraces",
  "Cinque Terre",
  "Hagia Sophia",
  "The Brandenburg Gate",
  "The Panama Canal",
  "The Tower of London",
  "The Atomium",
  "Mount Everest",
  "The Northern Lights",
  "The Galapagos Islands",
  "The Serengeti",
  "The Amazon Rainforest",
  "The Great Ocean Road"
];

      <?php
    } elseif($theme == '10'){
?>

var words = [
  "The Beatles",
  "Bob Dylan",
  "Elvis Presley",
  "Jimi Hendrix",
  "Led Zeppelin",
  "The Rolling Stones",
  "Queen",
  "David Bowie",
  "Prince",
  "Michael Jackson",
  "Madonna",
  "U2",
  "Nirvana",
  "Radiohead",
  "Oasis",
  "Beyoncé",
  "Kanye West",
  "Jay-Z",
  "Eminem",
  "Dr. Dre",
  "Tupac Shakur",
  "Notorious B.I.G.",
  "Outkast",
  "Lauryn Hill",
  "Whitney Houston",
  "Janis Joplin",
  "Joni Mitchell",
  "Stevie Wonder",
  "James Brown",
  "Aretha Franklin",
  "Ray Charles",
  "Bob Marley",
  "The Beach Boys",
  "Johnny Cash",
  "Patsy Cline",
  "Hank Williams",
  "Dolly Parton",
  "Garth Brooks",
  "Shania Twain",
  "Taylor Swift",
  "Ed Sheeran",
  "Adele",
  "Bruno Mars",
  "Rihanna",
  "Justin Bieber",
  "Lady Gaga",
  "Pink",
  "Katy Perry",
  "Alicia Keys",
  "John Legend",
  "Billie Eilish",
  "Lizzo"
];

      <?php
    } elseif($theme == '11'){
?>

var words = [
  "Meryl Streep",
  "Tom Hanks",
  "Leonardo DiCaprio",
  "Cate Blanchett",
  "Denzel Washington",
  "Viola Davis",
  "Robert De Niro",
  "Jodie Foster",
  "Morgan Freeman",
  "Natalie Portman",
  "Philip Seymour Hoffman",
  "Emma Thompson",
  "Al Pacino",
  "Jessica Chastain",
  "Daniel Day-Lewis",
  "Saoirse Ronan",
  "Anthony Hopkins",
  "Judi Dench",
  "Gary Oldman",
  "Helen Mirren",
  "Sean Connery",
  "Charlize Theron",
  "Christian Bale",
  "Julianne Moore",
  "Brad Pitt",
  "Maggie Smith",
  "Dustin Hoffman",
  "Joaquin Phoenix",
  "Frances McDormand",
  "Jim Carrey",
  "Angelina Jolie",
  "Matt Damon",
  "Marion Cotillard",
  "Samuel L. Jackson",
  "Brie Larson",
  "Mark Ruffalo",
  "Jennifer Lawrence",
  "Eddie Redmayne",
  "Catherine Zeta-Jones",
  "George Clooney",
  "Kate Winslet",
  "Robert Downey Jr.",
  "Emma Stone",
  "Johnny Depp",
  "Scarlett Johansson",
  "Anthony Mackie",
  "Gina Rodriguez",
  "Idris Elba",
  "Taraji P. Henson",
  "Chadwick Boseman"
];

      <?php
    } elseif($theme == '12'){
?>

var words = [
  "Lion",
  "Tiger",
  "Bear",
  "Elephant",
  "Giraffe",
  "Hippopotamus",
  "Rhino",
  "Kangaroo",
  "Koala",
  "Crocodile",
  "Alligator",
  "Sloth",
  "Gorilla",
  "Chimpanzee",
  "Orangutan",
  "Panda",
  "Polar bear",
  "Grizzly bear",
  "Kodiak bear",
  "Zebra",
  "Cheetah",
  "Leopard",
  "Panther",
  "Jaguar",
  "Hyena",
  "Wildebeest",
  "Gazelle",
  "Deer",
  "Moose",
  "Elk",
  "Antelope",
  "Bison",
  "Buffalo",
  "Camel",
  "Llama",
  "Alpaca",
  "Horse",
  "Donkey",
  "Mule",
  "Sheep",
  "Goat",
  "Pig",
  "Cow",
  "Bull",
  "Chicken",
  "Turkey",
  "Duck",
  "Goose",
  "Ostrich",
  "Emu",
  "Peacock"
];

      <?php
    } elseif($theme == '13'){
?>

var words = [
  "Smartphone",
  "Tablet",
  "Laptop",
  "Desktop computer",
  "Smartwatch",
  "Fitness tracker",
  "Virtual reality headset",
  "Augmented reality glasses",
  "Smart speaker",
  "Smart TV",
  "Streaming media player",
  "Gaming console",
  "Wireless router",
  "Wireless earbuds",
  "Bluetooth speaker",
  "Portable charger",
  "Drone",
  "3D printer",
  "Robotic vacuum",
  "Home security camera",
  "Smart thermostat",
  "Smart lock",
  "Smart doorbell",
  "Smart lighting system",
  "Wireless keyboard",
  "Wireless mouse",
  "External hard drive",
  "Solid-state drive",
  "USB flash drive",
  "Digital camera",
  "Mirrorless camera",
  "Action camera",
  "Drone camera",
  "Gimbal",
  "Audio interface",
  "MIDI controller",
  "Studio headphones",
  "Microphone",
  "Smart scale",
  "Blood pressure monitor",
  "Blood glucose meter",
  "Pulse oximeter",
  "Smart inhaler",
  "Sleep tracking device",
  "Air purifier",
  "Water purifier",
  "Smart water bottle",
  "Smart oven",
  "Smart refrigerator",
  "Smart washer and dryer"
];

      <?php
    } elseif($theme == '14'){
?>

var words = [
  "Nike",
  "Adidas",
  "Levi's",
  "Calvin Klein",
  "Ralph Lauren",
  "Tommy Hilfiger",
  "Gucci",
  "Prada",
  "Versace",
  "Louis Vuitton",
  "Chanel",
  "Dior",
  "Fendi",
  "Balenciaga",
  "Yves Saint Laurent",
  "Alexander McQueen",
  "Givenchy",
  "Burberry",
  "Coach",
  "Michael Kors",
  "Kate Spade",
  "Tory Burch",
  "Victoria's Secret",
  "H&M",
  "Zara",
  "Uniqlo",
  "Forever 21",
  "Topshop",
  "Mango",
  "ASOS",
  "Gap",
  "Banana Republic",
  "J.Crew",
  "Madewell",
  "Free People",
  "Urban Outfitters",
  "Anthropologie",
  "Lululemon",
  "Athleta",
  "Patagonia",
  "The North Face",
  "Columbia",
  "Under Armour",
  "Puma",
  "Reebok",
  "New Balance",
  "Vans",
  "Converse",
  "Dr. Martens",
  "Timberland",
  "Ugg"
];

      <?php
    } elseif($theme == '15'){
?>

var words = [
  "Rock",
  "Pop",
  "Hip hop",
  "Jazz",
  "Classical",
  "Blues",
  "Reggae",
  "Electronic",
  "Country",
  "Folk",
  "R&B",
  "Soul",
  "Funk",
  "Gospel",
  "Metal",
  "Punk",
  "Alternative",
  "Indie",
  "World",
  "Latin",
  "K-pop",
  "J-pop",
  "C-pop",
  "Rap",
  "Trap",
  "Techno",
  "House",
  "Dubstep",
  "Drum and bass",
  "Ambient",
  "Chillout",
  "Easy listening",
  "Experimental",
  "Acoustic",
  "Instrumental",
  "Orchestral",
  "Vocal",
  "Choral",
  "Baroque",
  "Renaissance",
  "Medieval",
  "Fusion",
  "Ska",
  "Bluegrass",
  "Rock and roll",
  "Psychedelic",
  "Grunge",
  "Emo",
  "Hardcore",
  "Death metal"
];

      <?php
    } elseif($theme == '16'){
?>

var words = [
  "Game of Thrones",
  "Breaking Bad",
  "The Sopranos",
  "The Wire",
  "Mad Men",
  "Friends",
  "The Office",
  "Seinfeld",
  "The Simpsons",
  "South Park",
  "The Crown",
  "Stranger Things",
  "The Handmaid's Tale",
  "Black Mirror",
  "Westworld",
  "The Walking Dead",
  "Grey's Anatomy",
  "NCIS",
  "Law & Order: Special Victims Unit",
  "The Big Bang Theory",
  "How I Met Your Mother",
  "Modern Family",
  "The Good Place",
  "The Marvelous Mrs. Maisel",
  "Ozark",
  "Narcos",
  "House of Cards",
  "Orange Is the New Black",
  "The Witcher",
  "Chernobyl",
  "Fargo",
  "True Detective",
  "Stranger Things",
  "Downton Abbey",
  "Mindhunter",
  "Homeland",
  "The Handmaid's Tale",
  "The Mandalorian",
  "The Boys",
  "Cobra Kai",
  "Breaking Bad",
  "Better Call Saul",
  "Succession",
  "This Is Us",
  "Atlanta",
  "Black-ish",
  "The Crown",
  "The Good Fight",
  "The Americans",
  "Billions",
  "Veep"
];

      <?php
    } elseif($theme == '17'){
?>

var words = [
  "The Simpsons",
  "Looney Tunes",
  "Tom and Jerry",
  "Scooby-Doo, Where Are You!",
  "The Flintstones",
  "Teenage Mutant Ninja Turtles",
  "ThunderCats",
  "He-Man and the Masters of the Universe",
  "Transformers",
  "GI Joe",
  "The Jetsons",
  "DuckTales",
  "The Smurfs",
  "Garfield and Friends",
  "The Ren & Stimpy Show",
  "Beavis and Butt-Head",
  "Rocko's Modern Life",
  "The Powerpuff Girls",
  "Dexter's Laboratory",
  "Johnny Bravo",
  "Cow and Chicken",
  "Courage the Cowardly Dog",
  "Ed, Edd n Eddy",
  "SpongeBob SquarePants",
  "The Fairly OddParents",
  "Rugrats",
  "Hey Arnold!",
  "Doug",
  "The Wild Thornberrys",
  "Avatar: The Last Airbender",
  "Phineas and Ferb",
  "Gravity Falls",
  "Steven Universe",
  "Adventure Time",
  "Regular Show",
  "Samurai Jack",
  "Futurama",
  "The Family Guy",
  "American Dad",
  "Bob's Burgers",
  "The Boondocks",
  "Archer",
  "Rick and Morty",
  "Big Mouth",
  "South Park",
  "The Simpsons",
  "King of the Hill",
  "The Critic",
  "Family Guy",
  "Futurama"
];

      <?php
    } elseif($theme == '18'){
?>

var words = [
  "Pen",
  "Pencil",
  "Eraser",
  "Ruler",
  "Highlighter",
  "Sharpener",
  "Glue Stick",
  "Stapler",
  "Staple Remover",
  "Tape Dispenser",
  "Correction Fluid",
  "Whiteboard Marker",
  "Permanent Marker",
  "Dry Erase Board",
  "Chalkboard",
  "Paper Clips",
  "Binder Clips",
  "Push Pins",
  "Rubber Bands",
  "Notepad",
  "Notebook",
  "Journal",
  "Planner",
  "Calendar",
  "File Folder",
  "Index Cards",
  "Sticky Notes",
  "Envelope",
  "Mailing Labels",
  "Postage Stamps",
  "Scissors",
  "Paper Cutter",
  "Hole Punch",
  "Paper Shredder",
  "Laminator",
  "Badge Holder",
  "Name Tag",
  "Business Card Holder",
  "Presentation Folder",
  "Report Cover",
  "Photo Album",
  "Scrapbook",
  "Craft Paper",
  "Construction Paper",
  "Drawing Paper",
  "Graph Paper",
  "Tracing Paper",
  "Watercolor Paper",
  "Printing Paper",
  "Photo Paper",
  "Carbon Paper",
  "Transfer Paper"
];

      <?php
    } elseif($theme == '19'){
?>

var words = [
  "Super Mario Bros.",
  "The Legend of Zelda",
  "Tetris",
  "Minecraft",
  "Fortnite",
  "Call of Duty",
  "Grand Theft Auto",
  "FIFA",
  "NBA 2K",
  "Assassin's Creed",
  "Halo",
  "World of Warcraft",
  "Overwatch",
  "League of Legends",
  "DOTA 2",
  "Counter-Strike: Global Offensive",
  "PlayerUnknown's Battlegrounds",
  "Apex Legends",
  "Fall Guys",
  "Among Us",
  "Rocket League",
  "The Elder Scrolls V: Skyrim",
  "Final Fantasy VII",
  "Resident Evil",
  "Street Fighter",
  "Super Smash Bros.",
  "Pokemon",
  "Sonic the Hedgehog",
  "Metal Gear Solid",
  "Half-Life",
  "Portal",
  "Myst",
  "The Sims",
  "SimCity",
  "Civilization",
  "Age of Empires",
  "StarCraft",
  "Warcraft",
  "Diablo",
  "Mortal Kombat",
  "Tekken",
  "Kingdom Hearts",
  "God of War",
  "Uncharted",
  "The Last of Us",
  "Red Dead Redemption",
  "Mass Effect",
  "Batman: Arkham",
  "The Witcher",
  "Dark Souls"
];

      <?php
    } elseif($theme == '20'){
?>

var words = [
  "happy",
  "angry",
  "brave",
  "calm",
  "careful",
  "charming",
  "clever",
  "confused",
  "courageous",
  "crazy",
  "curious",
  "determined",
  "difficult",
  "eager",
  "energetic",
  "enthusiastic",
  "excited",
  "famous",
  "friendly",
  "funny",
  "generous",
  "gentle",
  "grateful",
  "great",
  "happy",
  "hardworking",
  "helpful",
  "honest",
  "huge",
  "hungry",
  "important",
  "innovative",
  "intelligent",
  "kind",
  "knowledgeable",
  "lazy",
  "lucky",
  "magnificent",
  "mysterious",
  "optimistic",
  "passionate",
  "patient",
  "playful",
  "powerful",
  "proud",
  "quiet",
  "silly",
  "strong",
  "stubborn",
  "successful",
  "talented",
  "thoughtful",
  "wonderful"
];

      <?php
    }
    ?>

		// Generate a random index from 0 to the length of the array
		var randomIndex = Math.floor(Math.random() * words.length);

		// Display the random word in the "word" paragraph on page load
		$("#word").text(words[randomIndex]);

		// Click event handler for the "Generate" button
		$("#skipBtn").click(function() {
			// Generate a new random index from 0 to the length of the array
			randomIndex = Math.floor(Math.random() * words.length);

			// Display the new random word in the "word" paragraph
			$("#word").text(words[randomIndex]);
		});

        $("#generateBtn").click(function() {
            var count = parseInt($('#points').text());
            $('#points').text(count + 1);
			// Generate a new random index from 0 to the length of the array
			randomIndex = Math.floor(Math.random() * words.length);

			// Display the new random word in the "word" paragraph
			$("#word").text(words[randomIndex]);
		});
	});

  $(document).ready(function() {
		var timerInterval;
		var timeElapsed = 0;

		function startTimer() {
			timerInterval = setInterval(function() {
				timeElapsed++;
				$("#timer").text(timeElapsed);

				if (timeElapsed >= 60) {
					// Send AJAX request
					$.ajax({
                        type: 'post',
                        url: 'api_home.php',
                        success: function(data){
                          $('#game_div').html(data);
                        }
                    });

					// Stop the timer
					clearInterval(timerInterval);
				}
			}, 1000);
		}

		startTimer();
    $('#goback').on('click', function() {
          $.ajax({
                  type: 'post',
                  url: 'api_home.php',
                  success: function(data){
                    $('#game_div').html(data);
                    clearInterval(timerInterval);
                  }
          });
        });
	});

</script>