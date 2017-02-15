<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fill Informtion</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/> 
        <?php  $cssArray = array('css/theme-default/bootstrap','/css/theme-default/materialadmin', 'css/theme-default/font-awesome.min', 'css/theme-default/material-design-iconic-font.min','css/theme-default/libs/select2/select2','css/theme-default/libs/bootstrap-datepicker/datepicker3'); ?>

        <?php add_css($cssArray); ?>
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="#">
									<span class="text-lg text-bold text-primary">Fill Your All Information</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="headerbar-right">
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<span class="profile-info" style="padding: 15px 0 0px 62px;">
									Need Help ?
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">

								<li><a href="#">Help !</a></li>
								<li><a href="#">What is this ? </a></li>
								<li><a href="#">Where it will show ?</a></li>
								<li class="divider"></li>
								<li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Visit Prajapti Info</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<div>
			<div id="content">
				<section>
					<div class="section-body" id="head_person_section_top">
						<div class="row">
							<div class="col-md-10 form">
								<?php echo form_open('index/insert_user');
                   					 ?>
									<div class="card">
										<div class="card-head style-primary">
											<header style="text-transform: uppercase">Head person of family</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="sn" class="form-control" id="headperson_surname">
														<label for="headperson_surname">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="fn" class="form-control" id="headperson_firstname">
														<label for="headperson_firstname">First Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="mn" class="form-control" id="headperson_middlename">
														<label for="headperson_middlename">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<input type="text" class="form-control" id="home_address" name="home-address">
														<label for="Lastname2">Full Address</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-2">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="home_country" name="home_country">
															<option value="0">Select Country</option>
															<option value="5">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Country</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="home_state" name="home_state">
																<option value="0">Select State</option>
																<option value="1">Alaska</option>
																<option value="2">Hawaii</option>
																<option value="3">California</option>
																<option value="4">Nevada</option>
																<option value="5">Oregon</option>
																<option value="6">Washington</option>

																<option value="AZ">Arizona</option>
																<option value="CO">Colorado</option>
																<option value="ID">Idaho</option>
																<option value="MT">Montana</option><option value="NE">Nebraska</option>
																<option value="NM">New Mexico</option>
																<option value="ND">North Dakota</option>
																<option value="UT">Utah</option>
																<option value="WY">Wyoming</option>

																<option value="AL">Alabama</option>
																<option value="AR">Arkansas</option>
																<option value="IL">Illinois</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
																<option value="LA">Louisiana</option>
																<option value="MN">Minnesota</option>
																<option value="MS">Mississippi</option>
																<option value="MO">Missouri</option>
																<option value="OK">Oklahoma</option>
																<option value="SD">South Dakota</option>
																<option value="TX">Texas</option>
																<option value="TN">Tennessee</option>
																<option value="WI">Wisconsin</option>

																<option value="CT">Connecticut</option>
																<option value="DE">Delaware</option>
																<option value="FL">Florida</option>
																<option value="GA">Georgia</option>
																<option value="IN">Indiana</option>
																<option value="ME">Maine</option>
																<option value="MD">Maryland</option>
																<option value="MA">Massachusetts</option>
																<option value="MI">Michigan</option>
																<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
																<option value="NY">New York</option>
																<option value="NC">North Carolina</option>
																<option value="OH">Ohio</option>
																<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
																<option value="VT">Vermont</option><option value="VA">Virginia</option>
																<option value="WV">West Virginia</option>

														</select>
														<label>State</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="home_city" name="home_city">
															<option value="0">Select City</option>
															<option value="1">Bhavnagar</option>
															<option value="2">Vadodara</option>
															<option value="3">Ahmedabad</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>

															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>

															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>

															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>City</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<input type="text" class="form-control" id="home_pinode" name="home_pinode">
														<label for="Lastname2">Pincode</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="home_mosad" name="home_mosad">
															<option value="AK"></option>
															<option value="1">Buhecha</option>
															<option value="2">Ladva</option>
															<option value="3">Patel</option>
															<option value="4">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="native" name="native">
															<option value="AK"></option>
															<option value="1">Jamnagar</option>
															<option value="2">Rajkot</option>
															<option value="3">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" id="occupation_type" data-placeholder="Select an item" name="occupation">
															<option value="0">Select Occupation</option>
															<option value="HBU">Business</option>
															<option value="HJB">Job</option>
														</select>
														<label>Occupation</label>
													</div>
												</div>
												<div class="col-sm-5" id="b_name" style="display: none">
													<div class="form-group">
														<input type="text" class="form-control" id="business_name">
														<label for="Lastname2">Business Name</label>
													</div>
												</div>
												<div class="col-sm-3" id="Job_type" style="display: none">
													<div class="form-group">
														<select id="Job_select" name="job_type" class="form-control select2-list"  data-placeholder="Select an item"  >
															<option value="0"></option>
															<option value="Lawyer">Lawyer</option>
															<option value="ENgg">Engineer</option>
															<option value="Civil">Civil Services</option>
														</select>
														<label>Job Type</label>
													</div>
												</div>
												<div class="col-sm-2" id="b_number" style="display: none">
													<div class="form-group">
														<input type="text" class="form-control" id="business_number">
														<label for="Lastname2">Business Number</label>
													</div>
												</div>
												<div class="col-sm-2" id="b_sameasabove" style="display: none">
													<div class="checkbox checkbox-styled">
														<label>
															<input type="checkbox" id="check-for-same-address" value="">
															<span>Same as Above</span><br>
															<em>Business address</em>
														</label>
													</div>
												</div>
											</div>
											<div class="row" style="display: none" id="b_address">
												<div class="col-sm-12">
													<div class="form-group">
														<input type="text" class="form-control" id="business_address" name="business_address">
														<label for="Lastname2" id="business_address_lable">Business Address</label>
													</div>
												</div>
											</div>

											<div class="row" style="display: none" id="b_c_c_s_headperson">
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="business_country" name="business_country">
															<option value="0">Select Country</option>
															<option value="1">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Business Country</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="business_state" name="business_state">
															<option value="0">Select State</option>
															<option value="1">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Business State</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="business_city" name="business_city">
															<option value="0">Select City</option>
															<option value="1">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>

															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>

															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Business City</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" class="form-control" id="business_pinode" name="business_pinode">
														<label for="Lastname2" id="business_pinode_label">Pincode</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" class="form-control" id="email" name="email" required>
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<input name="dob" id="father_birthday" placeholder="Birth Date(yyyy/mm/dd)" type="text" class="form-control">

													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="blood_group" name="bg">
															<option value="AK"></option>
															<option value="1">O+</option>
															<option value="2">A+</option>
															<option value="3">B+</option>
															<option value="4">AB+</option>
															<option value="5">AB-</option>
															<option value="6">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<!-- <div class="col-sm-1">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">or Age</label>
													</div>
												</div> -->
												<div class="col-sm-2">
													<div class="form-group">
														<input name="cn" type="text" class="form-control" id="contact">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<div>
															<label class="radio-inline radio-styled">
																<input type="radio" class="gender" id="sex" name="sex" value="Male"><span>Male</span>
															</label>
															<label class="radio-inline radio-styled">
																<input type="radio" class="gender" id="sex" name="sex" value="Female"><span>Female</span>
															</label>
														</div>

													</div>

												</div>
											</div>
											<div class="row">
												<div class="col-sm-2">
													<div class="form-group">
														<select name="status" class="form-control select2-list" id="headperson_merital_status" data-placeholder="Select an item">
															<option value="0">Merital Status</option>
															<option value="Single">Single</option>
															<option value="Merried">Merried</option>
															<option value="Widow">Widow</option>
															<option value="Divorced">Divorced</option>
														</select>
														<label>Marital Status</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<div class="checkbox checkbox-styled">
															<label>
															<input name="head_check" type="checkbox" value="1" id="head_family">
															<span>I am Head Person of family</span><br>
														</label>
														</div>
													</div>
												</div>

												<div class="col-sm-2" id="select_children" style="display: none">
													<div class="form-group">
														<select name="child" class="form-control select2-list" id="head_select_children" data-placeholder="Select an item">
															<option value="AK">Select Option</option>
															<option value="no-children">No</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
														</select>
														<label>Childrens</label>
													</div>
												</div>
												<div class="col-sm-2" id="select_boys" style="display: none">
													<div class="form-group">
														<select name="boy" class="form-control select2-list" id="head_select_boys" data-placeholder="Select an item">
															<option value="AK">Select Option</option>
															<option value="no-boys">No Boy</option>
															<option id="b1" value="1">1</option>
															<option id="b2" value="2">2</option>
															<option id="b3" value="3">3</option>
															<option id="b4" value="4">4</option>
															<option id="b5" value="5">5</option>
															<option id="b6" value="6">6</option>
															<option id="b7" value="7">7</option>
														</select>
														<label>Boys</label>
													</div>
												</div>
												<div class="col-sm-2" id="select_girls" style="display: none">
													<div class="form-group">
														<select name="girl" class="form-control select2-list" id="head_select_girls" data-placeholder="Select an item">
															<option value="AK">Select Option</option>
															<option value="no-girls">No Girls</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
														</select>
														<label>Girls</label>
													</div>
												</div>
											</div>
										</div><!--end .card-body -->
									</div><!--end .card -->
									<div>
									<input type="submit" value="Submit" id="submit" /></div>
								</form>
							</div>
							<p id="show" style="display: none;">This details is inserted</p>
							<!-- <div class="col-md-2">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary">
											<header >General Info</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK">Sorathiya</option>
															<option value="HI">Variya</option>
															<option value="HI">Vatalia</option>
														</select>
														<label>Which Prajapati?</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>wShow Birthdate Directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on Directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Business info on Directory</span><br>
														</label>
													</div>
												</div>

											</div>
										</div><!--end .card-body -->
									</div><!--end .card -->
								</form>
							</div> 
						</div>
						</div>
					<?php form_open(base_url('index/insert_partner')) ?>
					<div class="section-body" id="merried_section" style="display: none">
						<div class="row">
							<div class="col-md-10">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="head_person_sub_person" class="person_name_girl"></span>'s <span id="gender_type_sub"></span></header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="psn" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="pna" class="form-control" id="sub_headperson_firstname">
														<label for="sub_headperson_firstname" id="sub_headperson_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="pmn" class="form-control" id="sub_headperson_middlename">
														<label id="sub_headperson_middlename_label" for="sub_headperson_middlename">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-2">
													<div class="form-group">
														<div class="checkbox checkbox-styled">
															<label>
																<input type="checkbox" id="check-for-same-address_sub" value="">
																<span>Same as Above</span><br>
															</label>
														</div>
													</div>
												</div>
												<div class="col-sm-10">
													<div class="form-group">
														<input type="text" name="padd" class="form-control" id="home_address_sub" name="home_address_sub">
														<label for="Lastname2" id="home_address_lable_sub">Address</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="home_country_sub" name="home_country_sub">
															<option value="0">Select Country</option>
															<option value="1">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label id>Country</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="home_state_sub" name="home_state_sub">
															<option value="0">Select State</option>
															<option value="1">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>

															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>

															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>

															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>

														</select>
														<label>State</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
																<select class="form-control select2-list" data-placeholder="Select an item" id="home_city_sub" name="home_city_sub">
															<option value="0">Select City</option>
															<option value="1">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>

															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>

															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>

															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>City</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" class="form-control" id="home_pinode_sub" name="home_pinode_sub">
														<label for="Lastname2" id="home_pinode_label_sub">Pincode</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" name="pocc" id="select_occupation_sub" data-placeholder="Select an item">
															<option value="HW">House wife</option>
															<option value="FB">Family Business</option>
															<option value="PBU">Personal Business</option>
															<option value="JB">Job</option>
														</select>
														<label>Occupation</label>
													</div>
												</div>
												<div class="col-sm-5" id="business_name_sub" style="display: none">
													<div class="form-group">
														<input name="personal_business_name_sub" type="text" class="form-control" id="personal_business_name_sub">
														<label for="Lastname2">Business Name</label>
													</div>
												</div>
												<div class="col-sm-2" id="business_number_sub" style="display: none">
													<div class="form-group">
														<input name="personal_business_number_sub" type="text" class="form-control" id="personal_business_number_sub">
														<label for="Lastname2">Business Number</label>
													</div>
												</div>
												<div class="col-sm-2" id="business_sameasabove_sub" style="display: none">
													<div class="checkbox checkbox-styled">
														<label>
															<input type="checkbox" id="check-for-sameaddress_sub" value="">
															<span>Same as Above</span><br>
															<em>Business address</em>
														</label>
													</div>
												</div>
											</div>
											<div class="row" id="business_address_sub" style="display: none">
												<div class="col-sm-12">
													<div class="form-group">
														<input name="business_address" type="text" class="form-control" id="business_address_sub_val" name="business_address">
														<label for="Lastname2" id="business_address_sub_label">Business Address</label>
													</div>
												</div>
											</div>

											<div class="row" id="business_c_c_s_sub" style="display: none">
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="business_country_sub_val" name="business_country_sub_val">
															<option value="0">Select Country</option>
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Business Country</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="business_state_sub_val" name="business_state_sub_val">
															<option value="0">Select State</option>
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Business State</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item" id="business_city_sub_val" name="business_city_sub_val">
															<option value="0">Select City</option>
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="MT">Montana</option><option value="NE">Nebraska</option>
															<option value="NM">New Mexico</option>
															<option value="ND">North Dakota</option>
															<option value="UT">Utah</option>
															<option value="WY">Wyoming</option>

															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="IL">Illinois</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="OK">Oklahoma</option>
															<option value="SD">South Dakota</option>
															<option value="TX">Texas</option>
															<option value="TN">Tennessee</option>
															<option value="WI">Wisconsin</option>

															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="IN">Indiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="OH">Ohio</option>
															<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
															<option value="VT">Vermont</option><option value="VA">Virginia</option>
															<option value="WV">West Virginia</option>
														</select>
														<label>Business City</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" class="form-control" id="business_pinode_sub_val" name="business_pinode_sub_val">
														<label for="Lastname2" id="business_pinode_sub_label">Pincode</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" name="peid" class="form-control" id="email_id">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<input name="pdob" id="partner_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<select name="pbg" id="pbg" class="form-control select2-list"  data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="O+">O+</option>
															<option value="A+">A+</option>
															<option value="B+">B+</option>
															<option value="AB+">AB+</option>
															<option value="AB-">AB-</option>
															<option value="O">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-1">
													<div class="form-group">
														<input type="text" name="age" class="form-control" id="Lastname2">
														<label for="Lastname2">or Age</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<input name="pcn" id="pcn" type="text" class="form-control">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<div>
															<label  class="radio-inline radio-styled">
																<input name="psex" id="psex" type="radio" value="Male"><span>Male</span>
															</label>
															<label id="psex" class="radio-inline radio-styled">
																<input name="psex" id="psex" type="radio" value="Female"><span>Female</span>
															</label>
														</div>

													</div>
												</div>
											</div>
										</div><!--end .card-body -->
									</div><!--end .card -->
								</form>
							</div>
							<!-- <div class="col-md-2">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary">
											<header>General Info</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK">Sorathiya</option>
															<option value="HI">Variya</option>
															<option value="HI">Vatalia</option>
														</select>
														<label>Which Prajapati?</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate Directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on Directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="checkbox checkbox-styled">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Business info on Directory</span><br>
														</label>
													</div>
												</div>

											</div>
										</div><!--end .card-body -->
									</div><!--end .card -->
								</form>
							</div> 
						</div>

					</div>

					<div class="section-body" id="children_section" style="display: block">
						<div class="row">
							<div class="col-md-6" style="display: none" id="girl_child_1">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #E91E63 !important;border-color: #E91E63 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="person_name" class="person_name_girl"></span>'s First Daughter</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="girl1_surname" class="form-control girl1_surname"  id="girl1_surname">
														<label class="girl_surname_label" id="girl1_surname_label" for="girl1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="girl1_name" class="form-control" id="girl1_name">
														<label for="girl1_name_label" id="girl1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="girl1_middlename" class="form-control girl1_middlename" id="girl1_middlename">
														<label class="girl_middlename_label" id="girl1_middlename_label" for="girl1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" name="girl1_email" class="form-control" id="girl1_email">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input name="girl1_birthday" id="girl1_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" name="girl1_contactno" class="form-control" id="girl1_contactno">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl1_bg" id="girl1_bg" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="O+">O+</option>
															<option value="A+">A+</option>
															<option value="B+">B+</option>
															<option value="AB+">AB+</option>
															<option value="AB-">AB-</option>
															<option value="O-">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl1_mosad" id="girl1_mosad" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="1">Buhecha</option>
															<option value="2">Ladva</option>
															<option value="3">Patel</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl1_native" id="girl1_native" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="1">Jamnagar</option>
															<option value="2">Rajkot</option>
															<option value="3">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl1_education" id="girl1_education" class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="10th">10th</option>
															<option value="12th">12th</option>
															<option value="Diploma in Computer">Diploma in Computer</option>
															<option value="Diploma in Mechenical">Diploma in Mechenical</option>
															<option value="Diploma in Civil">Diploma in Civil</option>
															<option value="Diploma in Electrical">Diploma in Electrical</option>
															<option value="Diploma in EC">Diploma in EC</option>
															<option value="Diploma in Bio-Medical">Diploma in Bio-Medical</option>
															<option value="B.E in Computer">B.E in Computer</option>
															<option value="B.E in Mechenical">B.E in Mechenical</option>
															<option value="B.E in Civil">B.E in Civil</option>
															<option value="B.E in Electrical">B.E in Electrical</option>
															<option value="B.E in EC">B.E in EC</option>
															<option value="B.E in Bio-Medical">B.E in Bio-Medical</option>
															<option value="Masters">Masters</option>
															<option value="PHD">PHD</option>
															<option value="M.Phil">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl1_material_status" id="girl1_material_status" class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="Merried">Merried</option>
															<option value="unmerried">Unmerried</option>
															<option value="Widow">Widow</option>
															<option value="Divorced">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g1_achivement1_name" type="text" class="form-control" id="g1_achivement1_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input name="g1_achivement1_my" type="text" class="form-control" id="g1_achivement1_my">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g1_achivement2_name" type="text" class="form-control" id="g1_achivement2_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input name="g1_achivement2_my" id="g1_achivement2_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g1_achivement3_name" type="text" class="form-control" id="g1_achivement3_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input name="g1_achivement3_my" id="g1_achivement3_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g1_achivement4_name" type="text" class="form-control" id="g1_achivement4_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input name="g1_achivement4_my" id="g1_achivement4_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="girl_child_2">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #E91E63 !important;border-color: #E91E63 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="person_name" class="person_name_girl"></span>'s Second Daughter</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input name="girl2_surname" type="text" class="form-control girl1_surname"  id="girl2_surname">
														<label class="girl_surname_label" id="girl1_surname_label" for="girl1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input name="girl2_name" type="text" class="form-control" id="girl2_name">
														<label for="girl1_name_label" id="girl1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input name="girl2_middlename" type="text" class="form-control girl1_middlename" id="girl2_middlename">
														<label class="girl_middlename_label" id="girl1_middlename_label" for="girl1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input name="girl2_email" type="text" class="form-control" id="girl2_email">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input name="girl2_birthday" id="girl2_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input name="girl2_contactno" type="text" class="form-control" id="girl2_contactno">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl2_bg" id="girl2_bg" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="O+">O+</option>
															<option value="A+">A+</option>
															<option value="B+">B+</option>
															<option value="AB+">AB+</option>
															<option value="AB-">AB-</option>
															<option value="O-">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl2_mosad" id="girl2_mosad" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl2_native" id="girl2_native" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl2_education" id="girl2_education" class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="10th">10th</option>
															<option value="12th">12th</option>
															<option value="Diploma in Computer">Diploma in Computer</option>
															<option value="Diploma in Mechenical">Diploma in Mechenical</option>
															<option value="Diploma in Civil">Diploma in Civil</option>
															<option value="Diploma in Electrical">Diploma in Electrical</option>
															<option value="Diploma in EC">Diploma in EC</option>
															<option value="Diploma in Bio-Medical">Diploma in Bio-Medical</option>
															<option value="B.E in Computer">B.E in Computer</option>
															<option value="B.E in Mechenical">B.E in Mechenical</option>
															<option value="B.E in Civil">B.E in Civil</option>
															<option value="B.E in Electrical">B.E in Electrical</option>
															<option value="B.E in EC">B.E in EC</option>
															<option value="B.E in Bio-Medical">B.E in Bio-Medical</option>
															<option value="Masters">Masters</option>
															<option value="PHD">PHD</option>
															<option value="M.Phil">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="girl2_material_status" id="girl2_material_status" class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement_g"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g2_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g2_achivement1_name" type="text" class="form-control" id="g2_achivement1_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input name="g2_achivement1_my" id="g2_achivement1_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g2_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g2_achivement2_name" type="text" class="form-control" id="g2_achivement2_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input name="g2_achivement2_my" id="g2_achivement2_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g2_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g2_achivement3_name" type="text" class="form-control" id="g2_achivement3_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input name="g2_achivement3_my" id="g2_achivement3_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g2_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="g2_achivement4_name" type="text" class="form-control" id="g2_achivement4_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input name="g2_achivement4_my" id="g2_achivement4_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="girl_child_3">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #E91E63 !important;border-color: #E91E63 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="person_name" class="person_name_girl"></span>'s Third Daughter</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_surname"  id="girl1_surname">
														<label class="girl_surname_label" id="girl1_surname_label" for="girl1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="girl1_name">
														<label for="girl1_name_label" id="girl1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_middlename" id="girl1_middlename">
														<label class="girl_middlename_label" id="girl1_middlename_label" for="girl1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="girl_child_4">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #E91E63 !important;border-color: #E91E63 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="person_name" class="person_name_girl"></span>'s Forth Daughter</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_surname"  id="girl1_surname">
														<label class="girl_surname_label" id="girl1_surname_label" for="girl1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="girl1_name">
														<label for="girl1_name_label" id="girl1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_middlename" id="girl1_middlename">
														<label class="girl_middlename_label" id="girl1_middlename_label" for="girl1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="girl_child_5">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #E91E63 !important;border-color: #E91E63 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="person_name" class="person_name_girl"></span>'s Fifth Daughter</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_surname"  id="girl1_surname">
														<label class="girl_surname_label" id="girl1_surname_label" for="girl1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="girl1_name">
														<label for="girl1_name_label" id="girl1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_middlename" id="girl1_middlename">
														<label class="girl_middlename_label" id="girl1_middlename_label" for="girl1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="girl_child_6">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #E91E63 !important;border-color: #E91E63 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-female"></i> <span id="person_name" class="person_name_girl"></span>'s sixth Daughter</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_surname"  id="girl1_surname">
														<label class="girl_surname_label" id="girl1_surname_label" for="girl1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="girl1_name">
														<label for="girl1_name_label" id="girl1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control girl1_middlename" id="girl1_middlename">
														<label class="girl_middlename_label" id="girl1_middlename_label" for="girl1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

							<div class="col-md-6" style="display: none" id="boy_child_1">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #3F51B5 !important;border-color: #3F51B5 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-male"></i> <span class="person_name_girl"></span>'s First Son</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input name="boy1_surname" type="text" class="form-control boy1_surname" id="boy1_surname">
														<label class="boy_surname_label" id="boy1_surname_label" for="boy1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input name="boy1_name" type="text" class="form-control" id="boy1_name">
														<label for="boy1_name_label" id="boy1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input name="boy1_middlename" type="text" class="form-control boy1_middlename" id="boy1_middlename">
														<label class="boy_middlename_label" id="boy1_middlename_label" for="boy1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input name="boy1_email" type="text" class="form-control" id="boy1_email">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input name="boy1_birthday" id="boy1_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input name="boy1_contact" type="text" class="form-control" id="boy1_contact">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">

												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="boy1_bg" id="boy1_bg" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="O+">O+</option>
															<option value="A+">A+</option>
															<option value="B+">B+</option>
															<option value="AB+">AB+</option>
															<option value="AB-">AB-</option>
															<option value="O-">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="boy1_mosad" id="boy1_mosad" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="1">Buhecha</option>
															<option value="2">Ladva</option>
															<option value="3">Tank</option>
															<option value="4">Savania</option>
															<option value="5">Dhokiya</option>
															<option value="6">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="boy1_native" id="boy1_native" class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="1">Jamnagar</option>
															<option value="2">Rajkot</option>
															<option value="3">Porbandar</option>
															<option value="4">Khirasra</option>
															<option value="5">Ranavav</option>
															<option value="6">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="boy1_education" id="boy1_education" class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="10th">10th</option>
															<option value="12th">12th</option>
															<option value="Diploma in Computer">Diploma in Computer</option>
															<option value="Diploma in Mechenical">Diploma in Mechenical</option>
															<option value="Diploma in Civil">Diploma in Civil</option>
															<option value="Diploma in Electrical">Diploma in Electrical</option>
															<option value="Diploma in EC">Diploma in EC</option>
															<option value="Diploma in Bio-Medical">Diploma in Bio-Medical</option>
															<option value="B.E in Computer">B.E in Computer</option>
															<option value="B.E in Mechenical">B.E in Mechenical</option>
															<option value="B.E in Civil">B.E in Civil</option>
															<option value="B.E in Electrical">B.E in Electrical</option>
															<option value="B.E in EC">B.E in EC</option>
															<option value="B.E in Bio-Medical">B.E in Bio-Medical</option>
															<option value="Masters">Masters</option>
															<option value="PHD">PHD</option>
															<option value="M.Phil">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select name="boy1_material_status" id="boy1_material_status" class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="Merried">Merried</option>
															<option value="Unmerried">Unmerried</option>
															<option value="window">Widow</option>
															<option value="Divorced">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement_b"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="b1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="b1_achivement1_name" type="text" class="form-control" id="b1_achivement1_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input name="b1_achivement1_my" id="b1_achivement1_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="b1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="b1_achivement2_name" type="text" class="form-control" id="b1_achivement2_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input name="b1_achivement2_my" id="b1_achivement2_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="b1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="b1_achivement3_name" type="text" class="form-control" id="b1_achivement3_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input name="b1_achivement3_my" id="b1_achivement3_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="b1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input name="b1_achivement4_name" type="text" class="form-control" id="b1_achivement4_name">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input name="b1_achivement4_my" id="b1_achivement4_my" type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="boy_child_2">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #3F51B5 !important;border-color: #3F51B5 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-male"></i> <span class="person_name_girl"></span>'s second Son</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_surname" id="boy1_surname">
														<label class="boy_surname_label" id="boy1_surname_label" for="boy1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="boy1_name">
														<label for="boy1_name_label" id="boy1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_middlename" id="boy1_middlename">
														<label class="boy_middlename_label" id="boy1_middlename_label" for="boy1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">

												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="boy_child_3">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #3F51B5 !important;border-color: #3F51B5 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-male"></i> <span class="person_name_girl"></span>'s third Son</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_surname" id="boy1_surname">
														<label class="boy_surname_label" id="boy1_surname_label" for="boy1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="boy1_name">
														<label for="boy1_name_label" id="boy1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_middlename" id="boy1_middlename">
														<label class="boy_middlename_label" id="boy1_middlename_label" for="boy1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">

												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="boy_child_4">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #3F51B5 !important;border-color: #3F51B5 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-male"></i> <span class="person_name_girl"></span>'s forth Son</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_surname" id="boy1_surname">
														<label class="boy_surname_label" id="boy1_surname_label" for="boy1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="boy1_name">
														<label for="boy1_name_label" id="boy1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_middlename" id="boy1_middlename">
														<label class="boy_middlename_label" id="boy1_middlename_label" for="boy1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">

												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-6" style="display: none" id="boy_child_5">
								<form class="form">
									<div class="card">
										<div class="card-head style-primary" style="background-color: #3F51B5 !important;border-color: #3F51B5 !important;">
											<header style="text-transform: uppercase"><i class="fa fa-male"></i> <span class="person_name_girl"></span>'s fifth Son</header>
										</div>
										<div class="card-body floating-label">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_surname" id="boy1_surname">
														<label class="boy_surname_label" id="boy1_surname_label" for="boy1_surname_label">Surname Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="boy1_name">
														<label for="boy1_name_label" id="boy1_name_label">Name</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control boy1_middlename" id="boy1_middlename">
														<label class="boy_middlename_label" id="boy1_middlename_label" for="boy1_middlename_label">Middle Name</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Email Id</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<input id="father_birthday" placeholder="Birth Date" type="text" class="form-control" data-inputmask="'alias': 'date'">

													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Lastname2">
														<label for="Lastname2">Contact Number</label>
													</div>
												</div>
												<div class="col-sm-2">

												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-danger">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Email ID on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-success">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Birthdate on directory</span><br>
														</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="checkbox checkbox-styled checkbox-warning">
														<label>
															<input type="checkbox" id="" value="">
															<span>Show Contact No. On Directory</span><br>
														</label>
													</div>
												</div>
												<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">O+</option>
															<option value="HI">A+</option>
															<option value="HI">B+</option>
															<option value="HI">AB+</option>
															<option value="HI">AB-</option>
															<option value="HI">O-</option>
														</select>
														<label>Blood Group</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Buhecha</option>
															<option value="HI">Ladva</option>
															<option value="HI">Tank</option>
															<option value="HI">Savania</option>
															<option value="HI">Dhokiya</option>
															<option value="HI">Vara</option>
														</select>
														<label>Mosad</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="AK"></option>
															<option value="AK">Jamnagar</option>
															<option value="HI">Rajkot</option>
															<option value="HI">Porbandar</option>
															<option value="HI">Khirasra</option>
															<option value="HI">Ranavav</option>
															<option value="HI">Junagadh</option>
														</select>
														<label>Native Place</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">10th</option>
															<option value="HI">12th</option>
															<option value="HI">Diploma in Computer</option>
															<option value="HI">Diploma in Mechenical</option>
															<option value="HI">Diploma in Civil</option>
															<option value="HI">Diploma in Electrical</option>
															<option value="HI">Diploma in EC</option>
															<option value="HI">Diploma in Bio-Medical</option>
															<option value="HI">B.E in Computer</option>
															<option value="HI">B.E in Mechenical</option>
															<option value="HI">B.E in Civil</option>
															<option value="HI">B.E in Electrical</option>
															<option value="HI">B.E in EC</option>
															<option value="HI">B.E in Bio-Medical</option>
															<option value="HI">Masters</option>
															<option value="HI">PHD</option>
															<option value="HI">M.Phil</option>
														</select>
														<label>Education</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<select class="form-control select2-list" data-placeholder="Select an item">
															<option value="0"></option>
															<option value="AK">Merried</option>
															<option value="HI">Unmerried</option>
															<option value="HI">Widow</option>
															<option value="HI">Divorced</option>
														</select>
														<label>Merital Status</label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<button type="button" class="btn btn-block ink-reaction btn-warning" id="add_achivement"><i class="fa fa-star"> </i> Add achivement</button>
													</div>
												</div>
											</div>

											<div class="row" id="g1_achivement1" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach1">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement2" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach2">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement3" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach3">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row" id="g1_achivement4" style="display: none">
												<div class="col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" id="sub_headperson_surname">
														<label id="sub_headperson_surname_label" for="sub_headperson_surname">Achivement Name</label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group control-width-normal">
														<div class="input-group date" id="demo-date-month_girl1_ach4">
															<div class="input-group-content">
																<input type="text" class="form-control">
																<label>Month & Year</label>
															</div>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
					<h1 style="display: none;" id="mes">Your details are successfully inserted.</h1>
					<input type="submit" value="Submit" id="submit_another" style="display: none;" />
				</section>
			</div>
		</div>

		<!-- BEGIN JAVASCRIPT -->
		<?php     
            $jsArray = array(
            'js/libs/jquery/jquery-1.11.2.min',
			'js/core/demo/Demo',
			'js/core/demo/DemoFormComponents',
			'js/libs/jquery/jquery-migrate-1.2.1.min',
			'js/libs/bootstrap/bootstrap.min',
			'js/libs/spin.js/spin.min',
			'js/libs/autosize/jquery.autosize.min',
			'js/libs/select2/select2.min',
			'js/libs/moment/moment.min',
			'js/libs/inputmask/jquery.inputmask.bundle.min',
			'js/libs/bootstrap-datepicker/bootstrap-datepicker',
			'js/libs/nanoscroller/jquery.nanoscroller.min',
			'js/core/source/App',
			'js/core/source/AppNavigation',
			'js/core/source/AppOffcanvas',
			'js/core/source/AppCard',
			'js/core/source/AppForm',
			'js/core/source/AppNavSearch',
			'js/core/source/AppVendor',
            );
            add_js($jsArray);
        ?>
        <script>
		    $(function(){

		        $( "#submit" ).click(function(event)
		        {
		            event.preventDefault();//prevent auto submit data

		            var surname= $("#headperson_surname").val();
		            var first_name= $("#headperson_firstname").val();
		            var middle_name= $("#headperson_middlename").val();
		            var home_address = $('#home_address').val();
		            var home_country = $('#home_country').val();
		            var home_state = $('#home_state').val();
		            var home_city = $('#home_city').val();
		            var home_pinode = $('#home_pinode').val();
		            var home_mosad = $('#home_mosad').val();
		            var native = $('#native').val();
		            var occupation_type = $('#occupation_type').val();
		            var email = $('#email').val();
		            var father_birthday = $('#father_birthday').val();
		            var blood_group = $('#blood_group').val();
		            var contact = $('#contact').val();
		            var sex = $('#sex').val();
		            var headperson_merital_status = $('#headperson_merital_status').val();
		            var head_family = $('#head_family').val();
		            var head_select_children= $('#head_select_children').val();
		            var head_select_boys= $('#head_select_boys').val();
		            var head_select_girls= $('#head_select_girls').val();
		            var job_type= $('#Job_select').val();
		            var business_name= $('#business_name').val();
		            var business_number= $('#business_number').val();
		            var business_address= $('#business_address').val();
		            var business_country= $('#business_country').val();
		            var business_state= $('#business_state').val();
		            var business_city= $('#business_city').val();
		            var business_pinode= $('#business_pinode').val();

		            if (email == '') {
		            	alert('enter valid emailid');
		            	event.preventDefault();
		            } else {
		            	console.log("here");
		            	//assign our rest of variables
		            $.ajax(
		                {
		                    type:"post",
		                    url: "<?php echo base_url(); ?>index/insert_user",
		                    data:{ sn:surname, fn:first_name,mn:middle_name,home_address:home_address,home_country:home_country,home_state:home_state,home_city:home_city,home_pinode:home_pinode,home_mosad:home_mosad,native:native,occupation:occupation_type,email:email,dob:father_birthday,bg:blood_group,cn:contact,sex:sex,status:headperson_merital_status,head_check:head_family,child:head_select_children ,boy:head_select_boys ,girl:head_select_girls,business_name:business_name,business_number:business_number,business_address:business_address,business_country:business_country,business_state:business_state,business_city:business_city,business_pinode:business_pinode,job_type:job_type},
		                    success:function(data)
		                    {
		                        console.log(data);
		                    }
		                });
		            }

		            
		            
		            // console.log("message");
		        });

		    });

		   
		</script>

		<script type="text/javascript">
			 $(function(){
		        $( "#submit_another" ).click(function(event)
		        {
		            event.preventDefault();//prevent auto submit data
		            //Partner's data
		            var sub_headperson_surname= $("#sub_headperson_surname").val();
		            var sub_headperson_firstname= $("#sub_headperson_firstname").val();
		            var sub_headperson_middlename= $("#sub_headperson_middlename").val();
		            var home_address_lable_sub = $('#home_address_sub').val();
		            var home_country_sub = $('#home_country_sub').val();
		            var home_state_sub = $('#home_state_sub').val();
		            var home_city_sub = $('#home_city_sub').val();
		            var home_pinode_sub = $('#home_pinode_sub').val();
		            var select_occupation_sub = $('#select_occupation_sub').val();
		            var email_id = $('#email_id').val();
		            var partner_birthday = $('#partner_birthday').val();
		            var blood_group = $('#pbg').val();
		            var contact = $('#pcn').val();
		            var sex = $('#psex').val();
		            var personal_business_name_sub = $('#personal_business_name_sub').val();
		            var personal_business_number_sub = $('#personal_business_number_sub').val();
		            var business_address = $('#business_address').val();
		            var business_country_sub_val = $('#business_country_sub_val').val();
		            var business_state_sub_val = $('#business_state_sub_val').val();
		            var business_city_sub_val = $('#business_city_sub_val').val();
		            var business_pinode_sub_val = $('#business_pinode_sub_val').val();

		            // Sending data of partner 
		            $.ajax(
		                {
		                    type:"post",
		                    url: "<?php echo base_url(); ?>index/insert_partner",
		                    data:{pna:sub_headperson_firstname,psn:sub_headperson_surname,pmn:sub_headperson_middlename,padd:home_address_lable_sub,home_country_sub:home_country_sub,home_state_sub:home_state_sub,home_city_sub:home_city_sub,home_pinode_sub:home_pinode_sub,pocc:select_occupation_sub,peid:email_id,pdob:partner_birthday,pbg:blood_group,pcs:contact,psex:sex,personal_business_number_sub:personal_business_number_sub,personal_business_name_sub:personal_business_name_sub,business_address:business_address,business_state_sub_val:business_state_sub_val,business_city_sub_val:business_city_sub_val,business_pinode_sub_val:business_pinode_sub_val},
		                    success:function(data)
		                    {
		                        console.log(data);
		                    }
		                });


		            //updating head person's data
		            var email = $('#email').val();
		            var head_select_children= $('#head_select_children').val();
		            var head_select_boys= $('#head_select_boys').val();
		            var head_select_girls= $('#head_select_girls').val();

		            //update head user
		            $.ajax(
		                {
		                    type:"post",
		                    url: "<?php echo base_url(); ?>index/update_user",
		                    data:{ email:email,child:head_select_children ,boy:head_select_boys ,girl:head_select_girls},
		                    success:function(data)
		                    {
		                        console.log(data);
		                    }
		                });

		            


		            //insert first daughter's information
		            var email = $('#email').val();
		            var girl1_surname = $('#girl1_surname').val();
		            var girl1_name = $('#girl1_name').val();
		            var girl1_middlename = $('#girl1_middlename').val();
		            var girl1_email = $('#girl1_email').val();
		            var girl1_birthday = $('#girl1_birthday').val();
		            var girl1_contactno = $('#girl1_contactno').val();
		            var girl1_bg = $('#girl1_bg').val();
		            var girl1_mosad = $('#girl1_mosad').val();
		            var girl1_native = $('#girl1_native').val();
		            var girl1_education = $('#girl1_education').val();
		            var girl1_material_status = $('#girl1_material_status').val();
		            var g1_achivement1_my = $('#g1_achivement1_my').val();
		            console.log(g1_achivement1_my);
		            var g1_achivement1_name = $('#g1_achivement1_name').val();
		            console.log(g1_achivement1_name);
		            var g1_achivement2_my = $('#g1_achivement2_my').val();
		            var g1_achivement2_name = $('#g1_achivement2_name').val();
		            var g1_achivement3_my = $('#g1_achivement3_my').val();
		            var g1_achivement3_name = $('#g1_achivement3_name').val();
		            var g1_achivement4_my = $('#g1_achivement4_my').val();
		            var g1_achivement4_name = $('#g1_achivement4_name').val();
		            //insert first daughter
		            $.ajax(
		                {
		                    type:"post",
		                    url: "<?php echo base_url(); ?>index/insert_first_daughter",
		                    data:{ email:email,girl1_name:girl1_name,girl1_surname:girl1_surname,girl1_middlename:girl1_middlename,girl1_email:girl1_email,girl1_birthday:girl1_birthday,girl1_contactno:girl1_contactno,girl1_bg:girl1_bg,girl1_mosad:girl1_mosad,girl1_native:girl1_native,girl1_education:girl1_education,girl1_material_status:girl1_material_status,g1_achivement1_my:g1_achivement1_my,g1_achivement1_name:g1_achivement1_name,g1_achivement2_my:g1_achivement2_my,g1_achivement2_name:g1_achivement2_name,g1_achivement3_my:g1_achivement3_my,g1_achivement3_name:g1_achivement3_name,g1_achivement4_my:g1_achivement4_my,g1_achivement4_name:g1_achivement4_name},
		                    success:function(data)
		                    {
		                        console.log(data);
		                    }
		                });


		            //Get second daughter's information
		            var email = $('#email').val();
		            var girl2_surname = $('#girl2_surname').val();
		            var girl2_name = $('#girl2_name').val();
		            var girl2_middlename = $('#girl2_middlename').val();
		            var girl2_email = $('#girl2_email').val();
		            var girl2_birthday = $('#girl2_birthday').val();
		            var girl2_contactno = $('#girl2_contactno').val();
		            var girl2_bg = $('#girl2_bg').val();
		            var girl2_mosad = $('#girl2_mosad').val();
		            var girl2_native = $('#girl2_native').val();
		            var girl2_education = $('#girl2_education').val();
		            var girl2_material_status = $('#girl2_material_status').val();
		            var g2_achivement1_my = $('#g2_achivement1_my').val();
		            var g2_achivement1_name = $('#g2_achivement1_name').val();
		            var g2_achivement2_my = $('#g2_achivement2_my').val();
		            var g2_achivement2_name = $('#g2_achivement2_name').val();
		            var g2_achivement3_my = $('#g2_achivement3_my').val();
		            var g2_achivement3_name = $('#g2_achivement3_name').val();
		            var g2_achivement4_my = $('#g2_achivement4_my').val();
		            var g2_achivement4_name = $('#g2_achivement4_name').val();

		            //insert second daughter
		            $.ajax(
		                {
		                    type:"post",
		                    url: "<?php echo base_url(); ?>index/insert_second_daughter",
		                    data:{ email:email,girl2_name:girl2_name,girl2_surname:girl2_surname,girl2_middlename:girl2_middlename,girl2_email:girl2_email,girl2_birthday:girl2_birthday,girl2_contactno:girl2_contactno,girl2_bg:girl2_bg,girl2_mosad:girl2_mosad,girl2_native:girl2_native,girl2_education:girl2_education,girl2_material_status:girl2_material_status,g2_achivement1_my:g2_achivement1_my,g2_achivement1_name:g2_achivement1_name,g2_achivement2_my:g2_achivement2_my,g2_achivement2_name:g2_achivement2_name,g2_achivement3_my:g2_achivement3_my,g2_achivement3_name:g2_achivement3_name,g2_achivement4_my:g2_achivement4_my,g2_achivement4_name:g2_achivement4_name},
		                    success:function(data)
		                    {
		                        console.log(data);
		                    }
		                });

		            //Get first son's information
		            var email = $('#email').val();
		            var boy1_surname = $('#boy1_surname').val();
		            var boy1_name = $('#boy1_name').val();
		            var boy1_middlename = $('#boy1_middlename').val();
		            var boy1_email = $('#boy1_email').val();
		            var boy1_birthday = $('#boy1_birthday').val();
		            var boy1_contact = $('#boy1_contact').val();
		            var boy1_bg = $('#boy1_bg').val();
		            var boy1_mosad = $('#boy1_mosad').val();
		            var boy1_native = $('#boy1_native').val();
		            var boy1_education = $('#boy1_education').val();
		            var boy1_material_status = $('#boy1_material_status').val();
		            var b1_achivement1_my = $('#b1_achivement1_my').val();
		            console.log(b1_achivement1_my);
		            var b1_achivement1_name = $('#b1_achivement1_name').val();
		            console.log(b1_achivement1_name);
		            var b1_achivement2_my = $('#b1_achivement2_my').val();
		            var b1_achivement2_name = $('#b1_achivement2_name').val();
		            var b1_achivement3_my = $('#b1_achivement3_my').val();
		            var b1_achivement3_name = $('#b1_achivement3_name').val();
		            var b1_achivement4_my = $('#b1_achivement4_my').val();
		            var b1_achivement4_name = $('#b1_achivement4_name').val();

		            //insert second son details
		            $.ajax(
		                {
		                    type:"post",
		                    url: "<?php echo base_url(); ?>index/insert_first_son",
		                    data:{ email:email,boy1_surname:boy1_surname,boy1_name:boy1_name,boy1_middlename:boy1_middlename,boy1_email:boy1_email,boy1_birthday:boy1_birthday,boy1_contact:boy1_contact,boy1_bg:boy1_bg,boy1_mosad:boy1_mosad,boy1_native:boy1_native,boy1_education:boy1_education,boy1_material_status:boy1_material_status,b1_achivement1_my:b1_achivement1_my,b1_achivement1_name:b1_achivement1_name,b1_achivement2_my:b1_achivement2_my,b1_achivement2_name:b1_achivement2_name,b1_achivement3_my:b1_achivement3_my,b1_achivement3_name:b1_achivement3_name,b1_achivement4_my:b1_achivement4_my,b1_achivement4_name:b1_achivement4_name},
		                    success:function(data)
		                    {
		                        console.log(data);
		                    }
		                });

		            
		        $('#mes').show(true);
		        $('#show').hide(true);
		        $(this).hide(true);
		        });

		    });
		</script>
        <script type="text/javascript">
        	
			$('#check-for-same-address').click(function() {
			    if ($(this).is(':checked')) {
			        var home_address=$("#home_address").val();
			        var home_pincode=$("#home_pinode").val();
			        var home_country=$("#home_country").val();
			        var home_state=$("#home_state").val();
			        var home_city=$("#home_city").val();

			        $('#business_address').val(home_address);
			        $('#business_pinode').val(home_pincode);

			        $('#business_country').val(home_country).prop('selected', true);
			        $('#select2-chosen-8').text($('#home_country :selected').text());

			        $('#business_state').val(home_state).prop('selected', true);
			        $('#select2-chosen-9').text($('#home_state :selected').text());

			        $('#business_city').val(home_city).prop('selected', true);
			        $('#select2-chosen-10').text($('#home_city :selected').text());

			        if(home_address!='') {
			            $('#business_address_lable').css('top', '0px');
			            $('#business_address_lable').css('font-size', '12px');
			        }
			        if(home_pincode!='') {
			            $('#business_pinode_label').css('top', '0px');
			            $('#business_pinode_label').css('font-size', '12px');
			        }
			        /* Setting value for home & business as same */

			    }
			    else
			    {
			    	$('#business_address').val('');
			        $('#business_pinode').val('');

			        $('#business_country').val('').prop('selected', true);
			        $('#select2-chosen-8').text($('#home_country :selected').text());

			        $('#business_state').val('').prop('selected', true);
			        $('#select2-chosen-9').text($('#home_state :selected').text());

			        $('#business_city').val('').prop('selected', true);
			        $('#select2-chosen-10').text($('#home_city :selected').text());
			    }
			});

			$('#submit').on('click', function() {
				
				if ($('#email').val() != '') {
					var status=$('#headperson_merital_status option:selected').text();;
			    
			    if((status == "Merried" || status == "Widow"))
			    {
			        /*Get Headperson Info*/
			        if($('input[name=sex]:checked').val()=='Male') {
			            var headperson_surname = $('#headperson_surname').val();
			            var headperson_name = $('#headperson_firstname').val();

			            $('#sub_headperson_surname').val(headperson_surname);
			            $('#sub_headperson_middlename').val(headperson_name);

			            $('#sub_headperson_surname_label').css('top', '0px');
			            $('#sub_headperson_surname_label').css('font-size', '12px');
			            $('#sub_headperson_middlename_label').css('top', '0px');
			            $('#sub_headperson_middlename_label').css('font-size', '12px');

			            $('#head_person_sub_person').text(headperson_name);
			            $('#gender_type_sub').text('Wife');

			            $('input:radio[name=psex]').filter('[value=Female]').prop('checked', true);
			        }
			        if($('input[name=sex]:checked').val()=='Female') {
			            var headperson_surname = $('#headperson_surname').val();
			            var headperson_middlename = $('#headperson_middlename').val();

			            $('#sub_headperson_surname').val(headperson_surname);
			            $('#sub_headperson_firstname').val(headperson_middlename);

			            $('#sub_headperson_surname_label').css('top', '0px');
			            $('#sub_headperson_surname_label').css('font-size', '12px');
			            $('#sub_headperson_name_label').css('top', '0px');
			            $('#sub_headperson_name_label').css('font-size', '12px');

			            $('#head_person_sub_person').text(headperson_middlename);
			            $('#gender_type_sub').text('Husband');
			            $('input:radio[name=psex]').filter('[value=Male]').prop('checked', true);
			        }

			        $('#merried_section').css('display','block');
			        $('#select_children').css('display','block');
			    }
			    else
			    {
			        $('#merried_section').css('display','none');
			        $('#select_children').css('display','none');
			        $('#select_boys').css('display','none');
			        $('#select_girls').css('display','none');
			    }
			    $('#headperson_merital_status').prop('disabled',true);
			    $('#email').prop('disabled',true);
			    $(this).hide(true);
			    $('#show').show(true);
			    $('#submit_another').show(true);
				}
			    
			});
			$("input:radio[name='sex']").click(function(){
			    var head_person_gender=$(this).val();
			    if(head_person_gender=='Male')
			    {
			        var headperson_surname = $('#headperson_surname').val();
			        var headperson_name = $('#headperson_firstname').val();
			        $('#sub_headperson_surname').val(headperson_surname);
			        $('#sub_headperson_middlename').val(headperson_name);
			        $('#sub_headperson_firstname').val('');
			        $('#sub_headperson_name_label').removeAttr( 'style' );
			        $('#sub_headperson_surname_label').css('top', '0px');
			        $('#sub_headperson_surname_label').css('font-size', '12px');
			        $('#sub_headperson_middlename_label').css('top', '0px');
			        $('#sub_headperson_middlename_label').css('font-size', '12px');
			        $('input:radio[name=gendre_subperson]').filter('[value=Female]').prop('checked', true);
			        $('#head_person_sub_person').text(headperson_name);
			        $('#gender_type_sub').text('Wife');
			        $( "#headperson_surname" ).keyup(function() {

			            var head_surname=$('#headperson_surname').val();
			            $('#sub_headperson_surname').val(head_surname);
			            $('#sub_headperson_surname_label').css('top', '0px');
			            $('#sub_headperson_surname_label').css('font-size', '12px');

			        });
			    }
			    else
			    {
			        $('input:radio[name=gendre_subperson]').filter('[value=Male]').prop('checked', true);
			        var headperson_surname = $('#headperson_surname').val();
			        var headperson_middlename = $('#headperson_middlename').val();
			        $('#sub_headperson_middlename').val('');
			        $('#sub_headperson_middlename_label').removeAttr( 'style' );

			        $('#sub_headperson_surname').val(headperson_surname);
			        $('#sub_headperson_firstname').val(headperson_middlename);

			        $('#head_person_sub_person').text(headperson_middlename);
			        $('#gender_type_sub').text('Husband');

			        $('#sub_headperson_surname_label').css('top', '0px');
			        $('#sub_headperson_surname_label').css('font-size', '12px');
			        $('#sub_headperson_name_label').css('top', '0px');
			        $('#sub_headperson_name_label').css('font-size', '12px');

			    }



			});
			$('#head_select_children').on('change', function() {
			    var children=this.value;
			    window.globalVar = this.value;

			    if((children == "no-children"))
			    {
			        $('#select_boys').css('display','none');
			        $('#select_girls').css('display','none');
			    }
			    else
			    {
			        $('#select_boys').css('display','block');
			        $('#select_girls').css('display','block');
			    }
			});


			/*Same adderss for second person*/

			$('#check-for-same-address_sub').click(function() {
			    if ($(this).is(':checked')) {
			        var home_address_s=$("#home_address").val();
			        var home_pincode_s=$("#home_pinode").val();
			        var home_country_s=$("#home_country").val();
			        var home_state_s=$("#home_state").val();
			        var home_city_s=$("#home_city").val();

			        $('#home_address_sub').val(home_address_s);
			        $('#home_pinode_sub').val(home_pincode_s);

			        $('#home_country_sub').val(home_country_s).prop('selected', true);
			        $('#select2-chosen-16').text($('#home_country :selected').text());

			        $('#home_state_sub').val(home_state_s).prop('selected', true);
			        $('#select2-chosen-17').text($('#home_state :selected').text());

			        $('#home_city_sub').val(home_city_s).prop('selected', true);
			        $('#select2-chosen-18').text($('#home_city :selected').text());

			        if(home_address_s!='') {
			            $('#home_address_lable_sub').css('top', '0px');
			            $('#home_address_lable_sub').css('font-size', '12px');
			        }
			        if(home_pincode_s!='') {
			            $('#home_pinode_label_sub').css('top', '0px');
			            $('#home_pinode_label_sub').css('font-size', '12px');
			        }
			        /* Setting value for home & business as same */

			    }
			    else
			    {
			        $('#home_address_sub').val('');
			        $('#home_pinode_sub').val('');

			        $('#home_address_lable_sub').removeAttr( 'style' );
			        $('#home_pinode_label_sub').removeAttr( 'style' );

			        $('#home_country_sub').val(0).prop('selected', true);
			        $('#select2-chosen-16').text('Select Country');

			        $('#home_state_sub').val(0).prop('selected', true);
			        $('#select2-chosen-17').text('Select State');

			        $('#home_city_sub').val(0).prop('selected', true);
			        $('#select2-chosen-18').text('Select City');
			    }
			});

			/*Same address as business address*/

			$('#check-for-sameaddress_sub').click(function() {
			    if ($(this).is(':checked')) {
			        var home_address_sub=$("#home_address_sub").val();
			        var home_pincode_sub=$("#home_pinode_sub").val();
			        var home_country_sub=$("#home_country_sub").val();
			        var home_state_sub=$("#home_state_sub").val();
			        var home_city_sub=$("#home_city_sub").val();

			        $('#business_address_sub_val').val(home_address_sub);
			        $('#business_pinode_sub_val').val(home_pincode_sub);

			        $('#business_country_sub_val').val(home_country_sub).prop('selected', true);
			        $('#select2-chosen-20').text($('#home_country_sub :selected').text());

			        $('#business_state_sub_val').val(home_state_sub).prop('selected', true);
			        $('#select2-chosen-21').text($('#home_state_sub :selected').text());

			        $('#business_city_sub_val').val(home_city_sub).prop('selected', true);
			        $('#select2-chosen-22').text($('#home_city_sub :selected').text());

			        if(home_address_sub!='') {
			            $('#business_address_sub_label').css('top', '0px');
			            $('#business_address_sub_label').css('font-size', '12px');
			        }
			        if(home_pincode_sub!='') {
			            $('#business_pinode_sub_label').css('top', '0px');
			            $('#business_pinode_sub_label').css('font-size', '12px');
			        }
			        /* Setting value for home & business as same */

			    }
			    else
			    {
			        $('#business_address_sub_val').val('');
			        $('#business_pinode_sub_val').val('');

			        $('#business_address_sub_label').removeAttr( 'style' );
			        $('#business_pinode_sub_label').removeAttr( 'style' );

			        $('#business_country_sub_val').val(0).prop('selected', true);
			        $('#select2-chosen-20').text('Select Country');

			        $('#business_state_sub_val').val(0).prop('selected', true);
			        $('#select2-chosen-21').text('Select State');

			        $('#business_city_sub_val').val(0).prop('selected', true);
			        $('#select2-chosen-22').text('Select City');
			    }
			});

			$('#select_occupation_sub').on('change', function() {
			    var select_occ_sub=this.value;
			    if((select_occ_sub == "PBU"))
			    {
			        $('#business_name_sub').css('display','block');
			        $('#business_number_sub').css('display','block');
			        $('#business_sameasabove_sub').css('display','block');
			        $('#business_address_sub').css('display','block');
			        $('#business_c_c_s_sub').css('display','block');
			    }

			    else
			    {
			        $('#business_name_sub').css('display','none');
			        $('#business_number_sub').css('display','none');
			        $('#business_sameasabove_sub').css('display','none');
			        $('#business_address_sub').css('display','none');
			        $('#business_c_c_s_sub').css('display','none');
			    }
			});

			$('#occupation_type').on('change', function() {
			    var select_occ=this.value;
			    if((select_occ == "HBU"))
			    {
			        $('#b_name').css('display','block');
			        $('#b_number').css('display','block');
			        $('#b_sameasabove').css('display','block');
			        $('#b_address').css('display','block');
			        $('#b_c_c_s_headperson').css('display','block');
			        $('#Job_type').css('display','none');
			    }
			    else if((select_occ == "HJB"))
			    {
			        $('#b_name').css('display','none');
			        $('#b_number').css('display','none');
			        $('#b_sameasabove').css('display','none');
			        $('#b_address').css('display','none');
			        $('#b_c_c_s_headperson').css('display','none');

			        $('#Job_type').css('display','block');
			    }
			    else
			    {
			        $('#b_name').css('display','none');
			        $('#b_number').css('display','none');
			        $('#b_sameasabove').css('display','none');
			        $('#b_address').css('display','none');
			        $('#b_c_c_s_headperson').css('display','none');
			        $('#Job_type').css('display','none');
			    }
			});


			$( "#headperson_surname" ).keyup(function() {

			    var head_surname=$('#headperson_surname').val();
			    $('#sub_headperson_surname').val(head_surname);
			    $('#sub_headperson_surname_label').css('top', '0px');
			    $('#sub_headperson_surname_label').css('font-size', '12px');

			    $('#girl1_surname').val(head_surname);
			    $('#girl1_surname_label').css('top', '0px');
			    $('#girl1_surname_label').css('font-size', '12px');

			    $('#boy1_surname').val(head_surname);
			    $('#boy1_surname_label').css('top', '0px');
			    $('#boy1_surname_label').css('font-size', '12px');

			});
			$('#headperson_firstname').keyup(function(){
			    var head_firstname=$('#headperson_firstname').val();
			    $('#girl1_middlename').val(head_firstname);
			    $('#girl1_middlename_label').css('top', '0px');
			    $('#girl1_middlename_label').css('font-size', '12px');

			    $('#boy1_middlename').val(head_firstname);
			    $('#boy1_middlename_label').css('top', '0px');
			    $('#boy1_middlename_label').css('font-size', '12px');
			});
			/*Childern count*/

			$('#head_select_boys').on('change', function() {
			    var children_boys=this.value;

			    var headperson_surname_boy = $('#headperson_surname').val();
			    var headperson_name_boy = $('#headperson_firstname').val();
			    if(headperson_name_boy =='' || headperson_name_boy==null)
			    {
			        $('.person_name_girl').text("Person");
			    }
			    else{
			        $('.person_name_girl').text(headperson_name_boy);
			    }

			    $('.boy1_surname').val(headperson_surname_boy);
			    $('.boy1_middlename').val(headperson_name_boy);
			    $('.boy_surname_label').css('top', '0px');
			    $('.boy_surname_label').css('font-size', '12px');
			    $('.boy_middlename_label').css('top', '0px');
			    $('.boy_middlename_label').css('font-size', '12px');

			    $('.girl1_surname').val(headperson_surname_boy);
			    $('.girl1_middlename').val(headperson_name_boy);
			    $('.girl_surname_label').css('top', '0px');
			    $('.girl_surname_label').css('font-size', '12px');
			    $('.girl_middlename_label').css('top', '0px');
			    $('.girl_middlename_label').css('font-size', '12px');



			    if((children_boys == "no-boys"))
			    {
			        $('#boy_child_1').css('display','none');
			        $('#boy_child_2').css('display','none');
			        $('#boy_child_3').css('display','none');
			        $('#boy_child_4').css('display','none');
			        $('#boy_child_5').css('display','none');
			        $('#boy_child_6').css('display','none');
			        $('#boy_child_7').css('display','none');
			    }
			    else if(children_boys==1)
			    {

			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','none');
			        $('#boy_child_3').css('display','none');
			        $('#boy_child_4').css('display','none');
			        $('#boy_child_5').css('display','none');
			        $('#boy_child_6').css('display','none');
			        $('#boy_child_7').css('display','none');

			    }
			    else if(children_boys==2)
			    {
			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','block');
			        $('#boy_child_3').css('display','none');
			        $('#boy_child_4').css('display','none');
			        $('#boy_child_5').css('display','none');
			        $('#boy_child_6').css('display','none');
			        $('#boy_child_7').css('display','none');

			    }
			    else if(children_boys==3)
			    {
			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','block');
			        $('#boy_child_3').css('display','block');
			        $('#boy_child_4').css('display','none');
			        $('#boy_child_5').css('display','none');
			        $('#boy_child_6').css('display','none');
			        $('#boy_child_7').css('display','none');

			    }
			    else if(children_boys==4)
			    {
			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','block');
			        $('#boy_child_3').css('display','block');
			        $('#boy_child_4').css('display','block');
			        $('#boy_child_5').css('display','none');
			        $('#boy_child_6').css('display','none');
			        $('#boy_child_7').css('display','none');

			    }
			    else if(children_boys==5)
			    {
			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','block');
			        $('#boy_child_3').css('display','block');
			        $('#boy_child_4').css('display','block');
			        $('#boy_child_5').css('display','block');
			        $('#boy_child_6').css('display','none');
			        $('#boy_child_7').css('display','none');

			    }
			    else if(children_boys==6)
			    {
			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','block');
			        $('#boy_child_3').css('display','block');
			        $('#boy_child_4').css('display','block');
			        $('#boy_child_5').css('display','block');
			        $('#boy_child_6').css('display','block');
			        $('#boy_child_7').css('display','none');

			    }
			    else if(children_boys==7)
			    {
			        $('#boy_child_1').css('display','block');
			        $('#boy_child_2').css('display','block');
			        $('#boy_child_3').css('display','block');
			        $('#boy_child_4').css('display','block');
			        $('#boy_child_5').css('display','block');
			        $('#boy_child_6').css('display','block');
			        $('#boy_child_7').css('display','block');

			    }
			});
			$('#head_select_girls').on('change', function() {
			    var children_girls=this.value;
			    var headperson_surname_girl = $('#headperson_surname').val();
			    if((children_girls == "no-girls"))
			    {
			        $('#girl_child_1').css('display','none');
			        $('#girl_child_2').css('display','none');
			        $('#girl_child_3').css('display','none');
			        $('#girl_child_4').css('display','none');
			        $('#girl_child_5').css('display','none');
			        $('#girl_child_6').css('display','none');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==1)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','none');
			        $('#girl_child_3').css('display','none');
			        $('#girl_child_4').css('display','none');
			        $('#girl_child_5').css('display','none');
			        $('#girl_child_6').css('display','none');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==2)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','block');
			        $('#girl_child_3').css('display','none');
			        $('#girl_child_4').css('display','none');
			        $('#girl_child_5').css('display','none');
			        $('#girl_child_6').css('display','none');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==3)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','block');
			        $('#girl_child_3').css('display','block');
			        $('#girl_child_4').css('display','none');
			        $('#girl_child_5').css('display','none');
			        $('#girl_child_6').css('display','none');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==4)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','block');
			        $('#girl_child_3').css('display','block');
			        $('#girl_child_4').css('display','block');
			        $('#girl_child_5').css('display','none');
			        $('#girl_child_6').css('display','none');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==5)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','block');
			        $('#girl_child_3').css('display','block');
			        $('#girl_child_4').css('display','block');
			        $('#girl_child_5').css('display','block');
			        $('#girl_child_6').css('display','none');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==6)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','block');
			        $('#girl_child_3').css('display','block');
			        $('#girl_child_4').css('display','block');
			        $('#girl_child_5').css('display','block');
			        $('#girl_child_6').css('display','block');
			        $('#girl_child_7').css('display','none');
			    }
			    else if(children_girls==7)
			    {
			        $('#girl_child_1').css('display','block');
			        $('#girl_child_2').css('display','block');
			        $('#girl_child_3').css('display','block');
			        $('#girl_child_4').css('display','block');
			        $('#girl_child_5').css('display','block');
			        $('#girl_child_6').css('display','block');
			        $('#girl_child_7').css('display','block');
			    }
			});
			window.global_btn_count=0;
			$('#add_achivement').click(function(){
			    window.global_btn_count=window.global_btn_count+1;
			    if(global_btn_count==1)
			    {
			     $('#g1_achivement1').css('display','block');
			    }
			    else if(global_btn_count==2)
			    {
			        $('#g1_achivement1').css('display','block');
			        $('#g1_achivement2').css('display','block');
			    }
			    else if(global_btn_count==3)
			    {
			        $('#g1_achivement1').css('display','block');
			        $('#g1_achivement2').css('display','block');
			        $('#g1_achivement3').css('display','block');
			    }
			    else if(global_btn_count==4)
			    {
			        $('#g1_achivement1').css('display','block');
			        $('#g1_achivement2').css('display','block');
			        $('#g1_achivement3').css('display','block');
			        $('#g1_achivement4').css('display','block');
			    }

			});
			window.global_btn_count_g=0;
			$('#add_achivement_g').click(function(){
			    window.global_btn_count_g=window.global_btn_count_g+1;
			    if(global_btn_count_g==1)
			    {
			     $('#g2_achivement1').css('display','block');
			    }
			    else if(global_btn_count_g==2)
			    {
			        $('#g2_achivement1').css('display','block');
			        $('#g2_achivement2').css('display','block');
			    }
			    else if(global_btn_count_g==3)
			    {
			        $('#g2_achivement1').css('display','block');
			        $('#g2_achivement2').css('display','block');
			        $('#g2_achivement3').css('display','block');
			    }
			    else if(global_btn_count_g==4)
			    {
			        $('#g2_achivement1').css('display','block');
			        $('#g2_achivement2').css('display','block');
			        $('#g2_achivement3').css('display','block');
			        $('#g2_achivement4').css('display','block');
			    }

			});
			window.global_btn_count_b=0;
			$('#add_achivement_b').click(function(){
			    window.global_btn_count_b=window.global_btn_count_b+1;
			    if(global_btn_count_b==1)
			    {
			     $('#b1_achivement1').css('display','block');
			    }
			    else if(global_btn_count_b==2)
			    {
			        $('#b1_achivement1').css('display','block');
			        $('#b1_achivement2').css('display','block');
			    }
			    else if(global_btn_count_b==3)
			    {
			        $('#b1_achivement1').css('display','block');
			        $('#b1_achivement2').css('display','block');
			        $('#b1_achivement3').css('display','block');
			    }
			    else if(global_btn_count_b==4)
			    {
			        $('#b1_achivement1').css('display','block');
			        $('#b1_achivement2').css('display','block');
			        $('#b1_achivement3').css('display','block');
			        $('#b1_achivement4').css('display','block');
			    }

			});
		$('.gender').click(function () {
			if ($(this).is(':checked')) {
				$('input:radio[name=psex]').filter('[value=Female]').prop('checked', true);
				console.log("checked");
			} else{
				$('input:radio[name=psex]').filter('[value=Male]').prop('checked', true);
				console.log("no cheched");
			}
		});
        </script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
