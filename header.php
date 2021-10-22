<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header class="site-header container" id="header">
        <!-- Logo -->
        <div class="site-header__logo">
            <a href="<?= get_site_url() ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="128.555" height="48.379" viewBox="0 0 128.555 48.379">
                    <g id="Groupe_7" data-name="Groupe 7" transform="translate(-442.651 -373.982)">
                        <g id="Groupe_5" data-name="Groupe 5" transform="translate(442.651 373.982)">
                        <path id="Tracé_1" data-name="Tracé 1" d="M479.151,417.82l-8.735-22.845-.275-.722L465.988,383.4v-9.414h-9.953V383.4l-11.59,30.311h0v0l-.076.2-1.5,3.911a3.339,3.339,0,0,0,.637,3.431,3.3,3.3,0,0,0,2.489,1.11h30.028a3.346,3.346,0,0,0,3.126-4.541Zm-1.358-1h0a1.727,1.727,0,0,1-1.9,0,2.631,2.631,0,0,0-2.826,0,1.728,1.728,0,0,1-1.9,0,2.631,2.631,0,0,0-2.827,0,1.726,1.726,0,0,1-1.9,0,2.632,2.632,0,0,0-2.827,0,2.275,2.275,0,0,1-.4.2,19.68,19.68,0,0,0-3.243-2.134,1.886,1.886,0,0,1,.327-.026,1.6,1.6,0,0,1,.951.285,2.635,2.635,0,0,0,2.826,0,1.728,1.728,0,0,1,1.9,0,2.635,2.635,0,0,0,2.826,0,1.728,1.728,0,0,1,1.9,0,2.636,2.636,0,0,0,2.827,0,1.727,1.727,0,0,1,1.9,0,2.483,2.483,0,0,0,1.413.411,2.856,2.856,0,0,0,.455-.035Zm-20.846-33.259v-8.669h8.13v8.669l4.083,10.681h-4.787a.456.456,0,0,0,0,.912h5.136l7.452,19.488c-.039,0-.077,0-.118,0a1.591,1.591,0,0,1-.95-.285,2.635,2.635,0,0,0-2.826,0,1.729,1.729,0,0,1-1.9,0,2.635,2.635,0,0,0-2.827,0,1.73,1.73,0,0,1-1.9,0,2.635,2.635,0,0,0-2.827,0,1.727,1.727,0,0,1-1.9,0,2.635,2.635,0,0,0-2.825,0,19.4,19.4,0,0,0-2.518-.931v-3.793a3.271,3.271,0,0,0,2.369,1.015v-.912a2.372,2.372,0,0,1-2.369-2.366v-1.842a3.272,3.272,0,0,0,2.369,1.015v-.912a2.373,2.373,0,0,1-2.369-2.366v0h-.912a2.372,2.372,0,0,1-2.369,2.37v.912a3.271,3.271,0,0,0,2.369-1.015v1.838h0a2.372,2.372,0,0,1-2.369,2.369v.912a3.269,3.269,0,0,0,2.369-1.015v3.551a19.815,19.815,0,0,0-9.9.177ZM446,421.449c-.062,0-.123,0-.184-.007h-.008a2.417,2.417,0,0,1-.358-.054h-.005c-.058-.013-.115-.029-.172-.046h0a2.4,2.4,0,0,1-.328-.129l-.014-.007a2.355,2.355,0,0,1-.3-.174l-.009-.007a12.864,12.864,0,0,1,5.4-1.572q.406-.026.816-.026a12.909,12.909,0,0,1,3.238.41q.225.059.448.125h0a12.748,12.748,0,0,1,3.249,1.487Zm13.349,0a13.734,13.734,0,0,0-6.014-2.71,13.838,13.838,0,0,0-9.369,1.61,2.424,2.424,0,0,1-.254-2.161,15.845,15.845,0,0,1,13.814-.219l.068.031a15.84,15.84,0,0,1,2.829,1.722h0a15.9,15.9,0,0,1,1.92,1.728Zm4.218,0A16.852,16.852,0,0,0,460.974,419h0a16.706,16.706,0,0,0-3.063-1.854l-.093-.043h0a16.588,16.588,0,0,0-6.977-1.52,16.8,16.8,0,0,0-6.662,1.38l.964-2.522a18.74,18.74,0,0,1,17.672,3.437,18.851,18.851,0,0,1,3.318,3.574ZM478.03,420.4a2.4,2.4,0,0,1-2.005,1.054h-8.788q-.391-.59-.825-1.153a2.447,2.447,0,0,0,.975.183,2.484,2.484,0,0,0,1.413-.411,1.729,1.729,0,0,1,1.9,0,2.636,2.636,0,0,0,2.827,0,1.727,1.727,0,0,1,1.9,0,2.483,2.483,0,0,0,1.413.411,2.444,2.444,0,0,0,1.363-.381A2.561,2.561,0,0,1,478.03,420.4Zm-.237-1.112a1.728,1.728,0,0,1-1.9,0,2.635,2.635,0,0,0-2.826,0,1.729,1.729,0,0,1-1.9,0,2.636,2.636,0,0,0-2.827,0,1.727,1.727,0,0,1-1.9,0,2.483,2.483,0,0,0-1.236-.405c-.391-.418-.8-.823-1.232-1.208l.1-.061a1.726,1.726,0,0,1,1.9,0,2.632,2.632,0,0,0,2.826,0,1.727,1.727,0,0,1,1.9,0,2.632,2.632,0,0,0,2.828,0,1.726,1.726,0,0,1,1.9,0,2.48,2.48,0,0,0,1.414.412,2.4,2.4,0,0,0,1.281-.335l.176.46a2.444,2.444,0,0,1,.163.826A2.855,2.855,0,0,0,477.793,419.283Z" transform="translate(-442.651 -373.982)" fill="#22292d"/>
                        <path id="Tracé_2" data-name="Tracé 2" d="M471.715,410.932h5.68a.456.456,0,0,0,0-.912h-5.68a.456.456,0,0,0,0,.912Z" transform="translate(-456.904 -391.937)" fill="#22292d"/>
                        <path id="Tracé_3" data-name="Tracé 3" d="M487.312,410.932h2a.456.456,0,1,0,0-.912h-2a.456.456,0,0,0,0,.912Z" transform="translate(-464.675 -391.937)" fill="#22292d"/>
                        <path id="Tracé_4" data-name="Tracé 4" d="M479.23,414.364h-2a.456.456,0,0,0,0,.912h2a.456.456,0,0,0,0-.912Z" transform="translate(-459.654 -394.101)" fill="#22292d"/>
                        <path id="Tracé_5" data-name="Tracé 5" d="M483.747,429.532a2.372,2.372,0,0,1,2.369,2.369h.912a2.372,2.372,0,0,1,2.369-2.369v-.912a3.282,3.282,0,0,0-2.825,1.615,3.283,3.283,0,0,0-2.826-1.615Z" transform="translate(-463.126 -401.204)" fill="#22292d"/>
                        </g>
                        <g id="Groupe_6" data-name="Groupe 6" transform="translate(507.472 373.982)">
                        <path id="Tracé_6" data-name="Tracé 6" d="M597.978,458.339l5.13-11.1a.3.3,0,0,1,.281-.182h.165a.28.28,0,0,1,.281.182l5.081,11.1a.291.291,0,0,1-.28.429H607.2a.474.474,0,0,1-.479-.33l-.808-1.781H600.98l-.808,1.781a.5.5,0,0,1-.478.33h-1.435A.291.291,0,0,1,597.978,458.339Zm7.126-3.513-1.649-3.629h-.05l-1.617,3.629Z" transform="translate(-584.843 -410.388)" fill="#22292d"/>
                        <path id="Tracé_7" data-name="Tracé 7" d="M599.659,374.461a.325.325,0,0,1,.314-.314h1.534a.313.313,0,0,1,.314.314v4.371H607.2v-4.371a.313.313,0,0,1,.314-.314h1.517a.325.325,0,0,1,.314.314v10.92a.325.325,0,0,1-.314.314h-1.517a.313.313,0,0,1-.314-.314v-4.553H601.82v4.553a.313.313,0,0,1-.314.314h-1.534a.325.325,0,0,1-.314-.314Z" transform="translate(-585.697 -374.064)" fill="#22292d"/>
                        <path id="Tracé_8" data-name="Tracé 8" d="M576.973,375.962h-2.524a.313.313,0,0,1-.314-.314V374.3a.313.313,0,0,1,.314-.314h7.208a.313.313,0,0,1,.314.314v1.353a.313.313,0,0,1-.314.314h-2.524v9.254a.324.324,0,0,1-.313.313h-1.534a.324.324,0,0,1-.313-.313Z" transform="translate(-572.98 -373.982)" fill="#22292d"/>
                        <path id="Tracé_9" data-name="Tracé 9" d="M629.358,374.3a.313.313,0,0,1,.314-.314h6.714a.313.313,0,0,1,.314.314v1.353a.313.313,0,0,1-.314.314H631.5v2.705h4.074a.325.325,0,0,1,.314.314v1.369a.313.313,0,0,1-.314.313H631.5v2.887h4.883a.313.313,0,0,1,.314.314v1.353a.313.313,0,0,1-.314.313h-6.714a.313.313,0,0,1-.314-.313Z" transform="translate(-600.494 -373.982)" fill="#22292d"/>
                        <path id="Tracé_10" data-name="Tracé 10" d="M577.756,410.226a6.236,6.236,0,0,1,4.025,1.534.32.32,0,0,1,.016.462l-1.023,1.072a.281.281,0,0,1-.429,0,3.738,3.738,0,0,0-2.491-.957,3.8,3.8,0,0,0,.016,7.6,5.159,5.159,0,0,0,1.963-.412v-1.4h-1.32a.3.3,0,0,1-.313-.3v-1.3a.3.3,0,0,1,.313-.313h3.167a.31.31,0,0,1,.3.313v4.223a.315.315,0,0,1-.132.264,8.334,8.334,0,0,1-4.091,1.072,5.93,5.93,0,0,1,0-11.861Z" transform="translate(-571.834 -392.04)" fill="#22292d"/>
                        <path id="Tracé_11" data-name="Tracé 11" d="M629.358,410.915a.313.313,0,0,1,.314-.314h6.714a.313.313,0,0,1,.314.314v1.352a.313.313,0,0,1-.314.314H631.5v2.706h4.074a.325.325,0,0,1,.314.313v1.369a.313.313,0,0,1-.314.314H631.5v2.887h4.883a.313.313,0,0,1,.314.314v1.352a.313.313,0,0,1-.314.314h-6.714a.313.313,0,0,1-.314-.314Z" transform="translate(-600.494 -392.226)" fill="#22292d"/>
                        <path id="Tracé_12" data-name="Tracé 12" d="M654.389,410.852a.313.313,0,0,1,.314-.314h6.714a.313.313,0,0,1,.314.314V412.2a.313.313,0,0,1-.314.313h-4.883v2.706h4.075a.325.325,0,0,1,.314.313v1.369a.313.313,0,0,1-.314.314h-4.075v2.887h4.883a.313.313,0,0,1,.314.314v1.352a.313.313,0,0,1-.314.314H654.7a.313.313,0,0,1-.314-.314Z" transform="translate(-612.965 -392.195)" fill="#22292d"/>
                        <path id="Tracé_13" data-name="Tracé 13" d="M679.42,410.506a.31.31,0,0,1,.314-.3h.413l6.862,7.291h.017v-6.813a.313.313,0,0,1,.313-.314h1.518a.324.324,0,0,1,.313.314v11.1a.31.31,0,0,1-.313.3h-.4l-6.9-7.572h-.016v7.093a.313.313,0,0,1-.314.314h-1.5a.325.325,0,0,1-.314-.314Z" transform="translate(-625.435 -392.031)" fill="#22292d"/>
                        <path id="Tracé_14" data-name="Tracé 14" d="M576.469,447.533a.313.313,0,0,1,.314-.313H578.3a.325.325,0,0,1,.314.313v9.254h4.206a.313.313,0,0,1,.314.314v1.353a.313.313,0,0,1-.314.314h-6.037a.313.313,0,0,1-.314-.314Z" transform="translate(-574.143 -410.471)" fill="#22292d"/>
                        <path id="Tracé_15" data-name="Tracé 15" d="M628.8,447.533a.313.313,0,0,1,.314-.313h3.778a3.232,3.232,0,0,1,3.48,3.052,3.142,3.142,0,0,1-1.814,2.623,2.964,2.964,0,0,1,2.145,2.689,3.336,3.336,0,0,1-3.6,3.184h-3.992a.313.313,0,0,1-.314-.314Zm3.893,4.537a1.414,1.414,0,0,0,1.419-1.485,1.346,1.346,0,0,0-1.419-1.4h-1.765v2.887Zm.231,4.751a1.472,1.472,0,0,0,1.485-1.5,1.6,1.6,0,0,0-1.682-1.436h-1.8v2.936Z" transform="translate(-600.215 -410.471)" fill="#22292d"/>
                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="1.446" cy="1.446" r="1.446" transform="translate(41.425 45.405)" fill="#22292d"/>
                        <path id="Tracé_16" data-name="Tracé 16" d="M610.265,422.085a.272.272,0,0,0,.2-.46,11.064,11.064,0,0,1-2.538-4.206l.026,0a3.64,3.64,0,0,0,2.441-3.332,3.573,3.573,0,0,0-3.6-3.547h-4.718a.313.313,0,0,0-.314.314v10.92a.313.313,0,0,0,.314.314h1.517a.314.314,0,0,0,.314-.314v-4.206h1.824a13.152,13.152,0,0,0,2.185,4.369.383.383,0,0,0,.306.15Zm-6.34-9.567h2.689a1.641,1.641,0,0,1,1.633,1.6,1.68,1.68,0,0,1-1.633,1.683h-2.689Z" transform="translate(-586.745 -392.195)" fill="#22292d"/>
                        </g>
                        <rect id="Rectangle_8" data-name="Rectangle 8" width="0.911" height="48.378" transform="translate(491.543 373.982)" fill="#22292d"/>
                    </g>
                </svg>
            </a>
             
        </div>
        <!-- Menu -->
        <div class="site-header__menu">
            <!-- Burger -->
            <div class="site-header__burger" @mouseEnter="menuActive = true" @click="menuActive = !menuActive" :class="{active: menuActive, visible: burgerDesktop}">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
            <nav class="site-header__menu-links" :class="{active: menuActive, hide: burgerDesktop}" @click="menuActive = false" @mouseLeave="menuActive = false">
                <a href="#concept">Le concept</a>
                <a href="#produits">Les produits</a>
                <a href="#a-propos">À propos</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>