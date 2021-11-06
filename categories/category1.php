<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <title>Demo website</title>
</head>

<body>
  <header class="text-gray-700 body-font border-b border-gray-200">
    <div class="
          container
          mx-auto
          flex flex-wrap
          p-5
          flex-col
          md:flex-row
          items-center
        ">
      <a class="
            flex
            title-font
            font-medium
            items-center
            text-gray-900
            mb-4
            md:mb-0
          " href="../index.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">DEMO WEBSITE</span>
      </a>
      <nav class="
            md:ml-auto
            flex flex-wrap
            items-center
            text-base
            justify-center
          ">
        <a href="../index.php" class="mr-5 hover:text-gray-900">Home</a>
        <div class="flex flex-wrap mr-5">
          <div class="w-full sm:w-6/12 md:w-4/12">
            <div class="relative inline-flex align-middle w-full">
              <button class="ease-linear transition-all duration-150" type="button" onclick="openDropdown(event,'dropdown-id')">
                Products
              </button>
              <div class="hidden bg-gray-400 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-2" style="min-width:12rem" id="dropdown-id">
                <a href="http://localhost/nam.com/categories/category1.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap">
                  Category 1
                </a>
                <a href="http://localhost/nam.com/categories/category2.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap">
                  Category 2
                </a>
                <a href="http://localhost/nam.com/categories/category3.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap">
                  Category 3
                </a>
              </div>
            </div>
          </div>
        </div>
        <a href="http://localhost/nam.com/registration.php" class="mr-5 hover:text-gray-900">Register</a>
      </nav>
      <button class="
            inline-flex
            items-center
            bg-gray-200
            border-0
            py-1
            px-3
            focus:outline-none
            hover:bg-gray-300
            rounded
            text-base
            mt-4
            md:mt-0
          ">
        <a href="/nam.com/login_processing.php">
          Sign in
        </a>
      </button>
    </div>
  </header>
  <section class="text-gray-700 body-font">
    <div class="
          container
          mx-auto
          flex
          px-5
          py-24
          md:flex-row
          flex-col
          items-center
        ">
      <div class="
            lg:flex-grow
            md:w-1/2
            lg:pr-24
            md:pr-16
            flex flex-col
            md:items-start md:text-left
            mb-16
            md:mb-0
            items-center
            text-center
          ">
        <h1 class="
              title-font
              sm:text-4xl
              text-3xl
              mb-4
              font-medium
              text-gray-900
            ">
            This is category 1
        </h1>
        <p class="mb-8 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="flex justify-center">
          <button class="
                inline-flex
                text-white
                bg-blue-500
                border-0
                py-2
                px-6
                focus:outline-none
                hover:bg-blue-600
                rounded
                text-lg
              ">
            Button
          </button>
          <button class="
                ml-4
                inline-flex
                text-gray-700
                bg-gray-200
                border-0
                py-2
                px-6
                focus:outline-none
                hover:bg-gray-300
                rounded
                text-lg
              ">
            Button
          </button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 hidden sm:block">
        <div class="flex justify-center items-center">
          <div class="flex relative">
            <div class="
                  w-72
                  h-40
                  bg-green-400
                  transform
                  transition-all
                  skew-x-12
                  -skew-y-12
                  absolute
                  rounded-lg
                "></div>
            <div class="
                  w-72
                  h-40
                  bg-yellow-400
                  transform
                  transition-all
                  skew-x-12
                  -skew-y-12
                  absolute
                  -top-4
                  -left-4
                  rounded-lg
                "></div>
            <div class="
                  w-72
                  h-40
                  bg-red-400
                  transform
                  transition-all
                  skew-x-12
                  -skew-y-12
                  absolute
                  -top-8
                  -left-8
                  rounded-lg
                "></div>
            <div class="
                  w-72
                  h-40
                  bg-black
                  transform
                  transition-all
                  skew-x-12
                  -skew-y-12
                  absolute
                  -top-12
                  -left-12
                  rounded-lg
                "></div>
            <div class="
                  w-72
                  h-40
                  bg-purple-400
                  transform
                  transition-all
                  skew-x-12
                  -skew-y-12
                  absolute
                  -top-16
                  -left-16
                  rounded-lg
                "></div>
            <div class="
                  w-72
                  h-40
                  bg-white
                  flex
                  justify-center
                  items-center
                  border-2 border-black
                  transform
                  transition-all
                  skew-x-12
                  -skew-y-12
                  absolute
                  -top-20
                  -left-20
                  rounded-lg
                ">
              <svg viewBox="0 0 247 31" class="w-auto h-7 sm:h-8">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.517 0C18.712 0 14.46 3.382 12.758 10.146c2.552-3.382 5.529-4.65 8.931-3.805 1.941.482 3.329 1.882 4.864 3.432 2.502 2.524 5.398 5.445 11.722 5.445 6.804 0 11.057-3.382 12.758-10.145-2.551 3.382-5.528 4.65-8.93 3.804-1.942-.482-3.33-1.882-4.865-3.431C34.736 2.92 31.841 0 25.517 0zM12.758 15.218C5.954 15.218 1.701 18.6 0 25.364c2.552-3.382 5.529-4.65 8.93-3.805 1.942.482 3.33 1.882 4.865 3.432 2.502 2.524 5.397 5.445 11.722 5.445 6.804 0 11.057-3.381 12.758-10.145-2.552 3.382-5.529 4.65-8.931 3.805-1.941-.483-3.329-1.883-4.864-3.432-2.502-2.524-5.398-5.446-11.722-5.446z" fill="#06B6D4"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M76.546 12.825h-4.453v8.567c0 2.285 1.508 2.249 4.453 2.106v3.463c-5.962.714-8.332-.928-8.332-5.569v-8.567H64.91V9.112h3.304V4.318l3.879-1.143v5.937h4.453v3.713zM93.52 9.112h3.878v17.849h-3.878v-2.57c-1.365 1.891-3.484 3.034-6.285 3.034-4.884 0-8.942-4.105-8.942-9.389 0-5.318 4.058-9.388 8.942-9.388 2.801 0 4.92 1.142 6.285 2.999V9.112zm-5.674 14.636c3.232 0 5.674-2.392 5.674-5.712s-2.442-5.711-5.674-5.711-5.674 2.392-5.674 5.711c0 3.32 2.442 5.712 5.674 5.712zm16.016-17.313c-1.364 0-2.477-1.142-2.477-2.463a2.475 2.475 0 012.477-2.463 2.475 2.475 0 012.478 2.463c0 1.32-1.113 2.463-2.478 2.463zm-1.939 20.526V9.112h3.879v17.849h-3.879zm8.368 0V.9h3.878v26.06h-3.878zm29.053-17.849h4.094l-5.638 17.849h-3.807l-3.735-12.03-3.771 12.03h-3.806l-5.639-17.849h4.094l3.484 12.315 3.771-12.315h3.699l3.734 12.315 3.52-12.315zm8.906-2.677c-1.365 0-2.478-1.142-2.478-2.463a2.475 2.475 0 012.478-2.463 2.475 2.475 0 012.478 2.463c0 1.32-1.113 2.463-2.478 2.463zm-1.939 20.526V9.112h3.878v17.849h-3.878zm17.812-18.313c4.022 0 6.895 2.713 6.895 7.354V26.96h-3.878V16.394c0-2.713-1.58-4.14-4.022-4.14-2.55 0-4.561 1.499-4.561 5.14v9.567h-3.879V9.112h3.879v2.285c1.185-1.856 3.124-2.749 5.566-2.749zm25.282-6.675h3.879V26.96h-3.879v-2.57c-1.364 1.892-3.483 3.034-6.284 3.034-4.884 0-8.942-4.105-8.942-9.389 0-5.318 4.058-9.388 8.942-9.388 2.801 0 4.92 1.142 6.284 2.999V1.973zm-5.674 21.775c3.232 0 5.674-2.392 5.674-5.712s-2.442-5.711-5.674-5.711-5.674 2.392-5.674 5.711c0 3.32 2.442 5.712 5.674 5.712zm22.553 3.677c-5.423 0-9.481-4.105-9.481-9.389 0-5.318 4.058-9.388 9.481-9.388 3.519 0 6.572 1.82 8.008 4.605l-3.34 1.928c-.79-1.678-2.549-2.749-4.704-2.749-3.16 0-5.566 2.392-5.566 5.604 0 3.213 2.406 5.605 5.566 5.605 2.155 0 3.914-1.107 4.776-2.749l3.34 1.892c-1.508 2.82-4.561 4.64-8.08 4.64zm14.472-13.387c0 3.249 9.661 1.285 9.661 7.89 0 3.57-3.125 5.497-7.003 5.497-3.591 0-6.177-1.607-7.326-4.177l3.34-1.927c.574 1.606 2.011 2.57 3.986 2.57 1.724 0 3.052-.571 3.052-2 0-3.176-9.66-1.391-9.66-7.781 0-3.356 2.909-5.462 6.572-5.462 2.945 0 5.387 1.357 6.644 3.713l-3.268 1.82c-.647-1.392-1.904-2.035-3.376-2.035-1.401 0-2.622.607-2.622 1.892zm16.556 0c0 3.249 9.66 1.285 9.66 7.89 0 3.57-3.124 5.497-7.003 5.497-3.591 0-6.176-1.607-7.326-4.177l3.34-1.927c.575 1.606 2.011 2.57 3.986 2.57 1.724 0 3.053-.571 3.053-2 0-3.176-9.66-1.391-9.66-7.781 0-3.356 2.908-5.462 6.572-5.462 2.944 0 5.386 1.357 6.643 3.713l-3.268 1.82c-.646-1.392-1.903-2.035-3.375-2.035-1.401 0-2.622.607-2.622 1.892z" fill="#000"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="
                title-font
                font-medium
                text-gray-900
                tracking-widest
                text-sm
                mb-3
              ">
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Home</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Products</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Login</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Register</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="
                title-font
                font-medium
                text-gray-900
                tracking-widest
                text-sm
                mb-3
              ">
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="
                title-font
                font-medium
                text-gray-900
                tracking-widest
                text-sm
                mb-3
              ">
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="
                title-font
                font-medium
                text-gray-900
                tracking-widest
                text-sm
                mb-3
              ">
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="
                title-font
                font-medium
                text-gray-900
                tracking-widest
                text-sm
                mb-3
              ">
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="
                title-font
                font-medium
                text-gray-900
                tracking-widest
                text-sm
                mb-3
              ">
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-200">
      <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
        <div class="
              flex
              md:flex-no-wrap
              flex-wrap
              justify-center
              md:justify-start
            ">
          <input class="
                sm:w-64
                w-40
                bg-gray-100
                rounded
                sm:mr-4
                mr-2
                border border-gray-400
                focus:outline-none focus:border-blue-500
                text-base
                py-2
                px-4
              " placeholder="Placeholder" type="text" />
          <button class="
                inline-flex
                text-white
                bg-blue-500
                border-0
                py-2
                px-6
                focus:outline-none
                hover:bg-blue-600
                rounded
              ">
            Button
          </button>
          <p class="
                text-gray-500 text-sm
                md:ml-6 md:mt-0
                mt-2
                sm:text-left
                text-center
              ">
            Bitters chicharrones fanny pack
            <br class="lg:block hidden" />waistcoat blue juice
          </p>
        </div>
        <span class="
              inline-flex
              lg:ml-auto lg:mt-0
              mt-6
              w-full
              justify-center
              md:justify-start md:w-auto
            ">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
    <div class="bg-gray-200">
      <div class="
            container
            mx-auto
            py-4
            px-5
            flex flex-wrap flex-col
            sm:flex-row
          ">
        <p class="text-gray-500 text-sm text-center sm:text-left">
          © 2021 Copyright —
          <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">@namtrhg</a>
        </p>
        <span class="
              sm:ml-auto sm:mt-0
              mt-2
              sm:w-auto
              w-full
              sm:text-left
              text-center text-gray-500 text-sm
            ">Enamel pin tousled raclette tacos irony</span>
      </div>
    </div>
  </footer>
  <a href="https://github.com/mertJF/tailblocks" class="
        rounded-full
        w-12
        h-12
        bg-gray-100
        fixed
        bottom-0
        right-0
        flex
        items-center
        justify-center
        text-gray-800
        mr-8
        mb-8
        shadow-sm
        border-gray-300 border
      " target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
    </svg></a>
  <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
  <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
  <script>
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "BUTTON") {
        element = element.parentNode;
      }
      var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: 'bottom-start'
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</body>

</html>