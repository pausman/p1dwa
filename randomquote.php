<?php
# Pat Ausman
# Sept 2018
# Project 1 external php file

# declare a variable for the maximum number of quotes.
$maxnumberofquotes = 5;

# Array with quotes and authors
$quotes = [
    1 => [
          'quote' => 'My life is my message.',
          'author' => 'Mahatma Gandhi',

    ],
    2 => [
          'quote' => 'Not how long, but how well you have lived is the main thing. ',
          'author' => 'Seneca',
    ],
    3 => [
          'quote' => 'I love those who can smile in trouble. ',
          'author' => 'Leonardo da Vinci',
    ],
    4 => [
          'quote' => 'Life is what happens when you’re busy making other plans.',
          'author' => 'John Lennon',
    ],
    5 => [
          'quote' => 'You’ve gotta dance like there’s nobody watching.',
          'author' => 'William W. Purkey',
    ],
];

# Get a random number to access the quote array
$qnumber = rand(1, $maxnumberofquotes);
