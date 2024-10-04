<?php
//1
$friends = ["Svetlana", "Anna", "Maria", "Pavel"];
foreach ($friends as $friend) {
    echo $friend . " ";
};

//2
$numbers = [13, 5, 69, 1256, 145];
echo $numbers[2] . " ";

//3
$friend = [
    "name" => "Svetlana",
    "age"=> 25,
    "city"=> "Moscow"
];
echo $friend['name'] . " ";
echo $friend['age'] . " ";

//4
$numbers2 = [36, 459, 2, -6, 9];
foreach ($numbers2 as $number) {
    if ($number > 10) {
        echo $number . " ";
    }
};
//5
$numbers3 = [36, 67, 125, 4, 7];
$sum = array_sum($numbers3);
echo $sum . " ";
     

//6
$products = [
    [
        "name"=> "milk",
        "price"=> 80,
        "quantity"=> 15,
    ],
    [
        "name"=> "chocolate",
        "price"=> 65,
        "quantity"=> 36,
    ],
    [
        "name"=> "cookie",
        "price"=> 105,
        "quantity"=> 5,
    ],
    [
        "name"=> "cheese",
        "price"=> 259,
        "quantity"=> 48,
    ],
    [
        "name"=> "juice",
        "price"=> 123,
        "quantity"=> 72,
    ]
    ];
function list_($products) {
    foreach ($products as $product) {
            echo $product["name"] . " - ". $product["price"] . " ";
    }
};
echo list_($products) . " ";
function add($products, $product) {
    $products[] = $product;
    return $products;
};
$products = add($products, ["name" => "apple","price"=> 45,"quantity"=> 3]);
print_r($products) . " ";

//7 Не получилось решить
$students = [
    [
        "name"=> "Ann",
        "grades"=>[98, 77, 56]
    ],
    [
        "name"=> "Paul",
        "grades"=>[66, 81, 99]
    ],
    [
        "name"=> "Veronika",
        "grades"=>[86, 74, 62]
    ]
    ];
function GPA($students){
    foreach ($students as $student => $value) {
        $average = array_sum($students[2][1]) / count($students[2][1]);
        echo $students["name"] . " - ".$average . " ";
    }
};
echo GPA($students) ." ";   

//8
$numbers4 = [12, 5, 3, 5, 6, 12, 9, 75, 6];
$doubles = array_diff_assoc($numbers4, array_unique($numbers4));
print_r($doubles) . " ";

//9
$numbers5 = [3, 9, 85, -6, 4];
$numbers6 = [105, 66, -458, 7];
$resulte = array_merge($numbers5, $numbers6);
sort($resulte);
print_r($resulte) . " ";

//10 
$numbers7 = [3, 56, 87, 149, 20];
$even = array_filter($numbers7, function($num){
    return $num %2 == 0;
});
print_r($even) . " ";

?>