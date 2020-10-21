<?php
require_once "Header.php";
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 post">
            <h2>Hospital Name</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nam illum ipsum corporis voluptatibus, perspiciatis possimus vitae consequuntur. Voluptate quisquam reprehenderit sapiente cupiditate esse, consequuntur vel dicta culpa dolorem rerum.</p>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_vPnn3K.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
        </div>

        <!-- comments section -->
        <div class="col-md-6 col-md-offset-3 comments-section">
            <!-- comment form -->
            <form class="clearfix" action="#" method="post" id="comment_form">
                <h4 id="inlineit">Post a comment:
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_E3llVz.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop autoplay></lottie-player>
                </h4>
                <style>
                    h4{
                        inline-size: auto;
                    }
                </style>
                <textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
                <input type="submit" class="btn btn-primary btn-sm pull-right" id="submit_comment" name="Comment" value="Submit comment">
                <?php
                if(isset($_POST['Comment'])){
                    header("location:LogIn.php?error=CheckIt");
                }
                ?>
            </form>

            <!-- Display total number of comments on this post  -->
            <h2><span id="comments_count">2</span> Comment(s)</h2>
            <hr>
            <!-- comments wrapper -->
            <div id="comments-wrapper">
                <div class="comment clearfix">
                    <img src="masum_production_logo.png" alt="" class="profile_pic">
                    <div class="comment-details">
                        <span class="comment-name">Abdullah</span>
                        <span class="comment-date">Oct 23, 2020</span>
                        <p>This is my first reply to this post on this website.</p>
                        <a class="reply-btn" href="#" >reply</a>
                    </div>
                    <div>
                        <!-- reply -->
                        <div class="comment reply clearfix">
                            <img src="masum_production_logo.png" alt="" class="profile_pic">
                            <div class="comment-details">
                                <span class="comment-name">Masum</span>
                                <span class="comment-date">Oct 24, 2020</span>
                                <p>Hey, why are you the first to comment on this post?</p>
                                <a class="reply-btn" href="#">reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // comments wrapper -->
        </div>
        <!-- // comments section -->
    </div>
</div>
</body>
<footer>
    <p>Copyright &copy Masum Production House,2020 </p>
    <div id="protection_01">
        <!--    <a href="//www.dmca.com/Protection/Status.aspx?ID=344f2958-f017-46e1-8e98-5ead2ccab43f" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_6_120.png?ID=344f2958-f017-46e1-8e98-5ead2ccab43f"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>-->
    </div>
</footer>
</html>
