<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Md. Fahidur Rahim</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/styles.css">
    <style type="text/css">
        #freecssfooter {
            display: block;
            width: 100%;
            padding: 120px 0 20px;
            overflow: hidden;
            background-color: transparent;
            z-index: 5000;
            text-align: center;
        }

        #freecssfooter div#fcssholder div {
            display: none;
        }

        #freecssfooter div#fcssholder div:first-child {
            display: block;
        }

        #freecssfooter div#fcssholder div:first-child a {
            float: none;
            margin: 0 auto;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <script type="text/javascript">
        (function() {
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = '../../../../../../../s3.buysellads.com/ac/bsa.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        })();
    </script>
    <a href="https://www.free-css.com/free-css-templates" class="btn btn-primary btn-component" data-spy="affix"
        data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <!-- Header Start-->
    @include('frontend.layouts.header')
    <!-- Header Start-->

    <!-- Navbar Start-->
    @include('frontend.layouts.navbar')
    <!-- Navbar Start-->

    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">A Web Designer / Developer Located In Our Lovely Earth</h5>
                <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.sit amet, Qui deserunt
                    consequatur fugit repellendusillo voluptas?</p>
                <button class="btn btn-outline-danger"><i class="icon-down-circled2"></i>Download My CV</button>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Birthdate</span> : 09/13/1996</li>
                    <li><span>Email</span> : info@domain.com</li>
                    <li><span>Phone</span> : + (123) 456-7890</li>
                    <li><span>Skype</span> : John_Doe</li>
                    <li><span>Address</span> : 12345 Fake ST NoWhere AB Country.</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="https://www.free-css.com/free-css-templates"><i
                                class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://www.free-css.com/free-css-templates"><i
                                class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://www.free-css.com/free-css-templates"><i
                                class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://www.free-css.com/free-css-templates"><i
                                class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://www.free-css.com/free-css-templates"><i
                                class="ti-github" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UX Design</h6>
                        <p class="subtitle">exercitat Repellendus, corrupt.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Digital Marketing</h6>
                        <p class="subtitle">voluptate commodi illo voluptatib.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Expertise</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2017 - Present</h6>
                            <p>UX Developer</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</p>
                            <hr>
                            <h6 class="title text-danger">2016 - 2017</h6>
                            <p>Front-end Developer</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</p>
                            <hr>
                            <h6 class="title text-danger">2015 - 2016</h6>
                            <p>UX Designer</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Education</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2017 - Present</h6>
                            <p>B.E Computer Engineering</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error
                                corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.</p>
                            <hr>
                            <h6 class="title text-danger">2016 - 2017</h6>
                            <p>Diploma in Computer Engineering</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, id
                                officiis quas placeat quia voluptas dolorum rem animi nostrum quae.aliquid repudiandae
                                saepe!.</p>
                            <hr>
                            <h6 class="title text-danger">2015 - 2016</h6>
                            <p>High School Degree</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Skills</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>hTL5 &amp; CSS3</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:97%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:85%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:80%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:90%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Laborum</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:90%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Tempora</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:90%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Languages</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>English</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:80%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>French</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:45%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Spanish</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:67%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">500</h1>
                            <p class="text-light mb-1">Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">50K</h1>
                            <p class="text-light mb-1">Project Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">200K</h1>
                            <p class="text-light mb-1">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">2k</h1>
                            <p class="text-light mb-1">Coffee Drinked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Services</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon"><i class="ti-vector text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Ullam</h5>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi
                                provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In
                                praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit
                                blanditiis, dignissimos quos nesciunt nulla aperiam officia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon"><i class="ti-write text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Asperiores</h5>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi
                                provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In
                                praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit
                                blanditiis, dignissimos quos nesciunt nulla aperiam officia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon"><i class="ti-package text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Tempora</h5>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi
                                provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In
                                praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit
                                blanditiis, dignissimos quos nesciunt nulla aperiam officia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon"><i class="ti-map-alt text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Provident</h5>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi
                                provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In
                                praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit
                                blanditiis, dignissimos quos nesciunt nulla aperiam officia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon"><i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Consectetur</h5>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi
                                provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In
                                praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit
                                blanditiis, dignissimos quos nesciunt nulla aperiam officia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon"><i class="ti-support text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Veritatis</h5>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi
                                provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In
                                praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit
                                blanditiis, dignissimos quos nesciunt nulla aperiam officia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Packs</span> Pricing</h1>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Free</h3>
                        <div class="price-card-cost"><sup class="ti-money"></sup><span class="num">0</span> <span
                                class="date">MO</span></div>
                        <ul class="list">
                            <li class="list-item">5 <span class="text-muted">Project</span></li>
                            <li class="list-item">1GB <span class="text-muted">Storage</span></li>
                            <li class="list-item"><span class="text-muted">No Domain</span></li>
                            <li class="list-item">1 <span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Basic</h3>
                        <div class="price-card-cost"><sup class="ti-money"></sup><span class="num">10</span> <span
                                class="date">MO</span></div>
                        <ul class="list">
                            <li class="list-item">50 <span class="text-muted">Project</span></li>
                            <li class="list-item">10GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">1<span class="text-muted">Domain</span></li>
                            <li class="list-item">5 <span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center price-card-requried mb-4">
                        <h3 class="price-card-title">Exclusive</h3>
                        <div class="price-card-cost"><sup class="ti-money"></sup><span class="num">25</span> <span
                                class="date">MO</span></div>
                        <ul class="list">
                            <li class="list-item">150 <span class="text-muted">Project</span></li>
                            <li class="list-item">15GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">5<span class="text-muted"> Domain</span></li>
                            <li class="list-item">15<span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Pro</h3>
                        <div class="price-card-cost"><sup class="ti-money"></sup><span class="num">99</span> <span
                                class="date">MO</span></div>
                        <ul class="list">
                            <li class="list-item">500 <span class="text-muted">Project</span></li>
                            <li class="list-item">1000GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">10<span class="text-muted"> Domain</span></li>
                            <li class="list-item">Unlimite<span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <button class="btn bg-primary w-lg">Hire me</button>
        </div>
    </section>
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters"><a href="javascript:void(0)" data-filter=".new" class="active">New</a> <a
                        href="javascript:void(0)" data-filter=".advertising">Advertising</a> <a
                        href="javascript:void(0)" data-filter=".branding">Branding</a> <a href="javascript:void(0)"
                        data-filter=".web">Web</a></div>
                <div class="portfolio-container">
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item"><img src="assets/imgs/web-1.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item"><img src="assets/imgs/web-2.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item"><img src="assets/imgs/advertising-2.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup"
                                    href="assets/imgs/advertising-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item"><img src="assets/imgs/web-4.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising">
                        <div class="portfolio-item"><img src="assets/imgs/advertising-1.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup"
                                    href="assets/imgs/advertising-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item"><img src="assets/imgs/web-3.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item"><img src="assets/imgs/advertising-3.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup"
                                    href="assets/imgs/advertising-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item"><img src="assets/imgs/advertising-4.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup"
                                    href="assets/imgs/advertising-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item"><img src="assets/imgs/branding-1.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item"><img src="assets/imgs/branding-2.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item"><img src="assets/imgs/branding-3.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item"><img src="assets/imgs/branding-4.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item"><img src="assets/imgs/branding-5.jpg" class="img-fluid"
                                alt="website template image">
                            <div class="content-holder"><a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">
                <div class="blog-card">
                    <div class="img-holder"><img src="assets/imgs/blog1.jpg" alt="website template image"></div>
                    <div class="content-holder">
                        <h6 class="title">Consectetur adipisicing elit</h6>
                        <p class="post-details"><a href="https://www.free-css.com/free-css-templates">By: Admin</a> <a
                                href="https://www.free-css.com/free-css-templates"><i
                                    class="ti-heart text-danger"></i> 234</a> <a
                                href="https://www.free-css.com/free-css-templates"><i class="ti-comment"></i> 123</a>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit
                            delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium
                            neque numquam mollitia modi quasi distinctio.</p>
                        <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b>
                        </p>
                        <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis
                            cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>
                        <a href="https://www.free-css.com/free-css-templates" class="read-more">Read more <i
                                class="ti-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-holder"><img src="assets/imgs/blog2.jpg" alt="website template image"></div>
                    <div class="content-holder">
                        <h6 class="title">Explicabo illo</h6>
                        <p class="post-details"><a href="https://www.free-css.com/free-css-templates">By: Admin</a> <a
                                href="https://www.free-css.com/free-css-templates"><i
                                    class="ti-heart text-danger"></i> 456</a> <a
                                href="https://www.free-css.com/free-css-templates"><i class="ti-comment"></i> 264</a>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim,
                            vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro
                            quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto
                            omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae?
                            Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non
                            dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus
                            eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>
                        <a href="https://www.free-css.com/free-css-templates" class="read-more">Read more <i
                                class="ti-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-holder"><img src="assets/imgs/blog3.jpg" alt="website template image"></div>
                    <div class="content-holder">
                        <h4 class="title">Porro Quisqua</h4>
                        <p class="post-details"><a href="https://www.free-css.com/free-css-templates">By: Admin</a> <a
                                href="https://www.free-css.com/free-css-templates"><i
                                    class="ti-heart text-danger"></i> 431</a> <a
                                href="https://www.free-css.com/free-css-templates"><i class="ti-comment"></i> 312</a>
                        </p>
                        <p>consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto
                            consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem
                            aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum
                            placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis
                            similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis
                            quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio
                            sit repudiandae possimus sunt. Ipsum, rem.</p>
                        <a href="https://www.free-css.com/free-css-templates" class="read-more">Read more <i
                                class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message *" rows="7" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1"><i class="ti-mobile icon-md"></i></div>
                            <div class="col-10">
                                <h6 class="d-inline">Phone :<br>
                                    <span class="text-muted">+ (123) 456-789</span>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1"><i class="ti-map-alt icon-md"></i></div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br>
                                    <span class="text-muted">12345 Fake ST NoWhere AB Country.</span>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1"><i class="ti-envelope icon-md"></i></div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br>
                                    <span class="text-muted">info@domain.com</span>
                                </h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark"
                                    href="https://www.free-css.com/free-css-templates"><i class="ti-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark"
                                    href="https://www.free-css.com/free-css-templates"><i class="ti-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark"
                                    href="https://www.free-css.com/free-css-templates"><i class="ti-google"
                                        aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark"
                                    href="https://www.free-css.com/free-css-templates"><i class="ti-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark"
                                    href="https://www.free-css.com/free-css-templates"><i class="ti-github"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">&copy; 2045 Created With <i class="ti-heart text-danger"></i> By <a
                    target="_blank" rel="nofollow noopener" href="http://devcrud.com/"><span
                        class="text-danger">DevCRUD</span></a></p>
        </div>
    </footer>
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.affix.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
    <script async defer
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBc7sEZqdqwxb0cKJ3f85nGOZt2fNYqDVg&amp;callback=initMap">
    </script>
    <script src="{{ asset('frontend') }}/assets/js/johndoe.js"></script>
    <div id="freecssfooter">
        <div id="fcssholder">
            <div id="bsap_2365" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67"></div>
        </div>
    </div>
    <script type="text/javascript">
        var gaProperty = 'UA-120201777-1';
        var disableStr = 'ga-disable-' + gaProperty;
        if (document.cookie.indexOf(disableStr + '=true') > -1) {
            window[disableStr] = true;
        }

        function gaOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';
            window[disableStr] = true;
            alert('Google Tracking has been deactivated');
        }
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-120201777-1', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('send', 'pageview');
    </script>
</body>

</html>
