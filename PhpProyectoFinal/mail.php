<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// the message
$msg = "Mi primer correo electrónico.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("laraxiam04@gmail.com","Mail: Mi tienda",$msg);

echo "Correo enviado.";
?>
