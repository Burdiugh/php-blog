<?php
$title = "about";
require 'blocks/header.php'
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>About page</h1>
                <div class="d-flex justify-content-center">
                <form action="check_post.php" method="post" style="width: 500px" class="d-flex flex-column gap-3">
                    <input type="text" name="username" placeholder="Enter your name." class="form-control">
                    <input type="email" name="email" placeholder="Enter your email." class="form-control">
                    <input type="password" name="password" placeholder="Enter your password." class="form-control">
                    <textarea name="message" placeholder="Enter your message." class="form-control"></textarea>
                    <input type="submit" value="send" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
    </div>
<?php
//require 'blocks/footer.php'
?>