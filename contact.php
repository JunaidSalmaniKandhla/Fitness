<?php  require_once 'inc/head.php';?>
    <?php  require_once 'inc/header.php';?>

        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center font-italic my-4">Please Fill Your Detail Carefully</h3>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="abc@gmail.com">
                            </div><!-- 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Fitness@123">
                            </div> -->
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>

        <?php  require_once 'inc/footer.php';?>