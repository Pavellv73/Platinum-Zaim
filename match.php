<?php 
$phone = '89084888086';
if (preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $phone)) {
	echo 'true';
} else {
	echo 'false';
}
