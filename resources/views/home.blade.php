<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
 

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="/" class="flex ms-2 md:me-24">
            <img src="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Laravel courses</span>
          </a>
          <h2 class="text-red-400 font-bold w-[1000px] text-center">LARAVEL IAI</h2>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Neil Sims
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    neil.sims@flowbite.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
                viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="page_x2C__document_1_"> <g id="XMLID_1825_"> <g id="XMLID_1826_"> <path d="M14.5,17.5h3c0,0.83-0.67,1.5-1.5,1.5S14.5,18.33,14.5,17.5z" fill="#263238" id="XMLID_1828_"></path> </g> </g> <g id="XMLID_1807_"> <g id="XMLID_2993_"> <polyline fill="none" id="XMLID_2998_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2997_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2996_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2995_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2994_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> <g id="XMLID_2987_"> <polyline fill="none" id="XMLID_2992_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2991_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2990_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2989_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2988_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> </g> </g> </g></svg>
                 <span class="ms-3">Addition</span>
              </a>
           </li>
           <li>
            <a href="/page2" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
              viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="page_x2C__document_1_"> <g id="XMLID_1825_"> <g id="XMLID_1826_"> <path d="M14.5,17.5h3c0,0.83-0.67,1.5-1.5,1.5S14.5,18.33,14.5,17.5z" fill="#263238" id="XMLID_1828_"></path> </g> </g> <g id="XMLID_1807_"> <g id="XMLID_2993_"> <polyline fill="none" id="XMLID_2998_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2997_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2996_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2995_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2994_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> <g id="XMLID_2987_"> <polyline fill="none" id="XMLID_2992_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2991_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2990_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2989_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2988_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> </g> </g> </g></svg>
               <span class="ms-3">Soustraction</span>
            </a>
         </li>
         <li>
            <a href="/page3" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
              viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="page_x2C__document_1_"> <g id="XMLID_1825_"> <g id="XMLID_1826_"> <path d="M14.5,17.5h3c0,0.83-0.67,1.5-1.5,1.5S14.5,18.33,14.5,17.5z" fill="#263238" id="XMLID_1828_"></path> </g> </g> <g id="XMLID_1807_"> <g id="XMLID_2993_"> <polyline fill="none" id="XMLID_2998_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2997_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2996_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2995_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2994_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> <g id="XMLID_2987_"> <polyline fill="none" id="XMLID_2992_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2991_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2990_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2989_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2988_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> </g> </g> </g></svg>
               <span class="ms-3">Division</span>
            </a>
         </li>
         <li>
          <a href="/page3" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
            viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="page_x2C__document_1_"> <g id="XMLID_1825_"> <g id="XMLID_1826_"> <path d="M14.5,17.5h3c0,0.83-0.67,1.5-1.5,1.5S14.5,18.33,14.5,17.5z" fill="#263238" id="XMLID_1828_"></path> </g> </g> <g id="XMLID_1807_"> <g id="XMLID_2993_"> <polyline fill="none" id="XMLID_2998_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2997_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2996_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2995_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2994_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> <g id="XMLID_2987_"> <polyline fill="none" id="XMLID_2992_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2991_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2990_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2989_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2988_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> </g> </g> </g></svg>
             <span class="ms-3">Multiplication</span>
          </a>
       </li>
       <li>
        <a href="/page3" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
          viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="page_x2C__document_1_"> <g id="XMLID_1825_"> <g id="XMLID_1826_"> <path d="M14.5,17.5h3c0,0.83-0.67,1.5-1.5,1.5S14.5,18.33,14.5,17.5z" fill="#263238" id="XMLID_1828_"></path> </g> </g> <g id="XMLID_1807_"> <g id="XMLID_2993_"> <polyline fill="none" id="XMLID_2998_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2997_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2996_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2995_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2994_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> <g id="XMLID_2987_"> <polyline fill="none" id="XMLID_2992_" points=" 21.5,1.5 4.5,1.5 4.5,30.5 27.5,30.5 27.5,7.5 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <polyline fill="none" id="XMLID_2991_" points=" 21.5,1.5 27.479,7.5 21.5,7.5 21.5,4 " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline> <path d=" M16,19c-0.83,0-1.5-0.67-1.5-1.5h3C17.5,18.33,16.83,19,16,19z" fill="none" id="XMLID_2990_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M22.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2989_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> <path d=" M11.5,16c0-0.553-0.448-1-1-1s-1,0.447-1,1" fill="none" id="XMLID_2988_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path> </g> </g> </g> </g></svg>
           <span class="ms-3">Resultat</span>
        </a>
     </li>
        </ul>
     </div>
  </aside>
  
  <div class="p-4 sm:ml-64">
     <div class="p-4 border-2 min-h-screen border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @yield('content')
     </div>
  </div>
  
</body>
</html>