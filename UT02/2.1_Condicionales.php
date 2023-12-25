<?php
//Condicinal if, if...else y elseif
if ($a < $b)
  print "a es menor que b";
elseif ($a > $b)
  print "a es mayor que b";
else
  print "a es igual a b";

//Condicional switch
switch ($a) {
  case 0:
    print "a vale 0";
    break;
  case 1:
    print "a vale 1";
    break;
  default:
    print "a no vale 0 ni 1";
}
