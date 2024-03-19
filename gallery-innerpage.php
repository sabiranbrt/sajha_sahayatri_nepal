<?php include 'common/header.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="gallery_innerpage">
    <!-- common-banner -->
    <div class="common_banner_header">
        <div class="image">
            <div class="bg"></div>
            <img src="assets/image/commonBanner.png" alt="">
            <div class="banner_details">
                <div class="title">
                    <h1 class="primary_head_title">Gallery Detail</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="gallery-archive.php">Gallery</a></li>
                        <li class="breadcrumb-item active"><a>Gallery Details</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end-common-banner -->

    <div class="gallery_innerpage_wrapper">
        <section class="gallery">
            <div class="container">
                <div class="gallery_title">
                    <div class="gallery_main_title">
                        <h3>Always try to do better for
                            humanity</h3>
                        <span class="primary_paragrpah"><i class="fa-solid fa-calendar me-2"></i>24th sep, 2024</span>
                    </div>
                </div>

                <div class="gallery_wrapper">
                    <div class="gallery_image gallery_video">
                        <div class="image play">
                            <iframe src="https://www.youtube.com/embed/Bad1uEQqekk?si=si8SDuZ_E1pzoYwr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <!-- <div class="bg"></div>
                            <div class="video_link ">
                                <div class="link_btn pulse">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="gallery_image" onclick="openModal();currentSlide(1)">
                        <div class="image">
                            <img src="assets/image/bannerImage.png" alt="">
                        </div>
                    </div>
                    <div class="gallery_image" onclick="openModal();currentSlide(2)">
                        <div class="image">
                            <img src="assets/image/bannerImage2.jpg" alt="">
                        </div>
                    </div>
                    <div class="gallery_image" onclick="openModal();currentSlide(3)">
                        <div class="image">
                            <img src="assets/image/events.png" alt="">
                        </div>
                    </div>
                    <div class="gallery_image" onclick="openModal();currentSlide(4)">
                        <div class="image">
                            <img src="assets/image/intro.png" alt="">
                        </div>
                    </div>

                    <!-- The Modal/Lightbox -->
                    <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            <div class="mySlides">
                                <img src="assets/image/bannerImage.png" style="width:100%">
                            </div>

                            <div class="mySlides">

                                <img src="assets/image/bannerImage2.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">

                                <img src="assets/image/events.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="assets/image/intro.png" style="width:100%">
                            </div>

                            <!-- Next/previous controls -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modals_video">
                <div class="open_video">
                    <span class="video_close">X</span>
                    <iframe width="885" height="498" src="https://www.youtube.com/embed/lTieq1DrEec?list=RDlTieq1DrEec" title="Post Malone - I Like You (Lyrics) ft. Doja Cat" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>

</section>

<?php include 'common/footer.php';
