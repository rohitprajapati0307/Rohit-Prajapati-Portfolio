<?php include 'sentMail.php';?>
<!doctype html>
<html>

<head>

    <title>Indiaspend Donate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <style type="text/css">
    #personal_information,
    #payment {
        display: none;
    }

    [data-tab-info] {
        display: none;
    }

    .active[data-tab-info] {
        display: block;
    }

    .donate-now {
        list-style-type: none;
        margin: 25px 0 0 0;
        padding: 0;
    }

    .donate-now li {
        float: left;
        margin-left: 5%;
        width: 20%;
        height: 40px;
        position: relative;
    }

    .donate-now label,
    .donate-now input {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;

    }

    .donate-now label {
        border-radius: 5px;
    }

    .donate-now input[type="radio"] {
        opacity: 0.01;
        z-index: 100;
    }

    .donate-now input[type="radio"]:checked+label,
    .Checked+label {
        background: #fa7f4b;
        color: #fff;
    }

    .donate-now label {
        padding: 5px;
        border: 1px solid #CCC;
        cursor: pointer;
        z-index: 90;
    }

    .has-error .donate-now label {
        border: 1px solid red;
    }

    .has-error .form-control {
        border-color: red;
    }

    .donate-now label:hover {
        background: #DDD;
    }

    .form-horizontal .control-label {
        text-align: center;
    }

    .has-error .help-block {
        display: none !important;
    }

    .donation-tab li {
        width: 33.33%;
    }

    .donation-tab li a,
    .donation-tab li.active a,
    .donation-tab li.active a:focus,
    .nav-tabs li.active a:hover {
        width: 100%;
        text-align: center;
        border-radius: 0px;
        border: 0 none !important;
    }

    .form-container {
        background: #fff;
        position: relative;
        margin-top: -100px;
    }

    .donation-tab {
        border-bottom: 0 none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .carousel-indicators {
        display: none;
    }

    .content-wrap {
        margin: 30px;
    }

    #account_information .nav-tabs {
        border-bottom: none;
        margin: 0 0 0 20px;
    }

    #account_information .nav-tabs li a,
    #account_information li.active a,
    #account_information li.active a:focus,
    #account_information li.active a:hover {
        width: 200px;
        text-align: center;
    }

    #account_information .nav-tabs li a {
        border-radius: 5px;
    }

    .form-horizontal .form-group {
        margin-right: 0;
        margin-left: 0;
    }

    .custome-amount {
        width: 65%;
        float: left;
        margin-right: 5%;
        margin-left: 10%;
    }

    .step-next {
        width: 20%;
        float: left;
    }

    .previous {
        width: 20%;
        margin-right: 20px;
    }

    .previous a {
        width: 100%;
        text-transform: uppercase;
    }

    .step-next a {
        width: 100%;
        background: #fa7f4b;
        text-transform: uppercase;
        border-color: #fa7f4b;
    }
    </style>
</head>

<body>

    <!-- Navigation menu Start -->

    <header>
        <nav class="navigation">

            <!-- Logo -->
            <div class="logo">
                <a href="#"><img src="./img/logo.png" alt="IndiaSpend" /></a>
            </div>

            <!-- Navigation -->
            <ul class="menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="https://www.indiaspend.com/about-us">About Us </a></li>
                <li><a href="https://www.indiaspend.com/trustees-patrons/">Trustees & Patrons </a></li>
            </ul>

            <div class="humbarger">
                <div class="bar"></div>
                <div class="bar2 bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>

    <!-- Navigation menu  End  -->

    <!-------------      Header Slider Section Start     ----------->
    <div id="img-carousel" data-ride="carousel" class="carousel slide">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#img-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#img-carousel" data-slide-to="1"></li>
            <li data-target="#img-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides-->
        <div role="listbox" class="carousel-inner">
            <div class="item active">
                <!-- <img src="../RazorPay-api/img/indiaspend-bg-1.jpg" alt="" /> -->
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">You Can Help!</h2>
                    <P class="banner_text">Netus et malesuada fames ac turpis egestas integer eget aliq. Sed turpis
                        tincidunt id
                        aliquet risus feugiat
                        in. Sed felis eget velit aliquet sagittis volutpat consequat mauris.</P>
                    <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Donate
                            Now </a></p>
                    <div id="circ">
                        <ul>
                            <li class="animated zoomIn">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.facebook.com/IndiaSpend"><i class="fa fa-facebook"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://twitter.com/IndiaSpend"> <i class="fa fa-twitter"></i> </a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a
                                        href="https://www.linkedin.com/company/the-spending-&-policy-research-foundation-www-indiaspend-org-/"></a><i
                                        class="fa fa-linkedin"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/user/IndiaSpend"> <i class="fa fa-youtube"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.instagram.com/indiaspend/"> <i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- <img src="../RazorPay-api/img/indiaspend-bg-2.jpg" alt="" /> -->
                <div class="carousel-caption">
                    <h2 class="animated bounceInDown">You Can Help!</h2>
                    <P class="banner_text">Netus et malesuada fames ac turpis egestas integer eget aliq. Sed turpis
                        tincidunt id
                        aliquet risus feugiat
                        in. Sed felis eget velit aliquet sagittis volutpat consequat mauris.</P>
                    <p class="animated bounceInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Donate
                            Now</a>
                    </p>
                    <div id="circ">
                        <ul>
                            <li class="animated zoomIn">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.facebook.com/IndiaSpend"><i class="fa fa-facebook"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://twitter.com/IndiaSpend"> <i class="fa fa-twitter"></i> </a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a
                                        href="https://www.linkedin.com/company/the-spending-&-policy-research-foundation-www-indiaspend-org-/"></a><i
                                        class="fa fa-linkedin"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/user/IndiaSpend"> <i class="fa fa-youtube"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.instagram.com/indiaspend/"> <i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- <img src="../RazorPay-api/img/indiaspend-bg-3.jpg" alt="" /> -->
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">You Can Help!</h2>
                    <P class="banner_text">Netus et malesuada fames ac turpis egestas integer eget aliq. Sed turpis
                        tincidunt id
                        aliquet risus feugiat
                        in. Sed felis eget velit aliquet sagittis volutpat consequat mauris.</P>
                    <p class="animated fadeInRight"><a href="#" class="btn btn-transparent btn-rounded btn-large">Donate
                            Now</a>
                    </p>
                    <div id="circ">
                        <ul>
                            <li class="animated zoomIn">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.facebook.com/IndiaSpend"><i class="fa fa-facebook"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://twitter.com/IndiaSpend"> <i class="fa fa-twitter"></i> </a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a
                                        href="https://www.linkedin.com/company/the-spending-&-policy-research-foundation-www-indiaspend-org-/"></a><i
                                        class="fa fa-linkedin"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/user/IndiaSpend"> <i class="fa fa-youtube"></i></a>
                                </div>
                            </li>
                            <li class="animated zoomIn ">
                                <div class="back"></div>
                                <div class="icon">
                                    <a href="https://www.instagram.com/indiaspend/"> <i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls--><a href="#img-carousel" role="button" data-slide="prev" class="left carousel-control"><i
                aria-hidden="true" class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a href="#img-carousel" role="button" data-slide="next" class="right carousel-control"><i aria-hidden="true"
                class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>
    <!-------------      Header Slider Section End     ----------->

    <div class="container form-container">
        <div class="row">
            <form class="form-horizontal" action="" method="POST" id="myform">

                <div class="col-md-6  dis-hide">

                    <div class="featured_title">
                        <h5>Featured Donate</h5>
                        <h4>sit amet est placerat</h4>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh.</p>
                    </div>
                </div>
                <ul id="navbar" class="nav nav-tabs donation-tab">
                    <li class="active"><a data-toggle="tab" href="#account_information">1 Donation Amount</a></li>
                    <li><a data-toggle="tab" href="#personal_information">2 Contact Information</a></li>
                    <li><a data-toggle="tab" href="#payment">3 Payment Information</a></li>
                </ul>
                <div class="col-md-6 mob-hide">

                    <div class="featured_title">
                        <h5>Featured Donate</h5>
                        <h4>sit amet est placerat</h4>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh.</p>
                    </div>
                </div>
                <div class="tab-content col-md-6">
                    <div class="content-wrap">
                        <fieldset id="account_information" class="">
                            <ul id="navbar" class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" data-tab-value="#monthly">Monthly</a></li>
                                <li class="pull-right"><a data-toggle="tab" data-tab-value="#onetime">One Time</a></li>
                            </ul>
                            <div class="tab-content">

                                <div id="monthly" data-tab-info class="active">

                                    <div class="form-group">

                                        <ul class="donate-now">

                                            <li>
                                                <input type="radio" class="form-control fix-price" id="fixed-price"
                                                    name="price" value="250" />
                                                <label for="" class=" control-label">&#x20B9;250</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="form-control fix-price" id="price1"
                                                    name="price" value="1000" />
                                                <label for="" class=" control-label">&#x20B9;1000</label>
                                            </li>

                                            <li>
                                                <input type="radio" class="form-control fix-price" id="price2"
                                                    name="price" value="3000" />
                                                <label for="" class=" control-label">&#x20B9;3000</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="form-control fix-price" id="price2"
                                                    name="price" value="5000" />
                                                <label for="" class=" control-label">&#x20B9;5000</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-group">

                                        <div class="custome-amount">
                                            <input type="number" class="form-control" id="customeamount"
                                                name="customeamount"
                                                placeholder="OR Type any amount you wish to contribute" />
                                        </div>
                                        <div class="step-next"><a class="btn btn-primary next">next</a></div>
                                    </div>
                                </div>
                                <div id="onetime" data-tab-info>
                                    <div class="form-group">

                                        <ul class="donate-now">

                                            <li>
                                                <input type="radio" class="form-control fix-price" id="fixed-price"
                                                    name="price" value="150" />
                                                <label for="" class=" control-label">&#x20B9;150</label>
                                            </li>
                                            <li>

                                                <input type="radio" class="form-control fix-price" id="price1"
                                                    name="price" value="2000" />
                                                <label for="" class=" control-label">&#x20B9;2000</label>
                                            </li>

                                            <li>
                                                <input type="radio" class="form-control fix-price" id="price2"
                                                    name="price" value="3000" />
                                                <label for="" class=" control-label">&#x20B9;3000</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="form-control fix-price" id="price2"
                                                    name="price" value="5000" />
                                                <label for="" class=" control-label">&#x20B9;5000</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-group">

                                        <div class="custome-amount">
                                            <input type="number" class="form-control" id="customeamount"
                                                name="customeamount"
                                                placeholder="OR Type any amount you wish to contribute" />
                                        </div>
                                        <div class="step-next"><a class="btn btn-primary next">next</a></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset id="personal_information" class="">
                            <legend>Personal information</legend>

                            <div class="col-md-12">
                                <div id="fielda">
                                    <div id="fielda0">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="name"
                                                placeholder="Full Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="tel" id="tel" class="form-control"
                                                placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group">

                                            <div class="step-next pull-right"><a class="btn btn-primary next">next</a>
                                            </div>
                                            <div class="previous pull-right"><a class="btn btn-primary "
                                                    id="previous">Previous</a></div>
                                        </div>
                                    </div>
                                    <!--end field0-->
                                </div>
                                <!--end field-->
                                <!-- Button -->
                            </div>
                        </fieldset>
                        <fieldset id="payment">
                            <input type="button" id="rzp-button1" class="btn btn-success" value="Pay Now" />
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-------------      Card  Section Start     ----------->

    <section class="Card-section ">
        <div class="container">
            <div class="contact_title">
                <p> Contact Us </p>
                <h4>Lorem ipsum dolor sit amet.</h4>
            </div>
            <main class="grid">
                <article>
                    <i class="fa fa-phone animated zoomIn "></i>
                    <div class="text">
                        <h3>Call Us Now</h3>
                        <h5>Lorem Ipsum</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh
                            ultricies
                            vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <!-- <a href="#" class="btn btn-primary btn-block">Here's why</a> -->
                    </div>
                </article>
                <article>
                    <i class="fa fa-envelope animated zoomIn "></i>
                    <div class="text">
                        <h3>Email US</h3>
                        <h5>Lorem Ipsum</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh
                            ultricies
                            vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <!-- <a href="#" class="btn btn-primary btn-block">Here's how</a> -->
                    </div>
                </article>
                <article>
                    <i class="fa fa-whatsapp animated zoomIn "></i>
                    <div class="text">
                        <h3>WhatsApp</h3>
                        <h5>Lorem Ipsum</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh
                            ultricies
                            vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <!-- <a href="#" class="btn btn-primary btn-block">Read more</a> -->
                    </div>
                </article>
            </main>
        </div>

        <!-------------      Card  Section End    ----------->

</body>

<script>
$(document).ready(function() {

    $.validator.addMethod("usernameRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
    }, "Username must contain only letters, numbers");

    $(".next").click(function() {
        var form = $("#myform");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                username: {
                    required: true,
                    usernameRegex: true,
                    minlength: 6,
                },
                customeamount: {
                    required: function() {
                        //returns true if email is empty
                        return !$('input[type=radio]:checked').val();
                    }
                },
                price: {
                    required: function() {
                        //returns true if email is empty
                        return !$("#customeamount").val();
                    }
                },
                company: {
                    required: true,
                },
                tel: {
                    required: true,
                },
                name: {
                    required: true,
                    minlength: 3,
                },
                email: {
                    required: true,
                    minlength: 3,
                },

            },
            messages: {
                username: {
                    required: "Username required",
                },
                customeamount: {
                    required: "custome amount required",
                },
                tel: {
                    required: "Phone Number required",

                },
                name: {
                    required: "Name required",
                },
                email: {
                    required: "Email required",
                },
                price: {
                    required: "choose the Amount",
                }
            }
        });

        if (!$('input[type=radio]:checked').val()) {
            var amt = $("#customeamount").val();
        } else if (!$("#customeamount").val()) {
            var amt = $('input[type=radio]:checked').val();
        }
        console.log(amt);
        if (form.valid() === true) {
            if ($('#account_information').is(":visible")) {
                current_fs = $('#account_information');
                next_fs = $('#personal_information');
                $("#navbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                $("#navbar li").eq($("fieldset").index(next_fs)).addClass("active");
            } else if ($('#personal_information').is(":visible")) {

                current_fs = $('#personal_information');

                next_fs = $('#payment');
                $("#navbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                $("#navbar li").eq($("fieldset").index(next_fs)).addClass("active");
            }

            next_fs.show();
            current_fs.hide();
        }

    });

    $('#previous').click(function() {
        if ($('#payment').is(":visible")) {
            current_fs = $('#payment');
            next_fs = $('#personal_information');
            $("#navbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        } else if ($('#personal_information').is(":visible")) {
            current_fs = $('#personal_information');
            next_fs = $('#account_information');
            $("#navbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            $("#navbar li").eq($("fieldset").index(next_fs)).addClass("active");
        }

        next_fs.show();
        current_fs.hide();
    });


    const tabs = document.querySelectorAll('[data-tab-value]')
    const tabInfos = document.querySelectorAll('[data-tab-info]')

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document
                .querySelector(tab.dataset.tabValue);

            tabInfos.forEach(tabInfo => {
                tabInfo.classList.remove('active')
            })
            target.classList.add('active');
        })
    })
    var btn = document.getElementById("rzp-button1");
    btn.addEventListener("click", function() {

        var name = $("#username").val();
        var email = $("#email").val();
        var phone = $("#tel").val();
        if (!$('input[type=radio]:checked').val()) {
            var amt = $("#customeamount").val();
        } else if (!$("#customeamount").val()) {
            var amt = $('input[type=radio]:checked').val();
        }
        console.log(amt);
        var options = {
            "key": "rzp_test_K9jvYLuMLtLvHM", // Enter the Key ID generated from the Dashboard
            "amount": amt *
                100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Indiaspend",
            "description": "IndiaSpend: Data journalism, analysis on Indian economy, education, healthcare, agriculture, politics.",
            "image": "https://www.indiaspend.com/images/logo.svg",
            "prefill": {

                "contact": phone,
                "email": email
            },
            "handler": function(response) {
                console.log(response);
                $.ajax({
                    type: 'post',
                    url: 'payment_process.php',
                    data: "payment_id=" + response.razorpay_payment_id + "&amt=" + amt +
                        "&name=" + name + "&email=" + email + "&phone=" + phone,
                    success: function(result) {
                        window.location.href = "thank_you.php"
                    }
                });
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
        //Do something here
    });

});
</script>


<!-- /* --------- Navigation menu Start ---------- */ -->

<script>
$(document).ready(function() {

    //hamburger Toggle
    $('.humbarger').click(function(event) {
        $('.menu-list').slideToggle(500);
        event.preventDefault();

        $('.menu-list li a').click(function(event) {
            if ($(window).width() < 768) {
                $('.menu-list').slideUp(500);
                event.preventDefault();
            }
        });
    });

});
</script>
<!-- /* --------- Navigation menu Endt ---------- */ -->

</html>