<?php

class DBRow {

    public $data = null;

    public function __construct($table, $id)
    {
        $this->data = fetchFromTableById($table, $id);
    }

    public function getRelation($table, $foreignKey)
    {
        return fetchRelatedRow($this->data, $table, $foreignKey);
    }

    public function getInverseRelation($table, $foreignKey)
    {
        return fetchRowsRelatedToRow($this->data, $table, $foreignKey);
    }

}
