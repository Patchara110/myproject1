<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Customizing Body and Background */
    body {
      background-color: #FDFFC2; /* Cream background */
      font-family: 'Arial', sans-serif; /* Smooth font */
      color: #333; /* Dark gray text */
    }

    /* Jumbotron styling */
    .jumbotron {
      background-color: #FF76CE; /* White background for header */
      border-radius: 10px; /* Rounded corners */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    .jumbotron h1 {
      font-family: 'Comic Sans MS', sans-serif; /* Fun rounded font */
      font-size: 3rem; /* Larger font size for header */
    }

    .jumbotron p {
      font-size: 1.2rem; /* Slightly larger font for the description */
    }

    /* Navbar styling */
    .navbar {
      background-color: #FF76CE; /* Gray background for navbar */
      border-radius: 10px; /* Rounded corners */
    }

    .navbar-brand {
      font-family: 'Comic Sans MS', sans-serif; /* Fun rounded font for navbar */
    }

    .nav-link {
      font-family: 'Arial', sans-serif; /* Rounded font for nav links */
      font-size: 1.1rem;
    }

    .nav-link:hover {
      background-color: #e2e3e5; /* Lighter gray on hover */
    }

    .dropdown-item:hover {
      background-color: #e2e3e5; /* Lighter gray on hover for dropdown */
    }

    /* Fake Image styling */
    .fakeimg {
      height: 200px;
      background: #ccc; /* Light gray background */
      border-radius: 8px; /* Rounded corners */
    }

    /* Container styling */
    .container {
      margin-top: 30px;
    }

    /* Footer styling */
    .jumbotron.text-center {
      background-color: #A3D8FF; /* White background for footer */
      margin-bottom: 0;
      border-radius: 10px; /* Rounded corners */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    .footer-text {
      font-size: 1.2rem; /* Slightly larger text */
    }

    /* Modal styling */
    .modal-header {
      background-color:rgb(255, 255, 255);
      color: white;
    }

    .modal-footer .btn {
      background-color:rgb(255, 255, 255);
      color: white;
    }
  </style>
</head>
<body>

<!-- Header Section -->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1 class="white-text"><strong>All sorts of cute things</strong></h1>
  <p><h2 class="white-text"><strong>"Welcome to cuteness"</strong></h2></p>
</div>

<style>
  .white-text {
    color: white;
  }
</style>


<!-- Navbar with Dropdown Menu and Account -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">MyWebsite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About</a>
      </li>
      <!-- Dropdown Menu for Services -->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">How cute</a>
          <a class="dropdown-item" href="#">Data cute</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cloud Solutions</a>
        </div>
      </li>
      <li class="nav-itemv active">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <!-- Account Dropdown Menu -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarAccountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarAccountDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signupModal">Signup</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- Main Content -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h3><strong>Various types of cuteness</strong></h3>
      <h5>For everyone:</h5>
      <!-- แทรกรูปจากอินเทอร์เน็ต -->
      <img src="https://i.pinimg.com/736x/30/95/fd/3095fd6558704f001d0dccd3c7b009fe.jpg" alt="About Me" width="100%" height="auto">
      <p>Ultimately, the cuteness of objects and images not only brings us short-term joy but also reflects humanity's desire to escape stress and find happiness in things that are simple, light-hearted, and cheerful.</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Click me</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2><strong>The Cuteness of Objects</strong></h2>
      <p></p>
      <p></p>
      <!-- แทรกรูปจากอินเทอร์เน็ต -->
      <img src="https://i.pinimg.com/736x/5c/66/c6/5c66c63ca788478f3e1cb09565d40110.jpg" alt="Title Heading Image" width="100%" height="auto">
      <p></p>
      <p>Objects that are designed to be cute often feature asymmetrical proportions, such as large eyes, small mouths, or soft, rounded shapes that evoke a sense of vulnerability. These designs make us feel like we want to take care of or interact with the object. The use of pastel colors or whimsical decorations can further enhance the cuteness of an item, such as plush toys or uniquely designed accessories.

</p>
      <br>
      <h2><strong>Psychological Impact of Cuteness</strong></h2>
      <p></p>
      <!-- แทรกรูปจากอินเทอร์เน็ต -->
      <img src="https://i.pinimg.com/736x/cf/71/35/cf7135d84c7583732b4472e832453b0c.jpg" alt="Another Title Heading Image" width="100%" height="auto">
      <p></p>
      <p>Observing cute things can trigger the release of endorphins in the brain, making us feel good and happy. Viewing cute images or objects has also been shown to reduce stress and increase relaxation, providing a sense of comfort.</p>
    </div>
  </div>
</div>

  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="login-username">Username</label>
            <input type="text" class="form-control" id="login-username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" class="form-control" id="login-password" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button style="background-color: pink; color: white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button style="background-color: pink; color: white;" type="button" class="btn btn-primary">Login</button>
      </div>
      <div class="text-center mt-3">
        <p>ถ้าท่านยังไม่ได้สมัครสมาชิก <a href="signup.php">ลงทะเบียนที่นี่</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="fullname">FullName:</label>
            <input type="text" class="form-control" id="fullname" placeholder="Enter FullName" name="fullname" required>
          </div>
          <div class="form-group">
            <label for="username">UserName:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
          </div>
          <div class="form-group">
            <label for="useremail">Email:</label>
            <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail" required>
          </div>
          <div class="form-group">
            <label for="usermobile">Mobile:</label>
            <input type="text" maxlength="10" pattern="[0-9]{10}" title="ตัวเลขสิบหลักเท่านั้น" class="form-control" id="usermobile" placeholder="Enter Mobile Number" required>
          </div>
          <div class="form-group">
      <label for="loginpassword">Password:</label>
      <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success" name="signup" id="signup">Submit</button>
  </form>
</div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
