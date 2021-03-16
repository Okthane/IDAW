<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    $currentLanguage = 'fr';
    if(isset($_GET['page'])) 
    {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) 
    {
        $currentLanguage = $_GET['lang'];
    }

    renderMenuToHTML($currentPageId,$currentLanguage);
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
<?php
    $content = $_GET['css']; // Contenu du cookie
    setcookie("style", $content, time()+3600);
?>
</section>
<?php
    require_once("template_footer.php");
?>







