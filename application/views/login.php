<?php
include 'includes/header.php'
?>
<html>
    <head>
    <style>
        /*
        * Specific styles of signin component
        */
        /*
        * General styles
        */
        body, html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(248, 252, 252), rgb(248, 252, 252));
        }

        .card-container.card {
        max-width: 350px;
            padding: 25px 40px 200px 40px;
        }

        .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
        }

        /*
        * Card component
        */
        .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        }

        /*
        * Form styles
        */
        .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
        }

        .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }

        .form-signin #inputEmail,
        .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
        }

        .form-signin input[type=email],
        .form-signin input[type=password],
        .form-signin input[type=text],
        .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }

        .form-signin .form-control:focus {
        border-color: rgb(104, 145, 162);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        }

        .btn.btn-signin {
        /*background-color: #4d90fe; */
        background-color: rgb(104, 145, 162);
        /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
        }

        .btn.btn-signin:hover,
        .btn.btn-signin:active,
        .btn.btn-signin:focus {
        background-color: rgb(12, 97, 33);
        }

        .forgot-password {
        color: rgb(104, 145, 162);
        }

        .forgot-password:hover,
        .forgot-password:active,
        .forgot-password:focus{
        color: rgb(12, 97, 33);
        }</style>
        <script>
            $( document ).ready(function() {

            function getLocalProfile(callback){
                var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
                var profileName        = localStorage.getItem("PROFILE_NAME");
                var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

                if(profileName !== null
                    && profileReAuthEmail !== null
                    && profileImgSrc !== null) {
                    callback(profileImgSrc, profileName, profileReAuthEmail);
                }
            }

            /**
             * Main function that load the profile if exists
             * in localstorage
             */
            function loadProfile() {
                if(!supportsHTML5Storage()) { return false; }
                // we have to provide to the callback the basic
                // information to set the profile
                getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
                    //changes in the UI
                    $("#profile-img").attr("src",profileImgSrc);
                    $("#profile-name").html(profileName);
                    $("#reauth-email").html(profileReAuthEmail);
                    $("#inputEmail").hide();
                    $("#remember").hide();
                });
            }

            /**
             * function that checks if the browser supports HTML5
             * local storage
             *
             * @returns {boolean}
             */
            function supportsHTML5Storage() {
                try {
                    return 'localStorage' in window && window['localStorage'] !== null;
                } catch (e) {
                    return false;
                }
            }

            /**
             * Test data. This data will be safe by the web app
             * in the first successful login of a auth user.
             * To Test the scripts, delete the localstorage data
             * and comment this call.
             *
             * @returns {boolean}
             */
            function testLocalStorageData() {
                if(!supportsHTML5Storage()) { return false; }
                localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
                localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
                localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
            }
        </script>
    </head>
<div class="container">
<!--    <div class="co"></div>-->
<!--    <h1>Login</h1>-->
<!--    <hr>-->
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
    <?php if ($this->session->flashdata('errmsg')){
        echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
    }?>
    <br>

    <?php echo validation_errors(); ?>

    <?php echo form_open('Login/LoginUser');?>
        <div class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-12 control-label">Email</label>
            <div class="col-sm-12">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-12 control-label">Password</label>
            <div class="col-sm-12">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
            </div>
        </div>
<!--        <div class="form-group">-->
<!--            <div class="col-sm-offset-2 col-sm-10">-->
<!--                <div class="checkbox">-->
<!--                    <label>-->
<!--                        <input type="checkbox"> Remember me-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">Sign in</button>
            </div>
        </div>
    <?php echo form_close();?>
        </div>
    </div>
</div>


<?php
include 'includes/footer.php'
?>