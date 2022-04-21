<?php

$questionOneAnswer = "Libson";
$questionTwoAnswer = "5";
$questionThreeAnswer = "93.345 million miles";
$questionFourAnswer = "Topeka";
$questionFiveAnswer = "Chad";

$questionOne = $_POST["1"];
$questionTwo = $_POST["2"];
$questionThree = $_POST["3"];
$questionFour = $_POST["4"];
$questionFive = $_POST["5"];

$correct = 0;

echo "Question 1: What was the Capital of Portugal? <br>";
echo "You answered: $questionOne <br>";
echo "Correct answer: $questionOneAnswer <br><br><br>";
if($questionOne == $questionOneAnswer)
{
  $correct = $correct + 1;
}

echo "Question 2: What is the square root of 25? <br>";
echo "You answered: $questionTwo <br>";
echo "Correct answer: $questionTwoAnswer <br><br><br>";
if($questionTwo == $questionTwoAnswer)
{
  $correct = $correct + 1;
}

echo "Question 3: How far away is the earth from the sun? <br>";
echo "You answered: $questionThree <br>";
echo "Correct answer: $questionThreeAnswer <br><br><br>";
if($questionThree == $questionThreeAnswer)
{
  $correct = $correct + 1;
}

echo "What is the Capital of Kansas? <br>";
echo "You answered: $questionFour <br>";
echo "Correct answer: $questionFourAnswer <br><br><br>";
if($questionFour == $questionFourAnswer)
{
  $correct = $correct + 1;
}

echo "Question 5: Which one of these countries is NOT in Europe? <br>";
echo "You answered: $questionFive <br>";
echo "Correct answer: $questionFiveAnswer <br><br><br>";
if($questionFive == $questionFiveAnswer)
{
  $correct = $correct + 1;
}

$total = $correct / 5 * 100;

echo "You answered $correct questions correctly! <br>";
echo "Total Score: $total%;"

?>
