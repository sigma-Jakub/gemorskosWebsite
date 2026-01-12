<?php
    function displayDate() {
        date_default_timezone_set("Europe/Amsterdam");

        $today = date("Y-m-d");

        return $today;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles/styleMain.css">
    <link rel="icon" href="images/websiteIcon.png">
</head>
<body>
    <div class="main-container">
        <div class="main-header">
            <div class="main-header-left">
                <div class="main-date"><?php echo displayDate()?></div>
                <span class="main-date" id="current-time-display"></span>
            </div>
            <div class="main-header-mid">
                <img class="main-logo-img" src="images/mainPageImg/mainLogo.png" alt="gemorskos-logo">
            </div>
            <div class="main-header-right">
                <div class="main-header-button-container">
                    <a href="register.php" class="main-header-button">REGISTER</a>
                    <a href="login.php" class="main-header-button">LOG IN</a>
                </div>
            </div>
        </div>
        <div class="main-rotator">
            <div class="main-rotator-container">
                <div class="rotator-element">POLITICS</div>
                <div class="rotator-element">SPORT</div>
                <div class="rotator-element">BUSINESS</div>
                <div class="rotator-element">ART</div>
                <div class="rotator-element">CULTURE</div>
                <div class="rotator-element">COOKING</div>
                <div class="rotator-element">TECH</div>
                <div class="rotator-element">GREEN</div>
                <div class="rotator-element">LIFESTYLE</div>
                <div class="rotator-element">DAILY HOT</div>
            </div>
            <div aria-hidden class="main-rotator-container">
                <div class="rotator-element">POLITICS</div>
                <div class="rotator-element">SPORT</div>
                <div class="rotator-element">BUSINESS</div>
                <div class="rotator-element">ART</div>
                <div class="rotator-element">CULTURE</div>
                <div class="rotator-element">COOKING</div>
                <div class="rotator-element">TECH</div>
                <div class="rotator-element">GREEN</div>
                <div class="rotator-element">LIFESTYLE</div>
                <div class="rotator-element">DAILY HOT</div>
            </div>
            <div aria-hidden class="main-rotator-container">
                <div class="rotator-element">POLITICS</div>
                <div class="rotator-element">SPORT</div>
                <div class="rotator-element">BUSINESS</div>
                <div class="rotator-element">ART</div>
                <div class="rotator-element">CULTURE</div>
                <div class="rotator-element">COOKING</div>
                <div class="rotator-element">TECH</div>
                <div class="rotator-element">GREEN</div>
                <div class="rotator-element">LIFESTYLE</div>
                <div class="rotator-element">DAILY HOT</div>
            </div>
        </div>
        <div class="main-content-grid">
            <div class="main-content-container grid-content-placement-one">
                <p class="text-container">
                    <span class="title-container-one">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span> Quasi iure, 
                    ullam asperiores veritatis reiciendis voluptatem eum eos impedit officiis? Dolor sequi saepe modi esse voluptatum consequatur cum deleniti neque eos?
                </p>
            </div>
            <div class="main-content-container grid-content-placement-two">
                <div class="border-container-two">
                    <p class="text-container-two">
                        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi iure, ullam asperiores veritatis reiciendis voluptatem eum eos impedit officiis?"
                    </p>
                    <p class="signature-two">
                        - Lorem ipsum.
                    </p>
                </div>
            </div>
            <div class="main-content-container grid-content-placement-three">
                <p class="text-container">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat tincidunt tortor ac tempor. Curabitur ultricies enim sed dolor placerat ornare. 
                    Cras sit amet lectus sit amet erat fringilla aliquet. Nullam scelerisque lorem eget aliquam faucibus. Mauris at bibendum sapien. Cras quam ante, 
                    laoreet vitae sodales ut, pretium eget velit. Donec et viverra metus, vel feugiat neque.
                    Nam ullamcorper nisi eu nibh porttitor faucibus. Donec ut nunc non nisi varius volutpat a vel neque. 
                    Ut sit amet sodales massa. Morbi pharetra ante et accumsan volutpat. Donec et elit orci. Nulla erat est, tempus quis tellus venenatis, 
                    interdum rutrum ante. Ut dignissim commodo justo a malesuada. Sed vel velit pretium, lacinia quam eget, elementum diam. Praesent consequat odio ut lacus rhoncus interdum. 
                    Suspendisse tempor consectetur odio, ac volutpat nulla blandit sit amet. Donec commodo, erat sit amet varius porttitor, libero lectus scelerisque leo, sit amet interdum urna erat id ante. 
                    Donec blandit nisl nec ligula lobortis, sit amet volutpat diam ultricies. Nam ac lacus at enim tempor tincidunt.
                </p>
            </div>
            <div class="main-content-container grid-content-placement-four">
                <div class="flex-container-four">
                    <img class="cat-img" src="images/mainPageImg/mainCat.png" alt="cute-cat-img">
                    <p class="text-container">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat tincidunt tortor ac tempor. Curabitur ultricies enim sed dolor placerat ornare. 
                        Cras sit amet lectus sit amet erat fringilla aliquet. Nullam scelerisque lorem eget aliquam faucibus. Mauris at bibendum sapien. Cras quam ante, laoreet vitae sodales ut, 
                        pretium eget velit. Donec et viverra metus, vel feugiat neque.
                        Nam ullamcorper nisi eu nibh porttitor faucibus.
                    </p>
                </div>
            </div>
            <div class="main-content-container grid-content-placement-five">
                <div class="flex-container-five">
                    <img class="newspaper-img" src="images/mainPageImg/mainNewspaper.png" alt="newspaper-img">
                </div>
            </div>
            <div class="main-content-container grid-content-placement-six">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi iure, ullam asperiores veritatis reiciendis voluptatem eum eos impedit officiis? Dolor sequi saepe modi esse voluptatum consequatur cum deleniti neque eos?</p>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    function updateTime() {
        const now = new Date();

        const timeString = now.toLocaleTimeString("en-US", {
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
            hour12: false
        });

        const timeDisplay = document.getElementById('current-time-display');

        if(timeDisplay) {
            timeDisplay.textContent = timeString;
        }
    }

    updateTime();
    setInterval(updateTime, 1000);
</script>