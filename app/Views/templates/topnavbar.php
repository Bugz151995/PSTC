    <!--topnav-->
    <?php
    $uri = service('uri');
    $page = $uri->getSegment(1);
    ?>
    <header class="bg-light">
      <nav class="container navbar navbar-expand-lg navbar-light">
        <div class="container-fluid d-flex justify-content-between">
          <!-- brand -->
          <a class="navbar-brand" href="#">
            <img src="<?= site_url()?>assets/images/PSTC LOGO.png" alt="" width="50" height="50" class="d-inline-block">
            Partido Skill Training Center, Inc.
          </a>

          <!-- toggle -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigationLinks" aria-controls="navigationLinks" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- nav links -->
          <div class="collapse navbar-collapse" id="navigationLinks">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?= ($page == '') ? 'active' : ''?>" aria-current="page" href="<?= site_url()?>"><i class="fas fa-home fa-fw me-1"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($page == 'registration') ? 'active' : ''?>" aria-current="page" href="<?= site_url()?>registration"><i class="fab fa-wpforms fa-fw me-1"></i>Registration</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link <?= ($page == 'about') ? 'active' : ''?>" aria-current="page" href="<?= site_url()?>about"><i class="fas fa-info-circle fa-fw me-1"></i>About Us</a>
              </li>
             </ul>
          </div>
        </div>
      </nav>
    </header>