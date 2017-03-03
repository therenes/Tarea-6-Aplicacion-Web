<?php

file_put_contents( "votantes.txt" , $_POST[ "data" ] , LOCK_EX ) ;
echo true ; 

?>