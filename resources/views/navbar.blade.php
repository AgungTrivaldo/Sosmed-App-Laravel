<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>Tulong</title>
  <style>
    .main-content {
      display: flex;
      flex: 1;
      overflow: hidden;
    }
    .left-section, .right-section {
      position: fixed;
      top: 60px; /* Adjust this value based on the height of your navbar */
      bottom: 0;
      width: 25%;
      overflow-y: auto;
    }
    .left-section {
      left: 0;
    }
    .right-section {
      right: 0;
    }
    .middle-section {
      flex: 1;
      margin-left: 25%;
      margin-right: 25%;
      overflow-y: auto;
    }
  </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
  <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 fixed top-0 w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Tulong</span>
      </a>
      <form class="w-full max-w-md">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
          </div>
          <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for friends, posts, or hashtags..." required />
          <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
      </form>
      <ul>
        <li class="flex items-end">
          <a href="#" class="font-semibold block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="main-content mt-[60px]">
    <div class="left-section bg-gray-100 dark:bg-gray-800 p-4">
      <!-- Recommend section -->
      <h5 class="font-bold mb-4">Recommended for you</h5>
      <!-- Post cards -->
      <div class="w-full mb-4">
        <!-- Post card -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden mb-4">
          <!-- Post content -->
          <div class="p-4">
            <!-- Post title -->
            <h5 class="font-bold mb-4">#DikaGay</h5>
            <!-- Post description -->
            <p class="text-sm text-gray-600 dark:text-gray-300"></p>
            <!-- Post image -->
            <img src="/path/to/post/image.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="middle-section bg-gray-100 dark:bg-gray-800 p-4">
      <!-- Post section -->
      <h5 class="font-bold mb-4">Recent Posts</h5>
      <!-- Post cards -->
      <div class="w-full mb-4">
        <!-- Post card -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden mb-4">
          <!-- Post content -->
          <div class="p-4">
            <!-- Post title -->
            <h5 class="font-bold mb-4">Post Title</h5>
            <!-- Post description -->
            <p class="text-sm text-gray-600 dark:text-gray-300">Post description here...</p>
            <!-- Post image -->
            <img src="/path/to/post/image.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="right-section bg-gray-100 dark:bg-gray-800 p-4">
      <!-- Suggest section -->
      <h5 class="font-bold mb-4">Suggested friends</h5>
      <!-- User cards -->
      <div class="w-full mb-4">
        <!-- User card -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden mb-4">
          <!-- User content -->
          <div class="p-4">
            <!-- User name -->
            <h5 class="font-bold mb-4">@DikaGay</h5>
            <!-- User profile picture -->
            <img src="/path/to/user/profile.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-gray-100 dark:bg-gray-800 p-4">
    <!-- Footer content -->
    &copy; Tulong Social Media
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
