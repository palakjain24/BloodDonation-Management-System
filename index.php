<!-- Front Page for Blooad Bank -->
<!-- Author: Palak Jain -->

<?php 
	include ('include/header.php'); 
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<div class="topBannerImage" >
		<div class="flexBoxRow" style="margin: 0; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
			
				<div class="headerText1">
					<strong class="text-center">Share a Little, Care a Little!</strong>
					<span class="text-center" style="color: white;">Donate Blood, Donate Life. <i class="fa-solid fa-droplet"></i></span>
				</div>
			
			<div>	
				
				<div style="display: flex; align-items: center; gap: 2rem; margin-top: 2rem;">
					<a href="donate.php" title="Donor" style="text-decoration: unset; color: unset;">
						<button style="font-size: 28px; line-height: 36px; padding: 0.5rem 2.5rem; width: 100%; border: none; border-radius: 8px; outline: none; cursor: pointer; box-sizing: border-box; display: flex; align-items: center; justify-content: center; background: #fff; color: #e73c33; font-weight: 700;">Donor</button>
					</a>
					<a href="Receiver.php" title="Receiver" style="text-decoration: unset; color: unset;">
						<button style="font-size: 28px; line-height: 36px; padding: 0.5rem 2.5rem; width: 100%; border: none; border-radius: 8px; outline: none; cursor: pointer; box-sizing: border-box; display: flex; align-items: center; justify-content: center; background: #fff; color: #e73c33; font-weight: 700;">Receiver</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- header ends -->

	<!-- donate section -->
	<div style="background-color:white ; padding-bottom:35px;padding-top:10px;">
		<div class="flexBoxRow" style="margin: 0;">
			<div style="width: 100%;">
				<h2 style="color: #e74c3c; font-weight: 700;padding: 10px 0 0 0; text-align:center;">Donate LIFE</h2>
				<div style="border-bottom: 1px solid #6c575724; width: 25%; display: flex; margin: 16px auto 0;"></div>
				 
				<div style="color: black; padding:12px; text-align:center;margin-top: 6px;">
					Safe blood saves lives.
					Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions.
				</div>
				
			</div>
		</div>
	</div>

	<div style="width: 100%; padding:16px; box-sizing:border-box;">
		<div class="flexBoxRow" style="padding-top:50px ; padding-bottom:85px;justify-content:space-evenly;">
			<div>
				<div style="width: 350px; padding:24px 16px; gap: 12px;background:white;display: flex; flex-direction: column; align-items: center;">
					<h4 style="text-align: center; color:red;">Who can donate?</h4>
					<img src="img/goal.gif" alt="Our Vission" class="img img-responsive" width="300" height="300" loading="lazy">
					<div style="text-align: center ;">
						Basic requirements one  need to fulfill to become a blood donor are:
						Age between 18-60 years.
						Haemoglobin - not less than 12.5 g/Dl.
						Body weight - not less than 45 Kg.
						Blood Pressure -Systolic 100-180 mm Hg & Diastolic 50 - 100 mm Hg.
						
					</div>
				</div>
			</div>


			<div>
				<div style="width: 350px; padding:24px 16px; gap: 12px;background:white;display: flex; flex-direction: column; align-items: center;">
					<h4 style="text-align: center; color:red;">Who to whom?</h4>
					<img src="img/who.jpg" alt="Our Vission" class="img img-responsive" width="300" height="300">
					<div style="text-align: center ;">
					
					You can Receive blood from a donor with the same blood type as your's.
					You can also Receive blood from a donor with a compatible blood type.
					O- blood is known as the universal blood type because it is safe for everyone to Receive O- red cells.
				</div>
				</div>
			</div>

			
			<div>
				<div style="width: 350px; padding:24px 16px; gap: 12px; background:white;display: flex; flex-direction: column; align-items: center;">
					<h4 style="text-align: center; color:red;">After blood donation</h4>
					<img src="img/target.gif" alt="Our Vission" class="img img-responsive" width="300" height="300">
					<div style="text-align: center ;">
						Wait at least five minutes after the process is completed before getting up.
						Ensure to eat after blood donation. 
						Increase fluid intake for the next 24 to 48 hours 
						Avoid smoking for four hours, and alcohol for 24 hours.
					</div>
				</div>
			</div>
		
			
		</div>

	</div>	

<?php include ('include/footer.php'); ?>
