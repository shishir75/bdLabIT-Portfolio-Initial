<?php require_once 'includes/header.php'; ?>

<header class="mb-5" id="career">
  <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top ">
    <a href="#" class="navbar-brand">BD Lab IT</a>
    <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto" id="navScrollspy">
        <li class="nav-item">
          <a class="nav-link" href="../bdLabIT">
            <span class="navbar-text ">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services">
            <span class="navbar-text">Services</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="project">
            <span class="navbar-text">Project</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news">
            <span class="navbar-text">Newsroom</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="career">
            <span class="navbar-text">Career</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">
            <span class="navbar-text">About Us</span>
          </a>
        </li>

      </ul>
    </div>
  </nav>
  <section id="section-jumbotron" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
    <div class="container text-center">
      <p class="display-4 d-none d-sm-block">BDLabIT</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quos.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, corrupti?</p>
      <p><strong>Download now on:</strong></p>
      <a href="#" class="btn btn-lg btn-primary mb-2"><i class="fab fa-apple" aria-hidden="true"></i> App Store</a>
      <a href="#" class="btn btn-lg btn-primary mb-2"><i class="fab fa-android" aria-hidden="true"></i> Google Play</a>
    </div>
  </section>
</header> <!-- Header End -->


  <div class="container my-5">
    <div class="row">
      <div class="col-12">
        <h5 class="alert alert-danger text-center p-3">Currenty there is no vacancy</h5>
      </div>
    </div>
  </div>


  <div class="container mb-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="box text-center">
          <h4>Upload your CV for Future Vacancy</h4>
          <form method="post">
            <input type="file" name="file" id="file-5" class="inputfile inputfile-4 d-none"/>
            <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a PDF File &hellip;</span></label><br>
            <input type="submit" name="submit" value="Upload" class="btn btn-success" style="padding: 5px 70px">
          </form>
        </div>
      </div>
    </div>
  </div>



<?php require_once 'includes/footer.php'; ?>