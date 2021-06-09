<?php
    function query(/* $sql [, ...]*/){

        $sql = func_get_arg(0);

        $parameters = array_slice(func_get_args(),1);

        static $handle;

        if (!isset($handle)){

            try{

                $handle = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME . ";port=" . PORT, USERNAME, PASSWORD);

                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }catch(Exception $e){

                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        $statement = $handle->prepare($sql);
        if($statement === false){

                trigger_error($handle->errorInfo()[2], E_USER_ERROR);
                exit;
        }

        $results = $statement->execute($parameters);

        if($results !== false){

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }else{

            return false;
        }
    }
    
    function redirect(){
        header("Location: http://example.com");
    }
?>