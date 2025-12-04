<?php
    function displayDate() {
        date_default_timezone_set("Europe/Amsterdam");

        $today = date("Y-m-d");

        return $today;
    }

?>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles/styleMain.css">
</head>
<body>
    <div class="main-container">
        <div class="main-header">
            <div class="main-header-left">
                <div class="main-date"><?php echo displayDate()?></div>
                <span class="main-date" id="current-time-display"></span>
            </div>
            <div class="main-header-mid">
                <img src="images/mainPageImg/mainLogo.png" alt="gemorskos-logo" class="main-logo-img">
            </div>
            <div class="main-header-right">
                <div class="main-header-button-container">
                    <a href="#" class="main-header-button">REGISTER</a>
                    <a href="#" class="main-header-button">LOG IN</a>
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
            <div class="content-one">
                <div class="content-container">
                    <h1 class="content-title">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </h1>
                    <p class="content-text">
                        Sed consequat tincidunt tortor ac tempor. 
                        Curabitur ultricies enim sed dolor placerat ornare. Cras sit amet lectus sit amet erat fringilla aliquet. 
                        Nullam scelerisque lorem eget aliquam faucibus. Mauris at bibendum sapien.
                    </p>
                </div>
            </div>
            <div class="content-two">
                <div class="content-two-container">
                    <p class="content-text content-text-two">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Aliquam asperiores quis modi sit reiciendis ducimus voluptas dolorem deserunt aspernatur autem, 
                        numquam labore nesciunt nam facere natus voluptate dolor, temporibus possimus at harum? Lorem, ipsum dolor sit amet consectetur adipisicing elit."
                        <div><b class="content-text">-Lorem Ipsum</b></div>
                    </p>
                </div>
            </div>
            <div class="content-three">
                <p class="content-text content-text-three">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quidem similique dolores! 
                    Tempora pariatur perspiciatis quod molestiae id impedit magnam obcaecati, modi amet nobis unde voluptates minus nostrum 
                    adipisci quo fugiat quia eligendi quibusdam ea laboriosam iure blanditiis! Illo temporibus optio aspernatur, nobis, nulla 
                    consequatur a maxime, repudiandae aliquid recusandae magni veniam exercitationem modi! Accusamus sed quisquam alias quos error 
                    cum pariatur laudantium velit assumenda minima officia cumque sunt ducimus corrupti deleniti eum laborum quasi expedita, 
                    non similique beatae at doloribus! Voluptatum molestias officia illo dolore accusantium exercitationem harum id est, 
                    commodi quam repudiandae laudantium, sint ex natus reiciendis illum.
                    consequatur a maxime, repudiandae aliquid recusandae magni veniam exercitationem modi! Accusamus sed quisquam alias quos error 
                    cum pariatur laudantium velit assumenda minima officia cumque sunt ducimus corrupti deleniti eum laborum quasi expedita, 
                    non similique beatae at doloribus! Voluptatum molestias officia illo dolore accusantium exercitationem harum id est, 
                    commodi quam repudiandae laudantium, sint ex natus reiciendis illum.
                </p>
            </div>
            <div class="content-four">
                <div class="content-wrapper">
                    <img class="content-cat-img" src="images/mainPageImg/mainCat.png" alt="cute-cat-img">
                    <p class="content-text content-text-four">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit qui atque iure adipisci? Ad in quae suscipit, 
                        reiciendis recusandae magnam mollitia ab expedita nobis doloribus tenetur. Illum animi ducimus aperiam quos dolorum 
                        obcaecati molestiae est impedit! Fugit labore voluptatibus autem laudantium cupiditate, ducimus sit minus!
                    </p>
                </div>
            </div>
            <div class="content-five">
                <img class="content-newspaper-img" src="images/mainPageImg/mainNewspaper.png" alt="newspaper-img">
            </div>
            <div class="content-six">
                <p class="content-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus maiores omnis, delectus accusantium tempora pariatur. 
                    Placeat mollitia fugiat optio laudantium at. Culpa, delectus sequi similique fuga dicta pariatur aliquam impedit.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, sapiente veritatis odit minus labore obcaecati? 
                    Commodi aliquam, mollitia neque error nam rerum magni, illum sint pariatur vitae fugiat, molestiae ea consectetur amet?
                </p>
            </div>
        </div>
    </div>
</body>
</html>