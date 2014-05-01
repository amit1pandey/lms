<?php
	$myButtonText = "click me if you can!";
?>
 
<!DOCTYPE html>
<html>
  <head>
  <script>
	function get_accept(input)
	{
		alert(input);
	}
	function changeText(el)
	{
		el.innerHTML = '<?php echo $myButtonText;?>';
	}
  </script>
  </head>
  <body>
    <button onclick="changeText(this); get_accept('<?php echo $myButtonText;?>'); this.disabled='disabled';">Disable Me</button>
  </body>
</html>