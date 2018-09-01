    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to <b><i>M.M.S</i></b></h2>
        </div>
    </div>

    <div class="row">
        <div class="well col-md-5 center register-box" id="well">
            <div class="alert alert-info">
                Please Create your account
            </div>
            <form class="form-horizontal" action="logic/register.php" method="post" autocomplete="off">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                    <div class="clearfix"><br></div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope red"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="clearfix"><br></div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="clearfix"><br></div>
                    <?php
                        if (isset($_SESSION['account_error'])) { ?>
                            <div class="alert alert-warning">
                                Error creating account! try again later..
                            </div>
                        <?php }
                    ?>

                    <p class="center col-md-5">
                        <button name="register" class="btn btn-primary">Register</button>
                    </p>
                        <div class="col-md-12">
                            <a href="index.php?page=login">Already have an account</a>    
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
