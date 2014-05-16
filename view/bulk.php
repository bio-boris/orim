<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


class bulk_interface{



    function dropDown(){
        $plants = array('athaliana','maize');

        $dropdown = "<select id='bulk_organisms' name='bulk_organisms' title='Bulk Organisms Dropdown'>";
        $selects = array();    

        foreach ($plants as $plant){
            $selects[] .= "<select value='$plant'>$plant<select>";
        }
        $end_dropdown ="</select>";
    
        $html = array($dropdown,$selects,$end_dropdown);
    
        return implode("\n",$html); 



    }


    function generateBody(){
        $dropdown = $this->dropDown();
        return $dropdown;
    }

}

?>
