<?php
        // connection to database
			$connect = mysqli_connect("localhost", "root", "", "test");


            if(isset($_POST['submit'])){
                $url = 'https://jsonplaceholder.typicode.com/posts';
                $data = file_get_contents($url);
                $array = json_decode($data, true);
                foreach ($array as $row){
                    $sql = "INSERT INTO ecare (userid,id, title, body) VALUES
                ('".$row["userId"]."','".$row["id"]."', '".$row["title"]."', '".$row["body"]."')";
    
                    mysqli_query($connect,$sql);
                }	
                echo "Data saved successfully";
                
            }
?>