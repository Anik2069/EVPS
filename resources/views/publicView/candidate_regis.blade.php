<!DOCTYPE html>
<html lang="en">


<!-- form-wizard.html  21 Nov 2019 03:55:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/style.css">
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='../{{'assets/'}}assets/img/favicon.ico'/>


    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        ox-sizing: border-box

        ;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 10px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>


</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="row clearfix">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                {{--<div class="card-header">
                                    <h4></h4>
                                </div>--}}
                                <div class="card-body">
                                    {{--
                                                                        <form id="wizard_with_validation" action="/google.com" method="POST">
                                                                            <h3>Account Information</h3>
                                                                            <fieldset>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Username*</label>
                                                                                        <input type="text" class="form-control" name="username" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Password*</label>
                                                                                        <input type="password" class="form-control" name="password"
                                                                                               id="password" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Confirm Password*</label>
                                                                                        <input type="password" class="form-control" name="confirm" required>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3>Profile Information</h3>
                                                                            <fieldset>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">First Name*</label>
                                                                                        <input type="text" name="name" class="form-control" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Last Name*</label>
                                                                                        <input type="text" name="surname" class="form-control" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Email*</label>
                                                                                        <input type="email" name="email" class="form-control" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Address*</label>
                                                                                        <textarea name="address" cols="30" rows="3"
                                                                                                  class="form-control no-resize"
                                                                                                  required></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-float">
                                                                                    <div class="form-line">
                                                                                        <label class="form-label">Age*</label>
                                                                                        <input min="18" type="number" name="age" class="form-control"
                                                                                               required>
                                                                                    </div>
                                                                                    <div class="help-info">The warning step will show up if age is less than
                                                                                        18
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3>Terms &amp; Conditions - Finish</h3>
                                                                            <fieldset>
                                                                                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                                                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                                                            </fieldset>
                                                                        </form>
                                    --}}

                                    <hr>
                                    <h1>Candidate Registration Layout:</h1>

                                    <hr>

                                    <form id="regForm" action="/submitcan" method="post"  enctype="multipart/form-data">@csrf
                                    <!-- One "tab" for each step in the form: -->
                                        <input type="hidden" name="idd" value="{{$id}}">
                                        <input type="hidden" name="idn" value="{{$name5}}">

                                  <fieldset>

                                            <div class="tab form-group form-float">
                                                <h3 style="text-align: center">Account Information</h3>

                                                <div class="form-line">
                                                    <label class="form-label">Email</label>

                                                    <p><input type="email" placeholder="E-mail..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="email"></p>

                                                </div>
                                                <div class="form-line">
                                                    <label class="form-label">Password</label>
                                                    <p><input type="password" placeholder="Password..."
                                                              class="form-control" oninput="this.className = ''"
                                                              name="pass"></p>
                                                </div>
                                                <div class="form-line">
                                                    <label class="form-label">Confirm Password</label>
                                                    <p><input type="password" placeholder="Confirm Password..."
                                                              class="form-control" oninput="this.className = ''"
                                                              name="pass1"></p>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>

                                            <div class="tab form-group form-float">
                                                <h3 style="text-align: center">Personal Information</h3>

                                                <div class="form-line">
                                                    <label class="form-label">Name</label>

                                                    <p><input placeholder="Candidate Name..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="name"></p>

                                                </div>
                                                <div class="form-line">
                                                    <label class="form-label">Age</label>

                                                    <p><input placeholder="Candidate Age..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="age"></p>

                                                </div>

                                                <div class="form-line">
                                                    <label class="form-label">Phone</label>

                                                    <p><input placeholder="Candidate Phone..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="phn"></p>

                                                </div>

                                                <div class="form-line">
                                                    <label class="form-label">Birthday</label>

                                                    <p><input type="date" placeholder="Candidate Name..."
                                                              class="form-control" oninput="this.className = ''"
                                                              name="bday"></p>

                                                </div>


                                                <div class="form-line">
                                                    <label class="form-label">Company Name</label>

                                                    <p><input placeholder="Company Name..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="cname"></p>

                                                </div>

                                                <div class="form-line">
                                                    <label class="form-label">Company Position</label>

                                                    <p><input placeholder="Company Position..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="cp"></p>

                                                </div>


                                                <div class="form-line">
                                                    <label class="form-label">Address</label>

                                                    <p><input placeholder="Candidate Address..." class="form-control"
                                                              oninput="this.className = ''"
                                                              name="address"></p>

                                                </div>


                                                <div class="form-line">
                                                    <label class="form-label">Image</label>

                                                    <p><input type="file" placeholder="Candidate Address..." name="image" class="form-control"
                                                              ></p>

                                                </div>


                                            </div>
                                        </fieldset>
                                        <fieldset>

                                            <div class="tab form-group form-float">
                                                <h3 style="text-align: center">Question Answer</h3>

<input type="hidden" value="{{$e=1}}">

                                                    @foreach($value as $val)
                                                    <div class="form-line">
                                                        <label class="form-label">Q{{$e}}: {{$val['question']}}??</label><br>
                                                        @foreach($value1 as $val2)
                                                            @if($val2['question']==$val['id'])
                                                                @if ($val2['o']!=0)
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="o{{$tt}}"
                                                                               value="{{$val2['o']}}">{{$val2['answer']}}
                                                                    </label>
                                                                @elseif ($val2['c']!=0)
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="o{{$tt}}"
                                                                               value="{{$val2['c']}}">{{$val2['answer']}}
                                                                    </label>
                                                                @elseif ($val2['e']!=0)
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="o{{$tt}}"
                                                                               value="{{$val2['e']}}">{{$val2['answer']}}
                                                                    </label>


                                                                @elseif ($val2['a']!=0)
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="o{{$tt}}"
                                                                               value="{{$val2['a']}}">{{$val2['answer']}}
                                                                    </label>


                                                                @elseif ($val2['n']!=0)
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="o{{$tt}}"
                                                                               value="{{$val2['n']}}">{{$val2['answer']}}
                                                                    </label>
                                                                @endif

                                                            @endif
                                                        @endforeach
                                                        <input type="hidden" value="{{$tt=$tt+1}}">
                                                        <input type="hidden" value="{{$e=$e+1}}">
                                                </div>
                                                    @endforeach



                                            </div>
                                        </fieldset>

                                        <div style="overflow:auto;">
                                            <div style="float:right;">
                                                <button type="button" id="prevBtn" class="btn btn-default"
                                                        onclick="nextPrev(-1)">Previous
                                                </button>
                                                <button type="button" id="nextBtn" class="btn btn-primary"
                                                        onclick="nextPrev(1)">Next
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Circles which indicates the steps of the form: -->
                                        <div style="text-align:center;margin-top:40px;">
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">Setting Panel
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Select Layout</h6>
                            <div class="selectgroup layout-color w-50">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="1"
                                           class="selectgroup-input-radio select-layout" checked>
                                    <span class="selectgroup-button">Light</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="2"
                                           class="selectgroup-input-radio select-layout">
                                    <span class="selectgroup-button">Dark</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Sidebar Color</h6>
                            <div class="selectgroup selectgroup-pills sidebar-color">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1"
                                           class="selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                          data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2"
                                           class="selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                          data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Color Theme</h6>
                            <div class="theme-setting-options">
                                <ul class="choose-theme list-unstyled mb-0">
                                    <li title="white" class="active">
                                        <div class="white"></div>
                                    </li>
                                    <li title="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li title="black">
                                        <div class="black"></div>
                                    </li>
                                    <li title="purple">
                                        <div class="purple"></div>
                                    </li>
                                    <li title="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li title="green">
                                        <div class="green"></div>
                                    </li>
                                    <li title="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                           id="mini_sidebar_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Mini Sidebar</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                           id="sticky_header_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Sticky Header</span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                <i class="fas fa-undo"></i> Restore Default
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                <a href="templateshub.net">Templateshub</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>


<script src="../{{'assets/'}}assets/js/app.min.js"></script>
<script src="../{{'assets/'}}assets/bundles/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- JS Libraies -->
<script src="../{{'assets/'}}assets/bundles/jquery-steps/jquery.steps.min.js"></script>
<!-- Page Specific JS File -->
<script src="../{{'assets/'}}assets/js/page/form-wizard.js"></script>
<!-- Template JS File -->
<script src="../{{'assets/'}}assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="../{{'assets/'}}assets/js/custom.js"></script>
</body>


<!-- form-wizard.html  21 Nov 2019 03:55:20 GMT -->
</html>
