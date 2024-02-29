<?php
include 'partial/header.php';

?>
    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
    
            <aside>
                <ul>
                    <li>
                        <a href="index.php" class="active"><i class="fa fa-address-card" aria-hidden="true"></i>
                        <h5>Manage Post</h5></a>
                    </li>
                    <li>
                        <a href="addpost.php"><i class="fa fa-pencil" aria-hidden="true"></i>
                        <h5>Add Posts</h5></a>
                    </li>
                    <?php if(isset($_SESSION['user_is_admin'])) : ?>

                    <li>
                        <a href="adduser.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                        <h5>Add User</h5></a>
                    </li>
                    
                    <li>
                        <a href="manageuser.php"><i class="fa fa-user" aria-hidden="true"></i>
                        <h5>Manage user</h5></a>
                    </li>
                    <li>
                        <a href="addcategory.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                        <h5>Add category</h5></a>
                    </li>
                    <li>
                        <a href="managecategories.php"><i class="fa fa-calendar" aria-hidden="true"></i>
                        <h5>Manage category</h5></a>
                    </li>
                    <?php endif ?>
                </ul>
            </aside>
            <main>
                <h2>Dashboard</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>This is the first post on this page</td>
                            <td>Business</td>
                            <td><a href="edituser.php" class="btn sm">Edit</a></td>
                            <td><a href="deletecategory.php" class="btn sm danger">Delete</a></td>
                           
                        </tr>
                        <tr>
                            <td>This is the first post on this page</td>
                            <td>Sports</td>
                            <td><a href="edituser.php" class="btn sm">Edit</a></td>
                            <td><a href="deletecategory.php" class="btn sm danger">Delete</a></td>
                         
                        </tr>
                        <tr>
                            <td>This is the first post on this page</td>
                            <td>politics</td>
                            <td><a href="edituser.php" class="btn sm">Edit</a></td>
                            <td><a href="deletecategory.php" class="btn sm danger">Delete</a></td>
                           
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
<?php
include '../partials/footer.php';
?>
</body>
</html>
    
