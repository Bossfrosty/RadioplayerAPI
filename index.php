<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover" />
        <title>Radio Player</title>
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <meta name="theme-color" content="dark light" />
        <meta property="og:image" content="assets/defautl.png" />
        <meta property="og:image:type" content="assets/default_logo.png" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="360" />
        <meta property="og:title" content="RadioPlayer" />
        <meta property="og:description" content="Demo code!" />
        <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/main.min.css" />
        <link rel="stylesheet" href="custom.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js" defer=""></script>
        <script src="js/main.js" defer></script>
        <link href="manifest.json" rel="manifest" />
        <script>
            window.streams = {
                timeRefresh: 10000,
                stations: [
                    {
                        name: "Jailson Web Rádio",
                        hash: "jailson",
                        description: "Música sem parar",
                        logo: "assets/jailson_logo.png",
                        album:
                            "assets/jailson_cover.png",
                        cover:
                            "assets/jailson_cover.png",
                        api: "get_stream_title.php?url=https://stream.zeno.fm/yn65fsaurfhvv",
                        stream_url: "https://stream.zeno.fm/yn65fsaurfhvv",
                        tv_url: "https://eu1.servers10.com:2020/VideoPlayer/8106?autoplay=1",
                        server: "",
                        program: {
                            time: "00:00",
                            name: "Jailson Web Radio",
                            description: "AO VIVO // ON AIR",
                        },
                        social: {
                            facebook: "https://facebook.com/",
                            twitter: "https://twitter.com/",
                            instagram: "https://www.instagram.com//",
                        },
                        apps: {
                            android: "#",
                            ios: "#",
                        },
                    },
                    {
                        name: "BENDICIÓN STEREO",
                        hash: "bendicion",
                        description: "Bendecidos para bendecir!",
                        logo: "assets/default_logo.png",
                        album:
                            "assets/cover.png",
                        cover:
                            "assets/cover.png",
                        api: "get_stream_title.php?url=https://sv2.globalhostlive.com/proxy/bendistereo/stream2",
                        stream_url: "https://sv2.globalhostlive.com/proxy/bendistereo/stream2",
                        tv_url: "https://eu1.servers10.com:2020/VideoPlayer/8106?autoplay=1",
                        server: "",
                        program: {
                            time: "11:00",
                            name: "Bendición Stereo",
                            description: "EN VIVO // ON AIR",
                        },
                        social: {
                            facebook: "https://facebook.com/BendicionStereo",
                            twitter: "https://twitter.com/BendiStereo",
                            instagram: "https://www.instagram.com/BendiStereo/",
                        },
                        apps: {
                            android: "#",
                            ios: "#",
                        },
                    },                    
                ],
            };
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />
    </head>
    <body class="preload">
        <div class="app">
            <img src="assets/default_logo.png" alt="cover" class="player-cover-image song-cover" height="100%" width="100%" />

            <header class="header">
                <div class="header-wrapper flex justify-between">
                    <a class="header-logo" href="#site">
                        <img class="header-logo-img" src="assets/radioplayer.svg" alt="logo" />
                    </a>

                    <div class="toggle-options flex items-start">
                        <button class="btn" data-outside="offcanvas-history">
                            <svg class="i i-compact-disc" viewBox="0 0 24 24">
                                <path d="M6 12a6 6 0 0 1 6-6"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                            Historico
                        </button>
                        <button class="btn" data-outside="offcanvas-stations">
                            <svg class="i i-list" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="2"></circle>
                                <path d="M5 4.9a10 10 0 0 0 0 14.2M7.8 7.7a6 6 0 0 0 0 8.6m8.4 0a6 6 0 0 0 0-8.6M19 19.1a10 10 0 0 0 0-14.2"></path>
                            </svg>
                            Multiradio
                        </button>
                        <button class="btn l:none" data-outside="mobile-menu">
                            <svg class="i i-bars" viewBox="0 0 24 24">
                                <path d="M3 6h18M3 12h18M3 18h18"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <div class="player song-now scrollbar flex column">
                <div class="player-wrapper">
                    <div class="player-cover flex column items-center justify-center g-2 items-center">
                        <div class="player-cover-title flex column items-center justify-center uppercase text-center">
                            <span class="song-artist fw-700 station-description m:fs-4">Artist</span>
                            <span class="song-name station-name fw-700 m:fs-2 fs-5 color-title">Song</span>
                        </div>
                        <div class="player-artwork relative">
                            <img alt="artwork" height="600" src="assets/cover.png" width="600" />
                            <div class="player-program"></div>
                        </div>

                        <div class="player-controller">
                            <div class="player-button player-button-volume">
                                <button class="player-button player-button-volume-toggle" data-outside="player-volume">
                                    <svg class="i i-volume-high" viewBox="0 0 24 24">
                                        <path d="M6 9H2v6h4l5 4V5Zm9 7a5 5 0 0 0 0-8m3 12a10 10 0 0 0 0-16"></path>
                                    </svg>
                                </button>
                                <div class="dropdown" id="player-volume">
                                    <div class="player-range-wrapper">
                                        <input aria-label="Volume" class="player-volume" max="100" min="0" name="player" type="range" value="100" />
                                        <div class="player-range-fill"></div>
                                        <div class="player-range-thumb"></div>
                                    </div>
                                </div>
                            </div>

                            <button class="player-button player-button-backward-step">
                                <svg class="i i-backward-step" viewBox="0 0 24 24">
                                    <path d="M6 5v14M18 4v16L8 12Z"></path>
                                </svg>
                            </button>

                            <button aria-label="Play/Pause" class="player-button player-button-play flex-none">
                                <svg class="i i-play" viewBox="0 0 24 24">
                                    <path d="m7 3 14 9-14 9z"></path>
                                </svg>
                            </button>

                            <button class="player-button player-button-forward-step">
                                <svg class="i i-forward-step" viewBox="0 0 24 24">
                                    <path d="M18 5v14M6 4v16l10-8Z"></path>
                                </svg>
                            </button>

                            <button class="player-button player-button-lyrics" data-outside="modal-lyrics">
                                <svg class="i i-list-music" viewBox="0 0 24 24">
                                    <path d="M16 8h6V3h-6v15M2 3h9M2 8h9m-9 5h3"></path>
                                    <circle cx="12" cy="18" r="4"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <svg class="visualizer-filter">
                <defs>
                    <filter id="gooey" x="-30%" y="-30%" width="160%" height="160%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -20" result="gooey" />
                        <feComposite in="SourceGraphic" in2="gooey" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <div class="visualizer"></div>

            <aside class="offcanvas scrollbar" id="offcanvas-stations">
                <button data-close aria-label="close" class="btn">
                    <svg class="i i-xmark" viewBox="0 0 24 24"><path d="M18 6 6 18M6 6l12 12"></path></svg>
                </button>
                <div class="offcanvas-content">
                    <div class="stations column flex g-1" id="stations"></div>
                </div>
            </aside>

            <aside class="offcanvas scrollbar" id="offcanvas-history">
                <button data-close aria-label="close" class="btn">
                    <svg class="i i-xmark" viewBox="0 0 24 24"><path d="M18 6 6 18M6 6l12 12"></path></svg>
                </button>
                <div class="offcanvas-content">
                    <div class="stations column flex g-0.5" id="history"></div>
                </div>
            </aside>
            <div class="modal" id="modal-lyrics">
                <div class="modal-content">
                    <div class="modal-title color-title flex items-center justify-between">
                        <h2 class="modal-title-text m:fs-3 fs-5 fw-500">Letra</h2>
                        <button data-close aria-label="close">
                            <svg class="i i-xmark" viewBox="0 0 24 24">
                                <path d="M18 6 6 18M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body scrollbar" id="lyrics"></div>
                </div>
            </div>
            <div class="modal-video" id="modal-tv">
                <button data-close aria-label="close" class="btn">
                    <svg class="i i-xmark" viewBox="0 0 24 24"><path d="M18 6 6 18M6 6l12 12"></path></svg>
                </button>
                <div class="modal-body-video"></div>
            </div>
            <div class="modal-overlay"></div>
            <div class="mobile-menu" id="mobile-menu">
                <footer class="footer">
                    <div class="footer-wrapper column flex">
                        <div class="footer-tv"></div>
                        <div class="footer-app flex wrap g-0.75"></div>
                        <div class="footer-copyright">
                            <small><strong>© RadioPlayer Demo code</strong> — contato@jailcon.es</small>
                        </div>
                    </div>
                </footer>

                <div class="player-social flex wrap"></div>
            </div>
        </div>
    </body>
</html>
