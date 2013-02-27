<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mongoConnect
 *
 * @author tim
 */
class mongoConnect {
    
    
    public function __construct() {

    }
    
    public function connect() {
        
        $m = new MongoClient(JSON_GEN_DB_PREF.JSON_GEN_DB_HOST.":".JSON_GEN_DB_PORT);
        return $m;
    }
    
    public function getDbList() {
        
        $m = $this->connect();
        
        $dbs = $m->listDBs();
        
        $this->closeConnection($m);
        return $dbs;
    }
    
    public function closeConnection($m) {
        $m->close();
    }
    
    
    
}

?>
