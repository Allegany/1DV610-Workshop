<?php
require_once("Calculator.php");

$calculator = new Calculator();
$result = 0;

if (isset($_POST['submit']))
{
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $operator = $_POST['operator'];

  $calculator->calculateSum($number1, $number2, $operator);
  $result = $calculator->getResult();
}

?>

<form action="index.php" method = "post">
  <p>
    Number 1:<br />
    <input type="number" id="number1" name="number1" size="20" maxlength="12"/>
  </p>
  <p>
    Number 2:<br />
    <input type="number" id="number2" name="number2" size="20" maxlength="12"/>
  </p>
  <p>
    Operator:<br />
    <select name = "operator">
      <option value=""> Select operator</option>
      <option value="A"> Addition (+)</option>
      <option value="S"> Subtraction (-)</option>
    </select>
  </p>
  <p className="result">Sum: <?= $result ?></p>
  <input type ="submit" id="submit" name = "submit" value="Calculate!" />
</form>
