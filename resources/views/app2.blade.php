<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Love Line</title>
    <style type="text/css" media="screen">
        @import url("css/layout.css");
    </style>

</head>
<body>
<div id="layout">
    <div id="header" class="inner">
        <div class="logo"><img src="images/logo.gif" alt="" /></div>
        <div class="form_container">
            <h4>Intimate Search</h4>
            <div class="search">
                <form action="" method="get">
                    <fieldset>
                        <div class="search_row">
                            <div class="search_column_1">
                                <label>I am a</label>
                            </div>
                            <div class="search_column_2">
                                <select class="gender">
                                    <option>Male</option>
                                </select>
                                <label>Seeking a</label>
                                <select class="gender">
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="search_row">
                            <div class="search_column_1">
                                <label>Looking for a</label>
                            </div>
                            <div class="search_column_2">
                                <select class="date">
                                    <option>Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="search_row">
                            <div class="search_column_1">
                                <label>I was born</label>
                            </div>
                            <div class="search_column_2">
                                <select class="dob">
                                    <option>Month</option>
                                </select>
                                <select class="dob">
                                    <option>Date</option>
                                </select>
                                <select class="dob">
                                    <option>Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="search_row">
                            <div class="search_column_1">
                                <label>By Profile ID</label>
                            </div>
                            <div class="search_column_2">
                                <input type="text" name="" value="" />
                                <label class="check">With Photo</label>
                                <input type="checkbox" name="" value="" class="checkbox"/>
                            </div>
                        </div>
                        <div class="search_row last">
                            <div class="search_column_1">&nbsp;</div>
                            <div class="search_column_2">
                                <input type="image" src="images/search_btn.gif" class="search_btn"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="welcome_msg">
            <h1>Welcome</h1>
            <p>Sodales eget, tincidunt sed, luctus a, leo Proin et nunc.Sed purus arcu, pellentesque id, ornare vel, luctus in, turpis. Sodales eget, tincidunt sed, luctus a, leo Proin et nunc.Sed purus arcu, pellentesque id, ornare vel, luctus in, turpis. Fusce tristique, nisl vel gravida venenatis, risus magna eleifend pede, id bibendum mauris metus et erat.</p>
            <p class="more"> <a href="#">...know more </a></p>
        </div>
        <div class="links">
            <div class="free_registration">
                <h3><a class="current"><img src="images/1.gif" alt="" />100% FREE REGISTRATION</a></h3>
            </div>
            <div class="free_profile">
                <h3><a href="#"><img src="images/2.gif" alt="" />CREATE A FREE PROFILE</a></h3>
            </div>
            <div class="life_partner">
                <h3><a href="#"><img src="images/3.gif" alt="" />SEARCH LIFE PARTNER</a></h3>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li class="first"><a href="index.html">home</a></li>
                <li><a href="about_us.html" >about us</a></li>
                <li><a href="privacy.html">privacy</a></li>
                <li><a href="projects.html">projects</a></li>
                <li><a href="services.html">services</a></li>
                <li><a href="support.html">support</a></li>
                <li><a class="current">contact Us</a></li>
            </ul>
        </div>
    </div>
    <div id="body_container">
        <div class="profile_container">
            <div class="profile_box">
                <div class="profile_top_curve">
                    <div class="profile_detail_content">
                        <div class="welcomezone">
                            <div style="margin-bottom:10px;">
                                <div>
                                    @yield('content')
                                </div>


                                <div> <br />
                                    <h2>Contact Information: </h2>
                                    <img src="images/photo-contact.jpg" alt="" width="226" height="150" hspace="15" vspace="15" class="project-img" />
                                    <p>100 Lorem Ipsum Dolor Sit<br />
                                        88-99 Sit Amet, Lorem<br />
                                        USA</p>
                                    <p> <span><img src="images/ico-phone.png" alt="Phone" width="20" height="16" hspace="2" align="middle" /> Phone:</span> (888) 123 456 789<br />
                                        <span><img src="images/ico-fax.png" alt="Fax" width="20" height="16" hspace="2" align="middle" /> Fax:</span> (888) 987 654 321<br />
                                        <span><img src="images/ico-website.png" alt="WWW Link" width="20" height="16" hspace="2" align="middle" /> Website:</span> <a href="#">www.mycompany.com</a><br />
                                        <span><img src="images/ico-email.png" alt="Email" width="20" height="16" hspace="2" align="middle" /> Email:</span> <a href="mailto:info@mycompany.com">info@mycompany.com</a><br />
                                        <span><img src="images/ico-twitter.png" alt="Twitter Follow" width="20" height="16" hspace="3" align="middle" /> <a href="#">Follow</a> on Twitter</span><br />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="footer_link">
            <ul style="color:#FFF;">
                Copyright (c) Sitename.com. All rights reserved. Design by Stylish <a style="color:#FFF; text-decoration:underline;" href="http://www.stylishtemplate.com">Website Templates</a>.
            </ul>
        </div>
    </div>
</div>
<div style="width:600px; position:relative;left:50%;margin-left:-300px; font-size:12px; text-align:center"><a href="http://www.kvchost.com"><img src="http://www.kvchost.com/images/logo/tlogo.png" alt="WEB HOSTING"></a> <a href="http://www.kvchost.com">Hosting</a> by KVCHOST.COM</div></body>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</html>
