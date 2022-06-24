<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
    <?php

      $errors_arr = array();
      if(isset($_GET['error_msg'])){

        $errors_arr = explode(",",$_GET['error_msg']);
      }
    ?>

    <form method="post" action="setData.php" class="row g-3 w-50 m-5">
        <div class="col-md-6">
          <label for="inputFirstName" class="form-label">First Name</label>
          <input type="text" class="form-control" name="FirstName">
        </div>
        <div class="col-md-6">
            <label for="inputLastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="LastName">
          </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" name="Address" class="form-control">
        </div>
        <div class="col-6">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="col-md-12">
          <h6>Gender</h6>
          <div class="mx-5">
              <input class="form-check-input" value="mr" id="male" type="Radio" name="Gender">
              <label for="male" class="mx-1"> Male </label>
              <input class="form-check-input" value="miss" id="Female" type="Radio" name="Gender">
              <label for="Female" class="mx-1"> Female </label>
          </div>
        </div>
        <div class="col-12">
            <h5>Skills</h5>
            <div class="mx-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="check[]" value="Angular" type="checkbox">
                <label class="form-check-label">Angular</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="check[]" value="React" type="checkbox">
                <label class="form-check-label">React</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="check[]" value="Vue" type="checkbox">
                <label class="form-check-label">Vue</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="check[]" value="Node" type="checkbox">
                <label class="form-check-label">Node</label>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <label for="inputUserName" for="UserName" class="form-label">User Name</label>
            <input type="text" name="UserName" id="UserName" class="form-control">
            <?php if(in_array('UserName',$errors_arr)) echo
            "*Please Insert Invalid Name"; ?><br>
          </div>
          <div class="col-md-6">
            <label for="inputPassword" for="password" class="form-label">Password</label>
            <input type="Password" name="password" id="password" class="form-control">
            <?php if(in_array('password',$errors_arr))
            echo "*Invalid Password it have to more Than 6 Characters"; ?><br>
          </div>
        <div class="col-12">
          <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
        </div>
      </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>