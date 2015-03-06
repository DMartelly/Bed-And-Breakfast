<body>
    <div id="top_bar"></div>
    <div id="wrapper">
        <div id="top">
        	<a id="book_now_button" href="../booking.php">
            <span>Book Now!</span>
            </a>
            <div id="heading">
                <div style="text-align: center; margin-bottom: 20px">
                    <h1> The B&amp;B Willow Lake </h1>
                    <h2 style="font-size: 24px;">Memories Are Made Here</h2>
                    <p>
                        1012 Duval Street, Key West, FL 33040 - 516-647-9634
                    </p>
                </div>

                <p style="color: blue">
                    <?php
					$xmlWeather = new DOMDocument();
					$xmlWeather -> load("http://weather.yahooapis.com/forecastrss?p=USFL0244&u=f");
					echo "Date: " . date('m-d-Y') . " / Temperature: 78°F (25.5°C) - Wind: 9 mph (E) - Sunrise: 06:39 AM EST - Sunset: 08:19 PM EST";
                    ?>
                </p>
            </div>
        </div>
        <div id="nav">
            <nav>
                <ul>
                    <li>
                        <a href="../index.php">
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="../booking.php">
                        <strong>Book Now</strong>
                        </a>
                    </li>
                    <li>
                        <a href="../about.php">
                        About Us
                        </a>
                    </li>
                    <li>
                        <a href="../rooms.php">
                        Rooms
                        </a>
                        <ul>
                            <li>
                                <a href="lana.php">
                                Lana
                                </a>
                            </li>
                            <li>
                                <a href="rosemary.php">
                                Rosemary
                                </a>
                            </li>
                            <li>
                                <a href="tammy.php">
                                Tammy
                                </a>
                            </li>
                            <li>
                                <a href="garden.php">
                                Garden
                                </a>
                            </li>
                            <li>
                                <a href="mia.php">
                                Mia
                                </a>
                            </li>
                            <li>
                                <a href="gabriel.php">
                                Gabriel
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="../services.php">
                        Services
                        </a>
                    </li>
                    <li>
                        <a href="../attractions.php">
                        Nearby Attractions
                        </a>
                    </li>
                    <li>
                        <a href="../contact.php">
                        Contact and Directions
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <a href="../index.php">
        <img style="width: 100%;"
        alt="The B&B Willow Lake"
        src="../img/heading2a.jpg"/>
        </a>
