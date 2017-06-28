<?php

class DBRow {

    public $data = null;

    public function __construct($table, $id)
    {
        $this->data = fetchFromTableById($table, $id);
    }

    public function getRelation($table, $foreignKey)
    {
        return new DBRow($table, $this->data[$foreignKey]);
    }

    public function getInverseRelation($table, $foreignKey)
    {
        return fetchRowsRelatedToRow($this->data, $table, $foreignKey);
    }

}
