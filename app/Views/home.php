		<!--Main Content-->
		<main class="container mt-3">
      <!--Breadcrumbs-->
      <div class="bg-light px-4 rounded shadow-sm py-2 mb-3">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb mb-0">
            <li class="breadcrumb-item active" aria-current="page">
              <span><i class="fas fa-home"></i> Home</span>
            </li>   
          </ul>
        </nav>
      </div>
      
      <!-- enroll now -->
      <div class="container col-xl-12 col-xxl-8 px-4 py-5  shadow-sm">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Partido Skill Training Center, Inc.</h1>
            <p class="col-lg-10 fs-4">
              Enroll now in Partido Skill Training Center, Inc. our website will help you
              attain registration to a driving course in fast and easy way, more time for learning 
              how to drive you own wheels. 
           </p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light">
              <a href="<?= site_url()?>registration" class="w-100 btn btn-lg btn-primary" type="submit">Enroll Now!</a>
              <hr class="my-4">
              <small class="text-muted">By clicking Enroll Now, you agree to the terms of use.</small>
            </form>
          </div>
        </div>
      </div>

      <!--carousel-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= site_url()?>assets/images/banner1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= site_url()?>assets/images/banner2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= site_url()?>assets/images/banner3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>      

      <!--Offered course-->
      <div class="container px-4 py-5 bg-light mb-3 rounded shadow-sm" id="featured-3">
        <h2 class="pb-2 border-bottom ">Offered Courses</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 px-3 g-5 g-lg-4">

          <div class="col">
            <div class="card bg-primary text-white">
              <div class="card-img-top">
                <img src="<?= site_url()?>assets/images/theory.jpg" alt="" class="img-fluid">
              </div>
              <div class="card-body">
                <h2>Thoeretical Driving Course</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card bg-success text-white">
              <div class="card-img-top">
                <img src="<?= site_url()?>assets/images/drive.jpg" alt="" class="img-fluid">
              </div>
              <div class="card-body">
                <h2>Practical Driving Course</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card bg-danger text-white">
              <div class="card-img-top">
                <img src="<?= site_url()?>assets/images/restrict.jpg" alt="" class="img-fluid">
              </div>
              <div class="card-body">
                <h2>Additional Restriction</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Reminder post1 and post2-->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-8 g-2 g-lg-4">
        <div class="col">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Reminder</h3>
              <div class="mb-1 text-muted">July 27</div>
              <p class="card-text mb-auto">Visit us at our office located at LTO Compound, Aguinaldo St., Poblacion, Tigaon, Camarines Sur.</p>
            </div>
            <div class="col d-none d-lg-block">
                  <img src="<?= site_url()?>assets/images/post1.png" alt=""  class="img-fluid" style="width: 300px">    
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Reminder</h3>
              <div class="mb-1 text-muted">July 27</div>
              <p class="mb-auto">Visit us at our office located at LTO Compound, Aguinaldo St., Poblacion, Tigaon, Camarines Sur.</p>
            </div>  
            <div class="col d-none d-lg-block">
              <img src="<?= site_url()?>assets/images/post2.png" alt=""  class="img-fluid" style="width: 300px">    
            </div>
          </div>
        </div>
      </div>

      <!--Reminder post3-->
      <div class="col-md-12 bg-light shadow-sm">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">Reminder</h3>
            <div class="mb-1 text-muted">July 27</div>
            <p class="col-lg-10 fs-4 ">
              We would like to inform all of you, that whoever has inquiries with Partido Skill Training Center, Inc. 
              you are welcome to ask any of our employees. They are wearing PSTC ID's. Some may pose as such, nevertheless
              it is highly advised to avoid for they demand high payment/fee's. Furthermore, you can also approach us in our office,
              found beside the LTO Tigaon Office, or you can schedule an appointment in these numbers 09618820548- Smart, 09153981533 - GLOBE.
              We will gladly assist you. Thank you!
            </p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="<?= site_url()?>assets/images/post3.png" alt=""  class="img-fluid" style="width: 350px">
          </div>
        </div>
      </div>
    </main> 