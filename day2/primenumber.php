<?php

if(isset($_POST['submit'])){
	echo checkprime($_POST['number']);
	
}
function checkprime($n)
{
	$flag=0;
	for($i=2;$i<$n;$i++)
	{
		if($n%$i==0)
		{
			$flag=1;
			break;
		}
	}
if($flag==1)
{
    return "3 primenumber not";
}
 else
  {
     return "3 is primenumber";	
  }

}

?>
  <form method="post">
         <input type="text" name="number" />
         <input type="submit" name="submit"/>		 
	</form>	 