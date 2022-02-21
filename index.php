<?php
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

	<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        html{
            scroll-behavior: smooth;
        }
        *{
            margin: 0;
        }
        body{            
            font-family: 'Poppins', sans-serif;
        }

        h2{
            margin: 0;
        }
		.box {
			width: 750px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 100px;
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
        <div>
        <form action="" method="post">
            <a href="./read.php" class="btn btn-primary">Get Data</a>
        </form>
        </div>
        </div>
	</div>
</body>

</html>