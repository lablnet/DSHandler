<?php

require_once "../vendor/autoload.php";

$handler = new Lablnet\DSHandler();

$products = [
	[
		'id' => 1,
		'name' => 'Test 1',
		'price' => 300,
		'rating' => 4.5
	],
	[
		'id' => 2,
		'name' => 'Test 2',
		'price' => 600,
		'rating' => 4.1
	],
	[
		'id' => 3,
		'name' => 'Test 3',
		'price' => 150,
		'rating' => 3.1
	],
	[
		'id' => 4,
		'name' => 'Test 4',
		'price' => 700,
		'rating' => 5
	],
	[
		'id' => 5,
		'name' => 'Test 5',
		'price' => 900,
		'rating' => 2.9
	],
	[
		'id' => 6,
		'name' => 'Test 5',
		'price' => 265,
		'rating' => 2.9
	]
];

//Now sort the products base on price
$sort_1_price = $products;
$handler->_sort($sort_1_price, 'price', SORT_ASC);
echo "<h3>Sort by price ASC</h3><pre>";
print_r($sort_1_price);
echo "</pre>";
echo "<br>";
$sort_2_price = $products;
$handler->_sort($sort_2_price, 'price', SORT_DESC);
echo "<h3>Sort by price DESC</h3><pre>";
print_r($sort_2_price);
echo "</pre>";
echo "<br>";

//Now sort the product base on rating
$sort_1_rating = $products;
$handler->_sort($sort_1_rating, 'rating', SORT_ASC);
echo "<h3>Sort by Rating ASC</h3><pre>";
print_r($sort_1_rating);
echo "</pre>";
echo "<br>";
$sort_2_rating = $products;
$handler->_sort($sort_2_rating, 'rating', SORT_DESC);
echo "<h3>Sort by Rating DESC</h3><pre>";
print_r($sort_2_rating);
echo "</pre>";
echo "<br>";

//remove duplicate array by key
$unique = $handler->_unique($products, 'name');
echo "<h3>Remove duplicate value by key</h3><pre>";
print_r($unique);
echo "</pre>";
echo "<br>";

//remove array by key:value
$handler->_remove($products, 'rating', 2.9);
echo "<h3>Remove array by key:value</h3><pre>";
print_r($products);
echo "</pre>";
echo "<br>";
