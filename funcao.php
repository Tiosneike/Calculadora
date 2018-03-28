<?php
require_once 'formulario.html';

if ($_POST){
    $v1 = ($_POST) ["v1"];
    $v2 = ($_POST) ["v2"];
    $op = $_POST ["operacao"];
}

    function validar ($v1,$v2){
        return is_numeric($v1)&&is_numeric($v2);
    }
    
    function somar($v1,$v2){
      if(validar($v1,$v2))  return $v1 + $v2;
      else echo "O valor Inserido é Invalido"   ;
    }

    function subtrair($v1,$v2){
      if(validar($v1,$v2))  return $v1 - $v2;
      else echo "O valor Inserido é Invalido";
    }

    function dividir($v1,$v2){
      if(validar($v1,$v2))  return $v1 / $v2;
      else echo "O valor Inserido é Invalido";
    }
  
    function multiplicar ($v1,$v2){
      if(validar($v1,$v2))  return $v1 * $v2;
      else echo "O valor Inserido é Invalido";
    }

      if (isset($_POST['doCalc'])) {

        if ($_POST['operacao'] == "somar") {
        
        $resultado = somar( $_POST['v1'] , $_POST['v2']);
        
        echo $resultado;
        
        } elseif ($_POST['operacao'] == "subtrair") {
        
        $resultado = subtrair($_POST['v1'] , $_POST['v2']);
        
        echo $resultado;
        
        } elseif ($_POST['operacao'] == 'multiplicar') {
        
        $resultado = multiplicar( $_POST['v1'] , $_POST['v2']);
        
        echo $resultado;
        
        } elseif ($_POST['operacao'] == 'dividir') {
        
        $resultado = dividir($_POST['v1'] , $_POST['v2']);
        
        echo $resultado;
        
        }
    }   
?>