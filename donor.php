<?php
include("header.php");
if(isset($_POST['submit'])){
	if(isset($_GET['editid'])){
		$profile_img = rand() . $_FILES["profile_img"]["name"];
		move_uploaded_file($_FILES["profile_img"]["tmp_name"],"imgdonor/".$profile_img);
		$sql ="UPDATE donor set name='" . mysqli_real_escape_string($con, $_POST['name']) . "',address='" . mysqli_real_escape_string($con, $_POST['address']) . "',city='$_POST[city]',pin_code='$_POST[pin_code]',email_id='$_POST[email_id]',password='$_POST[password]',contact_no='$_POST[contact_no]',status='$_POST[status]'";
		if($_FILES["profile_img"]["name"] != "")
		{
		$sql = $sql . ",profile_img='$profile_img'";
		}
		$sql = $sql . " WHERE donor_id='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1){
			echo "<script>alert('donor profile updated successfully..');</script>";
		}		
	}
	else
	{
		$sql ="INSERT INTO donor(name,address,city,pin_code,email_id,password,contact_no,status) VALUES('$_POST[name]','$_POST[address]','$_POST[city]','$_POST[pin_code]','$_POST[email_id]','$_POST[password]','$_POST[contact_no]','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1){
			echo "<script>alert('Donor profile inserted successfully..');</script>";
			echo "<script>window.location='donor.php';</script>";
		}
	}
}
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM donor WHERE donor_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<div id="page-header">

<div class="section-bg" style="background-image: url(img/background-2.jpg);"></div>


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="header-content">
<h1>Donor </h1>
</div>
</div>
</div>
</div>

</div>

</header>


<div class="section" style="padding-top: 1px;">

<div class="container">

<div class="row">

<main id="" class="col-md-12">

<div class="">



<div class="">


<div class="article-comments">

<div class="media">
<div class="media-left">
<img class="media-object" src="img/charity.jpg"  style="width: 100px;height: 100px;">
</div>
<div class="media-body">
	<div class="media-heading">
	<h4>Donor </h4>
	</div>
	<p>
<form method="post" action="" enctype="multipart/form-data">
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Image</div>
	<div class="col-md-10">
		<input type="file" name="profile_img"  id="profile_img" class="form-control"  >
		<?php
		if($rsedit['profile_img'] == ""){
			echo "<img src='img/no-image-icon.png' style='height: 300px;'>";
		}
		else if(file_exists("imgdonor/".$rsedit['profile_img'])){
			echo "<img src='imgdonor/".$rsedit['profile_img']. "'  style='height: 250px;'>";
		}
		else {
			echo "<img src='img/no-image-icon.png' style='height: 300px;' >";	
		}
		?>
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Name</div>
	<div class="col-md-10">
		<input type="text" name="name"  id="name" class="form-control"  value="<?php echo $rsedit['name']; ?>">
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;"> Address  </div>
	<div class="col-md-10">
		<textarea name="address" id="address" class="form-control"><?php echo $rsedit['address']; ?></textarea>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">City </div>
	<div class="col-md-10">
		<input type="text" name="city"  id="city" class="form-control" value="<?php echo $rsedit['city']; ?>">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Pin Code </div>
	<div class="col-md-10">
		<input type="text" name="pin_code"  id="pin_code" class="form-control" value="<?php echo $rsedit['pin_code']; ?>">
	</div>
</div>

<br>


<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Email ID </div>
	<div class="col-md-10">
		<input type="email" name="email_id"  id="email_id" class="form-control"  value="<?php echo $rsedit['email_id']; ?>">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;"> Password</div>
	<div class="col-md-10">
		<input type="password" name="password"  id="password" class="form-control" value="<?php echo $rsedit['password']; ?>">
	</div>
</div>


<br>
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;"> Contact No.</div>
	<div class="col-md-10">
		<input type="text" name="contact_no"  id="contact_no" class="form-control" value="<?php echo $rsedit['contact_no']; ?>">
	</div>
</div>

<br>


<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Status</div>
	<div class="col-md-10">
		<select class="form-control" name="status" id="status">
			<option value="">Select Status</option>
			<?php
			$arr = array("Active","Inactive");
			foreach($arr as $val )
			{
				if($val == $rsedit['status']){echo "<option value='$val' selected>$val</option>";} else {echo "<option value='$val'>$val</option>";}
			}
			?>
		</select>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;"></div>
	<div class="col-md-10">
		<input type="submit" name="submit" id="submit" class="form-control btn btn-success" style="width: 200px;">
	</div>
</div>
</form>
	</p>
	</div>
</div>


</div>


</div>

</main>

</div>

</div>

</div>
<?php
include("footer.php");
?>
