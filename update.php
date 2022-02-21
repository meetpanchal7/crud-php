<?php
        // connection to database
			include './connect.php';
			$id =  $_GET['updateid'];
			$sql = "SELECT * from `ecare` where `id` =$id ";
			$result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_array($result);
			$userid=$row["userid"];
			$id=$row["id"]; 
			$title=$row["title"];
			$body=$row["body"];
			
			if (isset($_POST['update'])){
					$title=$_POST["title"];
					$body=$_POST["body"];

					$sql = "update `ecare`set id=$id, title='$title',body='$body' where  id=$id";

					$result=mysqli_query($connect,$sql);
					if ($result){
						// echo "updated successfully";
						header('location:read.php');
					}
			}
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

		h2{
			text-align: center;
		}

		.container .form label{
			display: block;
		}
		.container .form input{
			width: 100%;
			margin: 0.5rem 0;
		}

		/* .container .form:nth-child(4) input{
			height: 10rem;
		} */
	</style>
</head>

<body>

	<div class="container box">
		<h2>
			eCare Infoway LLP
		</h2>

		<form action="" method="post">
			<div class="form">
				<label for="id">Id</label>
				<input type="number" name="id" disabled value="<?php echo $id;?>">
			</div>
			<div class="form">
				<label for="userid">User ID</label>
				<input type="number" name="userid" disabled value="<?php echo $userid;?>">
			</div>
			<div class="form">
				<label for="title">Title</label>
				<input type="text" placeholder="" name="title" value="<?php echo $title;?>">
			</div>
			<div class="form">
				<label for="body">Body</label>
				<input type="textarea" name="body"  name="body" value="<?php echo $body;?>">
			</div>
			<div class="form">
				<input type="submit" value="Update" class="btn btn-primary" name="update">
			</div>
			
		</form>
		
    </table>
	</div>
</body>
</html>
