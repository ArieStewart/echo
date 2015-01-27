function echo()
{
  for (x = 0; x < arguments.length; x++)
  {
  	document.write(arguments[x].toString() + "<br>");
  }
  document.write("<br>")

}

echo();
echo('bla');
echo('foo', 'bar', 'baz');
