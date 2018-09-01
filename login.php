    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to <b><i>M.M.S</i></b></h2>
        </div>
    </div>

    <div class="row">
        <div class="well col-md-5 center login-box" id="well">
            <?php
                if (isset($_SESSION['account_success'])) {?>
                    <div class="alert alert-success">
                        Account Created Successfully :Please login with your Admin Username and Password.
                    </div> 
                <?php }elseif (isset($_SESSION['reset_success'])) {?>
                    <div class="alert alert-success">
                        Account Reset successfull! Please login with your Admin Username and New Password.
                    </div>
                <?php }else{?>
                    <div class="alert alert-info">
                        Please login with your Admin Username and Password.
                    </div>               
                <?php }
            ?>
            <form class="form-horizontal" action="logic/login.php" method="post" autocomplete="off">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <?php
                        if (isset($_SESSION['login_error'])) {?>
                            <div class="alert alert-warning">
                                Incorrect Login Credentials!  Access Denied
                            </div> 
                    <?php }
                    ?>

                    <p class="center col-md-5">
                        <button name="login" class="btn btn-primary">Login</button>
                    </p>
                        <div class="col-md-5">
                            <a href="index.php?page=register">Don't have an account?</a>    
                        </div>
                    <div class="row">
                        <?php
                            if (!isset($_SESSION['manager_online'])) {?>
                                <div class="col-md-5" style="float: right;">
                                    <a href="index.php?page=reset"> Forgot Password?</a>
                                </div><?php
                            }else{?>                         
                                <div class="col-md-5" style="float: left;">
                                    <a href="index.php?page=register">Don't have an account?</a>    
                                </div><?php
                            }
                        ?>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
