<?php

namespace App\Exceptions;

use Exception;

class ProjectNotFoundException extends Exception
{
    public function __construct($id)
    {
        parent::__construct("Project with id {$id} does not exist");
    }
}
