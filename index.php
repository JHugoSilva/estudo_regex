<?php

/**
 * \Barra invertida separa os caracteres
 * Grupo numerico e quantidade de ocorrencias limite e tipo
 *[0-9]{1,5}
 *
 * ? = {0,1}
 * * = {0,}
 * + = {1,}
 * 
 * Campos obrigatorios para expressao regular:'/^$/'
 * 
 * EMAIL:[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}
 * DATA:[0-9]{2}\/[0-9]{2}\/[0-9]{4} 00/00/0000
 * TELEFONE:\([0-9]{2}\) [0-9]{5}\-[0-9]{4} (00) 00000-0000
 * CEP:[0-9]{2}\.[0-9]{2}\-[0-9]{4} 59.00-0000
 * CPF:[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}
 * URL:http(s)?:\/\/(www\.)?[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}
 * 
 * $string='http://teste.com.br';
 * $expressao=;
 *if(preg_match($expressao,$string)){
 *   echo'true';
 *}else{
 *   echo'false';
 *} 
 */

 function validarEmail($email){
     if(preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)){
        return true;
     }else{
        return false;
     }
 }

 if(!validarEmail('joao@email.com')){
     echo 'Informe um email válido';
 }else{
     echo 'Email Valido Parabens';
 }

