<?php
    //1 
    $link = mysqli_connect("localhost","root","","rental", 7188) or die("Error " . mysqli_error($link));
    echo "connect to database rental true!";

    if ( mysqli_connect_errno() )
    {
        echo "Sorry. Unable to connect to database";
        exit();
    }

    //2
    $query="SELECT name FROM dvd WHERE product_year=2010";
    $result = mysqli_query($link, $query);
    
    if ($result)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            var_export($row);
        }
    }