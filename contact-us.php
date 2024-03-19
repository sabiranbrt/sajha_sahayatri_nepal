<?php include 'common/header.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="contact">
    <!-- common-banner -->
    <div class="common_banner_header">
        <div class="image">
            <div class="bg"></div>
            <img src="assets/image/commonBanner.png" alt="">
            <div class="banner_details">
                <div class="title">
                    <h1 class="primary_head_title">Contact Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a>Contact Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end-common-banner -->

    <div class="container">
        <div class="contact_us">
            <div class="contact_wrapper">
                <div class="contact_info">
                    <h3>Conact Info</h3>
                    <div class="contact_details">
                        <div class="contact_details_wrapper">
                            <div class="title">
                                <h3>Contact Number</h3>
                            </div>
                            <div class="details">
                                <i class="fa-solid fa-phone"></i>
                                <p>01-4287867, 9867886300</p>
                            </div>
                        </div>
                        <div class="contact_details_wrapper">
                            <div class="title">
                                <h3>Email</h3>
                            </div>
                            <div class="details">
                                <i class="fa-solid fa-envelope"></i>
                                <p>sajhashayatrinepal@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact_details_wrapper">
                            <div class="title">
                                <h3>Location</h3>
                            </div>
                            <div class="details">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Buddhanagar, Kathmandu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form">
                    <h3>Feel free to contact us</h3>
                    <div class="form">
                        <Form>
                            <div class="form_item name">
                                <label class="primary_pargraph" for="full_name">Full Name</label>
                                <input type="text" />
                            </div>
                            <div class="form_item phone">
                                <label class="primary_pargraph" for="full_name">Phone</label>
                                <input type="text" maxlength="10" />
                            </div>
                            <div class="form_item email">
                                <label class="primary_pargraph" for="full_name">Email</label>
                                <input type="email" />
                            </div>
                            <div class="form_item text_message">
                                <label class="primary_pargraph" for="full_name">Message</label>
                                <textarea type="text" rows="4"></textarea>
                            </div>
                            <div class="btns">
                                <Button class="primary_btn">Submit</Button>

                            </div>
                        </Form>
                    </div>
                </div>
            </div>
            <div class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.068967947244!2d85.32456109099641!3d27.68532905533269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bed80297ef%3A0xa88f57446083f344!2sBuddhanagar%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1710758755188!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php include 'common/footer.php';
