<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model {
  protected $table      = 'address';
  protected $primaryKey = 'address_id';

  protected $returnType = 'array';
  
  protected $allowedFields = [
    'street', 'barangay', 'mun_city', 'province'
  ];
}