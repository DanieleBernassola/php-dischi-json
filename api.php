<?php

// // DATABASE CANZONI
// $songs = [
//   [
//     'title' => 'New Jersey',
//     'artist' => 'Bon Jovi',
//     'year' => '1988',
//   ],
//   [
//     'title' => 'Live at Wembley 86',
//     'artist' => 'Queen',
//     'year' => '1992',
//   ],
//   [
//     'title' => 'Ten\'s Summoner\'s Tales',
//     'artist' => 'Sting',
//     'year' => '1993',
//   ],
//   [
//     'title' => 'Steve Gadd band',
//     'artist' => 'Steve Gadd band',
//     'year' => '2018',
//   ],
//   [
//     'title' => 'Brave new World',
//     'artist' => 'Iron Maiden',
//     'year' => '2000',
//   ],
//   [
//     'title' => 'One more car, one more rider',
//     'artist' => 'Eric Clapton',
//     'year' => '2002',
//   ],
// ];

$songs = file_get_contents(__DIR__ . '/data.json');

header('Content-Type: application/json');
echo $songs;
// echo json_encode($songs);
