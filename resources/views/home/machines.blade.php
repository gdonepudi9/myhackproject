<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MyHackProject</title>
  <!-- base:css -->
  <link rel="stylesheet" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/images/favicon.png" />
  <style>
    /* From Uiverse.io by KlaujonRuamni */ 
.beautiful-button {
  position: relative;
  display: inline-block;
  background: linear-gradient(to bottom, #1b1c3f, #4a4e91);
 /* Gradient background */
  color: white;
 /* White text color */
  font-family: "Segoe UI", sans-serif;
 /* Stylish and legible font */
  font-weight: bold;
  font-size: 18px;
 /* Large font size */
  border: none;
 /* No border */
  border-radius: 30px;
 /* Rounded corners */
  padding: 14px 28px;
 /* Large padding */
  cursor: pointer;
 /* Cursor on hover */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
 /* Subtle shadow */
  animation: button-shimmer 2s infinite;
  transition: all 0.3s ease-in-out;
 /* Smooth transition */
}

/* Hover animation */
.beautiful-button:hover {
  background: linear-gradient(to bottom, #2c2f63, #5b67b7);
  animation: button-particles 1s ease-in-out infinite;
  transform: translateY(-2px);
}

/* Click animation */
.beautiful-button:active {
  transform: scale(0.95);
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

/* Shimmer animation */
@keyframes button-shimmer {
  0% {
    background-position: left top;
  }

  100% {
    background-position: right bottom;
  }
}

/* Particle animation */
@keyframes button-particles {
  0% {
    background-position: left top;
  }

  100% {
    background-position: right bottom;
  }
}
    </style>
</head>

<body>
  <div class="container-scroller">
  @include("home.adnav")
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
        
      
          
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <div class="table-responsive pt-3">
                 <table class="table table-bordered">
  <thead>
    <tr>
      <th>MACHINE</th>
      <th>LEVEL</th>
      <th>DIFFICULTY</th>
      <th>USER OWNS</th>
      <th>STATUS</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/images/file-icons/64/002-tool.png" alt="image"/> Netmon
      </td>
      <td>Easy</td>
      <td>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </td>
      <td>0</td>
      <td>Active</td>
      <td>
        <form method="POST" action="{{ route('tothsmachine') }}">
          @csrf
          <input type="hidden" name="machine" value="Netmon">
          <button type="submit" class="beautiful-button">Initialise -></button>
        </form>
      </td>
    </tr>
   
  </tbody>
</table>



                  </div>
                </div>
              </div>
            </div>
</div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-center text-sm-left d-block d-sm-inline-block">
    Copyright © <a href="https://www.myhackproject.com/" target="_blank">MyHackProject</a> 2024
</span>
<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
    Join us to enhance your skills with real-time challenges and a collaborative community!
</span>
 </div>
          </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/off-canvas.js"></script>
  <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/hoverable-collapse.js"></script>
  <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/template.js"></script>
  <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/settings.js"></script>
  <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>