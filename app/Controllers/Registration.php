<?php

namespace App\Controllers;

use \App\Models\EnrolleesModel;
use \App\Models\ApplicationsModel;
use \App\Models\AddressModel;
use \App\Models\EmployerModel;

class Registration extends BaseController {
  public function index() {

		echo view('templates/header');
		echo view('templates/topnavbar');
		echo view('registration');
		echo view('templates/footer');
  }
	
	public function submit() {
		$enrollee_model = new EnrolleesModel();
		$application_model = new ApplicationsModel();
		$address_model = new AddressModel();
		$employer_model = new EmployerModel();

		// get address and store to database if address exist then get the existing address
		$address = [
			'street'   => esc($this->request->getPost('street')),
			'barangay' => esc($this->request->getPost('barangay')),
			'mun_city' => esc($this->request->getPost('mun_city')),
			'province' => esc($this->request->getPost('province'))
		];

		$address_model->save($address);
		$address_id = ($address_model->insertID() !== NULL) ? $address_model->insertID() : $address_model->select('address_id')->where($address)->get();

		// get employer data this data can be null
		$employer = [
			'business_name'    => esc($this->request->getPost('business_name')),
			'contact_num'      => esc($this->request->getPost('bus_contact_num')),
			'business_address' => esc($this->request->getPost('business_address'))
		];
		$employer_model->save($employer);

		// get enrollee data
		$enrollee = [
			'last_name'    			=> esc($this->request->getPost('lastname')),
			'first_name'   			=> esc($this->request->getPost('firstname')),
			'middle_name'  			=> esc($this->request->getPost('middlename')),
			'suffix'       			=> esc($this->request->getPost('suffix')),
			'address_id'   			=> esc($address_id),
			'birthplace'   			=> esc($this->request->getPost('birthplace')),
			'birthdate'    			=> esc($this->request->getPost('birthplace')),
			'age'          			=> esc($this->request->getPost('age')),
			'nationality'  			=> esc($this->request->getPost('nationality')),
			'height'       			=> esc($this->request->getPost('height')),
			'weight'       			=> esc($this->request->getPost('weight')),
			'contact_num'  			=> esc($this->request->getPost('contact_num')),
			'tin'          			=> esc($this->request->getPost('tinno')),
			'sex'          			=> esc($this->request->getPost('gender')),
			'civil_status' 			=> esc($this->request->getPost('civil_status')),
			'hair'         			=> esc($this->request->getPost('hair')),
			'eye_color'    			=> esc($this->request->getPost('eye_color')),
			'built'        			=> esc($this->request->getPost('built')),
			'complexion'   			=> esc($this->request->getPost('complexion')),
			'father_lastname'   => esc($this->request->getPost('flname')),
			'father_firstname'  => esc($this->request->getPost('ffname')),
			'father_middlename' => esc($this->request->getPost('fmname')),
			'mother_lastname'   => esc($this->request->getPost('mlname')),
			'mother_firstname'  => esc($this->request->getPost('mfname')),
			'mother_middlename' => esc($this->request->getPost('mmname')),
			'spouse_lastname'   => esc($this->request->getPost('slname')),
			'spouse_firstname'  => esc($this->request->getPost('sfname')),
			'spouse_middlename' => esc($this->request->getPost('smname')),
			'driving_exp'       => esc($this->request->getPost('driving_exp')),
			'vehicle'           => esc($this->request->getPost('vehicle_type')),
			'employer_id'       => esc($employer_model->insertID()),
		];
		$enrollee_model->save($enrollee);
		// get the application data
		$application = [
			'type'        => esc($this->request->getPost('application_type')),
			'enrollee_id' => esc($enrollee_model->insertID()),
			'course_id'   => esc($this->request->getPost('course')),
		];
		
		$application_model->save($application);

		session()->setFlashData('success', 'Your application has been successfully recorded.');
		
		
	}
}