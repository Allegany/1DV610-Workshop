<?php

class Calculator {
  private float $result = 0;

  function calculateSum($number1, $number2, $operator)
  {
    switch ($operator) {
      case 'A':
        $this->result = ($number1 + $number2);
        break;
      case 'S':
        $this->result = ($number1 - $number2);
        break;
      default:
        break;
    }
  }

  function getResult()
  {
    return $this->result;
  }
}

?>