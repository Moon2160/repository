<?php

function evaluatequiz(array $questions, array $answers):int{
     
    $score = 0;

    foreach ($questions as $index => $question) {
        if($answers[$index]===$question['correct']){
            $score++;
        }


}
return $score;
}

$questions = [
    ['questions' => 'What is 2+2', 'correct'=>'4'],
    ['questions' => 'What is the capital of Fracnce', 'correct'=>'Paris'],
    ['questions' => 'Who wrotes hamlet', 'correct'=>'Shakespeare']
];

$answers = [];


foreach ($questions as $index => $question) {
   echo ($index+1).'.' . $question['questions']. "\n";
    $answers[$index] = trim(readline('your answer'));
    }

$score = evaluatequiz($questions, $answers);

echo "\nYou scored $score out of" .count($questions)."\n";

if($score === count($questions)){

    echo "Excellent Job !\n";
}
elseif($score>=1){
    echo "Good Job !\n";
}
else{
    echo "Your result is failed";
}





?>