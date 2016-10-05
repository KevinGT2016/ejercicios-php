<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
  //Ejercicio 1
  function generaArrayInt(){
    $array = array();
    $n = rand(1,100);
    $array = $n;
    return "Los numero generado es ".$array." <br>";
  }

  //Ejercicio 2
  function minimoArrayInt() {
   $array = array(1, 5, 6, 7, 8, 10, 2, 3);
   $minimo =  $array[0];
   for ($i=0; $i < count($array); $i++) {
     if($minimo > $array[$i]) {
       $minimo = $array[$i];
      }
   }
   return "El numero menor es ".$minimo."<br>";
  }

  //Ejercicio 3
  function maximoArrayInt() {
   $array = array(1, 5, 6, 7, 8, 10, 2, 3);
   $maximo =  $array[0];
   for ($i=0; $i < count($array); $i++) {
     if($maximo < $array[$i]) {
       $maximo = $array[$i];
      }
   }
   return "El numero mayor es ".$maximo;
  }
  
  //Ejercicio 4
  function mediaArrayInt() {
    $array = array(3, 1, 9,);
    $mediano =  $array[0];
  }
  //Ejercicio 5
  function estaArrayInt($numero){
    $array = array(1, 2, 3, 4, 5, 6, 7);
    foreach ($array as $key => $value) {
      if($numero==$value){
        return "<br>El numero ".$numero." si esta dentro del array ";
      }
    }
    return "<br>El numero ".$numero." no esta dentro del array ";
  }
  //Ejercicio 6
    function posicionEnArray($buscar) {
      $array = array(13, 24, 36, 47, 58, 96, 73);
      foreach ( $array as $key => $value ) {
          if ( $buscar==$value ) {
            return "<br>El numero ".$buscar. " esta en la posicion "."[".$key."]";
          }
      }
            return "<br>El numero no se encuntra";
    }
 //Ejercicio 7
    function volteaArrayInt(){
      $array = array(1, 2, 3, 4, 5);
      $array1 = "";
      for ($i=0; $i <count($array) ; $i++) {
        $array1 = $array[$i].$array1;
      }

      return "<br>El array inverso es: ".$array1;
    }
    //Ejercicio 8
    function rotaDerechaArrayInt(){

    }

  //programa principal
   echo generaArrayInt();
  echo minimoArrayInt();
  echo maximoArrayInt();
  // echo mediaArrayInt();
  echo estaArrayInt(3);
  echo posicionEnArray(13);
  echo volteaArrayInt();
  echo rotaDerechaArrayInt();
 ?>



</body>
</html>
