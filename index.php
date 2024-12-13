<?php
//Project Instructions: Terminal-Based Quiz Application in PHP
//Step 1: Define the Questions and Answers

 $questions = [
    "What is the capital of France?" => "Paris",
    "Who wrote Hamlet?" => "Shakespeare",
    "What is 2 + 2?" => "4",
    "What is the color of the sky on a clear day?" => "blue"
];
// Initialize score
$score = 0;
//Step 2: Ask Questions and Collect User Input
foreach ($questions as $question => $correctAnswer)
{ echo $question . "\n";
    $answer = trim(fgets(STDIN));

//Step 3: Evaluate the Answers and Calculate the Score
if (strtolower($answer) === strtolower($correctAnswer))
{ echo "Correct!\n"; $score++;
    } else {
        echo "Incorrect. The correct answer is " . $correctAnswer . ".\n";
    }
}
//Step 4: Provide Feedback
$totalQuestions = count($questions);
echo "\nYou scored $score out of $totalQuestions.\n";
if ($score === $totalQuestions) {
    echo "Excellent! You got all the answers correct.\n";
} elseif ($score >= $totalQuestions / 2) {
    echo "Good job! You got more than half correct.\n"; }
else {
    echo "Better luck next time!\n";

}
?>