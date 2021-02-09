<?php get_header(); ?>
        <section id="hero">
            <div class="col-10 mx-auto row">
                <div id="title" class="col-9">
                    <h1 id="main-title" class="fw-bold text-brand-secondarycolor">Build your <span class="text-brand-color">ideas</span><br>to real furniture</h1>
                    <p id="subtitle" class="fs-5 fw-normal text-brand-secondarycolor text-brand-font">More than furniture. This is the carving masterpiece.</p>
                    <button class="btn bg-brand-color fs-6 px-5 py-3 text-white border-0 text-brand-font">Order Now</button>
                </div>
                <div id="image" class="col-3">
                    <img id="a" src="<?php echo get_template_directory_uri(); ?>/assets/image/section main image 1.png" alt="" class="mb-2">
                    <img id="b" src="<?php echo get_template_directory_uri(); ?>/assets/image/section main image 2.png" alt="">
                </div>
            </div>
        </section>
        <section id="highlight-products" class="bg-light my-5 py-5">
            <div class="container">
                <div class="title">
                    <h1 id="title" class="text-center text-brand-secondarycolor">The product<br>that we provide</h1>
                </div>
                <div class="card-group justify-content-center py-4">
                    <div class="card col-3 mx-2 py-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/highlight-product meja.png" class="mx-auto my-3 py-3" alt="">
                    </div>
                    <div class="card col-3 mx-2 py-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/highlight-product kasur.png" class="mx-auto my-3" alt="">
                    </div>
                    <div class="card col-3 mx-2 py-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/highlight-product lemari.png" class="mx-auto my-3" alt="">
                    </div>
                    <div class="card col-3 mx-2 py-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/highlight-product meja.png" class="mx-auto my-3" alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn bg-brand-color fs-6 px-5 py-3 text-white border-0 text-brand-font">See More</button>
                </div>
            </div>
        </section>
        <section id="reason" class="py-5">
            <div class="container row mx-auto">
                <div class="col-5">
                    <div id="circle" class="position-relative bg-brand-color">
                        <img id="circle-image" src="<?php echo get_template_directory_uri(); ?>/assets/image/reason person.png" class="position-absolute">
                    </div>
                </div>
                <div class="col-7">
                    <div id="text">
                        <h1 class="text-brand-secondarycolor">Reasons why you<br>need to choose us</h1>
                        <p class="fs-6 text-brand-font">More than 2000+ people builds their furniture needs in Nggawe</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/image/reason badge like.png"> Best wood material and long durability</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/image/reason badge like.png"> Collaboration with 26 Craft Experts</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="quote" class="bg-light my-5 py-5">
            <div class="container row mx-auto justify-content-between">
                <div id="quotebox" class="card col-5 border-0 bg-white position-relative text-center p-5 my-5 text-brand-font">
                    <span id="quote-char-left" class="position-absolute quote-char">"</span>
                    <span class="fs-5">I am satisfied because the carving was made very detailed.</span>
                    <div class="quote-user my-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/quote person.png" id="user-photo" class="fs-6 rounded-circle me-2 "><span class="text-secondary">Mohammad Yasin, <span class="text-dark">Bogor</span></span>
                    </div>
                    <span id="quote-char-right" class="position-absolute quote-char">"</span>
                </div>
                <div id="text" class="col-5 mx-5 ps-5 text-brand-secondarycolor">
                    <h1>What our<br>customers say</h1>
                    <button class="btn bg-brand-color fs-6 px-5 py-3 text-white border-0 text-brand-font">Customers Review</button>
                </div>
            </div>
        </section>
        <section id="blog">
            <div class="container py-5 my-5 row mx-auto">
                <div class="col-9">
                    <h1 class="text-brand-secondarycolor fs-1">Discover our blog</h1>
                    <p class="text-brand-font">Most viewed article this week</p>
                </div>
                <div class="col-3">
                    <button class="btn btn-outline-warning text-brand-font text-brand-color border-2 px-5 py-3 mx-4">Visit Blog</button>
                </div>
                <div class="col-12">
                    <div class="card border-0 my-4">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog image1.png" class="w-100">
                            </div>
                            <div class="col-6 p-5">
                                <p class="text-brand-font fs-5">How to pick color for your interior design</p>
                                <p class="text-brand-font" id="excerpt">When we started to build a house, we need to know how it will be. Especially the color design, there are five good theories that will be so useful. At first, we have Kotili Theorema ...</p>
                                <button class="btn btn-outline-warning text-warning border-0 text-brand-font">Read more ></button>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 my-4">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog image2.png" class="w-100">
                            </div>
                            <div class="col-6 p-5">
                                <p class="text-brand-font fs-5">A way to have a clasic interior design</p>
                                <p class="text-brand-font" id="excerpt">When we started to build a house, we need to know how it will be. Especially the color design, there are five good theories that will be so useful. At first, we have Kotili Theorema ...</p>
                                <button class="btn btn-outline-warning text-warning border-0 text-brand-font">Read more ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="offer">
            <div class="bg-brand-color py-5">
                <div class="container">
                    <h1 class="text-center">Are you ready to<br><span class="text-white">realize your ideas?</span></h1>
                    <div class="d-flex justify-content-center my-4">
                        <button class="btn bg-white rounded-0 text-brand-color fs-6 px-5 py-3 mx-auto">Order Now</button>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>