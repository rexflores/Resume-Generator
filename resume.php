<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Responsive Resume</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="styles/resume.css">
        <link rel="shortcut icon" type="image/png" href="images/resume.png">
    </head>

    <body>
        <div class="container">
            <div class="left_Side">
                <div class="profileText">
                    <div class="imgBx">
                        <?php
                        if (isset($_FILES["img"]) && $_FILES["img"]["error"] === 0) {
                            $filename = $_FILES["img"]["name"];
                            $tempname = $_FILES["img"]["tmp_name"];
                            $folder = "images/" . $filename;
                            move_uploaded_file($tempname, $folder);
                            echo "<img src='$folder'>";
                        }
                        ?>
                    </div>
                    <h2>
                        <?php
                        // Display Full Name
                        if(isset($_POST["fullname"])) {
                            echo $_POST["fullname"];
                        }
                        ?>

                        <br>

                        <span>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $title1 = $_POST["title1"]; // Get the input value from the HTML form
                                $selectedTitle = $_POST["title"]; // Get the selected radio option

                                // Combine the values into a single line
                                $result = $title1 . " (" . $selectedTitle . ")";

                                // Output the result
                                echo $result;
                            }
                            ?>
                        </span>
                    </h2>
                </div>

                <div class="contactInfo">
                    <h3 class="title">Contact Info</h3>
                    <ul>
                        <li>
                            <a class="onclick" href="tel:<?php if(isset($_POST["contactnumber"])) { echo $_POST["contactnumber"]; } ?>" target="_blank">
                                <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <span class="text">
                                    <?php
                                    // Display Contact Number
                                    if(isset($_POST["contactnumber"])) {
                                        echo $_POST["contactnumber"];
                                    }
                                    ?>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="onclick" href="mailto:<?php if(isset($_POST["email"])) { echo $_POST["email"]; } ?>" target="_blank">
                                <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                <span class="text">
                                    <?php
                                    // Display Email
                                    if(isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    }
                                    ?>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="onclick" href="https://<?php if(isset($_POST["facebook"])) { echo $_POST["facebook"]; } ?>" target="_blank">
                                <span class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                <span class="text">
                                    <?php
                                    // Display Facebook Link
                                    if(isset($_POST["facebook"])) {
                                        echo $_POST["facebook"];
                                    }
                                    ?>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="onclick" href="https://<?php if(isset($_POST["github"])) { echo $_POST["github"]; } ?>" target="_blank">
                                <span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                                <span class="text">
                                    <?php
                                    // Display Github Link
                                    if(isset($_POST["github"])) {
                                        echo $_POST["github"];
                                    }
                                    ?>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="onclick" href="https://www.google.com/maps/place/<?php if(isset($_POST["address"])) { echo $_POST["address"]; } ?>" target="_blank">
                                <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span class="text">
                                    <?php
                                    // Display Address
                                    if(isset($_POST["address"])) {
                                        echo $_POST["address"];
                                    }
                                    ?>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="education">
                    <h3 class="title">Education</h3>
                    <ul>
                        <li>
                            <h5>Class of <?php if(isset($_POST["year1"])) { echo $_POST["year1"];}?></h5>
                            <h4>Elementary</h4>
                            <h4><?php if(isset($_POST["school1"])) { echo $_POST["school1"];}?></h4>
                        </li>

                        <li>
                            <h5>Class of <?php if(isset($_POST["year2"])) { echo $_POST["year2"];}?></h5>
                            <h4>High School</h4>
                            <h4><?php if(isset($_POST["school2"])) { echo $_POST["school2"];}?></h4>
                        </li>

                        <li>
                            <h5>Class of <?php if(isset($_POST["year3"])) { echo $_POST["year3"];}?></h5>
                            <h4>Senior High School</h4>
                            <h4><?php if(isset($_POST["school3"])) { echo $_POST["school3"];}?></h4>
                        </li>

                        <li>
                            <h5><?php if(isset($_POST["year4"])) { echo $_POST["year4"];}?></h5>
                            <h4>College</h4>
                            <h4><?php if(isset($_POST["school4"])) { echo $_POST["school4"];}?></h4>
                        </li>
                    </ul>
                </div>

                <div class="language">
                    <h3 class="title">Languages</h3>
                    <ul>
                        <li>
                            <span class="text">
                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    echo "<ul>";

                                    // Loop through the submitted languages and display them
                                    for ($i = 1; isset($_POST["lang$i"]); $i++) {
                                        $language = $_POST["lang$i"];
                                        echo "<li>$language</li>";
                                    }

                                    echo "</ul>";
                                }
                                ?>
                            </span>
                        </li>
                    </ul>
                </div>


                <div class="about interest">
                    <h3 class="title">Interest</h3>
                    <ul>
                        <li>
                            <span class="text">
                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    echo "<ul>";

                                    // Loop through the submitted interests and display them
                                    for ($i = 1; isset($_POST["inter$i"]); $i++) {
                                        $interest = $_POST["inter$i"];
                                        echo "<li>$interest</li>";
                                    }

                                    echo "</ul>";
                                }
                                ?>
                            </span>
                        </li>
                    </ul>
                </div>



            </div>

            <div class="right_Side">
                <div class="about">
                    <h2 class="title2">Profile</h2>
                    <p>
                        <?php
                        if(isset($_POST["obj"])) {
                            echo $_POST["obj"];
                        }
                        ?>
                    </p>
                </div>
                
                <div class="about">
                    <h2 class="title2">Experience / Organization</h2>
                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear1"])) {
                                    echo $_POST["comyear1"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com1"])) {
                                    echo $_POST["com1"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos1"])) {
                                    echo $_POST["compos1"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes1"])) {
                                    echo $_POST["comdes1"];
                                }
                                ?>
                        </div>
                    </div>

                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear2"])) {
                                    echo $_POST["comyear2"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com2"])) {
                                    echo $_POST["com2"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos2"])) {
                                    echo $_POST["compos2"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes2"])) {
                                    echo $_POST["comdes2"];
                                }
                                ?>
                        </div>
                    </div>

                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear3"])) {
                                    echo $_POST["comyear3"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com3"])) {
                                    echo $_POST["com3"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos3"])) {
                                    echo $_POST["compos3"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes3"])) {
                                    echo $_POST["comdes3"];
                                }
                                ?>
                        </div>
                    </div>

                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear4"])) {
                                    echo $_POST["comyear4"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com4"])) {
                                    echo $_POST["com4"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos4"])) {
                                    echo $_POST["compos4"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes4"])) {
                                    echo $_POST["comdes4"];
                                }
                                ?>
                        </div>
                    </div>

                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear5"])) {
                                    echo $_POST["comyear5"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com5"])) {
                                    echo $_POST["com5"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos5"])) {
                                    echo $_POST["compos5"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes5"])) {
                                    echo $_POST["comdes5"];
                                }
                                ?>
                        </div>
                    </div>

                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear6"])) {
                                    echo $_POST["comyear6"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com6"])) {
                                    echo $_POST["com6"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos6"])) {
                                    echo $_POST["compos6"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes6"])) {
                                    echo $_POST["comdes6"];
                                }
                                ?>
                        </div>
                    </div>

                    <div class="box">
                        <div class="year_company">
                            <h5>
                                <?php
                                if(isset($_POST["comyear7"])) {
                                    echo $_POST["comyear7"];
                                }
                                ?>
                            </h5> <!-- YEAR -->

                            <h5>
                                <?php
                                if(isset($_POST["com7"])) {
                                    echo $_POST["com7"];
                                }
                                ?>
                            </h5> <!-- Company / Organization -->

                        </div>
                        <div class="text">
                            <h4>
                                <?php
                                if(isset($_POST["compos7"])) {
                                    echo $_POST["compos7"];
                                }
                                ?>
                            </h4> <!-- Position -->

                            <p> <!-- Description -->
                                <?php
                                if(isset($_POST["comdes7"])) {
                                    echo $_POST["comdes7"];
                                }
                                ?>
                        </div>
                    </div>
                </div>

                <div class="about skills">
                    <h2 class="title2">Professional Skills</h2>
                    <div class="box">
                        <h4>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                for ($i = 1; isset($_POST["skill$i"]); $i++) {
                                    $skills = $_POST["skill$i"];
                                    echo "$skills<br>". "<br>";
                                }
                            }
                            ?>
                        </h4>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>