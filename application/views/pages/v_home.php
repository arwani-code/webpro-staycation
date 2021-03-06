<?php foreach($this->cart->contents() as $items): ?>
  <h1><?= $items["name"]; ?>
  </h1>
<?php endforeach; ?>
  


<!-- Navbar -->
    <section>
      <nav
        class="
          navbar navbar-expand-lg navbar-light
          bg-light bg-white
          pt-lg-40
          pb-lg-40
          pt-50
          pb-50
        "
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <svg
              width="60"
              height="60"
              viewBox="0 0 60 60"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <mask
                id="mask0"
                mask-type="alpha"
                maskUnits="userSpaceOnUse"
                x="0"
                y="0"
                width="60"
                height="60"
              >
                <circle cx="30" cy="30" r="30" fill="#3546AB" />
              </mask>
              <g mask="url(#mask0)">
                <circle cx="30" cy="30" r="30" fill="#00BAFF" />
                <path
                  d="M41.5001 35.0001C52.3001 38.2001 49.6668 48.0001 47.0001 52.5001L71.0001 60.5001L79.5001 -12.9999C63.6667 -13.8333 29.5001 -14.9999 19.5001 -12.9999C7.00007 -10.4999 13.5001 4.00006 12.0001 14.0001C10.5001 24.0001 28.0001 31.0001 41.5001 35.0001Z"
                  fill="#4D17E2"
                />
                <path
                  d="M54.495 47.785C54.495 51.285 53.655 54.54 51.975 57.55C50.295 60.56 47.74 63.01 44.31 64.9C40.88 66.79 36.645 67.735 31.605 67.735C26.705 67.735 22.33 66.86 18.48 65.11C14.7 63.29 11.655 60.84 9.345 57.76C7.105 54.61 5.81 51.04 5.46 47.05H15.645C15.855 49.15 16.555 51.215 17.745 53.245C19.005 55.205 20.755 56.85 22.995 58.18C25.305 59.44 28.07 60.07 31.29 60.07C35.49 60.07 38.71 58.95 40.95 56.71C43.19 54.47 44.31 51.6 44.31 48.1C44.31 45.09 43.505 42.64 41.895 40.75C40.355 38.86 38.43 37.39 36.12 36.34C33.81 35.22 30.66 34.03 26.67 32.77C21.98 31.23 18.2 29.795 15.33 28.465C12.53 27.065 10.115 25 8.085 22.27C6.125 19.54 5.145 15.935 5.145 11.455C5.145 7.60499 6.055 4.20999 7.875 1.27C9.765 -1.67 12.425 -3.945 15.855 -5.555C19.355 -7.165 23.45 -7.97 28.14 -7.97C35.42 -7.97 41.195 -6.185 45.465 -2.615C49.735 0.884996 52.22 5.365 52.92 10.825H42.63C42.07 7.885 40.565 5.295 38.115 3.055C35.665 0.814997 32.34 -0.305003 28.14 -0.305003C24.29 -0.305003 21.21 0.709996 18.9 2.73999C16.59 4.69999 15.435 7.5 15.435 11.14C15.435 14.01 16.17 16.355 17.64 18.175C19.18 19.925 21.07 21.325 23.31 22.375C25.55 23.355 28.63 24.475 32.55 25.735C37.31 27.275 41.125 28.745 43.995 30.145C46.935 31.545 49.42 33.68 51.45 36.55C53.48 39.35 54.495 43.095 54.495 47.785Z"
                  fill="white"
                />
              </g>
            </svg>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
              <li class="nav-item my-auto">
                <a class="nav-link active" aria-current="page" href="<?= base_url("/"); ?>
                ">Home</a>
              </li>
              <li class="nav-item my-auto">
                <a class="nav-link" href="#browse-by"
                role="button">Browse by</a>
              </li>
              <li class="nav-item my-auto">
                <a class="nav-link" href="#stories"
                role="button">Stories</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- Header -->
    <section class="header pt-lg-60 pb-50">
      <div class="container-xxl container-fluid">
        <div class="row gap-lg-0 gap-5">
          <div class="col-lg-6 col-12 my-auto">
            <p class="text-support text-lg color-palette-2">Staycation</p>
            <h1 class="header-title color-palette-1 fw-bold">
            Forget, Busy Work 
              <br class="d-sm-block d-none" />
              <span class="underline-blue">Start Next</span> Vacation
            </h1>
            <p class="mt-30 mb-40 text-lg color-palette-1">
            We provide what you need to enjoy your
            <br
                class="d-md-block d-none"
              />
              holiday with family.
              Time to make another 
            memorable moments.
            </p>
            <div class="d-flex flex-lg-row flex-column gap-4">
              <a
                class="btn btn-get text-lg text-white rounded-pill"
                href="#feature"
                role="button"
                >Get Started</a
              >
              <a
                class="btn-learn text-lg color-palette-1 my-auto text-center"
                href="#"
                role="button"
                >Learn More</a
              >
            </div>
          </div>
          <div class="col-lg-6 col-12 d-lg-block d-none">
            <div
              class="
                d-flex
                justify-content-lg-end justify-content-center
                me-lg-5
              "
            >
              <div class="position-relative" data-aos="zoom-in">
                <img src="<?= base_url(); ?>assets/img/Header-1.jpg" class="h-100 img-fluid" alt="" />
                <div class="card left-card position-absolute border-0">
                  <div class="d-flex align-items-center mb-18 gap-2">
                     <img
                      src="<?= base_url(); ?>assets/img/Header-user.png"
                      width="60"
                      height="70"
                      class="rounded-pill"
                      alt=""
                    />
                    <div>
                      <p class="text-sm fw-medium color-palette-1 m-0">
                        Arwani
                      </p>
                      <p class="text-xs fw-light color-palette-2 m-0">
                      Free Spirit
                      </p>
                    </div>
                  </div>
                  <div class="d-flex gap-2">
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                  </div>
                </div>
                <!-- <div class="card right-card position-absolute border-0">
                  <div
                    class="
                      position-relative
                      d-flex
                      flex-row
                      justify-content-center
                      mb-25
                    "
                  >
                    <img
                      src="<?= base_url(); ?>assets/img/logo.png"
                      class="rounded-pill bg-dark"
                      alt=""
                    />
                    <p
                      class="
                        right-card-support
                        text-white text-xxs text-center
                        position-absolute
                        m-0
                      "
                    >
                      New
                    </p>
                  </div>
                  <div>
                    <p
                      class="text-sm text-center m-1 fw-medium color-palette-1"
                    >
                      Vacation
                    </p>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3 Column - Feature -->
    <section id="feature" class="feature pt-50 pb-50">
      <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">
        Steps of the journey to<br />
        achieve pleasure
        </h2>
        <div class="row gap-lg-0 gap-4" data-aos="fade-up">
          <div class="col-lg-4">
            <div class="card feature-card border-0">
              <svg
                class="mb-30"
                width="80"
                height="80"
                viewBox="0 0 80 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <mask
                  id="mask0-icon1"
                  mask-type="alpha"
                  maskUnits="userSpaceOnUse"
                  x="0"
                  y="0"
                  width="80"
                  height="80"
                >
                  <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                </mask>
                <g mask="url(#mask0-icon1)">
                  <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                  <mask
                    id="mask1"
                    mask-type="alpha"
                    maskUnits="userSpaceOnUse"
                    x="-12"
                    y="23"
                    width="67"
                    height="73"
                  >
                    <path
                      d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z"
                      fill="#4D17E2"
                    />
                  </mask>
                  <g mask="url(#mask1)">
                    <path
                      d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z"
                      fill="#695DE9"
                    />
                    <path
                      d="M37 55H-4"
                      stroke="white"
                      stroke-width="4"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M23 64L-4 64"
                      stroke="#B7B0F4"
                      stroke-width="4"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <rect
                      x="23"
                      y="13"
                      width="52"
                      height="34"
                      rx="13"
                      fill="#5C52C7"
                    />
                  </g>
                  <rect
                    x="27"
                    y="16"
                    width="41"
                    height="27"
                    rx="13"
                    fill="#2B2467"
                  />
                  <circle
                    cx="47.5"
                    cy="29.5"
                    r="5.5"
                    stroke="white"
                    stroke-width="4"
                  />
                </g>
              </svg>
              <p class="fw-semibold text-2xl mb-2 color-palette-1">1. Start</p>
              <p class="text-lg color-palette-1 mb-0">
                Pilih salah satu tempat<br />
                favorite yang kamu inginkan
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card feature-card border-0">
              <svg
                class="mb-30"
                width="80"
                height="80"
                viewBox="0 0 80 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <mask
                  id="mask0-icon2"
                  mask-type="alpha"
                  maskUnits="userSpaceOnUse"
                  x="0"
                  y="0"
                  width="80"
                  height="80"
                >
                  <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                </mask>
                <g mask="url(#mask0-icon2)">
                  <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                  <rect
                    x="-14"
                    y="16"
                    width="62"
                    height="82"
                    rx="16"
                    fill="#695DE9"
                  />
                  <path
                    d="M32 36H5"
                    stroke="white"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M27 45L9 45"
                    stroke="#B7B0F4"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <rect
                    x="56"
                    y="37"
                    width="49"
                    height="75"
                    rx="16"
                    fill="#2B2467"
                  />
                  <path
                    d="M97 50H70"
                    stroke="white"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M92 59L74 59"
                    stroke="#6B63AC"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </g>
              </svg>
              <p class="fw-semibold text-2xl mb-2 color-palette-1">
                2. planning
              </p>
              <p class="text-lg color-palette-1 mb-0">
                Atur jadwal keberangkatan<br />
                yang sudah kamu siapkan
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card feature-card border-0">
              <svg
                class="mb-30"
                width="80"
                height="80"
                viewBox="0 0 80 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <mask
                  id="mask0-icon3"
                  mask-type="alpha"
                  maskUnits="userSpaceOnUse"
                  x="0"
                  y="0"
                  width="80"
                  height="80"
                >
                  <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                </mask>
                <g mask="url(#mask0-icon3)">
                  <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                  <rect
                    x="13"
                    y="25"
                    width="54"
                    height="61"
                    rx="16"
                    fill="#695DE9"
                  />
                  <path
                    d="M50 46L50 68"
                    stroke="white"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M40 54L40 68"
                    stroke="#B7B0F4"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M30 60L30 68"
                    stroke="#B7B0F4"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <circle cx="40" cy="26" r="14" fill="#2B2467" />
                  <path
                    d="M39.0489 18.927C39.3483 18.0057 40.6517 18.0057 40.9511 18.9271L42.0206 22.2188C42.1545 22.6309 42.5385 22.9098 42.9717 22.9098H46.4329C47.4016 22.9098 47.8044 24.1494 47.0207 24.7188L44.2205 26.7533C43.87 27.0079 43.7234 27.4593 43.8572 27.8713L44.9268 31.1631C45.2261 32.0844 44.1717 32.8506 43.388 32.2812L40.5878 30.2467C40.2373 29.9921 39.7627 29.9921 39.4122 30.2467L36.612 32.2812C35.8283 32.8506 34.7739 32.0844 35.0732 31.1631L36.1428 27.8713C36.2766 27.4593 36.13 27.0079 35.7795 26.7533L32.9793 24.7188C32.1956 24.1494 32.5984 22.9098 33.5671 22.9098H37.0283C37.4615 22.9098 37.8455 22.6309 37.9794 22.2188L39.0489 18.927Z"
                    fill="white"
                  />
                </g>
              </svg>
              <p class="fw-semibold text-2xl mb-2 color-palette-1">
                3. to infinity
              </p>
              <p class="text-lg color-palette-1 mb-0">
                Bersenang senang tanpa<br />
                batas waktu yang merelakan
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 5 Column - Featured -->
    <section id="browse-by" class="featured-game pt-50 pb-50">
      <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 mb-30">
          Most Picked
        </h2>
        <div
          class="
            d-flex
            flex-row flex-lg-wrap
            overflow-setting
            justify-content-lg-between
            gap-lg-3 gap-4
          "
          data-aos="fade-up"
        >
        <?php foreach($mostpickeds as $mostpicked): ?>
          <div class="featured-game-card position-relative">
            <a href="<?= base_url(); ?>public_controller/detail_mostpicked/<?= $mostpicked->id; ?>
            ">
              <div class="blur-sharp">
                <img
                  src="<?= base_url(); ?>assets/img/<?= $mostpicked->imageUrl; ?>
                  "
                  width="205"
                  height="270"
                  alt=""
                />
              </div>
              <div class="cover position-absolute bottom-0 m-32">
                <div
                  class="
                    d-flex
                    flex-column
                    h-100
                    justify-content-between
                    text-decoration-none
                  "
                >
                  <div class="game-icon mx-auto">
                  </div>
                  <div>
                    <p class="fw-semibold text-white text-xl m-0">
                    <?= $mostpicked->name; ?>
                    
                    </p>
                    <p class="fw-light text-white m-0"><?= $mostpicked->city; ?>
                    , <?= $mostpicked->country; ?>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
          
        </div>
      </div>
    </section>

    <!-- 5 Column - Featured -->
    <section id="browse-by" class="featured-game pt-45 pb-50">
      <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 mb-30">
          Houses with beauty backyard
        </h2>
        <div
          class="
            d-flex
            flex-row flex-lg-wrap
            overflow-setting
            justify-content-lg-between
            gap-lg-3 gap-4
          "
          data-aos="fade-up"
        >
        <?php foreach($houses as $house): ?>
          <div class="featured-game-card position-relative">
            <a href="<?= base_url(); ?>public_controller/detail_houses/<?= $house->id; ?>
            ">
              <div class="blur-sharp">
                <img
                  src="<?= base_url(); ?>assets/img/<?= $house->imageUrl; ?>
                  "
                  width="205"
                  height="270"
                  alt=""
                />
              </div>
              <div class="cover position-absolute bottom-0 m-32">
                <div
                  class="
                    d-flex
                    flex-column
                    h-100
                    justify-content-between
                    text-decoration-none
                  "
                >
                  <div class="game-icon mx-auto">
                  </div>
                  <div>
                    <p class="fw-semibold text-white text-xl m-0">
                      <?= $house->name; ?>
                    </p>
                    <p class="fw-light text-white m-0"><?= $house->city; ?>
                    , <?= $house->country; ?>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 5 Column - Featured -->
    <section id="browse-by" class="featured-game pt-45 pb-50">
      <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 mb-30">
        Hotels with large living room
        </h2>
        <div
          class="
            d-flex
            flex-row flex-lg-wrap
            overflow-setting
            justify-content-lg-between
            gap-lg-3 gap-4
          "
          data-aos="fade-up"
        >
        <?php foreach($hotels as $hotel): ?>
          <div class="featured-game-card position-relative">
            <a href="<?= base_url(); ?>public_controller/detail_hotels/<?= $hotel->id; ?>
            ">
              <div class="blur-sharp">
                <img
                  src="<?= base_url(); ?>assets/img/<?= $hotel->imageUrl; ?>
                  "
                  width="205"
                  height="270"
                  alt=""
                />
              </div>
              <div class="cover position-absolute bottom-0 m-32">
                <div
                  class="
                    d-flex
                    flex-column
                    h-100
                    justify-content-between
                    text-decoration-none
                  "
                >
                  <div class="game-icon mx-auto">
                  </div>
                  <div>
                    <p class="fw-semibold text-white text-xl m-0">
                      <?= $hotel->name; ?>
                    </p>
                    <p class="fw-light text-white m-0"><?= $hotel->city; ?>
                    , <?= $hotel->country; ?>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Reached -->
    <section class="reached pt-50 pb-50">
      <div class="container-fluid">
        <div
          class="
            d-flex
            flex-lg-row flex-column
            align-items-center
            justify-content-center
            gap-lg-0 gap-4
          "
        >
        <?php foreach($data as $val): ?>      
          <div class="me-lg-35">
            <p
              class="
                text-4xl text-lg-start text-center
                color-palette-1
                fw-bold
                m-0
              "
            >
            <?= $val->visitors; ?>
            </p>
            <p class="text-lg text-lg-start text-center color-palette-2 m-0">
            visitors
            </p>
          </div>
          <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
          <div
            class="
              horizontal-line
              mt-6
              mb-6
              me-lg-35
              ms-lg-35
              d-lg-none d-block
            "
          ></div>
          <div class="me-lg-35 ms-lg-35">
            <p
              class="
                text-4xl text-lg-start text-center
                color-palette-1
                fw-bold
                m-0
              "
            >
              <?= $val->booking; ?>
            </p>
            <p class="text-lg text-lg-start text-center color-palette-2 m-0">
            booking transaction
            </p>
          </div>
          <div
            class="
              horizontal-line
              mt-6
              mb-6
              me-lg-35
              ms-lg-35
              d-lg-none d-block
            "
          ></div>
          <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
          <div class="me-lg-35 ms-lg-35">
            <p
              class="
                text-4xl text-lg-start text-center
                color-palette-1
                fw-bold
                m-0
              "
            >
              <?= $val->happy; ?>
            </p>
            <p class="text-lg text-lg-start text-center color-palette-2 m-0">
              Happy Travelers
            </p>
          </div>
          <div
            class="
              horizontal-line
              mt-6
              mb-6
              me-lg-35
              ms-lg-35
              d-lg-none d-block
            "
          ></div>
          <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
          <div class="me-lg-35 ms-lg-35">
            <p
              class="
                text-4xl text-lg-start text-center
                color-palette-1
                fw-bold
                m-0
              "
            >
              <?= $val->rating; ?>
            </p>
            <p class="text-lg text-lg-start text-center color-palette-2 m-0">
              Rating Worldwide
            </p>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Story -->
    <section id="stories" class="story pt-50 pb-50">
      <div class="container-xxl container-fluid">
        <?php foreach($reviews as $review): ?>
        <div class="row align-items-center px-lg-5 mx-auto gap-lg-0 gap-4">
          <div
            class="
              col-lg-7 col-12
              d-lg-flex d-none
              justify-content-lg-end
              pe-lg-60
            "
            data-aos="zoom-in"
          >
            <img
              src="<?= base_url(); ?>assets/img/<?= $review->imageUrl; ?>
              "
              width="412"
              height="252"
              class="img-fluid"
              alt=""
            />
          </div>
          <div class="col-lg-5 col-12 ps-lg-60">
            <div class="">
              <h2 class="text-4xl fw-bold color-palette-1 mb-30">
                <?= $review->name; ?>
                <br />
              </h2>
              <div class="d-flex my-3 gap-2">
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                    <svg
                      width="24"
                      height="22"
                      viewBox="0 0 24 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                        fill="#FEBD57"
                      />
                    </svg>
                  </div>
              <p class="text-lg color-palette-1 mb-30">
              <?= $review->description; ?>...
              </p>
              <div class="d-md-block d-flex flex-column w-100">
                <a
                  class="btn btn-read text-lg rounded-pill"
                  href="#"
                  role="button"
                  >Read Story</a
                >
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        
      </div>
    </section>
