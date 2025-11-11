<?php

$expenses = [
            "Food" => 150,
            "Transport" => 50,
            "Entertainment" => 75
            ];

echo "My Expenses:";
echo "<pre>";
print_r($expenses);
echo "</pre>";


$food = array("Apple","Banana","Burger");
echo "<pre>";
print_r($food);
echo "</pre>";<?php

$expenses = [
            "Food" => 150,
            "Transport" => 50,
            "Entertainment" => 75
            ];

echo "My Expenses:";
echo "<pre>";
print_r($expenses);
echo "</pre>";


$food = array("Apple","Banana","Burger");
echo "<pre>";
print_r($food);
echo "</pre>";
echo "<br>";

echo "Function : array_push";
array_push($food,"Orange","Lemon");
echo "<pre>";
print_r($food);
echo "</pre>";


echo "Function : array_pop";
array_pop($food);
echo "<pre>";
print_r($food);
echo "</pre>";

echo "Function : array_merge";
$color = array("Reg","White","Blue");
$fruit = array("Lemon","Orange","Apple");
echo "<pre>";
print_r(array_merge($color,$fruit));
echo "</pre>";

echo "Function : array_merge";
$color = array("Reg","White","Blue");
$fruit = array("Lemon","Orange","Apple");
echo "<pre>";
print_r(array_merge($color,$fruit));
echo "</pre>";

echo "Function : array_sum <br>";
$myExpenditure = array(500,300,200);
echo "My Expenditure is : ".(array_sum($myExpenditure))."<br>";

echo "Function : explode <br>";
echo "<pre>";
$expenseString = "150,50,75,100";
print_r(explode(",",$expenseString));
echo "</pre>";

echo "Function : implode <br>";
$expenseArray = [150,50,75,100];
print_r(implode("|",$expenseArray));

echo "<br>";
$myText = "I am having fun learning PHP.";

echo "strtoupper : ".strtoupper($myText)."<br>";
echo "strlen : ".strlen($myText)."<br>";
echo "substr : ".substr($myText,0,15)."<br>";
echo "str_replace : ".str_replace("PHP","Python",$myText)."<br>";

$file = "expenses.txt";
$fileData = "";

foreach ($expenses as $key => $value) {
    $fileData .= "$key: $value\n";
}
file_put_contents($file, $fileData);
$newExpense = "Shopping: 100\n";
file_put_contents($file, $newExpense, FILE_APPEND);

echo file_get_contents($file);
?>
echo "<br>";

echo "Function : array_push";
array_push($food,"Orange","Lemon");
echo "<pre>";
print_r($food);
echo "</pre>";


echo "Function : array_pop";
array_pop($food);
echo "<pre>";
print_r($food);
echo "</pre>";

echo "Function : array_merge";
$color = array("Reg","White","Blue");
$fruit = array("Lemon","Orange","Apple");
echo "<pre>";
print_r(array_merge($color,$fruit));
echo "</pre>";

echo "Function : array_merge";
$color = array("Reg","White","Blue");
$fruit = array("Lemon","Orange","Apple");
echo "<pre>";
print_r(array_merge($color,$fruit));
echo "</pre>";

echo "Function : array_sum <br>";
$myExpenditure = array(500,300,200);
echo "My Expenditure is : ".(array_sum($myExpenditure))."<br>";

echo "Function : explode <br>";
echo "<pre>";
$expenseString = "150,50,75,100";
print_r(explode(",",$expenseString));
echo "</pre>";

echo "Function : implode <br>";
$expenseArray = [150,50,75,100];
print_r(implode("|",$expenseArray));

echo "<br>";
$myText = "I am having fun learning PHP.";

echo "strtoupper : ".strtoupper($myText)."<br>";
echo "strlen : ".strlen($myText)."<br>";
echo "substr : ".substr($myText,0,15)."<br>";
echo "str_replace : ".str_replace("PHP","Python",$myText)."<br>";

fopen('expenses.txt',w);
fwrite('expenses.txt',"My expenses are high");
fclose('expenses.txt');

file_put_contents($file, $newExpense, FILE_APPEND);
/**



; // append data

echo "<h3>File Contents:</h3>";
echo nl2br(file_get_contents($file)); 
*/
?>