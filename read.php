<?php
        // connection to database
			include './connect.php';
?> 


<!DOCTYPE html>
<html>

<head>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
	</script>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script>

<script src="https://kit.fontawesome.com/4b51f5c97e.js" crossorigin="anonymous"></script>


	<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        html{
            scroll-behavior: smooth;
        }
        body{            
            font-family: 'Poppins', sans-serif;
			background-color: #337ab7;
        }

		


		.box {
			min-width:650px ;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 3rem;

		}
        .title {
            display: flex;
            justify-content: space-between;
        }
	</style>
</head>

<body>
	<div class="container box">
        <div class="title">
		<h2>
			eCare Infoway LLP
		</h2>
        <form action="" method="post">
            <input type="submit" value="Refresh" name="submit" class="btn btn-primary">
        </form>
        </div>
		
	<table class="table table-bordered">
        <tr>	 			
			<th width="5%">ID</th>
            <th width="5%">User ID</th>
            <th width="40%">Title</th>
            <th width="40%">Body</th>
            <th width="5%">Edit</th>
            <th width="5%">Delete</th>
        </tr>

		<?php

		$sql="Select * from `ecare`";
		$result=mysqli_query($connect,$sql);
		if($result){
			while($row=mysqli_fetch_array($result)){
				$userid=$row["userid"];
				$id=$row["id"]; 
				$title=$row["title"];
				$body=$row["body"];
				echo '
				<tr>
				
				<td>'.$id.'</td>
				<td>'.$userid.'</td>
				<td>'.$title.'</td>
				<td>'.$body.'</td>
				<td width="5%"><a href="update.php?updateid='.$id.'"><i class="fas fa-edit"></i></a></td>
            	<td width="5%"><a href="delete.php?deleteid='.$id.'"><i class="fas fa-trash-alt"></i></a></td>
				</tr>
				';
			}
		};
                
		?>

    </table>
	</div>
</body>



</html>