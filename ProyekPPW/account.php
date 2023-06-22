<?php include_once("header.php") ?>




  <!------------------------------ account-page details------------------------------>

  <div class="account-page">
        <div class="container">
                    <div class="form-container mx-auto">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="username">
                            <input type="password" placeholder="password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot password</a>
                        </form>
                        
                        <form id="RegForm">
                            <input type="text" placeholder="username">
                            <input type="email" placeholder="email">
                            <input type="password" placeholder="password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>




<?php include_once("footer.php") ?>