<?php
    session_start();
    require_once("connected.php");
    require_once("template_header.php");
    if(isset($_SESSION['login']))
    {

        $userlogin = $_SESSION['login'];
        /*echo "<nav = menu f>";
            echo "<nav class='item_menu_deco'> $userlogin </nav>";
            echo "<nav class='item_menu_deco'> <form id='login_form' action='session_over.php' method='POST'><th></th><td><input type='submit' value='disconect' /></td></tr> </nav>";
        echo "</nav>";*/
        $currentPageId = 'accueil';
    }
    else 
    {
        $currentPageId = 'login';
    }
    $currentLanguage = 'fr';
    $style="style1";
    if(isset($_COOKIE['style']))
    {
        $style = $_COOKIE['style'];
    }
    if(isset($_GET['css']))
    {
        $style = $_GET["css"]; // Contenu du cookie
        setcookie("style", $style, time()+3600);
    }

    require_once("template_menu.php");
    if(isset($_GET['page'])) 
    {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) 
    {
        $currentLanguage = $_GET['lang'];
    }
    renderHeader($style);
    if(isset($_SESSION['login']))
    {

        echo "<nav = menu f>";
            echo "<nav class='item_menu_deco'> $userlogin </nav>";
            echo "<nav class='item_menu_deco'> <form id='login_form' action='session_over.php' ><th></th><td><input type='submit' value='disconect' /></td></tr> </form> </nav>";
        echo "</nav>";
    }
    renderMenuToHTML($currentPageId,$currentLanguage,$style);
    
?>  
<section>
    <?php
        $pageToInclude = $currentLanguage."/".$currentPageId . ".php"; 
        if(is_readable($pageToInclude))
        {
            require_once($pageToInclude);
        }
        else
        {
            require_once("error.php");
        }
    ?>  
<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>
</section>
<?php
    require_once("template_footer.php");
?>

