<?php
include 'partial/header.php';
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2 style="text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Edit Post</h2>
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
                <label for="thumbnail">Change thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn" >Update Post</button>
        </form>
    </div>
</section>
<footer>
    <div class="footer__socials">
        <a href="" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
        <a href="" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="" target="blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Business</a></li>
                <li><a href="">Politics</a></li>
                <li><a href="">Sports</a></li>
                <li><a href="">Wildlife</a></li>
            </ul>
        </article>
        <article>
            <h4>Contact Us</h4>
            <ul>
                <li><a href="">Email</a></li>
                <li><a href="">Social media</a></li>
                <li><a href="">Customer Care</a></li>
                <li><a href="">Report spam</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">News</a></li>
                <li><a href="">Lifestyle</a></li>
                <li><a href="">Updates</a></li>
                <li><a href="">Alerts</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>copyright &copy; Michael</small>
    </div>
</footer>
<script src="main.js"></script>
</body>
</html>