<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/nui6fjf.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Compliance-detail</title>
</head>

<body>

    <?php
    include("header.html");
    ?>
    <!-- header -->

    <div class="header">
        <div class="content">
            <img class="img-banner" src="img/image4.png" alt="">
            <h1 class="text-title">PCI</h1>
        </div>
    </div>

    <!-- End header -->

    <!-- content -->
    <div class="content">

        <h6>COMPLIANCE</h6>
        <p>PCI Compliance in 3 easy steps.</p>
        <div class="center-text">
            <a>Many mid-sized businesses struggle with achieving and maintaining PCI compliance. Some lack the necessary resources – technology or security
                </br> staff, – while others struggle with the complex processes and technology involved.
                </br> As someone responsible for IT / IT Security, you have little choice but to incorporate PCI compliance into your ever-growing list of responsibilities.
                </br> Don’t count on sympathy or extra budget. So how do you comply without breaking the bank or hiring expert help?
                </br>Here are 3 easy steps to help you manage PCI compliance with limited resources.
            </a>
        </div>

        <!-- open toggle -->
        <div class="section-text">
            <div class="section-padding">
                <button class="collapsible">Identify and maintain PCI Scope</button>
                <div class="content-show">
                    <a>The first step is to the determine the scope of the task. Make a list of all networks, systems, applications responsible for storing, transmitting and processing credit card data, including all personnel who have access to the resources.
                        The scope will help you better define the resources you need to assess and monitor against the PCI control requirements throughout the organization. A practical and useful guide to help you determine the scope of technology and
                        processes relevant to PCI is available through this link – </br> <a link href="#">//www.pcisecuritystandards.org/documents/Guidance-PCI-DSS-Scoping-and-Segmentation_v1.pdf </a></a>
                </div>
            </div>
            <div class="section-padding">
                <button class="collapsible">Implement and manage security solutions</button>
                <div class="content-show">
                    <a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                </div>
            </div>
            <div class="section-padding">
                <button class="collapsible">Manage internal control audits</button>
                <div class="content-show">
                    <a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                </div>
            </div>
            <!-- End open toggle -->


            <!-- script for open toggle -->
            <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                        this.classList.toggle("active-toggle");
                        var content = this.nextElementSibling;
                        if (content.style.maxHeight) {
                            content.style.maxHeight = null;
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                        }
                    });
                }
            </script>

            <!-- end open section -->
        </div>
    </div>
    <!-- End content -->
    <?php
    include("footer.html");
    ?>
</body>

</html>