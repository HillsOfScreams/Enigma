<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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

                        <p class="message">Actually, more ...</p>
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
                    <i class="material-icons readStatus">done_all</i>
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

<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        overflow: hidden;
        background: #419fd9;
        background-image: url(https://s-media-cache-ak0.pinimg.com/originals/51/ed/c0/51edc046eb80046ee4755ee71d0f19ca.jpg);
        font-family: 'Open Sans', 'Roboto', 'Ubuntu', sans-serif;
        font-size: 16px;
    }

    a {
        text-decoration: none;
    }

    button {
        cursor: pointer;
    }

    button,
    input[type="search"],
    input[type="text"] {
        border: none;
        outline: none;
    }

    input[type="checkbox"] {
        margin: 7px;
        margin-right: 15px;
    }

    /* FIRST, THE OVERLAY ELEMENTS */

    .alerts {
        position: absolute;
        bottom: 10px;
        left: 10px;
        z-index: 9999;
        padding: 10px;
        color: #666;
        border-radius: 4px;
        background: #FFF;
        box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.4);
        display: none;
    }

    /* small conversation menu */
    .moreMenu {
        position: absolute;
        top: 70px;
        right: 0px;
        z-index: 10;
        padding: 10px;
        color: #666;
        border-radius: 0 0 0 4px;
        background: #FFF;
        display: none;
        border-top: 1px solid #DDD;
    }

    .moreMenu .option {
        width: 150px;
        height: 50px;
        display: block;
        background: #FFF;
        font-size: 14px;
        text-align: left;
        border-radius: 4px;
        padding-left: 10px;
    }

    .moreMenu .option:hover {
        background: #DDD;
    }

    .moreMenu .option:nth-last-child(1) {
        margin-top: 3px;
    }

    /* switch to mobile version screen */
    .switchMobile {
        position: absolute;
        width: 65%;
        height: auto;
        padding: 10px;
        background: #FFF;
        top: 75px;
        left: 0px;
        right: 0px;
        margin: auto;
        border-radius: 4px;
        box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.1);
        display: none;
    }

    .switchMobile .title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .switchMobile .desc {
        font-size: 14px;
        font-weight: 300;
        margin-bottom: 25px;
    }

    .switchMobile .okay {
        float: right;
        width: 80px;
        font-size: 16px;
        font-weight: 600;
        background: #419fd9;
        color: #fff;
        border-radius: 4px;
        padding: 10px;
    }

    /* side menu */
    .menuWrap {
        position: absolute;
        width: 30%;
        min-width: 240px;
        max-width: 320px;
        height: 100%;
        z-index: 3;
        display: none;
    }

    .menu {
        position: relative;
        left: -320px;
        width: 100%;
        height: 100vh;
        float: left;
        background: #FFF;
        box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.4);
        opacity: 0;
    }

    .me {
        position: relative;
        width: calc(100% - 50px);
        height: 140px;
        background: #419fd9;
        padding: 15px 25px;
        margin-bottom: 15px;
    }

    .me .image {
        width: 70px;
        height: 70px;
        background: #FFF url(https://thispersondoesnotexist.com/image) no-repeat center;
        background-size: cover;
        border-radius: 100%;
        cursor: pointer;
    }

    .me .settings {
        position: absolute;
        right: 20px;
        bottom: 65px;
        width: 40px;
        height: 40px;
        padding-top: 2px;
        color: #FFF;
        border-radius: 100%;
        background: rgba(0, 0, 0, 0.15);
    }

    .me .settings:hover {
        background: rgba(0, 0, 0, 0.35);
    }

    .me .cloud {
        position: absolute;
        right: 20px;
        bottom: 15px;
        width: 40px;
        height: 40px;
        color: #FFF;
        border-radius: 100%;
        background: rgba(0, 0, 0, 0.09);
    }

    .me .cloud:hover {
        background: rgba(0, 0, 0, 0.35);
    }

    .me .myinfo {
        position: absolute;
        bottom: 15px;
        font-size: 14px;
        color: #FFF;
    }

    .myinfo .name {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .myinfo .phone {
        font-weight: 300;
    }

    nav button {
        width: 100%;
        height: 45px;
        background: #FFF;
        text-align: left;
        padding-left: 20px;
        color: #666;
    }

    nav {
        float: left;
        width: 100%;
        height: auto;
        max-height: 350px;
        overflow-x: hidden;
        overflow-y: auto;
    }

    nav button:hover {
        background: #EEE;
    }

    nav button>i {
        color: #999;
        float: left;
    }

    nav button>span {
        display: inline-block;
        margin-top: 5px;
        margin-left: 20px;
        font-weight: 600;
        font-size: 14px;
    }

    .info {
        position: absolute;
        left: 20px;
        bottom: 15px;
        font-size: 12px;
        color: #666;
    }

    /* configuration screen */
    .config {
        position: absolute;
        width: 50%;
        height: 100vh;
        left: 0px;
        right: -200vw;
        top: 0px;
        margin: auto;
        background: #DDD;
        overflow-x: hidden;
        overflow-y: auto;
        display: block;
        z-index: 520;
        opacity: 0;
    }

    .confTitle {
        font-size: 24px;
        font-weight: 600;
        color: #444;
        margin: 10px 0px 15px 0px;
    }

    .configSect {
        float: left;
        width: calc(100% - 60px);
        padding: 15px 30px;
        margin-bottom: 10px;
        background: #FFF;
    }

    .profile .image {
        width: 140px;
        height: 140px;
        background: #FFF url(https://thispersondoesnotexist.com/image) no-repeat center;
        background-size: cover;
        border-radius: 100%;
        float: left;
        margin-right: 30px;
    }

    .side {
        width: auto;
        height: 110px;
        float: none;
        position: relative;
    }

    .side .name {
        font-size: 18px;
        font-weight: 600;
    }

    .side .pStatus {
        margin-top: 5px;
        font-size: 14px;
        font-weight: 300;
    }

    .profile .changePic,
    .profile .edit {
        width: auto;
        font-size: 16px;
        font-weight: 600;
        background: #419fd9;
        color: #fff;
        border-radius: 4px;
        padding: 10px;
    }

    .profile .edit {
        margin-left: 10px;
        background: #FFF;
        color: #999;
    }

    .profile .edit:hover {
        color: #419fd9;
    }

    .second ul {
        float: none;
        margin-left: -7px;
        list-style-type: none;
    }

    .second ul li {
        margin: 7px;
    }

    .second .blue {
        color: #419fd9
    }

    .second label {
        display: block;
        clear: both;
    }

    .second .information {
        margin-bottom: 30px;
    }

    .check {
        position: relative;
        float: left;
        display: block;
        width: 38px;
        height: 14px;
        background: #BBB;
        cursor: pointer;
        border-radius: 15px;
        transition: all 0.2s ease-in-out;
    }

    .check>.tracer {
        width: 16px;
        height: 16px;
        background: #FFF;
        border: 2px solid #BBB;
        border-radius: 100%;
        float: left;
        margin-top: -3px;
        transition: all 0.2s ease-in-out;
    }

    #checkNight,
    #deskNotif,
    #showSName,
    #showPreview,
    #playSounds {
        display: none;
    }

    .toggleTracer:checked~.check {
        background: #419fd9;
    }

    .toggleTracer:checked~.check>.tracer {
        border-color: #419fd9;
        margin-left: 18px;
    }

    .optionWrapper {
        display: block;
        width: 100%;
        height: 32px;
    }

    .optionWrapper p {
        float: left;
        margin-top: 3px;
        margin-left: 15px;
        font-size: 14px;
        color: #444;
    }

    /* dark overlay element */
    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 2;
        display: none;
    }

    /* ----------------- */
    /* MAIN APP ELEMENTS */
    /* ----------------- */

    .leftPanel {
        position: relative;
        display: inline-block;
        left: 0px;
        width: 320px;
        height: 100vh;
        float: left;
        background: #FFF;
        border-right: 1px solid #DDD;
    }

    header {
        width: 100%;
        height: 70px;
        background: #FFF;
    }

    .trigger {
        float: left;
        width: 32px;
        height: 32px;
        margin: 20px 15px;
        margin-bottom: 0px;
        color: #BBB;
        cursor: pointer;
        opacity: 0.6;
        background: none;
    }

    .trigger:hover {
        opacity: 1;
    }

    .trigger>svg {
        width: 24px;
        height: 24px;
        fill: #888;
    }

    .searchChats {
        width: calc(100% - 85px);
        height: 40px;
        background: #EEE;
        float: left;
        padding: 8px;
        margin-top: 14px;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
    }

    .searchChats:focus {
        color: #444;
        border: 2px solid #419fd9;
        background: rgb(243, 243, 243);
    }

    .chats {
        width: 100%;
        height: calc(100vh - 70px);
        float: left;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .chatButton {
        float: left;
        width: 100%;
        height: 80px;
        background: #FFF;
        color: #555;
        cursor: pointer;
        overflow: hidden;
    }

    .chatButton:hover {
        color: #555;
        background: #EEE;
    }

    .active,
    .active:hover {
        color: #FFF;
        background: #419fd9;
    }

    .chatInfo {
        float: left;
    }

    .chatInfo p {
        float: left;
    }

    .chatInfo .image {
        position: absolute;
        width: 55px;
        height: 55px;
        background: #DDD url(https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg) no-repeat center;
        background-size: cover;
        border-radius: 100%;
        margin: 13px 13px;
    }

    .chatInfo .my-image {
        background-image: url(https://avatars1.githubusercontent.com/u/21313332?s=460&v=4);
    }

    .chatInfo .name {
        float: left;
        font-weight: 600;
        margin-left: 80px;
        margin-top: 18px;
    }

    .chatInfo .message {
        float: left;
        clear: left;
        margin-left: 80px;
        margin-top: 7px;
    }

    .status {
        width: 60px;
        height: 100%;
        position: relative;
        float: right;
    }

    .status .fixed {
        position: absolute;
        right: 10px;
        bottom: 10px;
        display: none;
    }

    div[class~="normal"]>.fixed {
        display: none;
    }

    div[class~="normal"]>.count {
        right: 10px;
        bottom: 7px;
    }

    div[class~="onTop"]>.fixed {
        display: block;
        width: 24px;
        height: 24px;
        fill: #FFF;
    }

    div[class~="onTop"]>.count {
        right: 49px;
        bottom: 7px;
        background: #FFF;
        color: #419fd9;
    }

    .status .count {
        position: absolute;
        right: 49px;
        bottom: 7px;
        width: auto;
        height: auto;
        padding: 7px;
        border-radius: 20px;
        color: #222;
        background: rgba(0, 0, 0, 0.12);
    }

    .status .date {
        position: absolute;
        right: 12px;
        top: 12px;
        font-size: 12px;
    }

    .status .read {
        position: absolute;
        right: 53px;
        top: 6px;
    }

    .rightPanel {
        float: left;
        width: calc(100% - 321px);
        height: 100vh;
        background: #999;
    }

    .rightPanel .topBar {
        position: relative;
        width: 100%;
        height: 70px;
        background: #FFF;
    }

    .leftSide {
        display: inline-block;
        clear: none;
        float: left;
    }

    .leftSide .chatName {
        float: left;
        margin-left: 30px;
        margin-top: 13px;
        color: #444;
        font-weight: 600;
        cursor: default;
    }

    .chatName>span {
        font-size: 12px;
        font-weight: 500;
        color: #BBB;
        margin-left: 10px;
    }

    .leftSide .chatStatus {
        float: left;
        clear: left;
        margin-left: 30px;
        margin-top: 5px;
        color: #419fd9;
        font-weight: 300;
        cursor: default;
    }

    .rightSide {
        display: inline-block;
        clear: none;
        float: right;
        margin-right: 20px;
    }

    .tbButton,
    .otherTools .toolButtons {
        width: 50px;
        height: 50px;
        margin-top: 10px;
        background: #FFF;
        color: #888;
        border-radius: 100%;
    }

    .tbButton:hover,
    .otherTools .toolButtons:hover {
        color: #555;
        background: #DDD;
    }


    /* THE CONVERSATION HISTORY CSS */

    .convHistory {
        float: left;
        position: relative;
        width: 100%;
        height: calc(100vh - 140px);
        background: #333;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .userBg {
        background: url("https://images.unsplash.com/photo-1463058837219-41e13a132b7d?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg=") 100% center;
    }

    .msg {
        position: relative;
        width: auto;
        min-width: 100px;
        max-width: 45%;
        height: auto;
        padding: 25px;
        padding-bottom: 35px;
        margin: 20px 15px;
        margin-bottom: 0px;
        background: #FFF;
        border-radius: 7px;
        clear: both;
    }

    .msg:nth-last-child(1) {
        margin-bottom: 20px;
    }

    .msg .timestamp {
        display: block;
        position: absolute;
        right: 10px;
        bottom: 6px;
        color: #AAA;
        user-select: none;
    }

    .messageReceived {
        float: left;
        background: #FFF;
    }

    .messageSent {
        float: right;
        background: #effdde;
    }

    .messageSent>.timestamp,
    .messageSent>.readStatus {
        bottom: 10px;
        right: 40px;
        color: darkgreen;
        user-select: none;
    }

    .messageSent>.readStatus {
        position: absolute;
        bottom: 10px;
        right: 12px;
    }


    /* THE REPLY BAR CSS */

    .replyBar {
        width: 100%;
        height: 70px;
        float: left;
        background: #fff;
    }

    .replyBar .attach {
        width: 70px;
        height: 70px;
        color: #777;
        background: #FFF;
        float: left;
    }

    .replyBar .attach:hover {
        color: #555;
        background: #DDD;
    }

    .replyBar .d45 {
        transform: rotate(45deg);
        font-size: 32px;
    }

    .replyBar .replyMessage {
        width: calc(100% - 220px);
        float: left;
        height: 70px;
        padding: 0px 8px;
        font-size: 16px;
    }

    .replyBar .otherTools {
        float: right;
        width: 120px;
        height: 70px;
    }

    .emojiBar {
        display: none;
        position: absolute;
        width: 325px;
        height: 200px;
        padding: 10px;
        right: 30px;
        bottom: 80px;
        border: 2px solid #DDD;
        border-radius: 3px;
        background: #FFF;
    }

    .emoticonType {
        width: 100%;
        height: 50px;
    }

    .emoticonType button {
        width: 105px;
        height: 36px;
        font-weight: 600;
        color: #555;
        background: none;
    }

    .emoticonType button:hover {
        color: #FFF;
        background: #419fd9;
    }

    .emojiList,
    .stickerList {
        width: 100%;
        height: 150px;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .emojiList .pick {
        width: 50px;
        height: 50px;
        background: transparent;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 70%;
        transition: all 0.15s ease-in-out;
    }

    .emojiList .pick:hover {
        background: #DDD;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 70%;
    }

    .stickerList .pick {
        width: 80px;
        height: 80px;
        background: transparent;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 65%;
        transition: all 0.15s ease-in-out;
    }

    .stickerList .pick:hover {
        background: #DDD;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 65%;
    }


    /* hidden, while not complete */
    .stickerList {
        display: none;
    }

    /* CSS FOR THE EMOJI IMAGES, JUST SOME */

    #smileface {
        background-image: url(https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/grinning-face_1f600.png);
    }

    #grinningface {
        background-image: url(https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/grinning-face-with-smiling-eyes_1f601.png);
    }

    #tearjoyface {
        background-image: url(https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/face-with-tears-of-joy_1f602.png);
    }

    #rofl {
        background-image: url(https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/rolling-on-the-floor-laughing_1f923.png);
    }

    #somface {
        background-image: url(https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/smiling-face-with-open-mouth_1f603.png);
    }

    #swfface {
        background-image: url(https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/smiling-face-with-open-mouth-and-smiling-eyes_1f604.png);
    }

    /* NIGHT MODE THEMING */
    .DarkTheme,
    .DarkTheme .mainApp {
        background: #222;
    }

    /* SOLVING RESPONSIVE DESIGN ISSUES */
    @media screen and (max-width: 1180px) {
        .config {
            width: 60%;
        }
    }

    @media screen and (max-width: 980px) {
        .config {
            width: 90%;
        }
    }

    @media screen and (max-width: 940px) {
        body {
            font-size: 14px;
        }

        .msg {
            width: 90%;
        }
    }

    @media screen and (max-width: 720px) {
        .leftPanel {
            width: 80px;
        }

        .rightPanel {
            width: calc(100% - 81px);
        }

        .msg {
            width: auto;
            max-width: 60%;
        }

        .profile .changePic,
        .profile .edit {
            font-size: 14px;
            font-weight: 500;
        }

        .profile .edit {
            margin-left: 5px;
        }

        .searchChats,
        .chatButton>.name,
        .chatButton>.message,
        .chatButton>.status {
            display: none;
        }
    }

    @media screen and (max-width: 480px) {
        .switchMobile {
            display: block;
        }

        .leftPanel,
        .rightPanel,
        .menuWrap,
        .config,
        .overlay {
            display: none;
        }
    }

    @media screen and (max-width: 300px) {
        .switchMobile {
            width: calc(220px - 20px);
        }
    }
</style>

</html>