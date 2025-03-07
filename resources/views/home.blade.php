    @include('layouts.header')

    @include('layouts.navbar')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="main-banner" style="background:#242c36 url(img/DanStephenLibrary.jpeg) no-repeat">
        <div class="container">
            <div class="caption">
                <h2>At your Service</h2>
                <form action="" method="GET" class="search-form">
                    <fieldset>
                        <div class="form-row">
                            <!-- Dropdown for Skills -->
                            <div class="form-group col-md-3">
                                <select name="skills" class="form-control selectpicker">
                                    <option value="">Select Skill</option>
                                    <option value="baking" {{ request('skills') == 'baking' ? 'selected' : '' }}>Baking</option>
                                    <option value="nail_fixing" {{ request('skills') == 'nail_fixing' ? 'selected' : '' }}>Nail Fixing</option>
                                    <option value="plumbing" {{ request('skills') == 'plumbing' ? 'selected' : '' }}>Plumbing</option>
                                    <option value="carpentry" {{ request('skills') == 'carpentry' ? 'selected' : '' }}>Carpentry</option>
                                    <!-- Add more skills here -->
                                </select>
                            </div>

                            <!-- Dropdown for Location -->
                            <div class="form-group col-md-3">
                                <select name="location" class="form-control selectpicker">
                                    <option value="">Select Location</option>
                                    <option value="ebenthal" {{ request('location') == 'ebenthal' ? 'selected' : '' }}>Ebenthal</option>
                                    <option value="vienna" {{ request('location') == 'vienna' ? 'selected' : '' }}>Vienna</option>
                                    <!-- Add more locations here -->
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </div>
                        </div>
                    </fieldset>
                </form>




            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="col-md-4 col-sm-4">
                <div class="features-content">
                    <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
                    <h3>Create An Account</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore
                        et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="features-content">
                    <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
                    <h3>Search Desired Job</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore
                        et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="features-content">
                    <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
                    <h3>Send Your Resume</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore
                        et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricind">
        <div class="container">
            <div class="col-md-4 col-sm-4">
                <div class="package-box">
                    <div class="package-header">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <h3>Monthly</h3>
                    </div>

                    <div class="package-price">
                        <h2><sup>$ </sup>10<sub></sub></h2>
                    </div>
                    <button type="submit" class="btn btn-package">Sign Up</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="package-box">
                    <div class="package-header">
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <h3>6-Months</h3>
                    </div>

                    <div class="package-price">
                        <h2><sup>$ </sup>50<sub></sub></h2>
                    </div>
                    <button type="submit" class="btn btn-package">Sign Up</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="package-box">
                    <div class="package-header">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                        <h3>Yearly</h3>
                    </div>

                    <div class="package-price">
                        <h2><sup>$ </sup>100<sub></sub></h2>
                    </div>
                    <button type="submit" class="btn btn-package">Sign Up</button>
                </div>
            </div>
        </div>
    </section>

    <section class="membercard dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="left-widget-sidebar">
                        <div class="card-widget bg-white user-card">
                            <div class="u-img img-cover"
                                style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>
                            <div class="u-content">
                                <div class="avatar box-80">
                                    <img class="img-responsive img-circle img-70 shadow-white" src="img/avatar3.jpg"
                                        alt="">
                                    <i class="fa fa-circle-o fa-green"></i>
                                </div>
                                <h5>Sazzel Shi</h5>
                                <p class="text-muted">UX/ Designer</p>
                            </div>
                            <div class="user-social-profile">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="left-widget-sidebar">
                        <div class="card-widget bg-white user-card">
                            <div class="u-img img-cover"
                                style="background-image: url(img/bg-2.jpg);background-size:cover;"></div>
                            <div class="u-content">
                                <div class="avatar box-80">
                                    <img class="img-responsive img-circle img-70 shadow-white" src="img/avatar2.jpg"
                                        alt="">
                                    <i class="fa fa-circle-o fa-green"></i>
                                </div>
                                <h5>Daniel Dezox</h5>
                                <p class="text-muted">CEO Founder</p>
                            </div>
                            <div class="user-social-profile">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="left-widget-sidebar">
                        <div class="card-widget bg-white user-card">
                            <div class="u-img img-cover"
                                style="background-image: url(img/bg-3.jpg);background-size:cover;"></div>
                            <div class="u-content">
                                <div class="avatar box-80">
                                    <img class="img-responsive img-circle img-70 shadow-white" src="img/avatar1.jpg"
                                        alt="">
                                    <i class="fa fa-circle-o fa-green"></i>
                                </div>
                                <h5>Silp Sizzer</h5>
                                <p class="text-muted">Human Resource</p>
                            </div>
                            <div class="user-social-profile">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/main.js"></script>
    </body>

    </html>
