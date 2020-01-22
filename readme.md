# PHP input class
##### This package can manipulate data structures.

## Requirement
1. PHP
2. Composer

## Installation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run:  `composer require lablnet/dshandler`

## Feature

 1. Sort multi dimessional array based on column.
 2. Remove  duplicate array base on key
 3. Remove array, base on key:value pair.
 
 ## TODO
 [ ] Allow to specificy range on remove array:
	 - Like we should able to say, remove products below rating 3...
 


## Usage
Consider the following dataset
```php
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
```

Initialise the classs
```php
require_once "../vendor/autoload.php";

$handler = new Lablnet\DSHandler();
```

1. Remove array/products by key:value
```php
//remove array by key:value
$handler->_remove($products, 'rating', 2.9);
echo "<h3>Remove array by key:value</h3><pre>";
print_r($products);
echo "</pre>";
echo "<br>";
```
2. Remove duplicate array by key
```php
//remove duplicate array by key
$unique = $handler->_unique($products, 'name');
echo "<h3>Remove duplicate value by key</h3><pre>";
print_r($unique);
echo "</pre>";
echo "<br>";
```
3. Sort the products base on price
```php
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
```
4. Sort the products based on rating
```php
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
```

## Example
The example file is distrubuted with this package.

## License

This package is open-sourced software licensed under the  [MIT license](https://opensource.org/licenses/MIT).

## Questions
If you have any question feel free to ask me

[https://www.linkedin.com/in/lablnet/](https://www.linkedin.com/in/lablnet/)
[https://lablnet.github.io/profile](https://lablnet.github.io/profile)