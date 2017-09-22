<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                ADMIN
                <small>Subheading</small>
            </h1>

            <?php
//            $user = new User();
//            $user->username = "Example_username";
//            $user->password = "Example_password";
//            $user->first_name = "John";
//            $user->last_name = "Doe";
//            
//            $user->create();

//            $user = User::find_user_by_id(6);
//            $user->user_name = "David";
//            $user->password = "david123434";
//            $user->first_name = "David";
//            $user->last_name = "WILLIAMS";
//            $user->update();

             $user = new User();
             $user->username = "Sudent";
             $user->password = "ssw34234";
             $user->first_name = "SOL";
             $user->last_name = "Dont";
             $user->create();
            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->