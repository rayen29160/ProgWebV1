<?php
	function testConnexion($id, $mdp){
		
		if($id=="abc" && mdp=="abc") {
			echo "win".$id." ".$mdp;
		} else {
			echo "fail".$id." ".$mdp;
		}
	}
	
?>