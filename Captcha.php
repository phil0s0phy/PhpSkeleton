<?php
class Captcha
{

	function Captcha($pattern, $leftOpnd, $oprt, $rightOpnd)
	{
		$OPERAND_NUM = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
		$OPERAND_TXT = array("ZERO", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE");
		$OPERATOR = array("", "+", "-", "*");
		
		if($pattern == 1)
		{
			echo $OPERAND_NUM[$leftOpnd] . ' ' . $OPERATOR[$oprt] . ' ' . $OPERAND_TXT[$rightOpnd];
		} else if($pattern == 2)
		{
			echo $OPERAND_TXT[$leftOpnd] . ' ' . $OPERATOR[$oprt] . ' ' . $OPERAND_NUM[$rightOpnd];
		}
	}
}

$cap = new Captcha(1, 1, 1, 1);
echo "\n";

$cap = new Captcha(2, 1, 1, 1);
echo "\n";
?>
