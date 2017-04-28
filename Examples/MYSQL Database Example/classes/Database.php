<?php

class Database {

    public $_link, $_numRows, $_result;

    public function __construct($server, $username, $password, $db) {
        $this->_link = mysql_connect($server, $username, $password) or dir(mysql_error());
        mysql_select_db($db, $this->_link) or die(mysql_error());
    }

    public function disconnect() {
        mysql_close($this->_link);
    }

    public function query($sql) {
        $this->_result = mysql_query($sql, $this->_link);
        $this->_numRows = mysql_num_rows($this->_result);
    }

    public function numRows() {
        return $this->_numRows;
    }

    public function rows() {
        $rows = array();
        for($x = 0; $x < $this->numRows(); $x++) {
            $rows[] = mysql_fetch_assoc($this->_result);
        }
        return $rows;
    }

}

?>
