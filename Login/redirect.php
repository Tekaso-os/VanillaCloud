<?php
if ( $_SESSION['logado'] != true ) {
	header('location: ../index.php');
}else{
	header('location: ../../index.php');
}