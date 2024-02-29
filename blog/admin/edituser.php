<?php
include 'partial/header.php';
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2 style="text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Edit User</h2>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <select>
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" class="btn" >Update User</button>            
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
</body>
</html>