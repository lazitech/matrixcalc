<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';
$num1 = isset($_GET['num1']) ? (float)$_GET['num1'] : 0;
$num2 = isset($_GET['num2']) ? (float)$_GET['num2'] : 0;
switch ($action) {
	case 'add':
		echo "$num1 + $num2 = ", $num1 + $num2;
		break;
	case 'sub':
		echo "$num1 - $num2 = ", $num1 - $num2;
		break;
	case 'mul':
		echo "$num1 * $num2 = ", $num1 * $num2;
		break;
	case 'div':
		echo "$num1 / $num2 = ", $num2 ? ($num1 / $num2) : '除数不能为0';
		break;
	default:
		echo '参数不正确';
}

// ① 计算 22 + 33 的结果
// 测试URL：http://localhost/calc.php?action=add&num1=22&num2=33
// ② 计算 33.2 - 22.1 的结果
// 测试URL：http://localhost/calc.php?action=sub&num1=33.2&num2=22.1
// ③ 计算 12 * 23 的结果
// 测试URL：http://localhost/calc.php?action=mul&num1=12&num2=23
// ④ 计算 50 / 25 的结果
// 测试URL：http://localhost/calc.php?action=div&num1=50&num2=25

