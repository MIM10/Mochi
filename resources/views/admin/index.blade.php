<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
    <!-- Icon Box -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;">
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Admin Dashboard</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="../pages/dashboard.html">
              <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path
                            class="opacity-60"
                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                          ></path>
                          <path
                            class=""
                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>

          <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/profile.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>customer-support</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(1.000000, 0.000000)">
                          <path class="fill-slate-800 opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                          <path class="fill-slate-800" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                          <path class="fill-slate-800" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href={{ route('logout') }}>
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>spaceship</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(4.000000, 301.000000)">
                          <path
                            class="fill-slate-800"
                            d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                          ></path>
                          <path class="fill-slate-800 opacity-60" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                          <path class="fill-slate-800 opacity-60" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                          <path class="fill-slate-800 opacity-60" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <h6 class="mb-0 font-bold text-xl capitalize">Dashboard</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>
          </div>
        </div>
      </nav>
      <!-- end Navbar -->

      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- cards row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="px-3 mb-6 xl:w-1/5">
            <div class="relative flex flex-col min-w-0 bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4" style="height: 107px;">
                <div class="flex flex-row justify-between -mx-3">
                  <div class="px-3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class='bx bx-bar-chart text-xl relative top-3.5 text-white'></i>
                    </div>
                  </div>
                  <div class="flex justify-end max-w-full w-2/3 px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Pemasukkan</p>
                      <h5 class="mb-0 font-bold">
                        RP 2.5 M
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="px-3 mb-6 xl:w-1/5">
            <div class="relative flex flex-col min-w-0 bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4" style="height: 107px;">
                <div class="flex flex-row justify-between -mx-3">
                  <div class="px-3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class='bx bx-dollar text-xl relative top-3.5 text-white'></i>
                    </div>
                  </div>
                  <div class="flex justify-end max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Pengeluaran</p>
                      <h5 class="mb-0 font-bold">
                        RP 1.3 M
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="px-3 mb-6 xl:w-1/5">
            <div class="relative flex flex-col min-w-0 bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4" style="height: 107px;">
                <div class="flex flex-row justify-between -mx-3">
                  <div class="px-3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class='bx bx-dollar text-xl relative top-3.5 text-white'></i>
                    </div>
                  </div>
                  <div class="flex justify-end max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Transaksi</p>
                      <h5 class="mb-0 font-bold">
                        RP 1.2 M
                        <span class="text-sm leading-normal text-lime-500">+23%</span>
                      </h5>
                      <span class="text-sm leading-normal font-sans font-semibold">since last month</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="px-3 mb-6 xl:w-1/5">
            <div class="relative flex flex-col min-w-0 bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4" style="height: 107px;">
                <div class="flex flex-row justify-between -mx-3">
                  <div class="px-3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class='bx bx-dollar text-xl relative top-3.5 text-white'></i>
                    </div>
                  </div>
                  <div class="flex justify-end max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Pasien</p>
                      <h5 class="mb-0 font-bold">
                        2000
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card5 -->
          <div class="px-3 mb-6 xl:w-1/5">
            <div class="relative flex flex-col min-w-0 bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4" style="height: 107px;">
                <div class="flex flex-row justify-between -mx-3">
                  <div class="px-3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class='bx bx-dollar text-xl relative top-3.5 text-white'></i>
                    </div>
                  </div>
                  <div class="flex justify-end max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Dokter</p>
                      <h5 class="mb-0 font-bold">
                        200
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- cards row 2 -->
        <div class="flex flex-wrap mt-6 -mx-3">
          <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border" style="height: 433px;">
              <div class="flex-auto p-4">
                <h6 class="mt-6 mb-0 ml-2">Pengunjung Bulanan</h6>
                <p class="ml-2 text-sm leading-normal">(<span class="font-bold">+23%</span>) than last week</p>
                <div class="py-4 pr-1 mb-4 bg-gradient-to-tl from-gray-900 to-slate-800 rounded-xl">
                  <div>
                    <canvas id="chart-bars" height="280"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:flex-none lg:w-2/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border" style="height: 433px;">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                    <h6 style="font-size: xx-large;">Projects</h6>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-6 px-0 pb-2">
                <div class="overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">NAME</th>
                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">STATUS</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">DATE</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">PROGRESS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center mr-2">
                              <i class="bx bxs-circle text-xxs"></i>
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Budiono</h6>
                            </div>
                          </div>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex items-center mt-2 avatar-group">
                            <i class='bx bxs-check-circle text-xl mr-1' style="color: #05CD99;"></i>
                            <span>Approved</span>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> 18 April 2021 </span>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">100%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center mr-2">
                              <i class="bx bxs-circle text-xxs"></i>
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Wahyu</h6>
                            </div>
                          </div>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex items-center mt-2 avatar-group">
                            <i class='bx bxs-x-circle text-xl mr-1' style="color: #EE5D50;"></i>
                            <span>Disable</span>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> 18 April 2021 </span>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">10%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/10 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center mr-2">
                              <i class="bx bxs-circle text-xxs"></i>
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Bowo</h6>
                            </div>
                          </div>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex items-center mt-2 avatar-group">
                            <i class='bx bxs-error-circle text-xl mr-1' style="color: #FFCE20;"></i>
                            <span>Error</span>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> 20 May 2021 </span>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">30%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/10 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center mr-2">
                              <i class="bx bxs-circle text-xxs"></i>
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Annisa</h6>
                            </div>
                          </div>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="flex items-center mt-2 avatar-group">
                            <i class='bx bxs-check-circle text-xl mr-1' style="color: #05CD99;"></i>
                            <span>Approved</span>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> 12 Juli 2021 </span>
                        </td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">100%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- cards row 3 -->
        <div class="flex flex-wrap mt-6 -mx-3 box-border">
          <!-- Card Pie Chart -->
          <div class="w-full lg:w-1/3 px-3 mt-0 mb-6 box-border">
            <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border box-border" style="height: 414px;">
              <div class="flex-auto p-4 box-border">
                <!-- Row 1 -->
                <div class="flex justify-between items-center mb-4 box-border">
                  <div class="font-bold">Pie Chart</div>
                  <div>
                    <select class="border border-gray-300 rounded p-1 box-border">
                      <option>Monthly</option>
                    </select>
                  </div>
                </div>
                <!-- Row 2 -->
                <div class="flex justify-center mb-4 box-border">
                  <canvas id="pie-chart" height="240"></canvas>
                </div>
                <!-- Row 3 -->
                <div class="flex justify-between p-4 shadow-soft-md rounded-lg box-border">
                  <!-- Div 1 -->
                  <div class="flex items-center box-border">
                    <i class='bx bxs-circle mr-2' style="color: #3b82f6;"></i>
                    <!-- <div class="w-5 h-5 mr-2 bg-blue-500 rounded-full box-border"></div> -->
                    <div class="flex flex-col box-border">
                      <span class="text-gray-300 box-border text-sm">Pasien</span>
                      <span class="font-bold text-gray-800 text-lg box-border -mt-2">90.91%</span>
                    </div>
                  </div>
                  <!-- Div 2 -->
                  <div class="flex items-center box-border">
                    <i class='bx bxs-circle mr-2' style="color: #ef4444;"></i>
                    <!-- <div class="w-5 h-5 mr-2 bg-red-500 rounded-full box-border"></div> -->
                    <div class="flex flex-col box-border">
                      <span class="text-gray-300 box-border text-sm">Dokter</span>
                      <span class="font-bold text-gray-800 text-lg box-border -mt-2">9.09%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Card Calendar -->
          <div class="w-full lg:w-1/3 px-3 mt-0 mb-6 box-border">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border box-border" style="height: 414px;">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0 box-border">
                <div class="flex justify-between box-border">
                  <div>
                    <select class="border border-gray-300 rounded p-1 box-border">
                      <option>April</option>
                      <option>May</option>
                      <option>June</option>
                    </select>
                  </div>
                  <div>
                    <select class="border border-gray-300 rounded p-1 box-border">
                      <option>2021</option>
                      <option>2022</option>
                      <option>2023</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-6 pb-2 box-border">
                <div class="overflow-x-auto box-border">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500 box-border">
                    <thead class="align-bottom box-border">
                      <tr class="box-border text-center">
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">Mo</th>
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">Tu</th>
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">We</th>
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">Th</th>
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">Fr</th>
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">Sa</th>
                        <th class="font-bold tracking-normal uppercase bg-transparent border-b border-b-solid whitespace-nowrap border-b-gray-600 text-gray-800 opacity-70 box-border">Su</th>
                      </tr>
                    </thead>
                    <tbody class="box-border text-sm">
                      <!-- Add rows for each week in April 2021 -->
                      <tr class="box-border text-center">
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">29</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">30</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">31</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">1</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">2</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">3</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">4</td>
                      </tr>
                      <tr class="box-border text-center">
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">5</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">6</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">7</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">8</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">9</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">10</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">11</td>
                      </tr>
                      <tr class="box-border text-center">
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">12</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">13</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">14</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">15</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">16</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">17</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">18</td>
                      </tr>
                      <tr class="box-border text-center">
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">19</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">20</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">21</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">22</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">23</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">24</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">25</td>
                      </tr>
                      <tr class="box-border text-center">
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">26</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">27</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">28</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">29</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border">30</td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border"></td>
                        <td class="bg-transparent py-4 border-b whitespace-nowrap box-border"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Card Admin -->
          <div class="w-full lg:w-1/3 px-3 mt-0 mb-6 box-border">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border box-border" style="height: 414px;">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0 box-border">
                <div class="flex justify-between items-center box-border">
                  <div class="font-bold text-2xl box-border">Admin</div>
                  <div class="bg-gray-200 p-2 rounded-full cursor-pointer box-border">
                    <i class='bx bx-plus box-border'></i>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-6 px-0 pb-2 box-border">
                <div class="flex justify-between items-center p-4 mx-4 mb-4 shadow-soft-md rounded-lg box-border">
                  <div class="flex items-center box-border">
                    <img src="../assets/img/marie.jpg" alt="Admin 1" class="w-10 h-10 rounded-full box-border mr-2">
                    <div class="ml-2 box-border">
                      <div class="font-bold text-lg box-border">Adela Parkson</div>
                      <div class="text-gray-500 text-sm box-border">Creative Director</div>
                    </div>
                  </div>
                  <div class="box-border">
                    <i class='bx bx-dots-vertical-rounded box-border'></i>
                  </div>
                </div>
                <div class="flex justify-between items-center p-4 mx-4 mb-4 shadow-soft-md rounded-lg box-border">
                  <div class="flex items-center box-border">
                    <img src="../assets/img/bruce-mars.jpg" alt="Admin 2" class="w-10 h-10 rounded-full box-border mr-2">
                    <div class="ml-2 box-border">
                      <div class="font-bold text-lg box-border">Christian Mad</div>
                      <div class="text-gray-500 text-sm box-border">Product Designer</div>
                    </div>
                  </div>
                  <div class="box-border">
                    <i class='bx bx-dots-vertical-rounded box-border'></i>
                  </div>
                </div>
                <div class="flex justify-between items-center p-4 mx-4 mb-4 shadow-soft-md rounded-lg box-border">
                  <div class="flex items-center box-border">
                    <img src="../assets/img/team-4.jpg" alt="Admin 3" class="w-10 h-10 rounded-full box-border mr-2">
                    <div class="ml-2 box-border">
                      <div class="font-bold text-lg box-border">Jason Statham</div>
                      <div class="text-gray-500 text-sm box-border">Junior Graphic Designer</div>
                    </div>
                  </div>
                  <div class="box-border">
                    <i class='bx bx-dots-vertical-rounded box-border'></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end cards -->
    </main>
  </body>
  <!-- plugin for charts  -->
  <script src="../assets/js/plugins/chartjs.min.js" async></script>
  <script src="../assets/js/chart.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
