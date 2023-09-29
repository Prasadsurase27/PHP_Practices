<?php
/*function factorial($n){
    if($n==0){
        return 1;

    }
    else{
        return($n*factorial($n-1));
    }
}

echo factorial(5);


*/
echo "<pre>";
$emp=[
    
    [1,"prasad","manager",50000],
    [2,"mahesh","developer",40000],
    [3,"sagar","Tester",30000],
    [4,"mayur","HR",60000]
];
echo "</pre>";
//Table with border this is multidimentional associative array
// echo "<table border='1p'>";
// foreach($emp as $v1){
//     echo "<tr>";
//     foreach($v1 as $v2){
//         echo "<td>$v2</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// echo "<pre>";
// for($i=0; $i<4; $i++){
//     for($j=0; $j<4; $j++){
//         echo $emp[$i][$j]." ";
//     }
//     echo "<br>";
// }
// echo "</pre>";

print_r($emp);

var_dump($emp);




?>