<?php

$name = $website = $position = $experience = $estatus = $comments = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (empty($_POST["name"])) {
    echo "<span class=\"error\">Error:First name required</span>";
  } elseif (empty($_POST["website"])) {
    echo "<span class=\"error\">Error: Website required</span>";
  } else {
    $name = val($_POST['name']);
    $website = val($_POST['website']);
    $position = val($_POST['position']);
    $experience = val($_POST['experience']);
    $estatus = val($_POST['estatus']);
    $comments = val($_POST['comments']);
  }
}

function val($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!doctype html>
<html>

<head>
  <title>PHP Form</title>
  <meta charset="utf-8">

  <style>
    .error {
      color: red;
    }

    body {
      cursor: not-allowed;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <div class="container-fluid row m-0 p-0" style="height:95vh;">

    <div class="col-lg-6 bg-light d-flex justify-content-center align-items-center">

      <form name="employment" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <table border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td colspan="2">
              <h2 class="text-center p-3">Employment Application</h2>
              <hr>
            </td>

          </tr>
          <tr>
            <td>Name</td>
            <td><input class="mb-3" type="text" name="name" id="name" maxlength="50" style="width:100%; border:none;" /></td>
          </tr>
          <tr>
            <td>Website</td>
            <td><input class="mb-3" type="text" name="website" id="website" maxlength="50" style="width:100%; border:none;" /></td>
          </tr>
          <tr>
            <td>Position</td>
            <td>
              <select class="mb-3" name="position" style="width:100%; border:none;">
                <option value="" unselectable>Select any one option</option>
                <option value="Accountant">Accountant</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Administrator">Administrator</option>
                <option value="Supervisor">Supervisor</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Experience Level</td>
            <td>
              <select class="mb-3" name="experience" style="width:100%; border:none;">
                <option value="" unselectable>Select any one option</option>
                <option value="Entry Level">Entry Level</option>
                <option value="Some Experience">Some Experience</option>
                <option value="Very Experienced">Very Experienced</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Employment Status</td>
            <td>
              <input class="mb-3 m-3" type="radio" name="estatus" value="Employed" checked />Employed
              <input class="mb-3 m-3" type="radio" name="estatus" value="Unemployed" />Unemployed
              <input class="mb-3 m-3" type="radio" name="estatus" value="Student" />Student
            </td>
          </tr>
          <tr>
            <td>Additional Comments</td>
            <td>
              <textarea class="mb-3" name="comments" cols="45" rows="5" style="width:100%; border:none;"></textarea>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <btn class="btn btn-primary" onclick="submit()"><input class="btn btn-primary" type="submit" name="submit" value="Submit" /></btn>
              <btn class="btn btn-danger" onclick="remove()"><input class="btn btn-danger" type="reset" name="reset" value="Reset" /></btn>
            </td>
          </tr>
        </table>
      </form>

    </div>

    <div class="col-lg-6 my-auto">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Field</th>
            <th scope="col">Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Name</td>
            <td><?php echo $name; ?></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Position</td>
            <td><?php echo $position; ?></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Website</td>
            <td><?php echo $website; ?></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Experience</td>
            <td><?php echo $experience; ?></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Employment</td>
            <td><?php echo $estatus; ?></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Comments</td>
            <td><?php echo $comments; ?></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

  <script>
    function submit() {
      var name = document.getElementById("name").value;
      var website = document.getElementById("website").value;
      if (name != "" && website != "") {
        alert("Data has been submitted successfully!");
      }


    }

    function remove() {
      alert("All details have been removed!");
    }
    // document.addEventListener("contextmenu", (evt) => {
    //   evt.preventDefault();
    // }, false);
  </script>

</body>

</html>
