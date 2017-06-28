<?php

class DBRow {

    public $data = null;

    public function __construct($table, $id)
    {
        $this->data = fetchFromTableById($table, $id);
    }

}
