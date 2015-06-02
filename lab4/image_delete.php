<?php
    if ( isset( $_GET['path'] ) && file_exists( $_GET['path'] ) )
    {
        unlink( $_GET['path'] );
        echo "Delete true";
    }
    else
    {
        echo "Delete false";
    }