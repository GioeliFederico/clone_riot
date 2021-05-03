<x-layout>

    <header id="header-custom">
        <video autoplay muted loop id="header-video-bg">
          <source
            src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/it-it/production/it-it/static/hero-0632cbf2872c5cc0dffa93d2ae8a29e8.webm"
            type="video/webm"
          />
        </video>
        <div id="header-video-bg-filter"></div>
        <video autoplay muted loop id="header-video-main">
          <source
            src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/it-it/production/it-it/static/hero-0632cbf2872c5cc0dffa93d2ae8a29e8.webm"
            type="video/webm"
          />
        </video>
        <!-- <div id="header-lol"></div> -->
        <div id="header-border-main"></div>
        <div id="header-border-main-black"></div>
        <!-- <button class="btn btn-secondary"></button> -->
    </header>

    <div id="last-news" class="karla d-flex align-items-end flex-column">
        <div class="side-text d-flex align-items-center">
          <p height="15">NOTIZIE IN EVIDENZA</p>
          <p class="ps-2">
            <svg height="15" width="20">
              <line
                x1="0"
                x2="20"
                y1="8"
                y2="8"
                style="stroke: black; stroke-width: 0.5"
              />
            </svg>
          </p>
        </div>

        <div class="container-fluid card-container d-flex justify-content-center">
          <div
            id="row-last-news"
            class="row align-items-end justify-content-around"
          >
            <div
              class="card card-last-news col-12 col-md-4 d-flex flex-row justify-content-around"
            >
              <div class="card-border"></div>
              <div class="card-img-container">
                <!-- <img src="./media/Kaisa_0.jpg" alt="" class="card-img" /> -->
                <div id="card1-img" class="card-img"></div>
              </div>
              <div class="card-body card-body-custom">
                <h6
                  class="card-subtitle subtitle-last-news mb-2 text-muted karla"
                >
                  AGGIORNAMENTI DI GIOCO
                </h6>
                <h5 class="card-title fw-bold fs-5 karla">
                  Riassuto di Teamfight Tactics: Giudizio
                </h5>
                <p class="card-text text-last-news montserrat">
                  Tutte le classi, le origini e i campioni in arrivo su Teamfight
                  Tactics: Giudizio.
                </p>
              </div>
            </div>
            <div
              class="card card-last-news col-12 col-md-4 d-flex flex-row justify-content-around"
            >
              <div class="card-border"></div>
              <div class="card-img-container">
                <!-- <img src="./media/Kaisa_0.jpg" alt="" class="card-img" /> -->
                <div id="card2-img" class="card-img"></div>
              </div>
              <div class="card-body card-body-custom">
                <h6
                  class="card-subtitle subtitle-last-news mb-2 text-muted karla"
                >
                  MEDIA<!--  -->
                </h6>
                <h5 class="card-title fw-bold fs-5 karla">
                  Uccisori Fortuna | Consigli tattici - Teamfight Tactics
                </h5>
                <p class="card-text text-last-news montserrat">
                  Utilizzate le unità Fortuna per accumulare oro da spendere
                  sull'indistruttibile formazione degli Uccisori!
                </p>
              </div>
            </div>
            <div
              id="card3-last-news"
              class="card card-last-news col-12 col-md-4 d-flex flex-row justify-content-around"
            >
              <div class="card-border"></div>
              <div class="card-img-container">
                <!-- <img src="./media/Kaisa_0.jpg" alt="" class="card-img" /> -->
                <div id="card3-img" class="card-img"></div>
              </div>
              <div class="card-body card-body-custom">
                <h6
                  class="card-subtitle subtitle-last-news mb-2 text-muted karla"
                >
                  DEV
                </h6>
                <h5 class="card-title fw-bold fs-5 karla">
                  Commenti sul gameplay: 16/04
                </h5>
                <p class="card-text text-last-news montserrat">
                  Come scegliamo i campioni da corsia a cui applicare modifiche
                  nella giungla
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-100 d-flex justify-content-end"><p>VEDI TUTTO</p></div>
    </div>

    {{-- <div
    id="champions-header"
    class="container-fluid d-flex flex-column align-items-center"
    >
        <div><h2 class="karla">CHOOSE YOUR</h2></div>
        <div><h1 class="karla">CHAMPIONS</h1></div>
        <div><p class="monserrat">With more than 140 champions, you’ll find the perfect match for your playstyle. Master one, or master them all.</p></div>
    </div> --}}

    <div id="circle-animation">
        <img
          id="circle-img"
          class="mx-auto"
          src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/assassin-d64d3ffdda15e1eed637aefe6a2c7fee.png"
          alt=""
        />
        <div id="circle-img-transition-y">
        </div>
        <div id="circle-img-transition-x">
        </div>
        <div id="circle-element" class="active">
          <div id="inner-circle"></div>
          <div class="circle1"></div>
          <div class="circle2"></div>
          <div class="circle3"></div>
        </div>
    </div>

    <div id="role-container" class="container">
        <div class="mt-5 text-center" style="z-index: 100"><h5 class="karla" >AKALI</h5></div>
        <div class="row role-row bg-white align-items-end justify-content-center">
            <div class="col-2 role-item d-flex flex-column align-items-center position-relative">
                <svg class="role-svg-icon" viewBox="0 0 100 100"><path d="M56.59 73.71l1.67-2.88c5.75-9.34 5.51-16 3.83-20.59a39.78 39.78 0 01-9.1 16 2 2 0 01-1.43.48H48.2a2.17 2.17 0 01-1.67-.72 39.78 39.78 0 01-9.1-16c-1.68 4.55-1.68 11.26 3.83 20.59l1.68 2.88-3.36 5.75 10.06 17.72L59.7 79.22z"></path><path d="M73.11 38.74c-3.35-4.31-6-10-6-18.91 0-4.07-3.59-8.15-7.66-12-4.79-4.31-5.75-5.74-9.58-5.74s-4.79 1.43-9.34 5.74c-4.07 3.83-7.66 7.91-7.66 12 0 8.86-2.88 14.6-6 18.68L12.76 52.87 2.23 45.69v12.93S2.47 84 39.58 97.89c0 0-14.13-7.18-16.28-31.13-.24-1.67-.24-9.1-.24-10.29A119.77 119.77 0 0036.71 74c-.72-1.2-1.44-2.64-2.16-3.83-5-10.54-4.07-18.2-1.67-23.47a22.77 22.77 0 017.42-8.86l9.58 9.58 9.58-9.58a22.77 22.77 0 017.42 8.86c2.4 5.27 3.59 12.93-1.43 23.23-.72 1.38-1.45 2.58-2.16 4.07a119.77 119.77 0 0013.65-17.53c0 1.19 0 8.62-.24 10.29-2.39 23.95-16.28 31.13-16.28 31.13C97.53 84 97.77 58.62 97.77 58.62V45.69l-10.53 7.18z"></path></svg>
                <svg class="role-svg-border" viewBox="0 0 100 100"><path d="M59.84 7.78L50 17.63l-4.43-4.43-5.41-5.42a46.63 46.63 0 1019.68 0zm-12 12L50 22l2.2-2.19 4.67-4.67a38.86 38.86 0 11-13.74 0zM50 96.89a43.52 43.52 0 01-10.82-85.68l2.59 2.59a40.42 40.42 0 1016.46 0l2.59-2.59A43.52 43.52 0 0150 96.89z"></path><path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path></svg>
                <p class="karla mt-3">ASSASSINS</p>
                <svg class="role-svg-point" height="10" width="10"><circle cx="5" cy="5" r="5" stroke="transparent" fill="gray" /></svg>
            </div>
            <div class="col-2 role-item d-flex flex-column align-items-center position-relative">
                <svg class="role-svg-icon"  viewBox="0 0 100 100"><path d="M67.84 56.35v5.5c8.62-8.62 14.37 0 14.37 0C112.14 40.78 90.35 2 90.35 2s-.72 17.24-15.08 27.77v16.52c-.24 4.79-3.84 7.9-7.43 10.06M17.79 62.09s4.07-6.46 10.78-2.63L20.91 48.2l6.7-16c-17.24-10.54-18-29.93-18-29.93S-12.14 41 17.79 62.09M26.89 83.89l5.51-18.68-.24-.48L19.23 77.9A17.78 17.78 0 017.5 83.17H3l-1 2.39 12 11.5zM92.27 83.89a16.24 16.24 0 01-11.74-5.27L68.8 66.88l3.83 17.72L85.8 98l12-11.49-1-2.4zM55.87 42.7c0 .24-.24.48-.24.71h.72c5.75.48 7.66 2.64 9.1 7.67a9.35 9.35 0 002.39-1.92c1-1 1.68-1.67 1.68-2.63V28.09a2 2 0 00-1.68-1.92l-31.37-5.74H36a2.39 2.39 0 00-2.39 2.39v6.71l24.9 3.35z"></path><path d="M60.18 54c-1.2-5.27-1.44-4.55-5.75-4.79L40.78 48v-3.87h5.51A4.09 4.09 0 0050.36 41l1-3.35L32.4 35l-5 12.22 11.74 17-5.54 18.47L49.88 98l16.53-15.07s-6.23-28.5-6.23-29M49.88 2.23l-4.79 10.29 4.79 3.83 4.79-3.83zM62.1 9.41l1.43 6h6l2.87-11zM30.25 15.4h6l.24-.72 1.2-5.27-10.3-5z"></path></svg>
                <svg class="role-svg-border" viewBox="0 0 100 100"><path d="M59.84 7.78L50 17.63l-4.43-4.43-5.41-5.42a46.63 46.63 0 1019.68 0zm-12 12L50 22l2.2-2.19 4.67-4.67a38.86 38.86 0 11-13.74 0zM50 96.89a43.52 43.52 0 01-10.82-85.68l2.59 2.59a40.42 40.42 0 1016.46 0l2.59-2.59A43.52 43.52 0 0150 96.89z"></path><path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path></svg>
                <p class="karla mt-3">FIGHTERS</p>
                <svg class="role-svg-point" height="10" width="10"><circle cx="5" cy="5" r="5" stroke="transparent" fill="gray" /></svg>
            </div>
            <div class="col-2 role-item d-flex flex-column align-items-center position-relative">
                <svg class="role-svg-icon"  viewBox="0 0 100 100"><path d="M84.48 77.3h13.41l-3.83-12.93h-9.58a36.73 36.73 0 00-27.54 12.45L50 85l-6.94-8.14a36.73 36.73 0 00-27.54-12.49H5.94L2.11 77.3h13.41a36.73 36.73 0 0127.54 12.45l.71.72h-9.1v7.42h30.9v-7.42h-9.1l.71-.72a35.85 35.85 0 0127.3-12.45"></path><path d="M56.23 54.31L50 62.21l-6.23-7.9a5.42 5.42 0 01-.24-6.47L50 37.31l6.47 10.53a5.42 5.42 0 01-.24 6.47M42.58 28.93l-7.91 12.69a13.37 13.37 0 00.72 15.09L50 75.14l14.61-18.43a13 13 0 00.72-15.09L50 17l-.48.72a5.58 5.58 0 01-4.31 1.68c-4.07 0-7.18-8.62 4.55-17.24 0 0-28.74 5.5-14.85 30.41z"></path></svg>
                <svg class="role-svg-border" viewBox="0 0 100 100"><path d="M59.84 7.78L50 17.63l-4.43-4.43-5.41-5.42a46.63 46.63 0 1019.68 0zm-12 12L50 22l2.2-2.19 4.67-4.67a38.86 38.86 0 11-13.74 0zM50 96.89a43.52 43.52 0 01-10.82-85.68l2.59 2.59a40.42 40.42 0 1016.46 0l2.59-2.59A43.52 43.52 0 0150 96.89z"></path><path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path></svg>
                <p class="karla mt-3">MAGES</p>
                <svg class="role-svg-point" height="10" width="10"><circle cx="5" cy="5" r="5" stroke="transparent" fill="gray" /></svg>
            </div>
            <div class="col-2 role-item d-flex flex-column align-items-center position-relative">
                <svg class="role-svg-icon"  viewBox="0 0 100 100"><path d="M28.69 27.25h6.94l1.92-6.94-13.41-7.91zM71.31 27.25l4.55-14.85-13.41 7.91 1.92 6.94zM71.31 35.39c-1.43 0-12.21-3.83-12.21-3.83L50 42.34l-9.1-10.78s-10.54 3.83-12.21 3.83c-7.67 0-4.79-7.18-4.79-7.18S4.26 48.32 2.11 64.13c0 0 5.74-8.86 24.42-13.17a26.22 26.22 0 0013.89 12.93c-.72-3.11-1.44-6.71-2.15-10.06a22.36 22.36 0 01-3.84-4.31c.72 0 7.19-.72 8.15-.72.71 2.64 4.55 28.74 4.55 28.74l-7 10.3v10L50 93.82l9.82 4.07V87.6l-7-10.3s3.84-26.1 4.55-28.74c.72 0 7.19.72 8.15.72a16.52 16.52 0 01-3.84 4.31 98.08 98.08 0 00-2.15 10.06 25.33 25.33 0 0013.94-12.93c18.68 4.55 24.42 13.17 24.42 13.17C95.74 48.32 76.1 28 76.1 28s2.88 7.42-4.79 7.42"></path><path d="M50 2.11l-7.66 21.31h.24L50 33.24l7.42-9.82h.24z"></path></svg>
                <svg class="role-svg-border" viewBox="0 0 100 100"><path d="M59.84 7.78L50 17.63l-4.43-4.43-5.41-5.42a46.63 46.63 0 1019.68 0zm-12 12L50 22l2.2-2.19 4.67-4.67a38.86 38.86 0 11-13.74 0zM50 96.89a43.52 43.52 0 01-10.82-85.68l2.59 2.59a40.42 40.42 0 1016.46 0l2.59-2.59A43.52 43.52 0 0150 96.89z"></path><path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path></svg>
                <p class="karla mt-3">MARKSMEN</p>
                <svg class="role-svg-point" height="10" width="10"><circle cx="5" cy="5" r="5" stroke="transparent" fill="gray" /></svg>
            </div>
            <div class="col-2 role-item d-flex flex-column align-items-center position-relative">
                <svg class="role-svg-icon"  viewBox="0 0 100 100"><path d="M90.4 2.11c0 27.3-25.4 36.63-25.4 36.63L60.94 61a8.39 8.39 0 00-.48 2.39 6.95 6.95 0 0013.89 0 6.7 6.7 0 00-5.75-6.7c6.71-11.5 16.29-6 16.29-6 1.43-1.44 2.63-2.88 3.83-4.07l-7.19-2.88h9.34a38.5 38.5 0 005.75-11.25L87 28.69h10.3a33 33 0 00-6.9-26.58M35.32 38.74S9.93 29.41 9.93 2.11c0 0-9.82 10.77-7.42 26.1h10.3L3.23 32a41.09 41.09 0 004.07 8.9h11l-8.61 3.59a39.83 39.83 0 005.27 6s9.58-5.51 16.29 6a6.7 6.7 0 00-5.75 6.7 6.95 6.95 0 1013.41-2.39zM45.14 22.7l2.63-6.7h4.79l2.63 6.94-5 13.89zm-1-16l-7 16 10.15 25.38v23.71l-5 16 5 10H53l5-10-5-16V48.08L63.1 22.7l-7-16z"></path></svg>
                <svg class="role-svg-border" viewBox="0 0 100 100"><path d="M59.84 7.78L50 17.63l-4.43-4.43-5.41-5.42a46.63 46.63 0 1019.68 0zm-12 12L50 22l2.2-2.19 4.67-4.67a38.86 38.86 0 11-13.74 0zM50 96.89a43.52 43.52 0 01-10.82-85.68l2.59 2.59a40.42 40.42 0 1016.46 0l2.59-2.59A43.52 43.52 0 0150 96.89z"></path><path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path></svg>
                <p class="karla mt-3">SUPPORTS</p>
                <svg class="role-svg-point" height="10" width="10"><circle cx="5" cy="5" r="5" stroke="transparent" fill="gray" /></svg>
            </div>
            <div class="col-2 role-item d-flex flex-column align-items-center position-relative">
                <svg class="role-svg-icon"  viewBox="0 0 100 100"><path d="M85.92 63.89L55 90V67.48h7.42v-9.1H37.55v9.1H45v22.75L14.08 63.89 8.33 21l27.54-10.51a39.13 39.13 0 0128.26 0L91.67 21zM66.28 5a47.61 47.61 0 00-32.56 0L2.11 17.19l6.7 49.57L41.86 95A13 13 0 0050 97.89 12.5 12.5 0 0058.14 95l33.05-28.24 6.7-49.57z"></path><path d="M78.74 32.28L62 21.26v5.27H38v-5.27l-16.26 7.19a2.9 2.9 0 00-1.67 3.11l4.31 19.16a3.22 3.22 0 002.15 2.15l11.26 2.4V50h23.94v5.27l11.5-2.4a2.52 2.52 0 002.15-2.15l4.31-15.57a2.39 2.39 0 00-1-2.87M57.42 20.07H42.58L50 11.68z"></path></svg>
                <svg class="role-svg-border" viewBox="0 0 100 100"><path d="M59.84 7.78L50 17.63l-4.43-4.43-5.41-5.42a46.63 46.63 0 1019.68 0zm-12 12L50 22l2.2-2.19 4.67-4.67a38.86 38.86 0 11-13.74 0zM50 96.89a43.52 43.52 0 01-10.82-85.68l2.59 2.59a40.42 40.42 0 1016.46 0l2.59-2.59A43.52 43.52 0 0150 96.89z"></path><path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path></svg>
                <p class="karla mt-3">TANKS</p>
                <svg class="role-svg-point" height="10" width="10"><circle cx="5" cy="5" r="5" stroke="transparent" fill="gray" /></svg>
            </div>
        </div>
    </div>


        {{-- <img
          id="circle-img"
          class="mx-auto"
          src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/assassin-d64d3ffdda15e1eed637aefe6a2c7fee.png"
          alt=""
        />
        <div id="svg-circle-element" class="mx-auto active">
            <svg class="svg-circle1"  style="stroke:black; fill:none; stroke-width:2" width="400" height="400"><path d=" M 396 200 A 196 196 0 0 1 102 370" /></svg>
            <svg class="svg-circle2"  style="stroke:blue; fill:none; stroke-width:2" width="400" height="400"><path d=" M 102 370 A 196 196 120 0 1 102 30" /></svg>
            <svg class="svg-circle3"  style="stroke:green; fill:none; stroke-width:2" width="400" height="400"><path d=" M 102 30 A 196 196 240 0 1 396 200" /></svg>
        </div> --}}


        {{-- <div id="myobj" width="100%" height="100%">
            <svg version="1.1" id="Layer_1" class="svg-circle1"  style="stroke:black; fill:none; stroke-width:2" width="400" height="400">
        <path id="i0" fill="none" stroke="#000000" d=" M 396 200 A 196 196 0 0 0 396 200" />
        <path id="i1" fill="none" stroke="#000000" d=" M 393 234 A 196 196 10 0 1 350 326" />
        <path id="i2" fill="none" stroke="#000000" d=" M 370 298 A 196 196 30 0 1 200 396" />
        <path id="i3" fill="none" stroke="#000000" d=" M 298 370 A 196 196 60 0 1 30 298" />
        </svg></div> --}}

</x-layout>
