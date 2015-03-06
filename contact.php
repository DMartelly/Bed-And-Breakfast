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
        <h2>Contact Us</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7258.150453737973!2d-81.79860709109823!3d24.552062377133964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d1b6c2ca6ca429%3A0x63d612e60ad3ac90!2s1012+Duval+St!5e0!3m2!1sen!2sus!4v1399520119834" width="950" height="500" frameborder="1" style="border:0"></iframe>
        <p style="font-size: 14px; margin-bottom: 10px;">
            Latitude: 24.550576 |
            Longitude: -81.799044
        </p>

        <div>
            <h2>Directions</h2>
            <h3>Directions from U.S. 1</h3>

            <p>
                Follow Florida 821 Toll S and U.S. 1 S to Truman Ave. Continue on Truman Ave. Drive to Julia St (1,0
                miles). Continue onto Truman Ave (0.9 miles). Turn left onto Whithead St (207 feet). Take the first left
                onto Julia St (384 feet) and the B&B Willow Lake will be on your left.
            </p>

            <h3>Directions from Key West International Airport</h3>
            <p>
                Head northwest on Faraldo Cir towards Nancy Cherry Ln. Continue on S Roosevelt Blvd to Atlantic Blvd
                for 1.4 miles. Continue on Atlantic Blvd. Take White St and United St to Julia St (2 miles). Turn left onto
                Atlantic Blvd (0.5 miles). Turn right onto White St (0.5 miles). Turn left onto United St (0.7 miles). Turn
                right onto Julia St (384 feet) and the B&B Willow Lake will be on your left.
            </p>
        </div>

        <div>

            <form action="http://bbwillowlakekeys.com/contact.php" id="commentform" class="form" method="post">
                <h2 style="text-align: center">Message Us</h2>
                <div class="field">
                    <label for="contact_name">Name: </label>
                    <input type="text" name="contact_name" id="contact_name" class="text_input" value="">
                </div>

                <div class="field">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="text_input" value="">
                </div>

                <div style="margin-bottom: 10px" class="field">
                    <label style="display: block;" for="message_text">Message:</label>
                    <textarea name="message" id="message_text" class="text_input" cols="60" rows="9"></textarea>
                </div>

                <button type="submit" style="color:#FFFFFF; border-radius: 5px; margin: 5px auto; background-color: #000000; font-size: 22px;" onclick="myFunction()">
                            Send Message
                        </button>

                        <script>
                            function myFunction() {
                                alert("Your message has been received. Someone will be in contact with you in the next 72 hours.");
                            }
                        </script>
            </form>
        </div>
    </div>
    <!--Content End-->
    <?php
	include 'footer.php';
?>
</html>