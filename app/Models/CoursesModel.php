<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model {
  protected $table      = 'courses';
  protected $primaryKey = 'course_id';

  protected $returnType = 'array';
}