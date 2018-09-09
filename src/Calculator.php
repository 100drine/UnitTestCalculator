<?php
class Calculator{
    public function calculate ($str){
        if($str==null||$str==""){
            return 0;
        }
        $result = eval("return ".$str.";");
        return $result;
        
    }

} 



?>