<?php include 'header.php'; ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-189WWHXLSS"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-189WWHXLSS');
</script>
<!-- MS Clarity -->
<script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "mxzdn16ndk");
</script>
<!--END MS Clarity -->
<title>Technofra</title>

<style>
    @media (max-width:480px) {
        .risk-contact-form-bg {
            padding: 9px;
            padding-bottom: 10px;
        }
    }

    .risk-btn-bg {
        background-color: #38d1fe;
    }
</style>

<?php include 'navbar.php'; ?>
<section class="cyber-store-product">
    <div class="store-bg-header" style="background: url('assets/image/quote-banner.webp')no-repeat center center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="section-heading text-center mb-5">
                        <h1 class="display-5 fw-bold text-white">Request A Quotation</h1>
                        <p class="lead">Seamlessly actualize client-based</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-process ptb-80">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-md-12  order-lg-0">
                <div class="risk-contact-form-bg risk-bg-color-two rounded-16 position-relative z-1 overflow-hidden">
                    <div class="p-3 bgc-white rounded-12">
                        <h5 class="risk-color fs-20 ff-risk-pri fw-800 flh-24 mb-2">Request A Quote</h5>
                        <p class="mb-30">Fill the following Details, We'll get back to you shortly.</p>
                        <form action="send1" class="risk-contact-form" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2"> Name <span class="risk-highlight-color">*</span></h6>
                                        <input type="text" placeholder="First Name" class="form-control risk-input ca-two-border ca-two-border-color" name="name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Email <span class="risk-highlight-color">*</span></h6>
                                        <input type="email" placeholder="Email Address" class="form-control risk-input ca-two-border ca-two-border-color" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Company Name <span class="risk-highlight-color">*</span></h6>
                                        <input type="text" placeholder="Company Name" class="form-control risk-input ca-two-border ca-two-border-color" name="company">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Contact <span class="risk-highlight-color">*</span></h6>
                                        <input type="tel" placeholder="Contact Number" class="form-control risk-input ca-two-border ca-two-border-color" name="contact">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Country Reason</h6>
                                        <select class="form-control form-select" id="budget" required data-msg="Please select your budget." name="designation" onchange="handleSelectChange('budget')">
                                            <option value="" selected hidden>Select</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Application Development">Application Development</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Payment Gateway">Payment Gateway</option>
                                            <option value="Branding">Branding</option>
                                            <option value="Domain & Hosting">Domain & Hosting</option>
                                            <option value="IT Infrastructure">IT Infrastructure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Delivery Time</h6>
                                        <select class="form-control form-select" name="delivery_time" id="delivery_time" required data-msg="Please select your delivery time." onchange="handleSelectChange('delivery_time')">
                                            <option value="" selected hidden>Select</option>
                                            <option value="1 - 2 weeks">1 - 2 Weeks</option>
                                            <option value="4 - 5 weeks">4 - 5 Weeks</option>
                                            <option value="5 - 10 weeks">5 - 10 Weeks</option>
                                            <option value="10+ weeks">10+ Weeks</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="risk-form-item mb-20">
                                        <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Nature of Project <span class="risk-highlight-color">*</span></h6>
                                        <div>
                                            <label>
                                                <input type="radio" name="nature_of_project" value="New" required>
                                                New
                                            </label>
                                            <label class="ms-3">
                                                <input type="radio" name="nature_of_project" value="Redesign" required>
                                                Redesign
                                            </label>
                                            <label class="ms-3">
                                                <input type="radio" name="nature_of_project" value="Development" required>
                                                Development
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h6 class="risk-color fs-14 ff-risk-pri fw-600 mb-2">Other Information</h6>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" placeholder="Additional Requirements" style="height: 80px" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                            <div class="col-12">
                                <div class="g-recaptcha" data-sitekey="6LduCkYrAAAAAEmraiG_b3nF22NRa1zTybKB2h25"></div>
                            </div>
                            <input type="submit" class="btn risk-btn-bg risk-outline-btn-hover clr-white ff-risk-pri fs-14 fw-600 mt-20" value="Submit">

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 order-0 order-lg-1">
                <ul class="work-process-list pt-3 list-unstyled">
                    <li class="d-flex align-items-start mb-4">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div class="icon-content">
                            <span class=" h4">Address</span>
                            <p>96 Parore Street, Dargaville 0310, New Zealand
                            </p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <div class="icon-content">
                            <span class=" h4">Mobile No.</span>
                            <!-- <p><span class=" h6">Office : </span> <a href="tel:+9102248264101" class="gray"> +91 022-4826-4101</a></p> -->

                            <!-- <p><span class=" h6">Sales : </span> <a href="tel:+918080803374" class="gray"> +91 8080 80 3374</a> / <a href="tel:+918080803375" class="gray">+91 8080 80 3375</a></p> -->
                            <p><span class=" h6">Support : </span> <div> <a href="tel:+64225055648" class="gray"> +64 22 505 5648</a> / <a href="tel:+64212388352" class="gray">+64 21 238 8352</a> <br> <a href="tel:+918080803374" class="gray">+91 8080 80 3374</a> / <a href="tel:+918080803375" class="gray">+91 8080 80 3375</a> </div> </p>

                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="fas fa-envelope fa-2x"></i>

                        </div>
                        <div class="icon-content">
                            <span class=" h4">Email Us</span>
                            <!-- <p><span class=" h6">Sales : </span> <a href="mailto:info@technofra.co.nz" class="gray"> info@technofra.co.nz</a></p> -->
                            <p><span class=" h6">Support : </span> <a href="mailto: info@technofra.co.nz" class="gray">info@technofra.co.nz
</a></p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4 mb-lg-0">
                        <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                            <i class="fas fa-link fa-2x"></i>


                        </div>
                        <div class="icon-content">
                            <span class=" h4">Join Our Social Community</span>
                            <div class="footer-single-col text-start " style="padding-top: 20px;">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/Technofra/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/technofra_company/"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/technofra"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://hk.linkedin.com/company/technofra"><i class="fa-brands fa-linkedin-in"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="contact-map-page">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.7384928080273!2d173.8626888!3d-35.9332014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0c1209fb06f9db%3A0x475aaa974ec2b798!2s96%20Parore%20Street%2C%20Dargaville%200310%2C%20New%20Zealand!5e1!3m2!1sen!2sin!4v1747220174926!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<script>
    function handleSelectChange(selectId) {
        const selectElement = document.getElementById(selectId);
        const hiddenOption = selectElement.querySelector('option[hidden]');

        // Ensure the hidden option remains hidden after a valid selection
        if (selectElement.value !== "") {
            hiddenOption.disabled = true; // Disable it completely
        }
    }
</script>
<?php include 'footer.php'; ?>