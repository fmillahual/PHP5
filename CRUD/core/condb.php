<?php


class condb
{
     const db_name   = "localhost";
     const db_schema = "crud_user";
     const db_user   = "root";
     const db_pass   = "";
   
    public function enabledCon()
    {
        
        if(mysql_connect(self::db_name,self::db_user,self::db_pass) or die (mysql_error()))
        {
            if(mysql_select_db(self::db_schema) or die (mysql_error())){
               
            }
            else
            {
                echo "no se puede encontrar el esquema";
            }
        }
        else
        {
            echo "no se puede conectar a la base de datos";
        }
        
        
    }
    
    
    
}


?>