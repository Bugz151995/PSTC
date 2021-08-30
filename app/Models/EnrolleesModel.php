<?php

namespace App\Models;

use CodeIgniter\Model;

class EnrolleesModel extends Model {
  protected $table      = 'enrollees';
  protected $primaryKey = 'enrollee_id';

  protected $returnType = 'array';

  protected $allowedFields = [
    'last_name', 'first_name', 'middle_name', 'suffix', 'birthplace', 'birthdate', 'nationality', 'height', 'weight', 'contact_num', 'tin', 'sex', 'civil_status', 'hair', 'eye_color', 'built', 'complexion', 'father_lastname', 'father_firstname', 'father_middlename', 'mother_lastname', 'mother_firstname', 'mother_middlename', 'spouse_lastname', 'spouse_firstname', 'spouse_middlename', 'driving_exp', 'vehicles_with_exp', 'address_id', 'employer_id'
  ];
}