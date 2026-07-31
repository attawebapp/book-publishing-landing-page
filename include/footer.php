<footer class="footer">
    <div class="footer_orange">
        <div class="container">
            <div class="footer_address">
                <a href="mailto:<?php echo $email; ?>"><i class="bx bxs-envelope"></i><b>Email:</b><?php echo $email; ?></a>
                <a href="javascript:;"><i class="bx bxs-map"></i><b>Address:</b><?php echo $address; ?></a>
                <a href="tel:<?php echo $phone; ?>"><i class="bx bxs-phone-call"></i><b>Call Us:</b><?php echo $phone; ?></a>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="copyright">
                <p>Copyright © 2026 <?php echo $brand_name; ?> - All Right Reserved.</p>
                <div class="term_condition_img">
                    <a href="terms-and-condition.php">Term &amp; Condition </a>
                    <span></span>
                    <a href="privacy-policy.php"> Privacy Policy</a>
                    <div class="card_img">
                        <img src="assets/images/cards.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="popup_form">
    <div class="chat_form">
        <h3>Get In Touch <span>With Us</span></h3>
        <form action="email.php" method="get">
            <div class="row">
                <div class="col-md-12">
                    <div class="chat_field">
                        <label for="name"> full name</label>
                        <input type="text" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="chat_field">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="chat_field">
                        <label for="phone">Phone</label>
                        <input type="phone" name="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="chat_field">
                        <label for="message">Message</label>
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form_btn">
                        <button type="submit" class="themebtn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <a href="javascript:;" class="form_close" onclick="closePopup()"><i class="bx bx-x"></i></a>
    </div>
</div>



<?php include 'include/js.php'; ?>

</body>

</html>