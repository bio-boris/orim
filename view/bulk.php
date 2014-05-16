<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


class bulk_interface{



    function dropDown(){
        $plants = array('athaliana','maize');

        $html = array();
        $html[] = "<select id='bulk_organisms' name='bulk_organisms' title='Bulk Organisms Dropdown'>";

        foreach ($plants as &$plant){
            $html[] .= "<option value='$plant'>$plant</option>";
        }
        $html[] ="</select>";
    
    
        return implode("\n",$html); 



    }


    function generateBody(){
        $dropdown = $this->dropDown();
        return $dropdown;
    }

}

?>
