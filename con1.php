<?php

$x = mysqli_connect("localhost","root","","tourism_db") or die(mysqli_error($x));
if($x)
{
	// echo "<script>";
    //         echo "alert('Database Connected Successfully');";
            
    //         echo "</script>";
}
else
{
	echo "Failed";
}

?>