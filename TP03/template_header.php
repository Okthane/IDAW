<?php
    function renderHeader($style)
    {
        echo "<!DOCTYPE html>";
        echo"<head>";
        echo'<meta charset="UTF-8">';
        echo'<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        if ($style=="style1"){echo'<link href="styles.css" rel="stylesheet" type="text/css"/>';}
        else{echo'<link href="styles2.css" rel="stylesheet" type="text/css"/>';}
        echo'<title>Pierre Marque</title>';
        echo"</head>";
        echo'<body class = "body">';
    }
?>