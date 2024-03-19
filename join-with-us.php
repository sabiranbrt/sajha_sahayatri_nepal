<?php include 'common/header.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="join">
    <!-- common-banner -->
    <div class="common_banner_header">
        <div class="image">
            <div class="bg"></div>
            <img src="assets/image/commonBanner.png" alt="">
            <div class="banner_details">
                <div class="title">
                    <h1 class="primary_head_title">Join With Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a>Join With Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end-common-banner -->

    <div class="container">
        <div class="join-with-us">
            <Form>
                <div class="row">
                    <div class="col-md-8 mt-2">
                        <label for="">Full Name</label>
                        <input type="text" />
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="">Gender</label>
                        <select name="gender" id="gender">
                            <option value="volvo">Male</option>
                            <option value="saab">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <label for="">Age</label>
                        <input type="text" maxlength="2" />
                    </div>
                    <div class="col-md-8 mt-2">
                        <label for="">Email</label>
                        <input type="email" maxlength="2" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="">Address</label>
                        <input type="email" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="">Message</label>
                        <textarea rows="4"></textarea>
                    </div>
                </div>
                <div class="rows">
                    <Button class="primary_btn">Submit</Button>
                </div>
            </Form>
        </div>
    </div>
</section>

<?php include 'common/footer.php';
