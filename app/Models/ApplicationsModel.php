<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicationsModel extends Model {
  protected $table      = 'applications';
  protected $primaryKey = 'application_id';

  protected $returnType = 'array';

  protected $allowedFields = [
    'type', 'submitted_at', 'enrollee_id', 'course_id'
  ];
}