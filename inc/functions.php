<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [
     [ 'quote' => 'Appear weak when you are strong, and strong when you are weak.',
       'source' => 'Sun Tzu',
       'citacion' => 'The Art of War',
       'tag' => 'War' 
     ],
     [ 'quote' => 'Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.',
       'source' => 'Martin Luther King Jr.',
       'citacion' => 'A Testament of Hope',
       'year' => '1960 AC',
       'tag' => 'Peace' 
     ],
     [ 'quote' => 'If everyone fought for their own convictions there would be no war.',
       'source' => 'Leo Tolstoy',
       'citacion' => 'War and peace',
       'year' => '1869 AC',
       'tag' => 'War' 
     ],
     [ 'quote' => 'You must be the change you want to see in the world.',
       'source' => 'Mahatma Gandhi',
       'citacion' => 'L.A. Times',
       'year' => '1989 AC',
       'tag' => 'Peace' 
     ],
     [ 'quote' => 'Love all, trust a few, do wrong to none.',
       'source' => 'William Shakespeare',
       'citacion' => 'All\'s Well That Ends Well',
       'year' => '1610 AC',
       'tag' => 'Love' 
     ]

];

// Random color Function

function randomColor(){
  echo random_int(0,255) . "," . random_int(0,255) . "," . random_int(0,255);
}


// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($quotes){
    $x = rand(0, 4);
    return $quotes[$x];
}

// Create the printQuote funtion and name it printQuote



function printQuote($quotes){
    $selection = getRandomQuote($quotes); 
    echo "<p class='quote'>" . $selection['quote'] . '</p>';
    echo "<p class='source'>" . $selection['source'] ;
  // check if there are more infos to display
    if(isset($selection['citation'])){
        echo "<span class='citation'>" . $selection['citation'] . "</span>";
    }

    if(isset($selection['year'])){
        echo "<span class='year'>" . $selection['year'] . "</span>";
    }

    if(isset($selection['tag'])){
        echo "<span class='tag'>" . $selection['tag'] . "</span>";
    }
    echo "</p>";
}


?>