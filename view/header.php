<?php

class generic_header{

    function generic_header($page = ""){
        $site_url = "http://localhost"; #Move this to config file
        $jquery = "<script src='$site_url/js/jquery-1.11.1.min.js'></script>";
        $bootstrap = "<script src='$site_url/js/bootstrap-3.1.1-dist/bootstrap.js'></script>";
        $boostrap_css = "<link href='$site_url/css/bootstrap.min.css' rel='stylesheet'>";
        $navigation = $this->navbar($page);

        $html = array($jquery, $bootstrap,$boostrap_css,$navigation,"<br>");

        return implode("\n",$html);

    }

    function navbar(){
        $page =  $_SERVER['PHP_SELF'];

        if($page == "/view/splash.php"){
            return "<a href='/index.php'>Index</a>________<a href='/view/splash.php'>I AM SET Splash Page</a>";
        }
        

            
            return "<a href='/index.php'>I AM SET Index</a>________<a href='/view/splash.php'>Splash Page</a>";
        
    }

}


?>
