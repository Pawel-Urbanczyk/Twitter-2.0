<?php include '../core/init.php';
    $user_id = $_SESSION['user_id'];
    $user = $getFromU->userData($user_id);

    if(isset($_GET['step']) === true && empty($_GET['step']) === false){
        if(isset($_POST['next'])){
            $username = $getFromU->checkInput($_POST['username']);

            if(!empty($username)){
                if(strlen($username) > 20){
                    $error = "Username must between in 6 and 20 characters.";
                }else if($getFromU->checkUsername($username) === true){
                    $error = "Username is already taken";
                }else{
                    $getFromU->update('users', $user_id, array('username' => $username));
                    header('Location: signup.php?step=2');
                }
            }else{
                $error = "Please enter your username";
            }
        }
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>twitter 2.0</title>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" />
            <link rel="stylesheet" href="../assets/css/style-complete.css" />
        </head>
        <body>
        <div class="wrapper">
            <div class="nav-wrapper">
                <div class="nav-container">
                    <div class="nav-second">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!--nav-second end-->
                </div><!--nav-container end-->
            </div><!--nav-wrapper end-->

            <div class="inner-wrapper">
                <div class="main-container">
                    <?php if($_GET['step'] == '1'){?>
                    <div class="step-wrapper">
                        <div class="step-container">
                            <form method="post">
                                <h2>Choose a Username</h2>
                                <h4>It's not forever, you can change it later if you want.</h4>
                                <div>
                                    <input type="text" name="username" placeholder="Username"/>
                                </div>
                                <div>
                                    <ul>
                                        <li><?php if(isset($error)){echo $error;} ?></li>
                                    </ul>
                                </div>
                                <div>
                                    <input type="submit" name="next" value="Next" />
                                </div>
                            </form>
                        </div><!--step-container end-->
                    </div><!--step-wrapper end-->
                    <?php }?>
                    <?php if($_GET['step'] == '2'){?>
                        <div class='lets-wrapper'>
                            <div class='step-letsgo'>
                                <h2>We're glad you're here <?php echo $user->username;?></h2>
                                <p>Twitter 2.0 is a constantly updating stream of the coolest, most important news, media, sports, TV, conversations and more all tailored just for you.</p>
                                <br>
                                <p>Tell us about all the struff you love and we'll help you get set up.</p>
                                <span>
                                    <a href='../home.php' class='backButton'>Let's go!</a>
                                </span>
                            </div><!--step-letsgo end-->
                        </div><!--lets-wrapper end-->
                    <?php }?>
                </div><!--main-container end-->
            </div><!--inner-wrapper end-->
        </div><!--wrapper end-->
        </body>
        </html>

        <?php
    }
?>

