<?php

	function hello($who){

		echo "hello $who";
		if ($who == "World"){

			return;
		}

		echo ", how are you?";
	}

	hello("World");
	hello("Mofiz");

?>