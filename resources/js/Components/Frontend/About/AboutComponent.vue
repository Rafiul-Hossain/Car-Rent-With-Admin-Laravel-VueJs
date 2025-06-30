<script setup>
import { Link } from '@inertiajs/vue3';
import { route } from '../../../../../vendor/tightenco/ziggy/src/js';


</script>

<template>
    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3"
        style="background-image: url('https://images.unsplash.com/photo-1571607388263-1044f9ea01dd?q=80&w=1995&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">about comapny</h2>
                    <ol class="page-list">
                        <li>
                            <Link :href="route('show.home')"><i class="fa fa-home"></i> Home</Link>
                        </li>
                        <li>About us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- company-char-section start -->
    <section class="company-char-section pt-120 pb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-6">
                    <div class="company-char-content">
                        <h2 class="title title--border text-capitalize">our company charateristics</h2>
                        <p>Lorem ipsum dolor sit amet, phasellus ut curabitur vestibulum sit vitae aenean, morbi quam
                            blandit ad. Quis ac, eu enim pulvinar ante nam, sed purus, ut metus ligula imperdiet orci
                            nibh.
                            Id dolor id, congue mauris eu arcu nibh, suspendisse vitae, et sociosqu. Eros vivamus </p>

                        <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, vehicula
                            adipiscing quam. Nibh vestibulutempormagna maecenas vehicula donec ligula.Quisque cras
                            molestie dictum, aliquam litora. Tempus amet pellentesque vitae.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company-char-thumb">
                        <img src="https://img.freepik.com/free-vector/car-company-logo-template_1071-3.jpg?t=st=1740417858~exp=1740421458~hmac=2e24d91586737423b56a55d65b6e45e4ec51d791b25bf74c69b2b80ca90f9640&w=740"
                            alt="image">
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-4 col-sm-6">
                    <div class="text-item">
                        <h3 class="title">We are Seen Form 1965</h3>
                        <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet
                            pelltesque
                            vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
                    </div>
                </div><!-- text-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="text-item">
                        <h3 class="title">Provided Best Services</h3>
                        <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet
                            pelltesque
                            vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
                    </div>
                </div><!-- text-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="text-item">
                        <h3 class="title">Our Mission</h3>
                        <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet
                            pelltesque
                            vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
                    </div>
                </div><!-- text-item end -->
            </div>
        </div>
    </section>
    <!-- company-char-section end -->

    <!-- consulting-section start -->
    <section class="consulting-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row mb-none-30">
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consulting-from-area">
                        <h2 class="title">Request a Free Consultation</h2>
                        <form class="consulting-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="cons_f_name" id="cons_f_name" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="cons_l_name" id="cons_l_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="email" name="cons_email" id="cons_email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" name="cons_phone" id="cons_phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="cmn-btn">submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- consulting-section end -->

    <!-- call-action-section start -->
    <section class="call-action-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call-action-img text-lg-left text-center">
                        <img src="https://img.freepik.com/premium-vector/urgent-help-24-7-emergency-services-hotline_809852-854.jpg?w=740" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="call-cation-content">
                        <h3 class="top-title">Call Us for Suport</h3>
                        <span class="call-number">+444-555-666</span>
                        <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, ve adiping
                            quam.
                            Nibh vestibulum tempor, magna maecenas, vehicula donec ut nonummy crascipit. Amet aliquam ut
                            elit semper urna metus, pede.</p>
                        <a href="#0" class="cmn-btn">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-action-section end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="car-search-area car-search-area--style2">
                        <h3 class="title">Rent your car</h3>
                        <form class="car-search-form">
                            <div class="row">
                                <div class="col-xl-12 form-group">
                                    <select>
                                        <option value="1" selected="">Choose Your Car Type</option>
                                        <option value="2">Another option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <i class="fa fa-map-marker"></i>
                                    <input class="form-control has-icon" type="text" placeholder="Pickup Location">
                                </div>
                                <div class="form-group col-xl-6">
                                    <i class="fa fa-map-marker"></i>
                                    <input class="form-control has-icon" type="text" placeholder="Drop Off Location">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="form-control has-icon datepicker-here" data-language="en"
                                        placeholder="Pickup Date">
                                </div>
                                <div class="form-group col-xl-6">
                                    <i class="fa fa-clock-o"></i>
                                    <input type="text" name="timepicker" class="form-control has-icon timepicker"
                                        placeholder="Pickup Time">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="form-control has-icon datepicker-here" data-language="en"
                                        placeholder="Drop Off Date">
                                </div>
                                <div class="form-group col-xl-6">
                                    <i class="fa fa-clock-o"></i>
                                    <input type="text" name="timepicker" class="form-control has-icon timepicker"
                                        placeholder="Drop Off Time">
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn">Reservation</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-content">
                        <h2 class="title title--border">our awsome features</h2>
                        <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, vehicula
                            adipiscing quam. Nibh vestibulum tempor, magna maecenas, vehicula donec ut nonummy cras
                            suscipit.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">expert drivers</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">24 hours suport</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Are you looking for information on renting a car, such as how to rent one, the best rental companies, costs, or requirements? Let me know what specifically you're interested in! 🚗 </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">free registration</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Are you looking for information on renting a car, such as how to rent one, the best rental companies, costs, or requirements? Let me know what specifically you're interested in! 🚗 </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">low rent cost</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Are you looking for information on renting a car, such as how to rent one, the best rental companies, costs, or requirements? Let me know what specifically you're interested in! 🚗 </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-section end -->
</template>

<style scoped></style>
