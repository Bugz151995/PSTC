    <!--Main Content-->
    <main class="container mt-3">
      <!--Breadcrumbs-->
      <div class="bg-light px-4 rounded shadow-sm pt-2 pb-1 mb-3">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb mb-0">
            <li class="breadcrumb-item" aria-current="page">
              <a href="<?= site_url()?>" class="text-decoration-none"><i class="fas fa-home"></i> Home</a>
            </li>   
            <li class="breadcrumb-item active" aria-current="page">Registration</li>
          </ul>
        </nav>
      </div>

      <!--Form Selection Course-->
      <h6 class="text-danger ps-3 bg-light mb-0"><em>Select Course</em></h6>
      <?= form_open('registration/submit')?>
        <div class="d-flex justify-content-center bg-light p-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="course" id="theoretical" value="1">
            <label class="form-check-label bg-primary p-1 text-white rounded" for="inlineRadio1">Thoeretical Driving Course</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="course" id="practical" value="2">
            <label class="form-check-label bg-success p-1 text-white rounded" for="inlineRadio2">Practical Driving Course</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="course" id="addrestriction" value="3">
            <label class="form-check-label bg-danger p-1 text-white rounded" for="inlineRadio2">Additional Restriction</label>
          </div>
        </div> 

        <div class="bg-light p-3 h5">INSTRUCTION
          <div class="d-flex">
            <p class="h6 mx-4">1. Accomplish the form correctly</p>
            <p class="h6 mx-4">2. Print Data Legibly</p>
          </div>
        </div>
        <!-- Applicant information -->
        <div class="row">
          <div class="col-lg-12">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-lg-3 g-2 px-3">
              <div class="col">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control form-control-sm " id="lastname" name="lastname" placeholder="Last Name here...">
              </div>
              <div class="col">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control form-control-sm " id="firstname" name="firstname" placeholder="First Name here...">
              </div>
              <div class="col">
                <label for="middlename" class="form-label">Middle name</label>
                <input type="text" id="middleName" class="form-control form-control-sm " name="middlename" placeholder="Middle Name here..."> 
              </div>
              <div class="col">
                <label for="suffix" class="form-label">Name Extension</label>
                <input type="text" class="form-control form-control-sm " id="suffix" name="suffix" placeholder="Name Extension here...">
              </div>
            </div> 
          </div>
        </div>

        <!-- complete address -->
        <label for="completeAddress" class="h6 text-center bg-light w-100 mt-4"><u>Complete Address</u></label>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 px-3 g-2 g-lg-3"> 

          <div class="col">
            <label for="street" class="form-label">House#/Street/Sitio/Purok</label>
            <input type="text" id="street" name="street" class="form-control form-control-sm"  placeholder="House#/Street/Sitio/Purok here...">
          </div>

          <div class="col">
            <label for="barangay" class="form-label">Barangay</label>
            <input type="text" id="barangay" name="barangay" class="form-control form-control-sm" placeholder="Barangay here...">
          </div>

          <div class="col">
            <label for="mun_city" class="form-label">Municipality/ City</label>
            <input type="text" id="mun_city" name="mun_city" class="form-control form-control-sm" placeholder="Municipality/City here...">
          </div>

          <div class="col">
            <label for="province" class="form-label">Province</label>
            <input type="text" id="province" name="province" class="form-control form-control-sm " placeholder="Province here...">
          </div>
        </div>
        
        <label for="completeAddress" class="h6 text-center bg-light w-100 mt-4">&nbsp;</label>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 px-3 g-2 g-lg-3">
          <div class="col">
            <label for="birthplace" class="form-label">Birthplace</label>
            <input type="text" id="birthplace" name="birthplace" class="form-control form-control-sm" placeholder="Birthplace here...">
          </div>
          <div class="col">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" class="form-control form-control-sm" placeholder="Birthdate here...">
          </div>    
          <div class="col">
            <label for="age" class="form-label">Age</label>
            <input type="number" id="age" name="age" class="form-control form-control-sm" placeholder="Age here...">
          </div>   
          <div class="col">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" class="form-control form-control-sm" id="nationality" name="nationality" placeholder="Nationality here...">
          </div>
          <div class="col">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control form-control-sm " id="height" name="height" placeholder="Height here...">
          </div>
          <div class="col">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control form-control-sm " id="weight" name="weight" placeholder="Weight here...">
          </div>
          <div class="col">
            <label for="contact_num" class="form-label">Tel No./ CP No.</label>
            <input type="number" class="form-control form-control-sm " id="contact_num" name="contact_num" placeholder="Contact Number here...">
          </div>
          <div class="col">
            <label for="tinno" class="form-label">Tin No.</label>
            <input type="text" class="form-control form-control-sm " id="tinno" name="tinno" placeholder="TIN number here...">
          </div>
        </div>

        <!--TAble-->
        <div class="table-responsive col-sm-12 mt-3 px-4">
          <table class="table table-light table-bordered">
            <thead>
              <tr>
                <th>GENDER</th>
                <th>CIVIL STATUS</th>
                <th>HAIR</th>
                <th>EYES</th>
                <th>BUILT</th>
                <th>COMPLEXION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                </td>
                <td>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="single" name="civil_status" value="single">
                    <label class="form-check-label" for="single">Single</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="married" name="civil_status" value="married">
                    <label class="form-check-label" for="merried">Married</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="widow" name="civil_status" value="widdow">
                    <label class="form-check-label" for="widow">Widow/er</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="separated" name="civil_status" value="separated">
                    <label class="form-check-label" for="separated">Separated</label>
                  </div> 
                </td>
                <td>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="black" name="hair" value="black">
                    <label class="form-check-label" for="black">Black</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="brown" name="hair" value="browm">
                    <label class="form-check-label" for="brown">Brown</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="blonde" name="hair" value="blonde">
                    <label class="form-check-label" for="blonde">Blonde</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="gray" name="hair" value="gray">
                    <label class="form-check-label" for="gray">Gray</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="gray" name="hair" value="gray">
                    <label class="form-check-label" for="gray">Other(Specify)</label>
                  </div> 
                  <input type="text" disabled class="form-control form-control-sm" name="other_hair" id="otherspecify">          
                </td>
                <td>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="blackeye" name="eye_color" value="black">
                    <label class="form-check-label" for="blackeye">Black</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="browneye" name="eye_color" value="brown">
                    <label class="form-check-label" for="browneye">Brown</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="grayeye" name="eye_color" value="gray">
                    <label class="form-check-label" for="grayeye">Gray</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="gray" name="eye_color" value="gray">
                    <label class="form-check-label" for="gray">Other(Specify)</label>
                  </div> 
                  <input type="text" disabled class="form-control form-control-sm" name="other_eye_color" id="otherspecify">   
                </td>
                <td>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="lightbuilt" name="built" value="light">
                    <label class="form-check-label" for="lightbuilt">Light</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="meduinbuilt" name="built" value="medium">
                    <label class="form-check-label" for="meduinbuilt">Meduim</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="heavybuilt" name="built" value="heavy">
                    <label class="form-check-label" for="heavybuilt">Heavy</label>
                  </div> 
                </td>
                <td>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="lightcomplexion" name="complexion" value="light">
                    <label class="form-check-label" for="lightcomplexion">Light</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="faircomplexion" name="complexion" value="fair">
                    <label class="form-check-label" for="faircomplexion">Fair</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  id="darkcomplexion" name="complexion" value="dark">
                    <label class="form-check-label" for="darkcomplexion">Dark</label>
                  </div> 
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 px-3 g-2 g-lg-3">  
          <div class="col ">
            <label for="fathersname" class="form-label">Fathers name</label>
            <div class="row g-2 g-lg-3 row-cols-1 row-cols-md-3">
              <div class="col">
                <input type="text" name="ffname" placeholder="Last Name here..." class="form-control form-control-sm">
              </div>
              <div class="col">
                <input type="text" name="flname" placeholder="First Name here..." class="form-control form-control-sm">
              </div>
              <div class="col">
                <input type="text" name="fmname" placeholder="Middle Name here..." class="form-control form-control-sm">
              </div>
            </div>
          </div>
          <div class="col ">
            <label for="mothersname" class="form-label">Mother Name</label>
            <div class="row g-2 g-lg-3 row-cols-1 row-cols-md-3">
              <div class="col">
                <input type="text" name="mfname" placeholder="Last Name here..." class="form-control form-control-sm">
              </div>
              <div class="col">
                <input type="text" name="mlname" placeholder="First Name here..." class="form-control form-control-sm">
              </div>
              <div class="col">
                <input type="text" name="mmname" placeholder="Middle Name here..." class="form-control form-control-sm">
              </div>
            </div>
          </div>
          <div class="col ">
            <label for="spouse" class="form-label">Spouse Name </label>
            <div class="row g-2 g-lg-3 row-cols-1 row-cols-md-3">
              <div class="col">
                <input type="text" name="sfname" placeholder="Last Name here..." class="form-control form-control-sm">
              </div>
              <div class="col">
                <input type="text" name="slname" placeholder="First Name here..." class="form-control form-control-sm">
              </div>
              <div class="col">
                <input type="text" name="smname" placeholder="Middle Name here..." class="form-control form-control-sm">
              </div>
            </div>
          </div>
          <div class="col ">
            <label for="employer" class="form-label">Employer's Business Name</label>
            <input type="text" class="form-control form-control-sm " name="business_name" id="employer" placeholder="Employer's Business Name here...">
          </div>
          <div class="col ">
            <label for="parentGardianNo" class="form-label">ContactNo.</label>
            <input type="text" class="form-control form-control-sm " name="bus_contact_num" id="parentGardianNo" placeholder="Employers Contact Number here...">
          </div>
          <div class="col ">
            <label for="spouse" class="form-label">Employer's Business Address</label>
            <input type="text" class="form-control form-control-sm " name="business_address" id="mothersName" placeholder="Employer's Business Address here...">
          </div>
        </div>

        <!--Type Of Application-->
        <div class="container-sm bg-light p-3 text-center h5 mt-5">Type of Application</div>
        <div class="m-3">
          <div class="form-check">
            <input class="form-check-input" type="radio" value="student" name="application_type" id="studentpermit">
            <label class="form-check-label" for="studentpermit">
              Student Permit
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="non-professional" name="application_type"  id="ndlpermittonon">
            <label class="form-check-label" for="ndlpermittonon">
              New Driver's License(Permit to Non-Professional)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="professional"  name="application_type" id="ndlnontopro">
            <label class="form-check-label" for="ndlnontopro">
              New Driver's License(Non-Professional to Professional)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="additional-restriction"  name="application_type" id="addrestriction">
            <label class="form-check-label" for="addrestriction">
              Additional Restriction
            </label>
          </div>
        </div>

        <!-- experience in driving -->
        <div class="row m-3">
          <p class="text-danger"><em>Important: Kindly respond to the question below. 
            Check the appropriate radio button that correspond to you answer</em>
          </p>
          <div class="">
            <p><strong>Do you have a driving experience?</strong></p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="driving_exp" value="yes" id="yes">
              <label class="form-check-label" for="yes">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="driving_exp" value="no" id="no">
              <label class="form-check-label" for="no">
                No
              </label>
            </div>
            <p><strong>If yes, please check the type of vehicle</strong></p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="motorcycle" id="motorcycle" name="vehicle_type">
              <label class="form-check-label" for="motorcycle">
                Motorcycle
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="tricycle" id="tricycle" name="vehicle_type">
              <label class="form-check-label" for="tricycle">
                Tricycle
              </label>
            </div>
            <div class="form-group form-control">
              <label for="">4 wheels vehicle</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="manual" id="manual" name="vehicle_type">
                <label class="form-check-label" for="manual">
                  Manual
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="automatic" id="automatic" name="vehicle_type">
                <label class="form-check-label" for="automatic">
                  Automatic
                </label>
              </div>
            </div>
            <div class="col-sm-3">
              <label for="other_vehicle_type" class="form-label">Other(Specify)</label>
              <input type="text" class="form-control form-control-sm" id="other_vehicle_type" name="vehicle_type"> 
            </div>
          </div>
        </div>
        <div class="d-sm-flex justify-content-md-end m-3">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      <?= form_close()?>
    </main>