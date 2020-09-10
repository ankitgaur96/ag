<?php

	if (isset($_POST['addItem'])) {

		if (!empty($_POST['itemName']) && !empty($_POST['itemPrice']) && !empty($_POST['menuID'])) {
			$itemName = $sqlconnection->real_escape_string($_POST['itemName']);
			$itemPrice = $sqlconnection->real_escape_string($_POST['itemPrice']);
			$menuID = $sqlconnection->real_escape_string($_POST['menuID']);

			$addItemQuery = "INSERT INTO tbl_menuitem (menuID ,menuItemName ,price) VALUES ({$menuID} ,'{$itemName}' ,{$itemPrice})";

			if ($sqlconnection->query($addItemQuery) === TRUE) {
				header("Location: menu.php"); 
				exit();

			} 

			else {
			
				echo "someting wong";
				echo $sqlconnection->error;
			}
		}

		
		else {
			echo "Jangan bia kosong bang";
		}

	}

	
?>
