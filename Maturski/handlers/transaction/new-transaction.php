<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/Maturski/autoload.php");

use Controllers\Transaction;
use Controllers\User;
if(isset($_SESSION['id']))
$user=new User($_SESSION['id']);
else $user=new User();
$user->redirectUser(true,false,true);
$t=new Transaction();
$t->insertTransaction($_POST['money_amount'],$_POST['date'],$_POST['descriptio'],$_POST['target'],$_POST['category'],$_POST['subcategory'],$_POST['type']);
header('Location: /Maturski/index.php');
?>