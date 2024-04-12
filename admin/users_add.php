<!-- Top Navigation Menu Bar -->
<?php include './includes/header.php'; ?>
<!-- Top Navigation Menu Bar -->
<?php include './includes/navigation_top.php'; ?>
<div id="layoutSidenav">
    <!-- Sidebar Navigation - Dashboard Navigation Options -->
    <?php include './includes/navigation_sidebar.php'; ?>
    <!-- Dashboard Content -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Users</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        All Users
                    </div>
                    <div class="card-body">

                    

                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>



                            <div class="col-12">
                                <label for="email" class="form-label">User Role</label>
                                
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="userrole" id="userrole1" value="Admin" >
                                        <label class="form-check-label" for="userrole1">
                                        Admin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="userrole" id="userrole2" value="Moderator">
                                        <label class="form-check-label" for="userrole2">
                                        Moderator
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="userrole" id="userrole3" value="User" checked>
                                        <label class="form-check-label" for="userrole3">
                                        User
                                        </label>
                                    </div>
                            </div>

                            <div class="col-12">
                                <label for="userimage" class="form-label">Image</label>
                                <input type="file" class="form-control" id="userimage" name="userimage">
                            </div>
                            

                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                            <div class="col-md-11">
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>                            
                        </form> 





                    </div>
                </div>
            </div>
        </main>
        <!-- Dashboard Footer -->
        

<?php include './includes/footer.php'; ?>