<!DOCTYPE HTML>
<html lang="en">

    <?php
	include 'head.php';
    ?>

    <?php
	include 'header.php';
    ?>
    <!--Content Start-->
    <div id="home">
        <h2> Welcome! </h2>
        <div style="margin: 15px auto; width: 95%;">
            <p style="font-family: 'Courgette', cursive;text-align: left; width: 92%;">
                The B&amp;B Willow Lake Bed and Breakfast offers Honeymoon and Anniversary packages.
                We also offer Single rooms, Traveler rooms, Honeymoon/Anniversary rooms, and Family rooms
                to accomidate everyone.
            </p>
        </div>
        <div style="text-align: center; width: 100%;">
            <div id="slidewindow">
                <ul class="bjqs">
                    <li>
                        <a href="rooms/lana.html">
                        <img src="img/rooms/lana1.jpg" alt="Lana's Room" title="Lana's Room">
                        </a>
                    </li>
                    <li>
                        <a href="rooms/rosemary.html">
                        <img src="img/rooms/rosemary1.jpg" title="Rosemary's Room">
                        </a>
                    </li>
                    <li>
                        <a href="rooms/tammy.html">
                        <img src="img/rooms/tammy1.jpg" title="Tammy’s Room">
                        </a>
                    </li>
                    <li>
                        <a href="rooms/garden.html">
                        <img src="img/rooms/garden1.jpg" title="Garden Room">
                        </a>
                    </li>
                    <li>
                        <a href="rooms/mia.html">
                        <img src="img/rooms/mia1.jpg" title="Mia’s Room">
                        </a>
                    </li>
                    <li>
                        <a href="rooms/gabriel.html">
                        <img src="img/rooms/gabriel1.jpg" title="Gabriel's Room">
                        </a>
                    </li>
                </ul>
            </div>
            <script>
                jQuery(document).ready(function($) {

                    $('#slidewindow').bjqs({
                        height : 380,
                        width : 950,
                        responsive : true,
                        showcontrols : false,
                        hoverpause : true,
                        animduration : 650,
                    });

                });
            </script>
        </div>

        <hr size="20">

        <div class="box">
            <div id="slidelist" class="half_box">
                <h4>The B&B Willow Lake</h4>
                <ul>
                    <li>
                        We offer six different rooms for any type of occasion
                    </li>
                    <li>
                        Fresh assortment breakfast served daily
                    </li>
                    <li>
                        Each room features a fully functioning fire place
                    </li>
                    <li>
                        Fresh fruit replenished in every room once per day
                    </li>
                    <li>
                        Free Wi-Fi
                    </li>
                    <li>
                        Smoke-free facility
                    </li>
                    <li>
                        Pet Friendly
                    </li>
                </ul>
            </div>
            <div id="guestwords" class="half_box">
                <h4>Word's from our Guests</h4>
                <p style="font-style: italic;">
                    <em>"The greatest place to stay in Key West, Florida!"</em>
                </p>
                <p style="text-align: right; margin-right: 20px">
                    -The Lara Family
                </p>
                <br />
                <p style="font-style: italic;">
                    <em>"Relaxing, rejuvenating, and refreshing! Can't wait to come back!"</em>
                </p>
                <p style="text-align: right; margin-right: 20px">
                    -Jimmy Deville
                </p>
                <br />
                <p style="font-style: italic;">
                    <em>"Best anniversary ever! Absolutely loved the strawberry crepes!"</em>
                </p>
                <p style="text-align: right; margin-right: 20px">
                    -Mary Colon
                </p>
            </div>
        </div>
    </div>
    <!--Content End-->
    <?php
	include 'footer.php';
?>
</html>