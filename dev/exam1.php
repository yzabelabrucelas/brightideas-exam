<?php
/*
Create a single function (using your own algorithm) that will 
rearrange the values of the given sample arrays 
without using php reserved array sorting functions. 

The resulting print out should be in an ascending manner.

Sample arrays:
a. 4,3,1,2
b. 11,15,100,2,3,5
Additionally, for samble array b.: filter out the even numbers.
*/
?>

<?php


$arrayA=array('4','3','1','2');
$arrayB=array('11','15','100','2','3','5');

echo "Unsorted ";
//Sort
print_r($arrayA);
for($j = 0; $j < count($arrayA); $j ++) {
    for($i = 0; $i < count($arrayA)-1; $i ++){

        if($arrayA[$i] > $arrayA[$i+1]) {
            $temp = $arrayA[$i+1];
            $arrayA[$i+1]=$arrayA[$i];
            $arrayA[$i]=$temp;
        }       
    }
}
echo "Sorted ";
print_r($arrayA);


echo "Unsorted ";
print_r($arrayB);
//Sort
for($k = 0; $k < count($arrayB); $k ++) {
    for($l = 0; $l < count($arrayB)-1; $l ++){
        if($arrayB[$l] > $arrayB[$l+1]) 
        {
            $temp = $arrayB[$l+1];
            $arrayB[$l+1]=$arrayB[$l];
            $arrayB[$l]=$temp;
            $arrayB % 2 === 1;
        }
        
    }
}
echo "Sorted ";
print_r($arrayB);





?>