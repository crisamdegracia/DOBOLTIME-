
	
<?php
	//-----------------------------------------------------------
//		$_SESSION['id'] = (isset($_SESSION['id']))? $_SESSION['id'] : '';

		if(isset($_SESSION['id'])){
			// Check only if our user is the current user
			//check the isFollowing table for the id's  users that our users is following 
			$query = "SELECT * FROM isfollowing WHERE follower='".mysqli_real_escape_string($link, $_SESSION['id'])."' ";

			$result = mysqli_query($link,$query);

			$whereClause = '';

			while ( $row = mysqli_fetch_assoc($result)){

				//DKO MAINTINDIHAN TONG WHERECLAUSE VAR na to talga potaena eee .. pero teka ikoment ko
				//CONNECTED sya dun sa baba
				// UPDATE : ung where clause .. dadaan sya sa tatlo . sa public iseset sya na empty .. so ang value nya waley
				// sa Timeline naman which is dito iset nya ung value
				// sa yourtweet din iset nya ung value don..
				if( $whereClause == '') $whereClause = " WHERE";
				else { $whereClause .= " OR"; }

				$whereClause .=" userid=" .$row['isFollowing'];
				//			WHERE userid= $row['isFollowing']
			}
		} else {
//			$_SESSION['id'] = '';
			$whereClause = '';
		}

?>
