<?php

echo "Enter Units consumed : ";

$Units = (float)readline();

if($Units <= 100){
    $bill = $Units * 5 ;
}
elseif($Units <= 200){
    $bill = 100 * 5 + ($Units - 100) *10 ;
}
else{
    $bill = 100 * 5 + 100 *10 + ($Units - 200) * 15;
}


echo "Total bill : $$bill. \n"

?>