<form action="edit_form.php" method="post">
<div class="container-fluid">
        <h4 style="background-color:rgb(169, 169, 169); font-size:1em">SECTION 3 - APPLICANT INFORMATION</h4>
        <div class="mb-3">
          <input type="checkbox" name="apppobox" id="apppobox" onclick="return false;" value="<?php echo $row["apppobox"] ?>"> 
          <label for="apppobox">PO Box</label>
        </div>
        <div class="mb-3">
          <label class="required" for="applicantname" style="width:10%">Applicant Name</label>
          <input required="required" type="text" name="applicantname" id="applicantname" style="width:90%; float:right" value="<?php echo $row["applicantname"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label class="required" for="appstreetnumber" style="width:10%">Street Number</label>
          <input required="required" type="text" name="appstreetnumber" id="appstreetnumber" style="width:15%" value="<?php echo $row["appstreetnumber"] ?>" readonly>
          <label class="required" for="appstreetname" style="width:20%; text-align:right">Street Name</label>
          <input required="required" type="text" name="appstreetname" id="appstreetname" style="width:50%; float:right" value="<?php echo $row["appstreetname"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label class="required" for="appcity" style="width:10%">City</label>
          <input required="required" type="text" name="appcity" id="appcity" style="width:15%" value="<?php echo $row["appcity"] ?>" readonly>
          <label class="required" for="appstate" style="width:20%; text-align:right">State</label>
          <input required="required" type="text" name="appstate" id="appstate" style="width:20%; position:relative; left:4.4%;" value="<?php echo $row["appstate"] ?>" readonly>
          <label for="appzip" style="width:10%; text-align:right">Zip</label>
          <input type="text" name="appzip" id="appzip" style="width:20%; float:right" value="<?php echo $row["appzip"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label class="required" for="apptelephone" style="width:10%">Telephone</label>
          <input required="required" type="text" name="apptelephone" id="apptelephone" style="width:15%" value="<?php echo $row["apptelephone"] ?>" readonly>
          <label class="required" for="appemail" style="width:20%; text-align:right">Email</label>
          <input required="required" type="text" name="appemail" id="appemail" style="width:50%; float:right" value="<?php echo $row["appemail"] ?>" readonly>
        </div>
      </div>

      <div class="container-fluid">
      <h4 style="background-color:rgb(169, 169, 169); font-size:1em">SECTION 4 - MAILING ADDRESS</h4>
        <div class="mb-3">
          <input type="checkbox" name="addpobox" id="addpobox" onclick="return false;" value="<?php echo $row["addpobox"] ?>" >
          <label for="addpobox">PO Box</label>
        </div>
        <div class="mb-3">
          <label class="required" for="addstreetnumber" style="width:10%">Street Number</label>
          <input required="required" type="text" name="addstreetnumber" id="addstreetnumber" style="width:15%" value="<?php echo $row["addstreetnumber"] ?>" readonly>
          <label class="required" for="addstreetname" style="width:20%; text-align:right">Street Name</label>
          <input required="required" type="text" name="addstreetname" id="addstreetname" style="width:50%; float:right" value="<?php echo $row["addstreetname"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label class="required" for="addcity" style="width:10%">City</label>
          <input required="required" type="text" name="addcity" id="addcity" style="width:15%" value="<?php echo $row["addcity"] ?>" readonly>
          <label class="required" for="addstate" style="width:20%; text-align:right">State</label>
          <input required="required" type="text" name="addstate" id="addstate" style="width:20%; position:relative; left:4.4%;" value="<?php echo $row["addstate"] ?>" readonly>
          <label for="addzip" style="width:10%; text-align:right">Zip</label>
          <input type="text" name="addzip" id="addzip" style="width:20%; float:right" value="<?php echo $row["addzip"] ?>" readonly>
        </div>
      </div>

      <div class="container-fluid">
      <h4 style="background-color:rgb(169, 169, 169); font-size:1em">SECTION 5 - WORK DETAILS</h4>
        <div class="mb-3">
          <label for="floormaterial" style="width:10%">Floor Material</label>
          <input type="text" name="floormaterial" id="floormaterial" style="width:15%" value="<?php echo $row["floormaterial"] ?>" readonly>
          <label for="wall" style="width:20%; text-align:right">Wall</label>
          <input type="text" name="wall" id="wall" style="width:20%; position:relative; left:4.4%;" value="<?php echo $row["wall"] ?>" readonly>
          <label for="ceiling" style="width:10%; text-align:right">Ceiling</label>
          <input type="text" name="ceiling" id="ceiling" style="width:20%; float:right" value="<?php echo $row["ceiling"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="clearnace" style="width:10%">Clearance</label>
          <input type="text" name="clearnace" id="clearnace" style="width:15%" value="<?php echo $row["clearnace"] ?>" readonly>
          <label for="wall1" style="width:20%; text-align:right">Wall</label>
          <input type="text" name="wall1" id="wall1" style="width:20%; position:relative; left:4.4%;" value="<?php echo $row["wall1"] ?>" readonly>
          <label for="ceiling1" style="width:10%; text-align:right">Ceiling</label>
          <input type="text" name="ceiling1" id="ceiling1" style="width:20%; float:right" value="<?php echo $row["ceiling1"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label style="width:10%"><b>CHIMNEY</b></label>
          <input type="checkbox" name="new" id="new" value="new" <?php echo ($row["chimney"]=='new')? 'checked':'' ?> onclick="return false;">
          <label for="new">New</label>
          <input type="checkbox" name="existing" id="existing" value="existing" <?php echo ($row["chimney"]=='on')? 'checked':'' ?> onclick="return false;" check="<?php echo $row["chimney"] ?>" >
          <label for="existing"> Existing (You are required to attach written proof of chimney to include statement of chimney's interior condition, within the past year (Per-NFPA211 Sec. 13&14))</label>
        </div>
        <div class="mb-3">
          <label style="width:10%"><b>FLUE</b></label>
          <label for="type" style="width:10%; text-align:right">Type</label>
          <input type="text" name="type" id="type" style="width:20%; position:relative; left:4.4%;" value="<?php echo $row["type"] ?>" readonly>
          <label for="size" style="width:10%; text-align:right">Size</label>
          <input type="text" name="size" id="size" style="width:20%; position:relative; left:4.4%;" value="<?php echo $row["size"] ?>" readonly>
        </div>
        <div class="mb-3">
          <label style="width:20%">Are there any other appliances connected to this flue? </label>
          <input type="radio" name="yes" id="yes" onclick="return false;" value= "Yes" <?php echo ($row["otherapp"]=='yes')? 'checked':'' ?> >
          <label for="yes">Yes</label>
          <input type="radio" name="yes" id="yes" onclick="return false;" value="No" <?php echo ($row["otherapp"]=='no')? 'checked':'' ?> >
          <label for="yes">No</label>
        </div>
        <div class="mb-3">
          <p><b>Manufacturers specifications must be available at inspection.</b></p>
        </div>
      </div>
      <div>
        <button type="submit" class="btn btn-primary" style="position:relative;left:50%; transform: translateX(-50%)">Edit Data</button>
      </div>
      </form>