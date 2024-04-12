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
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM users;";
                                    $result = mysqli_query($conn, $query);
                                    $rows   = mysqli_fetch_all($result, MYSQLI_ASSOC);   
                                    foreach($rows as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['image']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
<!-- Dashboard Footer -->
<?php include './includes/footer.php'; ?>