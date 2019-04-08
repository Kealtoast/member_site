<?php 
//This 
if (isset($_GET['member'])) {

	require_once 'dbh.inc.php';
	$sql = "SELECT * FROM users WHERE user_uid='".$_GET['member']."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck < 1) {
		# code...
	} else {

		$row = mysqli_fetch_assoc($result);
		echo '<div class="profile-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 profile-holder">
                                <a class="fancybox">
                                    <img src="'.$row['user_profile_image'].'">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 gallery-heading">
                                <h1>'.$row['user_uid'].'</h1>
                            </div>
                            <div class="col-xs-12 profile-box">
                                <div class="row is-flex"></div>
                            </div>
                            <div class="col-xs-12 profile-box">
                                <div class="row">
                                    <div class="col-xs-12 rates">
                                        <p class="text-center">tba</p>
                                        <p class="text-center">tba</p>
                                        <p class="text-center">tba</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 profile-box">
                                <div class="row">
                                    <div class="col-xs-12 about">
                                        <h2 class="profile-heading">About Me</h2>
                                        <p>'.$row['user_about_me'].'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 profile-box">
                                <div class="row">
                                    <div class="col-xs-12 profile-number">
                                        <a href="">
                                            <div class="num">Message Me</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 profile-box">
                                <div class="row">
                                    <div class="col-xs-12 profile-reviews">
                                        <h2 class="profile-heading text-center text-red h3">Reviews</h2>
                                        <form action="/gallery/ela-40" method="post" id="reviews-form">
                                            <div id="message"></div>
                                            <input class="form-control" type="text" name="txt_name" value placeholder="Full Name...">
                                            <input class="form-control" type="email" name="txt_email" value placeholder="Email Address...">
                                            <input class="form-control datepicker" name="txt_date" maxlength placeholder="Date of Visit" value type="text">
                                            <select class="form-control" name="sel_service">
                                                <option value>Level of Service</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <select class="form-control" name="sel_attractiveness">
                                                <option value>Attractiveness</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <textarea class="form-control" name="txt_review" placeholder="Write your review..."></textarea>
                                            <div class="captcha-holder">
                                                <div class="g=recaptcha" data-sitekey="6ldvrCQUAAAAAPEjCxKV65JVc37_XEj4Yw1GBSw3">
                                                    <div style="width: 304px; height: 78px;">
                                                        <textarea class="g-recaptcha-responce" id="g-recaptcha-responce" name="g-recaptcha-responce" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input class="form-control form-submit" name="btn_post_review" type="submit" value="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>'
		;
	}


}