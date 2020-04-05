<!DOCTYPE html>
<html lang="en">


<!-- registration.blade.php  21 Nov 2019 03:55:16 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{'assets/'}}assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{'assets/'}}assets/css/style.css">
  <link rel="stylesheet" href="{{'assets/'}}assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{'assets/'}}assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='{{'assets/'}}assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-10">

                <div class="card">
                  <form class="needs-validation" novalidate="" method="post" action="/submitorg">
                      @csrf
                    <div class="card-header">
                      <h4>Organizer Registration</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Enter Your Name</label>
                        <input type="text" class="form-control" name="name" id="name" required="">
                        <div class="invalid-feedback">
                          What's your name?
                        </div>
                      </div>

                        <div class="form-group">
                            <label>Enter Company Name</label>
                            <input type="text" class="form-control" name="cname" id="cname" required="">
                            <div class="invalid-feedback">
                                What's your name?
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Enter Company Position</label>
                            <input type="text" class="form-control" name="pname" id="pname" required="">
                            <div class="invalid-feedback">
                                What's your name?
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>BIO</label>
                            <textarea class="form-control" name="bio" id="bio" required=""></textarea>
                            <div class="invalid-feedback">
                                What do you wanna say?
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Birthday</label>
                            <input type="date" class="form-control" name="date" id="date" required="">
                            <div class="invalid-feedback">
                                What's your name?
                            </div>
                        </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                        <div class="invalid-feedback">
                          Oh no! Email is invalid.
                        </div>
                      </div>
                      <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password1" id="password1"  class="form-control">
                            <div class="valid-feedback">
                                Good job!
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">CopyRight @Md Anik Islam</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{'assets/'}}assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{'assets/'}}assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{'assets/'}}assets/js/custom.js"></script>
</body>


<!-- registration.blade.php  21 Nov 2019 03:55:16 GMT -->
</html>
