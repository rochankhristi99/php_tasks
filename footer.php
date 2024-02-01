<!DOCTYPE html>
<html>

<head>
    <title>Fix My Cycle</title>
    <style>

    </style>
</head>

<body>
    <footer>
        <!--Footer Section Start-->
        <div class="bg_dark px-5 py-5 text-white">

            <h3 class="fw-bolder mb-5"> CONTACT US</h3>
            <table class="table ">
                <tr>
                    <td>
                        Reach Us At
                    </td>
                    <td>
                        <h6 class="text_org">support@fixmycycle.com</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Contact Number
                    </td>
                    <td>
                        <h6 class="text_org">+358 XX XX XXX</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Connect With Us
                    </td>
                    <td>
                        <a href="https://www.facebook.com/" target="_blank"><i
                                class="fa-brands fa-2x fa-facebook"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-2x fa-twitter"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i
                                class="fa-brands fa-2x fa-youtube"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"> <i
                                class="fa-brands fa-2x fa-instagram"></i></a>

                    </td>
                </tr>
            </table>
            <center>
                <hr>

                <span class="text-white"><em>@2024 FixMyCycle. All Rights Reserved.</em></span>
<br><br>

                <?php

                $file_path = $_SERVER['SCRIPT_FILENAME'];

                $FileName = basename($file_path);
                $lastModifiTime = filemtime($file_path);

                $lastModifiTime2 = date("F d, Y g:i A", $lastModifiTime);

                echo $FileName . " was last modified on " . $lastModifiTime2;

                ?>
            </center>

        </div>
    </footer>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>