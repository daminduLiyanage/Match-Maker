
<!-- Latest compiled and minified CSS Bootstrap 3.3.6 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
{{--datetime picker css--}}
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
{{--jqeury css plugin--}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
{{--Form Validations CSS--}}
<link rel="stylesheet" href="css/formValidation.min.css">

<div>
        <form name="userRegistrationForm" id="userRegistrationForm" class="form-horizontal">

            <br/><br/>
            <div class="form-group">
                <label class="col-xs-2 control-label">Full Name</label>
                <div class="col-xs-5">
                    <input name="first_name" id="first_name" type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1"/>
                </div>
                <div class="col-xs-5">
                    <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1"/>
                </div>
            </div>
            
            <br/>

            <div class="form-group">
                <label class="col-xs-2 control-label">Full name</label>

                <div class="col-xs-5">
                    <input type="text" class="form-control" name="firstName" placeholder="First name" />
                </div>

                <div class="col-xs-5">
                    <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                </div>
            </div>



            <div class="form-group">
                <label class="col-xs-2 control-label">Email</label>
                <div class="col-xs-5">
                    <input name="email" type="text" class="form-control" placeholder="you@yourmail.com" aria-describedby="basic-addon1">
                </div>
            </div>

            <br/>

            <div><label>Username</label>
            <div class="form-group">
                <span class="input-group-addon" id="basic-addon1">My Username is </span>
                <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Password</label>
            <div class="form-group">
                <span class="input-group-addon" id="basic-addon1">Enter Your New Password</span>
                <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Confirm Password</label>
            <div class="form-group">
                <span class="input-group-addon" id="basic-addon1">Confirm it </span>
                <input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Nickname</label>
            <div class="form-group">
                <span class="input-group-addon" id="basic-addon1">Friends call me</span>
                <input name="nickname" type="text" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Gender</label>
            <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input name="gender" type="radio" value="male" aria-label="...">
                        </span>
                        <input type="text"  class="form-control" value="I am a male"  aria-label="..." readonly>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-2">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input name="gender" type="radio" value="female" aria-label="...">
                        </span>
                        <input type="text" class="form-control" value="I am a female" aria-label="..." readonly>
                    </div><!-- /form-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <br/></div>

            <div><label>Interested in </label>
            <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input name="interested_in" type="radio" value="male" aria-label="...">
                        </span>
                        <input type="text"  class="form-control" value="Interested in males"  aria-label="..." readonly>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-2">
                    <div class="form-group">
                        <span class="input-group-addon">
                            <input name="interested_in" type="radio" value="female" aria-label="...">
                        </span>
                        <input type="text" class="form-control" value="Interested in females" aria-label="..." readonly>
                    </div><!-- /form-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <br/></div>

            <div><label>Birthday</label>
            <div class="form-group col-lg-3" style="z-index: 1">
                        <span class="input-group-addon" id="basic-addon1">My Birthday is on </span>
                        <input name="birthday" type="date" id="datepicker" style="text-align: center" class="form-control" min="01/01/2000">
            </div>
            <br/></div>

            <div><label>Religion</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">My Religion is </span>
                <input name="religion" type="text" class="form-control" placeholder="My Religion" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Ethnicity</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">My Religion is </span>
                <input name="ethnicity" type="text" class="form-control" placeholder="My Religion" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Country</label>
            <div class="form-group col-lg-2" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">I am from </span>
                <select name="country" class="form-control">
                    <option value="">Select Your Country</option>
                    <?php
//                        $resu=$crud->getCountries();
//                            if((mysqli_num_rows($resu['countryName'])>0)){
//                                while($row = mysqli_fetch_array()){
//                            ?>
                    <option><?php //echo $row ?></option>
                    <?php
//                        }
//                            }
                        ?>
                </select>
            </div>
            <br/></div>

            <div><label>Hometown</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">My Hometown is </span>
                <input name="hometown" type="text" class="form-control" placeholder="Hometown" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Current Location</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">I am residing at </span>
                <input name="location" type="text" class="form-control" placeholder="Current City" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Address</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">My Address is </span>
                <input name="address" type="text" class="form-control" placeholder="Current Address" aria-describedby="basic-addon1">
            </div>
            <br/></div>


            <div class="form-group">
                <label class="col-xs-2 control-label">Phone number</label>

                <div class="col-xs-3">
                    <input type="text" class="form-control" name="cellPhone" placeholder="Cell" />
                </div>

                <div class="col-xs-3">
                    <input type="text" class="form-control" name="homePhone" placeholder="Home" />
                </div>

                <div class="col-xs-3">
                    <input type="text" class="form-control" name="officePhone" placeholder="Office" />
                </div>
            </div>




            <div><label>Mobile Phone No.</label>
            <div class="form-group" style="z-index: -1">
                <span class="input-group-addon" id="basic-addon1">My Mobile No is </span>
                <input name="telephone_mobile" type="text" class="form-control" placeholder="Mobile Phone No." aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Fixed Phone No.</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">My Home Phone No is </span>
                <input name="telephone_home" type="text" class="form-control" placeholder="Home Phone No" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Education</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">About My Education</span>
                <input name="education" type="text" class="form-control" placeholder="A Brief Description" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Work</label>
            <div class="form-group" style="z-index: 0">
                <span class="input-group-addon" id="basic-addon1">About My Work</span>
                <input name="work" type="text" class="form-control" placeholder="A Brief Description" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Language</label>
            <div class="form-group" style="z-index: -1">
                <span class="input-group-addon" id="basic-addon1">Languages I Speak </span>
                <input name="languages" type="text" class="form-control" placeholder="A Brief Descripton" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>Facebook</label>
            <div class="form-group" style="z-index: -1">
                <span class="input-group-addon" id="basic-addon1">My Facebook URL </span>
                <input name="facebook" type="text" class="form-control" placeholder="Copy & Paste Your Fb Profile URL here" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <div><label>About</label>
            <div class="form-group" style="z-index: -1">
                <span class="input-group-addon" id="basic-addon1">About Me </span>
                <input name="about" type="text" class="form-control" placeholder="A Brief Description" aria-describedby="basic-addon1">
            </div>
            <br/></div>

            <button type="submit" class="btn btn-default">Submit My Form</button>
        </form>
    </div>







{{--jquery 2.2.0 --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
{{--JQuery Library ver 1.10.2--}}
{{--<script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
{{--JQuery UI ver 1.11.4--}}
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
{{--Bootstrap Javascript Framework Link--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{--Form Validations JS--}}
<script type="text/javascript" src="js/formValidation.min.js"></script>
{{--Form Validations support for Bootstrap by FormValidation.io --}}
<script type="text/javascript" src="js/formValidation/bootstrap.js"></script>
{{--Form Validations required language--}}
{{--<script type="text/javascript" src="https://raw.githubusercontent.com/formvalidation/formvalidation/master/dist/js/language/en_US.js"></script>--}}

{{--Bootstrap Validators--}}
<script>
    $(document).ready(function() {
        $('#userRegistrationForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                first_name: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The name must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_]+$/,
                            message: 'The name can only consist of alphabetical, number and underscore'
                        }
                    }
                },
                price: {
                    validators: {
                        notEmpty: {
                            message: 'The price is required'
                        },
                        numeric: {
                            message: 'The price must be a number'
                        }
                    }
                },
                'size[]': {
                    validators: {
                        notEmpty: {
                            message: 'The size is required'
                        }
                    }
                },
                availability: {
                    validators: {
                        notEmpty: {
                            message: 'The availability option is required'
                        }
                    }
                }
            }
        });
    });

</script>

{{--Javascript code for Birthday Datepicker
    Add Options if needed--}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#userRegistrationForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                firstName: {
                    row: '.col-xs-5',
                    validators: {
                        notEmpty: {
                            message: 'The first name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'The first name can only consist of alphabetical and space'
                        }
                    }
                },
                lastName: {
                    row: '.col-xs-5',
                    validators: {
                        notEmpty: {
                            message: 'The last name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'The last name can only consist of alphabetical and space'
                        }
                    }
                },

                first_Name: {
                    row: '.col-xs-5',
                    validators: {
                        notEmpty: {
                            message: 'The first name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'The first name can only consist of alphabetical and space'
                        }
                    }
                },
                lastName: {
                    row: '.col-xs-5',
                    validators: {
                        notEmpty: {
                            message: 'The last name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'The last name can only consist of alphabetical and space'
                        }
                    }
                },
                cellPhone: {
                    row: '.col-xs-3',
                    validators: {
                        notEmpty: {
                            message: 'The cell phone number is required'
                        }
                    }
                },
                homePhone: {
                    row: '.col-xs-3',
                    validators: {
                        notEmpty: {
                            message: 'The home phone number is required'
                        }
                    }
                },
                officePhone: {
                    row: '.col-xs-3',
                    validators: {
                        notEmpty: {
                            message: 'The office phone number is required'
                        }
                    }
                }
            }
        });
    });
</script>