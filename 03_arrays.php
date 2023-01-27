<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

//another way
$fruits = array('apple', 'peer');

// var_dump($numbers);

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Outputting values from an array
echo $numbers[0];
echo $fruits[1];



/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
  ];


  echo $colors[1];

// Strings as keys
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
  ];

//   echo $hex['red'];
// var_dump($hex);


/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format. like object in js
*/

// Single person
$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];
  


  // Array of people
$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];

  print_r($people[1]['email']);
  // Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];


// Encode to JSON
// var_dump(json_encode($people));


// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
print_r(json_decode($jsonobj));