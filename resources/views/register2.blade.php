<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="css/formValidation.min.css">

<style>
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance:textfield;
    }
</style>







<form id="userRegistrationForm" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-2 control-label">Full name</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="first_name" style="text-align: center" placeholder="First name" />
        </div>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="last_name" style="text-align: center" placeholder="Last name" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Password</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="email" style="text-align: center" placeholder="email" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Password</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="password" style="text-align: center" placeholder="Password" />
        </div>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="confirePassword" style="text-align: center" placeholder="Confirm Password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Nickname</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="first_name" style="text-align: center" placeholder="Nickname" />
        </div>
    </div>

    {{--gender--}}

    {{--interested_in--}}

    {{--birthday--}}

    <div class="form-group">
        <label class="col-xs-2 control-label">Religion</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="religion" style="text-align: center" placeholder="Religion" />
        </div>

    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Ethnicity</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="ethnicity" style="text-align: center" placeholder="Ethnicity" />
        </div>
    </div>

    {{--Country--}}

    <div class="form-group">
        <label class="col-xs-2 control-label">Location</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="location" style="text-align: center" placeholder="Current Location" />
        </div>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="hometown" style="text-align: center" placeholder="Hometown" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Address</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="address" style="text-align: center" placeholder="Address" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-xs-2 control-label">Phone number</label>

        <div class="col-xs-3">
            <input type="number" class="form-control" name="telephone_mobile" pattern="" placeholder="Mobile" style="text-align: center" onclick="setCustomValidity('Enter a telephone number with 12 digits')"/>
        </div>

        <div class="col-xs-3">
            <input type="number" class="form-control" name="telephone_home" placeholder="Home" style="text-align: center"/>
        </div>

        <div class="col-xs-3">
            <input type="number" class="form-control" name="telephone_office" placeholder="Office" style="text-align: center"/>
        </div>
    </div>


    <div class="form-group">
        <label class="col-xs-2 control-label">Education</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="education" style="text-align: center" placeholder="education" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">Work</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="work" style="text-align: center" placeholder="Work" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Country</label>
        <div class="col-xs-5">
            <select class="form-control" name="countrySelectBox">
                <option value="US">United States</option>
                <option value="BG">Bulgaria</option>
                <option value="BR">Brazil</option>
                <option value="CN">China</option>
                <option value="CZ">Czech Republic</option>
                <option value="DK">Denmark</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
                <option value="IN">India</option>
                <option value="MA">Morocco</option>
                <option value="NL">Netherlands</option>
                <option value="PK">Pakistan</option>
                <option value="RO">Romania</option>
                <option value="RU">Russia</option>
                <option value="SK">Slovakia</option>
                <option value="ES">Spain</option>
                <option value="TH">Thailand</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="VE">Venezuela</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Phone number</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="phoneNumber"/>
        </div>
    </div>


    {{--Language--}}

    <div class="form-group">
        <label class="col-xs-2 control-label">Facebook</label>

        <div class="col-xs-5">
            <input type="url" class="form-control" name="facebook" style="text-align: center" placeholder="https://www.facebook/usr" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-2 control-label">About</label>

        <div class="col-xs-5">
            <input type="text" class="form-control" name="about" style="text-align: center" placeholder="About Me" />
        </div>
    </div>




    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-2">
            <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
            <button type="submit" class="btn btn-default">Submit My Info</button>
        </div>
    </div>
</form>



<script type="text/javascript" src="js/jquery-2.2.0.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/formValidation/bootstrap.js"></script>

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
                last_name: {
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
                telephone_mobile: {
                    row: '.col-xs-3',
                    validators: {
                        notEmpty: {
                            regexp: /^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/,
                            message: 'The cell phone number is required'
                        },
                        regexp:{
                            regexp: /^[0-9]{11}$/,
                            message: 'The contains 11 digits, not less or more'
                        }
                    }
                },
                telephone_home: {
                    row: '.col-xs-3',
                    validators: {
                        notEmpty: {
                            message: 'The home phone number is required'
                        }
                    }
                },
                telephone_office: {
                    row: '.col-xs-3',
                    validators: {
                        notEmpty: {
                            message: 'The office phone number is required'
                        }
                    }
                },
                //Temp
                phoneNumber: {
                    validators: {
                        phone: {
                            country: 'countrySelectBox',
                            message: 'The value is not valid %s phone number'
                        }
                    }
                }

            }
        })

        // Revalidate phone number when changing the country
        .on('change', '[name="countrySelectBox"]', function(e) {
            $('#phoneForm').formValidation('revalidateField', 'phoneNumber');
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#userRegistrationForm')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        phoneNumber: {
                            validators: {
                                phone: {
                                    country: 'countrySelectBox',
                                    message: 'The value is not valid %s phone number'
                                },
                                regexp: {
                                    regexp: /^[0-9]{11}$/,
                                    message: 'The phone number cannot contain only numbers'
                                }
                            }
                        }
                    }
                })
                // Revalidate phone number when changing the country
                .on('change', '[name="countrySelectBox"]', function(e) {
                    $('#userRegistrationForm').formValidation('revalidateField', 'phoneNumber');
                });
    });
</script>








