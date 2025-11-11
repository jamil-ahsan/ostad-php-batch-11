<?php

define("APP_NAME", "Expense Calculator");
define("AUTHOR", "Jamil Ahsan");


echo "App Name : " . APP_NAME . "\n";
echo "<br>";
print("Author : " . AUTHOR . "\n");
echo "<br>";
printf("Welcome to %s by %s\n\n", APP_NAME, AUTHOR);
echo "<br>";

$food = 450;
$transport = 300;
$otherExpenses = 150;


$total = $food + $transport + $otherExpenses;
$average = ($total / 3);

echo "Total Expense: $total";
echo "<br>";
echo "Average Expense: $average";
echo "<br>";


if ($total > 1000) 
    {
    echo "Budget Exceeded";
    echo "<br>";
    } 
else {
    echo "Within Budget";
    echo "<br>";
    }

$message = ($total > 1000) ? "High" : (($total >= 500) ? "Moderate" : "Low");
echo "Expense Range: $message";
echo "<br>";

switch (true) {
    case ($total > 1000):
        echo "Message: Very High Expense";
        break;
    case ($total >= 500 && $total <= 1000):
        echo "Message: Average Expense";
        break;
    default:
        echo "Message: Low Expense";
        break;
}

function calculateTotal($food, $transport, $otherExpenses) {
    return $food + $transport + $otherExpenses;
}

function checkBudget($total) {
    if ($total > 1000) {
        return "Budget Exceeded";
    } else {
        return "Within Budget";
    }
}
?>