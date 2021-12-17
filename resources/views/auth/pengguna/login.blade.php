@extends('layouts.app')
@section('title')
    Login User
@endsection
@section('content')

<section class="box-border relative block w-full py-6 leading-10 text-center text-indigo-900 bg-white md:py-8">
    <div class="w-full px-4 mx-auto leading-10 text-center md:px-4 lg:px-6 max-w-7xl">
        <div class="box-border flex flex-col flex-wrap items-center justify-between text-indigo-900 md:flex-row">
            <div class="relative z-10 flex items-center w-auto px-4 leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                <a href="#_" class="box-border inline-block font-sans text-2xl font-bold text-left text-indigo-900 no-underline bg-transparent cursor-pointer focus:no-underline">
                    Reimbursement.
                </a>
            </div>
            <div class="relative left-0 z-0 flex justify-center w-full px-4 mt-4 space-x-6 font-medium leading-10 md:mt-0 md:absolute lg:space-x-8 md:flex-grow-0 md:text-left lg:text-center">
            </div>
            <div class="relative px-4 mt-2 font-medium leading-10 md:flex-grow-0 md:flex-shrink-0 md:mt-0 md:text-right lg:flex-grow-0 lg:flex-shrink-0">
            </div>
        </div>
    </div>
</section>

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

    <div class="flex items-center justify-center w-full h-full px-8 py-32 lg:w-3/4 lg:px-0">
        <div class="w-full max-w-lg mx-auto">
            <div class="relative flex items-center mb-8">
                <a href="#_" class="inline-block px-3 p-1.5 font-sans text-left text-white bg-gray-800 rounded no-underline cursor-pointer focus:no-underline">
                    <span class="text-lg font-bold leading-tight">reimbursement app</span>
                </a>
            </div>
            <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Login User Account</h1>
            <p class="mb-10 text-gray-500">Login User Account <a href="#_" class="ml-1 font-medium text-blue-600"></a></p>
            <form method="POST">
                @csrf
            <div class="relative flex flex-col-reverse mb-5">
                <input type="text" name="email" class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600" placeholder="Email Address">
                <label for="email" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Email</label>
            </div>

            <div class="relative flex flex-col-reverse mb-5">
                <input type="password" name="password" class="peer border-gray-300 focus:border-blue-600 border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600" placeholder="Password">
                <label for="password" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Password</label>
            </div>

            <div class="relative flex flex-col">
                <button type="submit" class="w-full rounded bg-blue-600 hover:opacity-90 text-white py-3.5 px-2 text-center font-medium">Sign in</button>
            </div>
            </form>
        </div>
    </div>
</section>

@endsection