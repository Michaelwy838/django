<?php
include 'partial/header.php';
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2 style="text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Add Post</h2>
        <div class="alert__message error">
            <p>This is an error</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select name="" id="">
                <option value="1">Business</option>
                <option value="1">Sports</option>
                <option value="1">Education</option>
                <option value="1">Politics</option>
            </select>
            
            <textarea name="" id="" rows="10" placeholder="Body"></textarea>
            <div class="form__control inline">
                <input type="checkbox" id="is__featured" checked>
                <label for="is__featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Add thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn" >Add Post</button>
            
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
</body>
</html>