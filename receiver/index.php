<?php
include '../include/config.php';
session_start();
if(isset($_SESSION['R_id']) && !empty($_SESSION['R_id'])){
    
}
include('../include/Receivernav.php') ;
?>

    <div style="margin-top: 4rem; display: flex; align-items: center; justify-content: center;">	
        <form action="/dbms/Receiver/index.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
            <div class="form-group" style="text-align: center; justify-content:center;">		
                <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                    <option value="">-- Select --</option>
                    <option value="NEW DELHI">NEW DELHI</option>
                    <option value="NOIDA">NOIDA</option>
                    <option value="GURGAON">GURGAON</option>
                    <option value="MUMBAI">MUMBAI</option>
                    <option value="PUNE">PUNE</option>
                    <option value="BANGALORE">BANGALORE</option>
                    <option value="CHENNAI">CHENNAI</option>
                    <option value="CHANDIGARH">CHANDIGARH</option>							
                </select>
            </div>
            <div class="form-group center-aligned">
                <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
                <option value=""> --Enter blood group-- </option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group center-aligned">
                <button type="submit" class="btn btn-lg btn-danger">Search</button>
            </div>
        </form>
    </div>

    <div style="padding: 60px; width: 100%; box-sizing: border-box;">
	<div style="display: flex; flex-wrap: wrap; gap: 32px; justify-content: center;" id="data">

		<!-- Display The Search Result -->
		<?php

			if((isset($_GET['city']) && !empty($_GET['city']) ) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
				
				$city=$_GET['city'];
				$blood_group=$_GET['blood_group'];

				$sql="SELECT * FROM blood_unit WHERE city='$city' && blood_group='$blood_group'";
					$result=mysqli_query($connection,$sql);
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							if($row['no_of_units'] > '0'){
								echo '<div style="display: grid; gap: 0.5rem; width: 25%; background: #fff; border-radius: 4px; padding: 1rem; box-shadow: 0px 5px 5px 0px rgb(0 0 0 / 14%);">
								<span><strong>Blood Group:</strong> '.$row['blood_group'].'</span>
                                <span><strong>City:</strong> '.$row['city'].'</span>
								<span><strong>Total Number of unit left:</strong> '.$row['no_of_units'].'</span>
                                <a href="bloodBankList.php" style="text-decoration: unset; color: unset;">
                                    <span style="cursor: pointer; margin: 1rem auto 0; width: fit-content; color: #fff; font-weight: 600; font-size: 20px; padding: 0.25rem 1rem; background: #e73c33; display: flex; align-items: center; justify-content: center; border-radius: 99px;">
                                    Buy Now
                                    </span>
                                </a>
								</div>';

							}else{
								echo '<div style="display: grid; gap: 0.5rem; width: 25%; background: #fff; border-radius: 4px; padding: 1rem; box-shadow: 0px 5px 5px 0px rgb(0 0 0 / 14%);">
								<span><strong>Blood Group:</strong> '.$row['blood_group'].'</span>
                                <span><strong>City:</strong> '.$row['city'].'</span>
								<span><strong>Total Number of unit left:</strong> '.$row['no_of_units'].'</span>
								<h4 class="name text-center">Not Available</h4>
								</div>';
							}
						}

					}else{

						echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Data Not Found.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>';

					}
			}

		?>

	</div>
</div>


<?php 

include('../include/footer.php');
?>