<div class="container">
            <h2>Write your thoughts!</h2>
            <form>
                <?php if(isset($_SESSION['username'])) { ?>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                
                <button type="submit" class="btn btn-default" value="Comment">Comment</button>
                <?php } ?>
                <p>Register an account to comment. <a href="register.php">Sign up now</a>.</p>
            </form>
        </div>

