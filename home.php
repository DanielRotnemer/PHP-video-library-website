<?php

    require_once 'utilities/utilities.php';
    session_start();

    $uploadedVideos = [];

?>

<html>
    <head>
        <title>Video library</title>        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="home.css?c=<?php echo time(); ?>"/>
        <script src="home.js?c=<?php echo time(); ?>"></script>
        <link rel="stylesheet" href="font/font-proximanova-bold/stylesheet.css"/>
        <link rel="stylesheet" href="font/font-proximanova-regular/stylesheet.css"/>
        <link rel="stylesheet" href="font/font-ubuntu/stylesheet.css"/>
        <link rel="stylesheet" href="font/font-opensans/stylesheet.css"/>
        <link rel="stylesheet" href="font/font-poppins/stylesheet.css"/>
    </head>
    <body>
        <div class="header">
            <a href="home">
                <div class="logo noselect">
                    <svg height="28px" viewBox="0 0 24 24" width="28px" fill="#ff5555"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
                    <div class="header-title"><span style="color: #ff5555;">V</span>ideo<span style="color: #ff5555;">L</span>ibrary</div> 
                </div>  
            </a>                     
        </div>
        <div class="body-wrapper">
            <div class="tollbar">
                <div class="videos-count">Showing 33 videos.</div>
                <div class="upload animated-transition">
                    <a class="noselect">Upload</a>
                </div>
            </div>
            <div class="videos-container">

                <?php
                    for ($i = 0; $i < 33; $i++)
                    {
                        echo '<a href="#">
                            <div class="video-item">
                                <div class="vid-thumb-cont">
                                    <img src="static/'.($i + 1).'.jpg?c='.time().'"/>
                                    <div class="video-duration">3:16</div>
                                </div>
                                <div class="video-name">Video title will be shown here</div>
                            </div>
                        </a>';
                    }
                ?>

            </div>
            <div class="pre-footer">You've reached the end :)</div>
            <div class="footer">
                <div class="footer-logo noselect">
                    <svg height="38px" viewBox="0 0 24 24" width="38px" fill="#ff5555"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
                    <div class="footer-title"><span style="color: #ff5555;">V</span>ideo<span style="color: #ff5555;">L</span>ibrary</div> 
                </div>
            </div>
        </div>
    </body>
</html>