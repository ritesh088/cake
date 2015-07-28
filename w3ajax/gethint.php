<script>
function myfunction()
{
var x = document.getElementById("txt").value;
document.getElementById("k").innerHtml=x;
}
</script>

<?php 
// Array with names
       
	   $a[]="amit";
	   $a[]="ritesh";
	   $a[]="khushboo";
	   $a[]="archna";
	   $a[]="ravi";
	   $a[]="gunjan";
	   $a[]="dewesh";
	   $a[]="kishor";
		
		
		// get the q parameter from URL
        $q = $_REQUEST["q"];
		$hint="";
		
		//lookup all hints fron array if $q is different from        ""
        if ($q !== "")
		{
			$q = strtolower($q);
			$length = strlen($q);
			foreach($a as $name)
			{
				 if (stristr($q, substr($name, 0, $length)))
				{
					if ($hint === "")
					{
						$hint = $name;
					}
					else
					{
						?>
                        <p> Here Your Name with </p>
                        <p id="k"></p>
                       
                        <?php
						
						$hint .= ", $name";
					}
				}
			}
		}
		// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
	
   
?>