<?php
$title = "Home";
include 'include/header.php';
?>

<section class="home_banner">
    <div class="banner_img">
        <img src="assets/images/banner1.webp" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="banner_cont">
                    <h5>Crafting words</h5>
                    <h1>that <span>live beyond</span> generations.</h1>
                    <h6>Highly-Rated Book Writers at <span>70% Off</span></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="banner_btn">
                        <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
                        <a href="javascript:;" class="themebtn white_btn">Chat with us now</a>
                    </div>
                    <div class="customer">
                        <img src="assets/images/customer.webp" alt="">
                    </div>
                    <div class="banner_books">
                        <img src="assets/images/banner_book.webp" alt="">
                    </div>
                    <div class="banner_sale">
                        <img src="assets/images/banner_sale.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brand_logo">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="brand_images">
                    <img src="assets/images/brand.webp" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="brand_images">
                    <img src="assets/images/brand1.webp" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="brand_images">
                    <img src="assets/images/brand2.webp" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="brand_images">
                    <img src="assets/images/brand3.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_title mb-5">
                    <h6>Our Extensive Publishing Portfolio</h6>
                    <h3>A World of Readers Awaits Your Words</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
            </div>
        </div>
        <div class="port_tab">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="fiction" role="tabpanel" aria-labelledby="fiction-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="biography" role="tabpanel" aria-labelledby="biography-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="autobiography" role="tabpanel" aria-labelledby="autobiography-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="tab-pane fade" id="romance" role="tabpanel" aria-labelledby="romance-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="informative" role="tabpanel" aria-labelledby="informative-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="horror" role="tabpanel" aria-labelledby="horror-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="anthology" role="tabpanel" aria-labelledby="anthology-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="memoirs" role="tabpanel" aria-labelledby="memoirs-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="action-adventure" role="tabpanel" aria-labelledby="action-adventure-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="western" role="tabpanel" aria-labelledby="western-tab">
                    <div class="port_slider">
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader1.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader2.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader3.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader4.webp" alt="">
                            </a>
                        </div>
                        <div class="port_main">
                            <a href="javascript:;" class="reader_img">
                                <img src="assets/images/reader5.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="fiction-tab" data-bs-toggle="tab" data-bs-target="#fiction" type="button" role="tab" aria-controls="fiction" aria-selected="true"><img src="assets/images/check.webp" alt=""> Fiction</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="biography-tab" data-bs-toggle="tab" data-bs-target="#biography" type="button" role="tab" aria-controls="biography" aria-selected="false"><img src="assets/images/check.webp" alt=""> Biography</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="autobiography-tab" data-bs-toggle="tab" data-bs-target="#autobiography" type="button" role="tab" aria-controls="autobiography" aria-selected="false"><img src="assets/images/check.webp" alt=""> Autobiography</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="romance-tab" data-bs-toggle="tab" data-bs-target="#romance" type="button" role="tab" aria-controls="romance" aria-selected="false"><img src="assets/images/check.webp" alt=""> Romance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="informative-tab" data-bs-toggle="tab" data-bs-target="#informative" type="button" role="tab" aria-controls="informative" aria-selected="false"><img src="assets/images/check.webp" alt=""> Informative</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="horror-tab" data-bs-toggle="tab" data-bs-target="#horror" type="button" role="tab" aria-controls="horror" aria-selected="false"><img src="assets/images/check.webp" alt=""> Horror</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="anthology-tab" data-bs-toggle="tab" data-bs-target="#anthology" type="button" role="tab" aria-controls="anthology" aria-selected="false"><img src="assets/images/check.webp" alt=""> Anthology</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="memoirs-tab" data-bs-toggle="tab" data-bs-target="#memoirs" type="button" role="tab" aria-controls="memoirs" aria-selected="false"><img src="assets/images/check.webp" alt=""> Memoirs</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="action-adventure-tab" data-bs-toggle="tab" data-bs-target="#action-adventure" type="button" role="tab" aria-controls="action-adventure" aria-selected="false"><img src="assets/images/check.webp" alt=""> Action & Adventure</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="western-tab" data-bs-toggle="tab" data-bs-target="#western" type="button" role="tab" aria-controls="western" aria-selected="false"><img src="assets/images/check.webp" alt=""> Western</button>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="create">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="create_cnt">
                    <h6>discount 70%</h6>
                    <h3>On Your First Book Publishing Order!</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="create_cnt_middle">
                    <h3>At <span>70% off</span> To Create Your Timeless Work</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="create_cnt_last">
                    <ul>
                        <li>Share your idea, & let us do the rest</li>
                        <li>All royalties belong to YOU</li>
                        <li>Satisfaction guaranteed</li>
                        <li>Trusted by authors globally</li>
                    </ul>
                    <div class="create_btn">
                        <a href="javascript:;" class="themebtn blue_btn" onclick="openPopup()">Get Started</a>
                        <a href="javascript:;" class="themebtn white_btn">Chat with us now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="comprehensive">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="section_title text-center mb-5">
                    <h6>Our Comprehensive</h6>
                    <h3>Our All-Inclusive Writing Solution</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
        <div class="comprehensive_slider">
            <div class="col-md-3">
                <div class="comprehensive_card">
                    <div class="cards_bg">
                        <img src="assets/images/comprehensive.webp" alt="">
                    </div>
                    <div class="comprehensive_cnt">
                        <div class="comprehensive_innercnt">
                            <h6>book writing</h6>
                            <div class="inner_vector">
                                <img src="assets/images/vector5.webp" alt="">
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="comprehensive_card">
                    <div class="cards_bg">
                        <img src="assets/images/comprehensive.webp" alt="">
                    </div>
                    <div class="comprehensive_cnt">
                        <div class="comprehensive_innercnt">
                            <h6>book editing</h6>
                            <div class="inner_vector">
                                <img src="assets/images/vector4.webp" alt="">
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="comprehensive_card">
                    <div class="cards_bg">
                        <img src="assets/images/comprehensive.webp" alt="">
                    </div>
                    <div class="comprehensive_cnt">
                        <div class="comprehensive_innercnt">
                            <h6>book marketing</h6>
                            <div class="inner_vector">
                                <img src="assets/images/vector6.webp" alt="">
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="comprehensive_card">
                    <div class="cards_bg">
                        <img src="assets/images/comprehensive.webp" alt="">
                    </div>
                    <div class="comprehensive_cnt">
                        <div class="comprehensive_innercnt">
                            <h6>book formating</h6>
                            <div class="inner_vector">
                                <img src="assets/images/vector7.webp" alt="">
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="comprehensive_card">
                    <div class="cards_bg">
                        <img src="assets/images/comprehensive.webp" alt="">
                    </div>
                    <div class="comprehensive_cnt">
                        <div class="comprehensive_innercnt">
                            <h6>book formating</h6>
                            <div class="inner_vector">
                                <img src="assets/images/vector7.webp" alt="">
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="comprehensive_btn">
            <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
            <a href="javascript:;" class="themebtn blue_btn">Chat with us now</a>
        </div>
    </div>
</section>
<section class="process">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section_title text-center mb-5">
                    <h6>Our Process</h6>
                    <h3>6-Stage Path from Manuscript to Marketplace</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="process_img">
                    <img src="assets/images/process.webp" alt="">
                </div>
                <div class="process_btn">
                    <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
                    <a href="javascript:;" class="themebtn blue_btn">Chat with us now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="process_cnt">
                            <div class="vector_img">
                                <img src="assets/images/vector.webp" alt="">
                            </div>
                            <h6>Sign-up</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="process_cnt">
                            <div class="vector_img">
                                <img src="assets/images/vector1.webp" alt="">
                            </div>
                            <h6>Share Project Details</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="process_cnt">
                            <div class="vector_img">
                                <img src="assets/images/vector2.webp" alt="">
                            </div>
                            <h6>Research & Draft</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="process_cnt">
                            <div class="vector_img">
                                <img src="assets/images/vector3.webp" alt="">
                            </div>
                            <h6>Editing & Proofreading</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="process_cnt">
                            <div class="vector_img">
                                <img src="assets/images/vector1.webp" alt="">
                            </div>
                            <h6>Cover Designing</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="process_cnt">
                            <div class="vector_img">
                                <img src="assets/images/vector.webp" alt="">
                            </div>
                            <h6>Publishing</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inspire">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="section_title yellow text-center mb-5">
                    <h6>Inspire the World With Your Narrative</h6>
                    <h3>Quality, Confidentiality, & Unwavering Commitment</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
        <div class="inspire_cnt">
            <ul>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Video Trailer</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Social Media Marketing</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Audio Book</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Book Translation</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Book Cover Designing</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Marketing Consultation</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Author Website</a></li>
                <li><a href="javascript:;"><i class='bx bx-arrow-back bx-rotate-180'></i>Barnes & Noble Nook Edition</a></li>
            </ul>
        </div>
        <div class="inspire_btn">
            <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
            <a href="javascript:;" class="themebtn white_btn">Chat with us now</a>
        </div>
    </div>
</section>
<section class="idea">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="idea_cnt">
                    <h6>Write & Publish</h6>
                    <h3>Your Idea, We Narrate & Strategize Marketing</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <div class="idea_btn">
                        <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
                        <a href="javascript:;" class="themebtn blue_btn">Chat with us now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="idea_img">
                    <img src="assets/images/world.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="success">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5">
                <div class="success_cnt">
                    <h3>Success Stories Written by<span> Our Team</span></h3>
                    <h4>Promote Your Book and Turn It into a Global Success!</h4>
                    <div class="discount_img">
                        <img src="assets/images/sale.webp" alt="">
                    </div>
                    <div class="success_btn">
                        <a href="javascript:;" class="themebtn" onclick="openPopup()">Get Started</a>
                        <a href="javascript:;" class="themebtn white_btn">Chat with us now</a>
                    </div>
                    <img src="assets/images/book.webp" alt="" class="succes_book1">
                    <img src="assets/images/book1.webp" alt="" class="succes_book2">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="success_title">Hear from Our Happy Authors About Their Success</h3>
                <div class="success_slider">
                    <div class="success_slider_cnt">
                        <ul>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                        <h6>Poul Henderson</h6>
                        <div class="success_slider_img">
                            <img src="assets/images/lines.webp" alt="">
                        </div>
                    </div>
                    <div class="success_slider_cnt">
                        <ul>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                        <h6>Poul Henderson</h6>
                        <div class="success_slider_img">
                            <img src="assets/images/lines.webp" alt="">
                        </div>
                    </div>
                    <div class="success_slider_cnt">
                        <ul>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                        <h6>Poul Henderson</h6>
                        <div class="success_slider_img">
                            <img src="assets/images/lines.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'include/footer.php';
?>