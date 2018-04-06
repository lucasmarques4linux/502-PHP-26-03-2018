<?php 

echo "<pre>";

// Validadores

var_dump(filter_var('lucas@lucas.com',FILTER_VALIDATE_EMAIL));
var_dump(filter_var('25',FILTER_VALIDATE_INT));

// Filtros

var_dump(filter_var('\n\tlucas@lucas.com\n\n',FILTER_SANITIZE_EMAIL));

var_dump(filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT));