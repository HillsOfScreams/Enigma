<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


</head>

<body class="">
    <section class="mainApp">
        <div class="leftPanel">
            <header>
                <button class="trigger">
                    <svg viewBox="0 0 24 24">
                        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                    </svg>
                </button>

                <input class="searchChats" type="search" placeholder="Search..." />
            </header>
            <div class="chats">
                <div class="chatButton active">
                    <div class="chatInfo">
                        <div class="image my-image">

                        </div>

                        <p class="name">
                            Renan Mayrinck
                        </p>

                        <p class="message"><i class="fas fa-coffee"></i>
                            Actually, more ...</p>
                    </div>

                    <div class="status onTop">
                        <p class="date">00:02</p>
                        <p class="count">10</p>
                        <i class="material-icons read">done_all</i>
                        <svg class="fixed" viewBox="0 0 24 24">
                            <path d="M16,12V4H17V2H7V4H8V12L6,14V16H11.2V22H12.8V16H18V14L16,12Z" />
                        </svg>
                    </div>
                </div>

                <div class="chatButton">
                    <div class="chatInfo">
                        <div class="image">

                        </div>

                        <p class="name">
                            Doge
                        </p>

                        <p class="message">Wow!</p>
                    </div>

                    <div class="status normal">
                        <p class="date">Now</p>
                        <p class="count">42</p>
                        <i class="material-icons read">done_all</i>
                        <i class="material-icons fixed">loyalty</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="rightPanel">
            <div class="topBar">
                <div class="rightSide">
                    <button class="tbButton search">
                        <i class="material-icons">&#xE8B6;</i>
                    </button>
                    <button class="tbButton otherOptions">
                        <i class="material-icons">more_vert</i>
                    </button>
                </div>

                <div class="leftSide">
                    <p class="chatName">Renan Mayrinck <span>@RenanMayrinckDesign</span></p>
                    <p class="chatStatus">Online</p>
                </div>
            </div>

            <div class="convHistory userBg">
                <!-- CONVERSATION GOES HERE! -->

                <div class="msg messageReceived">
                    Dude, why no one did this before?
                    <span class="timestamp">00:00</span>
                </div>

                <div class="msg messageSent">
                    Dunno...
                    <i class="fa fa-copy">done_all</i>
                    <span class="timestamp">00:01</span>
                </div>

                <div class="msg messageReceived">
                    This don't matter now, I did it!
                    <span class="timestamp">00:02</span>
                </div>

                <div class="msg messageReceived">
                    Hope someone see this... Someday...
                    <span class="timestamp">00:02</span>
                </div>

                <div class="msg messageSent">
                    Actually, more than 10K people did... Congrats!
                    <i class="material-icons readStatus">done</i>
                    <span class="timestamp">00:04</span>
                </div>
            </div>

            <div class="replyBar">
                <button class="attach">
                    <i class="material-icons d45">attach_file</i>
                </button>

                <input type="text" class="replyMessage" placeholder="Type your message..." />

                <div class="emojiBar">
                    <div class="emoticonType">
                        <button id="panelEmoji">Emoji</button>
                        <button id="panelStickers">Stickers</button>
                        <button id="panelGIFs">GIFs</button>
                    </div>


                    <!-- Emoji panel -->
                    <div class="emojiList">
                        <button id="smileface" class="pick">
                        </button>
                        <button id="grinningface" class="pick"></button>
                        <button id="tearjoyface" class="pick"></button>
                        <button id="rofl" class="pick"></button>
                        <button id="somface" class="pick"></button>
                        <button id="swfface" class="pick"></button>
                    </div>

                    <!-- the best part of telegram ever: STICKERS!! -->
                    <div class="stickerList">
                        <button id="smileface" class="pick">
                        </button>
                        <button id="grinningface" class="pick"></button>
                        <button id="tearjoyface" class="pick"></button>
                    </div>
                </div>

                <div class="otherTools">
                    <button class="toolButtons emoji">
                        <i class="material-icons">face</i>
                    </button>

                    <button class="toolButtons audio">
                        <i class="material-icons">mic</i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="menuWrap">
        <div class="menu">
            <div class="me userBg">
                <div class="image"></div>

                <div class="myinfo">
                    <p class="name">Random Name</p>
                    <p class="phone">+1 12 1234 5678</p>
                </div>

                <button class="cloud">
                    <i class="material-icons">bookmark</i>
                </button>

                <button class="settings">
                    <i class="material-icons">settings</i>
                </button>
            </div>
            <nav>
                <button class="ng">
                    <i class="material-icons">&#xE8D3;</i>

                    <span>New Group</span>
                </button>

                <button class="nc">
                    <i class="material-icons">&#xE0B6;</i>

                    <span>New Channel</span>
                </button>

                <button class="cn">
                    <i class="material-icons">&#xE851;</i>

                    <span>Contacts</span>
                </button>

                <button class="cl">
                    <i class="material-icons">&#xE0B0;</i>

                    <span>Calls History</span>
                </button>

                <a href="https://telegram.org/faq" target="_blank">
                    <button class="faq">
                        <i class="material-icons">&#xE000;</i>

                        <span>FAQ and Support</span>
                    </button>
                </a>

                <button class="lo">
                    <i class="material-icons">&#xE879;</i>

                    <span>Logout</span>
                </button>
            </nav>

            <div class="info">
                <p>Telegram Web</p>
                <p>Ver 0.0.2 - <a href="https://en.wikipedia.org/wiki/Telegram_(messaging_service)">About</a></p>
                <p>Layout coded by: <a href="https://www.github.com/mayrinck">Mayrinck</a></p>
            </div>
        </div>
    </section>


    <div class="moreMenu">
        <button class="option about">See Info</button>
        <button class="option notify">Disable Notifications</button>
        <button class="option block">Block User</button>
    </div>

    <section class="switchMobile">
        <p class="title">Mobile Device Detected</p>

        <p class="desc">Switch to the mobile app for a better performance.</p>

        <a href="https://play.google.com/store/apps/details?id=org.telegram.messenger&hl=pt_BR&gl=US">
            <button class="okay">OK</button>
        </a>
    </section>

    <!-- PROFILE OPTIONS OVERLAY -->
    <section class="config">
        <section class="configSect">
            <div class="profile">
                <p class="confTitle">Settings</p>

                <div class="image"></div>

                <div class="side">
                    <p class="name">Random Name</p>
                    <p class="pStatus">Online</p>
                </div>

                <button class="changePic">Change Profile Picture</button>
                <button class="edit">Edit Profile Info</button>
            </div>
        </section>

        <section class="configSect second">

            <!-- PROFILE INFO SECTION -->
            <p class="confTitle">Your Info</p>

            <div class="information">
                <ul>
                    <li>Phone Number: <span class="blue phone">+1 12 1234 5678</span></li>
                    <li>Username: <span class="blue username">@USERNAME</span></li>
                    <li>Profile: <span class="blue">https://t.me/USERNAME</span></li>
                </ul>
            </div>

            <!-- NOTIFICATIONS SECTION -->
            <p class="confTitle">Notifications</p>

            <div class="optionWrapper deskNotif">
                <input type="checkbox" id="deskNotif" class="toggleTracer" checked>

                <label class="check deskNotif" for="deskNotif">
                    <div class="tracer"></div>
                </label>
                <p>Enable Desktop Notifications</p>
            </div>

            <div class="optionWrapper showSName">
                <input type="checkbox" id="showSName" class="toggleTracer">

                <label class="check" for="showSName">
                    <div class="tracer"></div>
                </label>
                <p>Show Sender Name</p>
            </div>

            <div class="optionWrapper showPreview">
                <input type="checkbox" id="showPreview" class="toggleTracer">

                <label class="check" for="showPreview">
                    <div class="tracer"></div>
                </label>
                <p>Show Message Preview</p>
            </div>

            <div class="optionWrapper playSounds">
                <input type="checkbox" id="playSounds" class="toggleTracer">

                <label class="check" for="playSounds">
                    <div class="tracer"></div>
                </label>
                <p>Play Sounds</p>
            </div>


            <p class="confTitle">Other Settings</p>

            <div class="optionWrapper">
                <input type="checkbox" id="checkNight" class="toggleTracer">

                <label class="check DarkThemeTrigger" for="checkNight">
                    <div class="tracer"></div>
                </label>
                <p>Dark Theme</p>
            </div>

        </section>
    </section>

    <!-- DARK FRAME OVERLAY -->
    <section class="overlay"></section>


    <div class="alerts">
        Trying to reconnect...
    </div>
</body>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

</html>