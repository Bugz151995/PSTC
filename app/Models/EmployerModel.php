<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployerModel extends Model {
  protected $table      = 'employers';
  protected $primaryKey = 'employer_id';

  protected $returnType = 'array';

  protected $allowedFields = [
    'business_name', 'contact_num', 'business_address'
  ];
}