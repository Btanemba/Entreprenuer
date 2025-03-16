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



    @include('layouts.footer')

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/main.js"></script>
    </body>

    </html>
