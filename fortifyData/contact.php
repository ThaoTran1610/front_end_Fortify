<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="http://mozilla.github.io/foundation-icons/assets/foundation-icons.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/nui6fjf.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Document</title>
    </head>

    <body>
        <?php
        include('header.html');
        ?>
        <div class="container-aboutus">
            <div class="section-main">
                <div id="slide-aboutus" style="background:
                linear-gradient(rgba(0, 0, 0, 0.2),
                rgba(0, 0, 0, 0.4)),
                url(IMG/slide2.jpg);background-size: cover;">
                    <div class="title-h1-aboutus">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="section-main">
                <div class="information-content-contactus">
                    <div class="title-text-contactus">
                        <h2>CONTACT US</h2>
                    </div>
                    <div class="title-content-contactus">
                        <h2>To make requests for further information, contact us via this form or social channels .</h2>
                        <p>We respond to all inquiries within 24 hours during working business days.
                        </p>
                    </div>
                </div>
                <div class="grid3col-contactus">
                    <div class="card-contactus">
                        <div class="card-item-contactus">
                            <div class="card-icon-contactus" style=" background-image: url(IMG/card-icon1.svg); ">
                            </div>
                            <div class="card-title-contactus">
                                <p>Calls Us</p>
                                <p class="card-title-description-contactus">To learn more about how to manage your cyber risk contact us at:</p>
                                <p>+1 888-396-4110</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-contactus">
                        <div class="card-item-contactus">
                            <div class="card-icon-contactus" style=" background-image: url(IMG/card-icon2.svg); ">
                            </div>
                            <div class="card-title-contactus">
                                <p>Email Us</p>
                                <p>info@fortifydata.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-contactus">
                        <div class="card-item-contactus">
                            <div class="card-icon-contactus" style=" background-image: url(IMG/card-icon3.svg); ">
                            </div>
                            <div class="card-title-contactus">
                                <p>Visit Us</p>
                                <p>125 TownPark Drive Suite 300, Kennesaw GA 30144</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section-main">
                <div class="contact">
                    <div class="contact-content left ">
                        <div class="contact-details">
                            <h2>
                                To make requests for further information, contact us via this form.</h2>
                            <p>We respond to all inquiries within 24 hours during working business days.</p>
                        </div>
                    </div>
                    <div class="contact-content right">
                        <form>
                            <ul class="form-style-1">
                                <li><input class="form-design" placeholder="    First Name *" />
                                    <input class="form-design" placeholder="    Last Name *" />
                                </li>
                                <li><input class="form-design" placeholder="    Phone Number *" />
                                    <input class="form-design" placeholder="    Email Address *" />
                                </li>

                            </ul>
                        </form>

                        <h3>I Need Help With: *</h3>
                        <label class="checklist-main">Cyber Security Risk Assessment and Score
                            <input type="checkbox" checked="checked">
                            <span class="check-mark"></span>
                        </label>
                        <label class="checklist-main">Third Party Risk Management
                            <input type="checkbox" checked="checked">
                            <span class="check-mark"></span>
                        </label>
                        <label class="checklist-main">Audit & Compliance Management
                            <input type="checkbox" checked="checked">
                            <span class="check-mark"></span>
                        </label>
                        <label class="checklist-main">Phishing Simulations
                            <input type="checkbox" checked="checked">
                            <span class="check-mark"></span>
                        </label>
                        <div class="input">
                            <input type="textarea" placeholder="Please Provide Any Additional Information Here ">
                        </div>

                        <span>This site is protected by
                            reCAPTCHA and the Google <a class="a" href="#">Privacy Policy</a> and <a class="a" href="">Terms
                                of
                                Service</a> apply.</span>
                        <div class="button-submit">
                            <p>Submit</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map">

                <script>
                    var map;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: 34.040180,
                                lng: -84.565720
                            },
                            zoom: 17
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDue6LIEOhscI9UDFZlbDj-OTheCGQkI6M&callback=initMap" async defer></script>

            </div>
        </div>
        </div>
    </body>

    </html>
</body>

</html>