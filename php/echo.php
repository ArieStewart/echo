<?php

function echoA()
{
  $sent = func_get_args();

  foreach ($sent as $value) 
  {
  	echo $value."<br>";
  }
  echo "<br>";
}

echoA();

echoA('bla');

echoA('foo', 'bar', 'baz');
