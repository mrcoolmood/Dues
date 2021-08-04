<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body class="bg-light">
    <div class="container">
       
        <div class="py-5 text-center"><img  class = "mb-4 mx-auto d-block" src="images/logo.jpg" alt="logo" width="72" height='72'>
        <h2>Registration Form</h2>
        <p class="lead">Fill the form below to create an account</p>
         </div>
       
<!-- //Form -->
<div class="container">
<!-- <h4 class="mb-3">Register</h4> -->

<form>
  <div class="row g-3">
  <div class="mb-3 col-lg-6">
    <label for="matricNumber" class="form-label">Matric No/JAMB Reg No/Application No</label>
    <input type="text" class="form-control" id="matricNumber"  placeholder="Matric No/JAMB Reg No/Application No" required>
  </div>
  
  <div class="mb-3 col-lg-6">
    <label for="surName" class="form-label">Surname</label>
    <input type="text" class="form-control" id="surName" placeholder="SurName" required>
  </div>
  </div>

  <div class="row g-3">
  <div class="mb-3 col-lg-6">
    <label for="firstName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstName"  placeholder="SurName" required>
  </div>
  
  <div class="mb-3 col-lg-6">
    <label for="otherName" class="form-label">Other name</label>
    <input type="text" class="form-control" id="otherName" placeholder="SurName" required>
  </div>
  </div>


  <div class="row g-3">
  <div class="mb-3 col-lg-6">
    <label for="phoneNumber" class="form-label">phone Number</label>
    <input type="text" class="form-control" id="phoneNumber"  required>
  </div>
  
  <div class="mb-3 col-lg-6">
    <label for="email" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email"  required>
  </div>
  </div>

  <div class="row g-3">
  <div class="mb-3 col-lg-6">
    <label for="schools" class="form-label">Schools</label>
    <select class="form-control" id="schools"  required>
        <option value="...">Choose</option>
        <option value="Engineering">Enginnering</option>
        <option value="ICT">ICT</option>
    </select>
  </div>
  
  <div class="mb-3 col-lg-6">
    <label for="department" class="form-label">Department</label>
    <select class="form-control" id="department"  required>
        <option value="...">Choose</option>
        <option value="Engineering">Agric Engineering</option>
        <option value="ICT">Civil Engineering</option>
    </select>
  </div>
  </div>


<div class="row g-3">

<div class="mb-3 col-lg-6">
                <label  for= "state" class="form-label">State of Origin</label>
                <select id="state"
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control"
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
              </div>

              <div class="mb-3 col-lg-6">
                <label for="lga" class="form-label">LGA of Origin</label>
                <select
                  name="lga"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                </select>
              </div>





</div>

<div class="row g-3">
  <div class="mb-3 col-lg-6">
    <label class = "form-label" for="Course">Course</label>
      <input class ="form-control" type="text" id = "Course">
    
  </div>
  <div class="mb-3 col-lg-6">
    <label class = "form-label" for="religion">Religion</label>
      <select class= "form-control" type="text" id = "religion">
    <option value="">choose</option>
    <option value="Agric and Biotech Engineering">Agric and Biotech Engineering</option>
    <option value="Building">Building</option>
    <option value="Civil Engineering">Civil Engineering</option>
  </div>
</div>



<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="js/lga.js"></script>
  </body>
</html>