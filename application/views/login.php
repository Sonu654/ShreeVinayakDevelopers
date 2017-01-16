<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h4>Login Details</h4>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>        
        <div class="col-sm-4">
            <form class="form-horizontal" action="<?php echo site_url('Admin/ValLogin'); ?>" method="post">
                <div class="form-group">
                    <label for="id">Login id</label>
                    <input class="form-control" name="txtuserid" type="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="txtuserpass" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>

    </div>
</div>

