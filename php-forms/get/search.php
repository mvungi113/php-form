<?php
   if($_SERVER['REQUEST_METHOD'] === "GET"){
        if(isset($_GET['term'])){
            $data = $_GET['term'];

            if($data){
                echo "<p>The result of the search for : <b>$data</b></p>";
            }
        }
   }
   ?>


