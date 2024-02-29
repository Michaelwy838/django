<?php
include 'partial/header.php';
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2 style="text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Add User</h2>
        <div class="alert__message error">
            <p>This is an error</p>
        </div>
        <form action="<?= "http://localhost/blog/" ?>admin/add-user-logic.php" enctype="multipart/form-data">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="createpassword" placeholder="Create Password">
            <input type="password" name="confirmpassword" placeholder="Confirm Password">
            <select name="userrole">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar">Profile Picture</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn" >Add User</button>            
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
</body>
</html>