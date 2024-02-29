<?php
include 'partial/header.php';
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2 style="text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Add Category</h2>
        <div class="alert__message error">
            <p>This is an error</p>
        </div>
        <form action="">
            <input type="text" placeholder="Title">
            <textarea name="" id="" rows="5" placeholder="Description"></textarea>
            <button type="submit" class="btn" >Add Category</button>
            
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
</body>
</html>