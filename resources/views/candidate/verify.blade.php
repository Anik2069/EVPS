<!DOCTYPE html>
<html lang="en">


<!-- verify.blade.php  21 Nov 2019 04:05:02 GMT -->
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
    <section class="section">
        @if ($message = Session::get('error'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Verify Your Email</h4>
              </div>
              <div class="card-body">
                <p class="text-muted">Enter Your Verfifcation Code to compelete the Registration</p>
                <form method="POST" action = '/submitcode'>
                    @csrf
                  <div class="form-group">
                    <label for="email">Verification Code</label>
                    <input id="email" type="text" class="form-control" name="code" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                     Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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


<!-- verify.blade.php  21 Nov 2019 04:05:02 GMT -->
</html>
