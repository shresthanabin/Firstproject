<?php require "header.php" ?>


<div class="pt-2 bg-light">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="POST" action="">
                <h2 class="pt-3 text-center agen">Customer Registration</h2>
                <?php
                    if (!empty($msg)) {
                         echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
                     }
                ?>
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control bg-light agenform" name="firstname">
                </div>
                <div class="form-group">
                    <label>Surname</label>
                    <input type="text" class="form-control bg-light agenform" name="surname">
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderM" value="Male">
                                <label class="form-check-label" for="genderM">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderF" value="Female">
                                <label class="form-check-label" for="genderF">Female</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control bg-light agenform" name="email">
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="text" class="form-control bg-light agenform" name="contact">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control bg-light agenform" name="surname">
                </div>
                <!-- skills input -->
                <div class="form-group">
                    <label>Skills</label>
                    <select class="browser-default custom-select bg-light" multiple>
                      <option selected>Choose your Skill</option>
                      <option value="1">Marketing</option>
                      <option value="2">Media</option>
                      <option value="3">Public Relation</option>
                      <option value="4">Production</option>
                      <option value="5">Film</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Member Subscription <span class="text-danger">*</span></label>
                    <select class="browser-default custom-select bg-light">
                        <option selected>Choose Your Option</option>
                        <option value="1">Six months - $550 plus GST </option>
                        <option value="2">One year - $800 plus GST </option>
                        <option value="3">Lifetime access - $3500 plus GST </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control bg-light agenform" required="">
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control bg-light agenform" required="">
                </div>
                <div class="form-group">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="confPassword" class="form-control bg-light agenform" required="">
                </div>
                <div class="text-center">
                    <button type="submit" name="register" class="btn btn-lg btn-info text-center mt-3">Register</button>
                </div><br>
            </form>
        </div>
    </div>
</div>



<?php require "footer.php" ?>