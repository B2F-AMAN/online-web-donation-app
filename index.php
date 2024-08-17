<?php
include("header.php");
?>






<div id="home-owl" class="owl-carousel owl-theme">

<div class="home-item">

<div class="section-bg" style="background-image: url(img/charity/1.jpg);"></div>

<div class="home">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="home-content">
<h1>Help, Donate & Fundrise</h1>
<p class="lead">Help, Donate & Fundrise</p>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="home-item">

<div class="section-bg" style="background-image: url(img/charity/2.png);"></div>


<div class="home">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="home-content">
<h1>The Helping Hand</h1>
<p class="lead">LETS COME TOGETHER TO SUPPORT HEALTH OF MILLION PEOPLE.</p>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</header>


<div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h2 class="title">Welcome to The Helping Hand Charity</h2>
<p class="sub-title"></p>
</div>
<div class="about-content">
<p>
A platform where patients can raise funds for their surgeries and operations. We believe in the power of community support to overcome medical challenges. Whether it's cancer treatment, heart surgery, or eye operations, your donation can make a life-changing difference. Join us in restoring hope and transforming lives. 
Together, we can make healthcare accessible to all. Start a fundraiser or donate today. Every contribution counts.</p>
<a href="about.php" class="primary-button">Read More</a>
</div>
</div>


<div class="col-md-offset-1 col-md-6">
<a href="about.php" class="about-video" style="height: 550px;">
<img src="img/charity/IMG_20191210_124518.jpg" alt="">
</a>
</div>

</div>

</div>

</div>





<div id="cta" class="section">

<div class="section-bg" style="background-image: url(img/charity/downloadfile.jpg);" data-stellar-background-ratio="0.5"></div>


<div class="container">

<div class="row">

<div class="col-md-offset-2 col-md-8">
<div class="cta-content text-center">
<h1>Join Us Now</h1>

<a href="fund.php" class="primary-button" onclick="return false" data-toggle="modal" data-target="#DonorLoginModal">Login</a>
<a href="" class="primary-button" onclick="return false" data-toggle="modal" data-target="#DonorRegisterModal">Become a doner</a>
</div>
</div>

</div>

</div>

</div>


<div id="events" class="section">

<div class="container">

<div class="row">

<div class="col-md-8 col-md-offset-2">
<div class="section-title text-center">
<h2 class="title">The Helping Hand CHARITY</h2>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="#">
<img src="img/event-1.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="#">Help people in need</a></h3>
<p>Provide direct support to an individual, family or community by paying medical expenses or offering financial aid..</p>
</div>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="#">
<img src="img/event-2.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="#">Take action in an emergency</a></h3>

<p>Raise funds in response to a natural disaster or humanitarian crisis. Make a difference in minutes.</p>
</div>
</div>
</div>

<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="#">
<img src="img/event-3.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="#">Take part in a charity event</a></h3>

<p>Choose from hundreds of official events including marathons, bike rides, Dryathlons and bake offs….</p>
</div>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="#">
<img src="img/event-4.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="#">Celebrate an occasion</a></h3>
<p>Mark a special event like a birthday, wedding or final exam by asking friends for donations rather than gifts..</p>
</div>
</div>
</div>

</div>

</div>

</div>

<hr>

<div id="causes" class="section" style="padding: 5px;">

<div class="container">

<div class="row">

<div class="col-md-8 col-md-offset-2">
<div class="section-title text-center">
<h2 class="title">Fund Raiser</h2>
<p class="sub-title">fund-raising is the process of seeking and gathering voluntary financial contributions by engaging individuals, businesses, charitable foundations, or governmental agencies..</p>
</div>
</div>


<?php
	$sql = "SELECT * FROM fund_raiser where status='Active' order by fund_raiser_id DESC  limit 3";
	$qsql = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		$perc=0;
$sqlfund_collection = "SELECT SUM(paid_amt) FROM fund_collection where fund_raiser_id='$rs[0]' AND status='Active'";
$qsqlfund_collection = mysqli_query($con,$sqlfund_collection);
$rsfund_collection = mysqli_fetch_array($qsqlfund_collection);


 $perc = ($rsfund_collection[0] * 100 / $rs['fund_amount'])
?>
<div class="col-md-4">
	<div class="causes">
		<div class="causes-img">
		<a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>">		
		<?php
		if($rs['banner_img'] == "")
		{
			echo "<img src='img/no-image-icon.png' style='height: 300px;'>";
		}
		else if(file_exists("imgfundraiser/".$rs['banner_img']))
		{
			echo "<img src='imgfundraiser/".$rs['banner_img']. "'  style='height: 300px;'>";
		}
		else
		{
			echo "<img src='img/no-image-icon.png' style='height: 300px;' >";	
		}
		?>
		</a>
		</div>
		<div class="causes-progress">
		<div class="causes-progress-bar">
		<div style="width: <?php echo $perc; ?>%;">
		<span><?php echo $commonclass->formatNumber($perc,2); ?>%</span>
		</div>
		</div>
		<div>
		<span class="causes-raised">Raised: <strong>₹<?php echo $commonclass->formatNumber($rsfund_collection[0],2); ?></strong></span>
		<span class="causes-goal">Goal: <strong>₹<?php echo $commonclass->formatNumber($rs['fund_amount'],2); ?></strong></span>
		</div>
		</div>
		<div class="causes-content">
		<h3><a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>"><?php echo  $rs['title']; ?></a></h3>
		<p><?php echo  $string = substr($rs['fund_raiser_description'],0,100).'...'; ?></p>
		<a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>" class="primary-button causes-donate">Donate Now</a>
		</div>
	</div>
</div>
<?php
	}
?>


<div class="clearfix visible-md visible-lg"></div>


<?php
include("footer.php");
?>