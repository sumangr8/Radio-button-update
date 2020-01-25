<!-- For Gender-->
		<div class="form-check-inline">
		  <label class="form-check-label">
		    Gender : <input type="radio" class="form-check-input" name="gender" value="Male"
		    <?php
		    if($gender=="Male")
		    {
		    	echo "checked";
		    }
		    ?>
		    >Male
		  </label>
		</div>
		<div class="form-check-inline">
		  <label class="form-check-label">
		    <input type="radio" class="form-check-input" name="gender" value="Female"
		    <?php
		    if($gender=="Female")
		    {
		    	echo "checked";
		    }
		    ?>
		    >Female
		  </label>
		</div>
