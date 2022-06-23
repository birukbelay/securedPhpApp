<?php

session_start();
if (isset($_SESSION['username'])) {

    echo '
    
    ';
} else {
    header("Location: ../index.php?logout=notauthorized");
    exit();
}
include_once 'header.php';
?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">controll</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Department <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">controll page</span>
                    <h2 class="mb-4">manage data base</h2>
                    <p>using this page you can madage diferent parts of the database</p>
                </div>
            </div>
            <div class="ftco-departments">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill"
                               href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">View company
                                info</a>

                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                               role="tab" aria-controls="v-pills-2" aria-selected="false">View company Records</a>

                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                               role="tab" aria-controls="v-pills-4" aria-selected="false">add new items</a>

                            <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"
                               role="tab" aria-controls="v-pills-5" aria-selected="false">Add new company Records</a>

                            <?php
                            if (isset($_SESSION['role'])) {

                                echo '
                                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">admin only privileges</a>
                                ';
                            } else {
                                echo '';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel"
                                 aria-labelledby="day-1-tab">
                                <div class="row">

<!--                                    -----------------view         ------------------->
                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">View equipments</h3>

                                            </div>
                                            <ul>
                                                <p>click below to view equipmnts company</p>
                                            </ul>
                                            <p class="button text-center"><a href="../equipments.php"
                                                                             class="btn btn-primary px-4 py-3">view
                                                    items</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">brands</h3>

                                            </div>
                                            <ul>
                                                <p>click below to view brands sold in this company</p>
                                            </ul>
                                            <p class="button text-center"><a href="../brands.php"
                                                                             class="btn btn-primary px-4 py-3">brands</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">View faculties</h3>

                                            </div>
                                            <ul>
                                                <p>click below to view faculties which work this company</p>
                                            </ul>
                                            <p class="button text-center"><a href="../faculties.php"
                                                                             class="btn btn-primary px-4 py-3">view
                                                    faculties</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">View technecians</h3>

                                            </div>
                                            <ul>
                                                <p>click below to view experts which work in this company</p>
                                            </ul>
                                            <p class="button text-center"><a href="../technecians.php"
                                                                             class="btn btn-primary px-4 py-3">view
                                                    items</a></p>
                                        </div>
                                    </div>


                                </div>


                            </div>


                            <!--            ...............................tan 2222 comp records-->

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                 aria-labelledby="v-pills-day-2-tab">


                                <div class="row">

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">View store</h3>

                                            </div>
                                            <ul>
                                                <p>click below to view items in the store</p>
                                            </ul>
                                            <p class="button text-center"><a href="view-store.php"
                                                                             class="btn btn-primary px-4 py-3">view
                                                    store</a></p>
                                        </div>
                                    </div>


                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">View Sold Items</h3>

                                            </div>
                                            <ul>
                                                <p>click below to view sold items in the company</p>
                                            </ul>
                                            <p class="button text-center"><a href="view-sold-items.php"
                                                                             class="btn btn-primary px-4 py-3">view Sold
                                                    items</a></p>
                                        </div>
                                    </div>


                                </div>

                            </div>


                            <!--           ...........................tab 3 add users  3333333333333333333333333...................-->


                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                 aria-labelledby="v-pills-day-3-tab">
                                <div class="row">
                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add Admin</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add new admin</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-admin.php"
                                                                             class="btn btn-primary px-4 py-3">add
                                                    admin</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add Technecian</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add new technecian</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-technecian.php"
                                                                             class="btn btn-primary px-4 py-3">add
                                                    technecian</a></p>
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <!--.............................tab 4444444  add users........................-->


                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                 aria-labelledby="v-pills-day-4-tab">


                                <div class="row">


                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add New Equipment</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add new Eequipment</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-items.php"
                                                                             class="btn btn-primary px-4 py-3">add
                                                    items</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add brand</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add new brands</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-brand.php"
                                                                             class="btn btn-primary px-4 py-3">add
                                                    brand</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add hospital</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add new hospital</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-hospital.php"
                                                                             class="btn btn-primary px-4 py-3">add
                                                    hospital</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!--.............................tab 555  add users........................-->

                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                 aria-labelledby="v-pills-day-5-tab">


                                <div class="row">

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add equipments to store</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add equipments to store</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-to-store.php"
                                                                             class="btn btn-primary px-4 py-3">add to
                                                    store</a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ftco-animate">
                                        <div class="pricing-entry pb-5 text-center">
                                            <div>
                                                <h3 class="mb-4">Add to sold items list</h3>

                                            </div>
                                            <ul>
                                                <p>click below to add items to sold items list</p>
                                            </ul>
                                            <p class="button text-center"><a href="add-sold-items.php"
                                                                             class="btn btn-primary px-4 py-3">add to
                                                    sold list</a></p>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php
include_once 'footer.php';
?>