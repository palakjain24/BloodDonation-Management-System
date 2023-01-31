<!-- bloodBankList -->
<?php
include '../include/config.php';
session_start();

include('../include/Receivernav.php') ;
?>

<div>
    <div style="margin-top: 4rem; display: flex; align-items: center; justify-content: center;">	
        <form action="/dbms/Receiver/bloodBankList.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
            <div class="form-group" style="text-align: center; justify-content:center;">		
                <select style="width: 260px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                    <option value="">-- Find nearest Blood Bank --</option>
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
                <button type="submit" class="btn btn-lg btn-danger">Search</button>
            </div>
        </form>
    </div>

    <!-- Display The Search Result -->
		<?php

            if((isset($_GET['city']) && !empty($_GET['city']) )){
    
                $city=$_GET['city'];

                $sql="SELECT * FROM blood_bank WHERE city='$city'";
                $result=mysqli_query($connection,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        if($row['city'] != ''){
                            echo '<div style="margin: 4rem auto 1rem; display: grid; gap: 0.5rem; width: 25%; background: #fff; border-radius: 4px; padding: 1rem; box-shadow: 0px 5px 5px 0px rgb(0 0 0 / 14%);">
                            <span><strong style="color: #e73c33">Blood Bank name:</strong> '.$row['bloodBankName'].'</span>
                            <span><strong style="color: #e73c33">City:</strong> '.$row['city'].'</span>
                            <span><strong style="color: #e73c33">Address</strong> '.$row['address'].'</span>
                            <span><strong style="color: #e73c33">Pincode</strong> '.$row['pin_code'].'</span>
                            <span><strong style="color: #e73c33">Phone Number</strong> '.$row['phone_no'].'</span>
                            </div>';

                        }else{
                            echo '<div style="display: grid; gap: 0.5rem; width: 25%; background: #fff; border-radius: 4px; padding: 1rem; box-shadow: 0px 5px 5px 0px rgb(0 0 0 / 14%);">
                            <h4 class="name text-center">Data Not Found</h4>
                            </div>';
                        }
                    }

                }else{

                    echo '<div style="width: 50%; margin: 4rem auto;" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Not Found.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>';

                }
            }

        ?>
</div>

<?php 

include('../include/footer.php');
?>