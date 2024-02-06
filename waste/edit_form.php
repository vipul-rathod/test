<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog License</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    div.container-fluid{
      position:relative;
      width: 100%;
      margin: 5px;
      border: 1px solid #000000;
    }

    .required::before{
      content: "*";
      color: red;
    }
  </style>
  </head>
  <body>
    <form action="index.php" method="post">
      <div class="container-fluid">
        <h4 style="background-color:rgb(169, 169, 169); font-size:1em">SECTION 3 - APPLICANT INFORMATION</h4>
        <div class="mb-3">
          <input type="checkbox" name="apppobox" id="apppobox">
          <label for="apppobox">PO Box</label>
        </div>
        <div class="mb-3">
          <label class="required" for="applicantname" style="width:10%">Applicant Name</label>
          <input required="required" type="text" name="applicantname" id="applicantname" style="width:90%; float:right">
        </div>
        <div class="mb-3">
          <label class="required" for="appstreetnumber" style="width:10%">Street Number</label>
          <input required="required" type="text" name="appstreetnumber" id="appstreetnumber" style="width:15%">
          <label class="required" for="appstreetname" style="width:20%; text-align:right">Street Name</label>
          <input required="required" type="text" name="appstreetname" id="appstreetname" style="width:50%; float:right">
        </div>
        <div class="mb-3">
          <label class="required" for="appcity" style="width:10%">City</label>
          <input required="required" type="text" name="appcity" id="appcity" style="width:15%">
          <label class="required" for="appstate" style="width:20%; text-align:right">State</label>
          <input required="required" type="text" name="appstate" id="appstate" style="width:20%; position:relative; left:4.4%;">
          <label for="appzip" style="width:10%; text-align:right">Zip</label>
          <input type="text" name="appzip" id="appzip" style="width:20%; float:right">
        </div>
        <div class="mb-3">
          <label class="required" for="apptelephone" style="width:10%">Telephone</label>
          <input required="required" type="text" name="apptelephone" id="apptelephone" style="width:15%">
          <label class="required" for="appemail" style="width:20%; text-align:right">Email</label>
          <input required="required" type="text" name="appemail" id="appemail" style="width:50%; float:right">
        </div>
      </div>

      <div class="container-fluid">
      <h4 style="background-color:rgb(169, 169, 169); font-size:1em">SECTION 4 - MAILING ADDRESS</h4>
        <div class="mb-3">
          <input type="checkbox" name="addpobox" id="addpobox">
          <label for="addpobox">PO Box</label>
        </div>
        <div class="mb-3">
          <label class="required" for="addstreetnumber" style="width:10%">Street Number</label>
          <input required="required" type="text" name="addstreetnumber" id="addstreetnumber" style="width:15%">
          <label class="required" for="addstreetname" style="width:20%; text-align:right">Street Name</label>
          <input required="required" type="text" name="addstreetname" id="addstreetname" style="width:50%; float:right">
        </div>
        <div class="mb-3">
          <label class="required" for="addcity" style="width:10%">City</label>
          <input required="required" type="text" name="addcity" id="addcity" style="width:15%">
          <label class="required" for="addstate" style="width:20%; text-align:right">State</label>
          <input required="required" type="text" name="addstate" id="addstate" style="width:20%; position:relative; left:4.4%;">
          <label for="addzip" style="width:10%; text-align:right">Zip</label>
          <input type="text" name="addzip" id="addzip" style="width:20%; float:right">
        </div>
      </div>

      <div class="container-fluid">
      <h4 style="background-color:rgb(169, 169, 169); font-size:1em">SECTION 5 - WORK DETAILS</h4>
        <div class="mb-3">
          <label for="floormaterial" style="width:10%">Floor Material</label>
          <input type="text" name="floormaterial" id="floormaterial" style="width:15%">
          <label for="wall" style="width:20%; text-align:right">Wall</label>
          <input type="text" name="wall" id="wall" style="width:20%; position:relative; left:4.4%;">
          <label for="ceiling" style="width:10%; text-align:right">Ceiling</label>
          <input type="text" name="ceiling" id="ceiling" style="width:20%; float:right">
        </div>
        <div class="mb-3">
          <label for="clearnace" style="width:10%">Clearance</label>
          <input type="text" name="clearnace" id="clearnace" style="width:15%">
          <label for="wall1" style="width:20%; text-align:right">Wall</label>
          <input type="text" name="wall1" id="wall1" style="width:20%; position:relative; left:4.4%;">
          <label for="ceiling1" style="width:10%; text-align:right">Ceiling</label>
          <input type="text" name="ceiling1" id="ceiling1" style="width:20%; float:right">
        </div>
        <div class="mb-3">
          <label style="width:10%"><b>CHIMNEY</b></label>
          <input type="checkbox" name="new" id="new" value="new">
          <label for="new">New</label>
          <input type="checkbox" name="existing" id="existing" valule="existing">
          <label for="existing"> Existing (You are required to attach written proof of chimney to include statement of chimney's interior condition, within the past year (Per-NFPA211 Sec. 13&14))</label>
        </div>
        <div class="mb-3">
          <label style="width:10%"><b>FLUE</b></label>
          <label for="type" style="width:10%; text-align:right">Type</label>
          <input type="text" name="type" id="type" style="width:20%; position:relative; left:4.4%;">
          <label for="size" style="width:10%; text-align:right">Size</label>
          <input type="text" name="size" id="size" style="width:20%; position:relative; left:4.4%;">
        </div>
        <div class="mb-3">
          <label style="width:20%">Are there any other appliances connected to this flue? </label>
          <input type="radio" name="yes" id="yes" value="yes">
          <label for="yes">Yes</label>
          <input type="radio" name="yes" id="yes" value="no">
          <label for="yes">No</label>
        </div>
        <div class="mb-3">
          <p><b>Manufacturers specifications must be available at inspection.</b></p>
        </div>
      </div>
    
      <div>
        <button type="submit" class="btn btn-primary" style="position:relative;left:50%; transform: translateX(-50%)">Submit</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>