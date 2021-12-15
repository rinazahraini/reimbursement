@extends('layouts.app')

@section('title')
    Pengajuan Reimbursement
@endsection

@section('content')

<!-- Section 2 -->
<section class="relative flex items-center justify-center w-full h-full bg-white">
    <div class="relative hidden w-1/4 h-full bg-center bg-cover lg:block"></div>
    <div class="absolute top-0 left-0 hidden w-1/4 h-full bg-center bg-cover lg:block" style="background-image:url('https://cdn.devdojo.com/images/november2021/scenic.jpeg')">
        <div class="absolute inset-0 w-full h-full bg-gradient-to-b from-transparent to-gray-900"></div>
        <a href="#_" class="absolute bottom-0 left-0 flex items-center w-auto m-5 font-medium text-white group">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Return Home
            <span class="absolute overflow-hidden left-0 block pl-5 h-0.5 w-full bottom-0 -mb-0.5">
                <span class="absolute rounded-full bg-white duration-200 ease-in-out transition-all h-0.5 w-0 group-hover:w-full"></span>
            </span>
        </a>
    </div>

    <div class="flex items-center justify-center w-full h-full px-8 py-32 lg:w-3/4 sm:px-0">
        <div class="w-full max-w-sm mx-auto">
            <div class="relative flex items-center mb-8">
                {{-- <a href="#_" class="inline-block px-3 p-1.5 font-sans text-left text-white bg-gray-800 rounded no-underline cursor-pointer focus:no-underline">
                    <span class="text-lg font-bold leading-tight">tails</span>
                </a> --}}
            </div>
            <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Sign Into Your User Account</h1>
            <p class="mb-10 text-gray-500">Need an account? <a href="#_" class="ml-1 font-medium text-blue-600">Create one here</a></p>

            <div class="relative flex flex-col-reverse mb-5">
                <input type="text" name="email" class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600" placeholder="Email Address">
                <label for="email" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Email</label>
            </div>

            <div class="relative flex flex-col-reverse mb-5">
                <input type="password" name="password" class="peer border-gray-300 focus:border-blue-600 border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600" placeholder="Password">
                <label for="password" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Password</label>
            </div>

            <div class="flex items-center justify-between mb-5">
                <div class="relative flex items-center space-x-2 text-gray-500">
                    <input type="checkbox" class="p-2 border border-gray-300 rounded form-checkbox peer focus:border-gray-300 active:border-gray-300 checked:bg-blue-600 checked:border-blue-600" name="remember">
                    <span class="block peer-checked:text-gray-700">Keep me logged in</span>
                </div>
                <a href="#_" class="ml-2 font-medium text-blue-600">Forgot Password</a>
            </div>

            <div class="relative flex flex-col">
                <a href="#_" class="w-full rounded bg-blue-600 hover:opacity-90 text-white py-3.5 px-2 text-center font-medium">Sign in</a>
                <span class="relative w-full py-4 text-sm font-bold text-center text-gray-600">or</span>
                <a href="#_" class="w-full flex items-center shadow justify-center rounded bg-white border border-gray-300 text-gray-600 py-3.5 px-2 text-center font-medium">
                    <svg class="w-5 h-5" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M23.998 13.278a10.881 10.881 0 00-.252-2.52H12.414v4.576h6.653a6.034 6.034 0 01-2.466 4l-.024.15 3.582 2.836.248.025c2.275-2.149 3.591-5.31 3.591-9.067" fill="#4285F4"></path><path d="M12.585 24.828c3.303 0 6.078-1.1 8.105-2.998l-3.86-3.027a7.174 7.174 0 01-4.24 1.238c-3.173-.02-5.978-2.093-6.964-5.144l-.146.014-3.776 2.954-.049.137c2.07 4.19 6.301 6.83 10.93 6.826" fill="#34A853"></path><path d="M4.966 14.986a8.672 8.672 0 01-.383-2.542 9.2 9.2 0 01.373-2.541l-.004-.168-3.604-3.114-.118.06a14.114 14.114 0 000 11.526l3.736-3.221" fill="#FBBC05"></path><path d="M12.544 4.785a6.662 6.662 0 014.708 1.844l3.438-3.41A11.611 11.611 0 0012.54.002C7.933 0 3.72 2.637 1.655 6.825L5.593 9.93c.992-3.052 3.789-5.127 6.951-5.146" fill="#EB4335"></path></g></svg>
                    <span class="ml-2.5">Sign in with Google</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="w-full px-8 py-16 bg-white xl:px-0">
  <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
    <div class="w-full pr-5 md:w-3/12 xl:pr-12">
      <h3 class="text-2xl font-bold leading-7">We will help you increase sales</h3>
    </div>

    <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
      <p class="text-base font-normal leading-none text-gray-700 md:text-lg">
        Take advantage of our state of the art features and toolset. We are helping businesses develop a split-testing, marketing superhero mentality. We've cracked the secrets that it takes to convert visitors into customers. Try our service free for 14-days and you can start building your next great idea.
        </p>
    </div>
  </div>
</section>

<!-- Section 4 -->
<section class="bg-white">
    <div class="px-8 py-8 mx-auto max-w-7xl">
        <div class="relative px-6 py-10 overflow-hidden border border-blue-100 rounded-2xl lg:p-16 lg:flex lg:flex-col lg:items-center lg:justify-between">

            <!-- Left Pattern -->
            <div class="absolute top-0 left-0 z-10 hidden h-full p-4 mt-1 ml-3 -mt-4 -ml-4 transform -rotate-90 lg:block">
                <svg class="w-auto h-full fill-current text-blue-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 390"><defs></defs><g fill-rule="nonzero"><circle cx="10" cy="10" r="9.5"></circle><circle cx="47" cy="10" r="9.5"></circle><circle cx="84" cy="10" r="9.5"></circle><circle cx="121" cy="10" r="9.5"></circle><circle cx="158" cy="10" r="9.5"></circle><circle cx="195" cy="10" r="9.5"></circle><circle cx="232" cy="10" r="9.5"></circle><circle cx="269" cy="10" r="9.5"></circle><circle cx="306" cy="10" r="9.5"></circle><circle cx="343" cy="10" r="9.5"></circle><circle cx="380" cy="10" r="9.5"></circle><circle cx="47" cy="47" r="9.5"></circle><circle cx="84" cy="47" r="9.5"></circle><circle cx="121" cy="47" r="9.5"></circle><circle cx="158" cy="47" r="9.5"></circle><circle cx="195" cy="47" r="9.5"></circle><circle cx="232" cy="47" r="9.5"></circle><circle cx="269" cy="47" r="9.5"></circle><circle cx="306" cy="47" r="9.5"></circle><circle cx="343" cy="47" r="9.5"></circle><circle cx="380" cy="47" r="9.5"></circle><circle cx="84" cy="84" r="9.5"></circle><circle cx="121" cy="84" r="9.5"></circle><circle cx="158" cy="84" r="9.5"></circle><circle cx="195" cy="84" r="9.5"></circle><circle cx="232" cy="84" r="9.5"></circle><circle cx="269" cy="84" r="9.5"></circle><circle cx="306" cy="84" r="9.5"></circle><circle cx="343" cy="84" r="9.5"></circle><circle cx="380" cy="84" r="9.5"></circle><circle cx="121" cy="121" r="9.5"></circle><circle cx="158" cy="121" r="9.5"></circle><circle cx="195" cy="121" r="9.5"></circle><circle cx="232" cy="121" r="9.5"></circle><circle cx="269" cy="121" r="9.5"></circle><circle cx="306" cy="121" r="9.5"></circle><circle cx="343" cy="121" r="9.5"></circle><circle cx="380" cy="121" r="9.5"></circle><circle cx="158" cy="158" r="9.5"></circle><circle cx="195" cy="158" r="9.5"></circle><circle cx="232" cy="158" r="9.5"></circle><circle cx="269" cy="158" r="9.5"></circle><circle cx="306" cy="158" r="9.5"></circle><circle cx="343" cy="158" r="9.5"></circle><circle cx="380" cy="158" r="9.5"></circle><circle cx="195" cy="195" r="9.5"></circle><circle cx="232" cy="195" r="9.5"></circle><circle cx="269" cy="195" r="9.5"></circle><circle cx="306" cy="195" r="9.5"></circle><circle cx="343" cy="195" r="9.5"></circle><circle cx="380" cy="195" r="9.5"></circle><circle cx="232" cy="232" r="9.5"></circle><circle cx="269" cy="232" r="9.5"></circle><circle cx="306" cy="232" r="9.5"></circle><circle cx="343" cy="232" r="9.5"></circle><circle cx="380" cy="232" r="9.5"></circle><circle cx="269" cy="269" r="9.5"></circle><circle cx="306" cy="269" r="9.5"></circle><circle cx="343" cy="269" r="9.5"></circle><circle cx="380" cy="269" r="9.5"></circle><circle cx="306" cy="306" r="9.5"></circle><circle cx="343" cy="306" r="9.5"></circle><circle cx="380" cy="306" r="9.5"></circle><circle cx="343" cy="343" r="9.5"></circle><circle cx="380" cy="343" r="9.5"></circle><circle cx="380" cy="380" r="9.5"></circle></g></svg>
            </div>

            <!-- Right Pattern -->
            <div class="absolute bottom-0 right-0 z-10 hidden h-full p-4 mt-1 ml-3 -mb-4 -mr-4 transform rotate-90 md:block">
                <svg class="w-auto h-full fill-current text-blue-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 390"><defs></defs><g fill-rule="nonzero"><circle cx="10" cy="10" r="9.5"></circle><circle cx="47" cy="10" r="9.5"></circle><circle cx="84" cy="10" r="9.5"></circle><circle cx="121" cy="10" r="9.5"></circle><circle cx="158" cy="10" r="9.5"></circle><circle cx="195" cy="10" r="9.5"></circle><circle cx="232" cy="10" r="9.5"></circle><circle cx="269" cy="10" r="9.5"></circle><circle cx="306" cy="10" r="9.5"></circle><circle cx="343" cy="10" r="9.5"></circle><circle cx="380" cy="10" r="9.5"></circle><circle cx="47" cy="47" r="9.5"></circle><circle cx="84" cy="47" r="9.5"></circle><circle cx="121" cy="47" r="9.5"></circle><circle cx="158" cy="47" r="9.5"></circle><circle cx="195" cy="47" r="9.5"></circle><circle cx="232" cy="47" r="9.5"></circle><circle cx="269" cy="47" r="9.5"></circle><circle cx="306" cy="47" r="9.5"></circle><circle cx="343" cy="47" r="9.5"></circle><circle cx="380" cy="47" r="9.5"></circle><circle cx="84" cy="84" r="9.5"></circle><circle cx="121" cy="84" r="9.5"></circle><circle cx="158" cy="84" r="9.5"></circle><circle cx="195" cy="84" r="9.5"></circle><circle cx="232" cy="84" r="9.5"></circle><circle cx="269" cy="84" r="9.5"></circle><circle cx="306" cy="84" r="9.5"></circle><circle cx="343" cy="84" r="9.5"></circle><circle cx="380" cy="84" r="9.5"></circle><circle cx="121" cy="121" r="9.5"></circle><circle cx="158" cy="121" r="9.5"></circle><circle cx="195" cy="121" r="9.5"></circle><circle cx="232" cy="121" r="9.5"></circle><circle cx="269" cy="121" r="9.5"></circle><circle cx="306" cy="121" r="9.5"></circle><circle cx="343" cy="121" r="9.5"></circle><circle cx="380" cy="121" r="9.5"></circle><circle cx="158" cy="158" r="9.5"></circle><circle cx="195" cy="158" r="9.5"></circle><circle cx="232" cy="158" r="9.5"></circle><circle cx="269" cy="158" r="9.5"></circle><circle cx="306" cy="158" r="9.5"></circle><circle cx="343" cy="158" r="9.5"></circle><circle cx="380" cy="158" r="9.5"></circle><circle cx="195" cy="195" r="9.5"></circle><circle cx="232" cy="195" r="9.5"></circle><circle cx="269" cy="195" r="9.5"></circle><circle cx="306" cy="195" r="9.5"></circle><circle cx="343" cy="195" r="9.5"></circle><circle cx="380" cy="195" r="9.5"></circle><circle cx="232" cy="232" r="9.5"></circle><circle cx="269" cy="232" r="9.5"></circle><circle cx="306" cy="232" r="9.5"></circle><circle cx="343" cy="232" r="9.5"></circle><circle cx="380" cy="232" r="9.5"></circle><circle cx="269" cy="269" r="9.5"></circle><circle cx="306" cy="269" r="9.5"></circle><circle cx="343" cy="269" r="9.5"></circle><circle cx="380" cy="269" r="9.5"></circle><circle cx="306" cy="306" r="9.5"></circle><circle cx="343" cy="306" r="9.5"></circle><circle cx="380" cy="306" r="9.5"></circle><circle cx="343" cy="343" r="9.5"></circle><circle cx="380" cy="343" r="9.5"></circle><circle cx="380" cy="380" r="9.5"></circle></g></svg>
            </div>

            <h3 class="relative z-20 mb-4 -mt-1 text-4xl font-bold text-blue-900">Getting Started is Easy...</h3>
            <p class="relative z-20 mb-6 text-lg text-blue-700">Are you ready to start building the app of your dreams?</p>
            <div class="relative z-20 flex flex-col items-center w-full space-y-5 md:space-x-5 md:space-y-0 md:flex-row md:w-auto lg:flex-shrink-0 md:px-0">
                <a href="#_" class="block w-full px-5 py-3 text-base font-medium leading-6 text-center text-white transition duration-150 ease-in-out bg-blue-600 rounded-md md:inline-flex md:shadow-sm md:w-auto hover:bg-blue-500 focus:outline-none focus:shadow-outline">Try for Free</a>
                <a href="#_" class="block w-full px-5 py-3 text-base font-medium leading-6 text-center text-blue-600 transition duration-150 ease-in-out bg-blue-100 rounded-md md:inline-flex md:shadow-sm md:w-auto hover:bg-blue-50 focus:outline-none focus:shadow-outline">Request a Demo</a>
            </div>

        </div>
    </div>
</section>

@endsection