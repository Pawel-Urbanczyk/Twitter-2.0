<?php include 'core/init.php';
echo $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>twitter 2.0</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/style-complete.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header-wrapper">
            <div class="nav-container">
                <div class="nav">
                    <div class="nav-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                            <li><a href="i/notifications"><i class="fa fa-bell" aria-hidden="true"></i>Notifications</a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>Messages</li>
                        </ul>
                    </div>

                    <div class="name-right">
                        <ul>
                            <li>
                                <input type="text" placeholder="Search" class="search" />
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="search-result"></div>
                            </li>

                            <li class="hover">
                                <label class="drop-label" for="drop-wrap1"><img src="PROFILE-IMAGE"/></label>
                                <input type="checkbox" id="drop-wrap1">
                                <div class="drop-wrap">
                                    <div class="drop-inner">
                                        <ul>
                                            <li><a href="PROFILE-LINK">USERNAME</a></li>
                                            <li><a href="settings/account">Settings</a></li>
                                            <li><a href="includes/logout">Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><label class="addTweetBtn">Tweet</label></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner-wrapper">
            <div class="in-wrapper">
                <div class="in-full-wrap">
                    <div class="in-left">
                        <div class="in-left-wrap">
                            <div class="info-box">
                                <div class="info-inner">
                                    <div class="info-in-head">
                                        <img src="PROFILE-COVER" />
                                    </div>
                                    <div class="info-in-body">
                                        <div class="in-b-box">
                                            <div class="in-b-img">
                                                <img src="PROFILE-IMAGE"/>
                                            </div>
                                        </div>
                                        <div class="info-body-name">
                                            <div class="in-b-name">
                                                <div><a href="PROFILE-LINK">SCREEN-NAME</a></div>
                                                <span><small><a href="PROFILE-LINK">@USERNAME</a></small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-in-footer">
                                        <div class="number-wrapper">
                                            <div class="num-box">
                                                <div class="num-head">
                                                    Tweets
                                                </div>
                                                <div class="num-body">
                                                    10
                                                </div>
                                            </div>
                                            <div class="num-box">
                                                <div class="num-head">
                                                    FOLLOWING
                                                </div>
                                                <div class="num-body">
                                                    <span class="count-following">10</span>
                                                </div>
                                            </div>
                                            <div class="num-box">
                                                <div class="num-head">
                                                    FOLLOWERS
                                                </div>
                                                <div class="num-body">
                                                    <span class="count-followers">10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--in-left end-->

                    <div class="in-center">
                        <div class="in-center-wrap">
                            <div class="tweet-wrap">
                                <div class="tweet-inner">
                                    <div class="tweet-h-left">
                                        <div class="tweet-h-img">
                                            <img src="PROFILE-IMAGE" />
                                        </div>
                                    </div>
                                    <div class="tweet-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <textarea class="status" name="status" placeholder="Type something here!" rows="4" cols="50"></textarea>
                                            <div class="hash-box">
                                                <ul>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="tweet-footer">
                                        <div class="t-fo-left">
                                            <ul>
                                                <input type="file" name="file" id="file"/>
                                                <li>
                                                    <label for="file"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                                    <span class="tweet-error"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="f-to-right">
                                            <span id="count">140</span>
                                            <input type="submit" name="tweet" value="tweet" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!--tweet-wrap end-->

                            <div class="tweets">

                            </div>

                            <div class="loading-div">
                                <img src="assets/images/loading.svg" id="loader" style="display: none;" />
                            </div>

                            <div class="popupTweet"></div>
                        </div>
                    </div><!--in-center end-->

                    <div class="in-right">
                        <div class="in-right-wrap">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
