<?php


namespace Controllers;


use Models\schema;

class schemaController
{
    private $schema;
    private array $schemas;
    public function getCpf($cpf)
    {
        $this->schema = new schema();
        $x = $this->schemas = $this->schema->verifyCPFAccess($cpf);
        echo json_encode($x);
    }

}