<?php





// Task 01: Print 20 to 10 reversely by for loop

for ($i=20; $i >=10; $i--){ 
    echo $i.'<br>';
}
echo '-------------- </br>';

// Task 02: sum 1,2,3,4 using loop. Means 1+2+3+4 = ?


    
$sum = 0;
for ($i=3; $i <=5; $i++) { 
    if ($i % 2 != 0) {
        $sum =$sum+$i;  
    } 
}
echo $sum.'<br>'; 



echo '-------------- </br>';

// Task 03: Make multiplication table (নামাতা) for 40 to 45 using nested loop.
for ($i=40; $i<=45 ; $i++) { 
    for ($j=1; $j<=10 ; $j++) { 
        echo $i.'*'.$j.'='.$i*$j.'<br>';
    }
}
echo '-------------- </br>';

// Task 04: Make an array of numbers 1-10. Find the odd numbers from the list using loop

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($num as $value){
    if($value % 2 == 1){
        echo $value.'<br>';
    } 
}

echo '-------------- </br>';

// Task 05: Suppose you want to arrange a party at your house. You have 10 friends on your list. (Take random 10 names in the array). Due to money shortage, you want to invite only those friends who's name has not more than 5 Characters. So write a program to sort out those friends' names from the array and print them using loop.

$friends = ['cse', 'me', 'eee', 'ce', 'Bangla', 'english', 'religion', 'physics', 'chemestry', 'architecture'];
foreach($friends as $value){
    if(strlen ($value) <= 5){
        $inviteed_friends= $value;
        echo $inviteed_friends.'<br>';
    } 
}

echo '-------------- </br>';







?>