<?php


$contacts =[];


function addcontact( array &$contacts ,string $name, string $email, string $phone){
    $contacts[] = ['name'=> $name,'email'=> $email,'phone'=> $phone];
}

function displaycont( array $contacts):void{
   if(empty($contacts)){
    echo'No contact available.\n';
   }else{
    foreach($contacts as $contact){
        echo "Name:{$contact['name']},
              Email: {$contact['email']},
              Phone: {$contact['phone']}\n,
              ";
    }

}

}

while(true){

    echo'\n Contact Management App: \n';
    echo "1. Add contact.\n 2. View contact\n 3. Exit";
    $choice = (int)readline("Choice an option: ");



    if( $choice === 1){
        $name = readline("Enter your name : ");
        $email = readline("Enter your Email : ");
        $phone = readline("Enter your phone :");


        addcontact($contacts, $name, $email, $phone);
        echo "$name added to contacts.\n";
        echo"$email added to contacts.\n";
        echo "$phone added to contacts.\n";
}
else if( $choice === 2){
    displaycont($contacts);
}
else if( $choice === 3){
    echo "Exiting............\n";
    break;
}
else{
    echo "Invalid choice. Please try again.\n";
}
}


?>