<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/chatto-logo.ico">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <script src="<?= BASEURL; ?>/js/header.js"></script> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/dist/output.css">
    <!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> -->
    <!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> -->
</head>

<body>
    <div id="loader" class="fixed z-40 flex items-center justify-center w-full h-full ">
        <div class="flex justify-center items-center space-x-1 text-md text-gray-700 gap-2">
            <div class="animate-bounce">
                <img class="h-14" src="<?= BASEURL ?>/img/chatto-logo.png" alt="">
            </div>
        </div>
    </div>
    <div id="content">
        <div id="header" class="fixed z-10 w-full px-6 py-4 lg:px-8">
            <div>
                <nav class="flex items-center justify-between" aria-label="Global">
                    <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                        <a href="<?= BASEURL ?>" class="-m-1.5 p-1.5 flex gap-2 items-center group">
                            <img class="h-8 group-hover:animate-bounce" src="<?= BASEURL ?>/img/chatto-logo.png" alt="">
                            <span class="text-xl font-bold ">Chatto</span>
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button" id="open-menu-btn" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12">
                        <a href="<?= BASEURL ?>" class="font-semibold hover:text-orange-400">Home</a>

                        <?php 
                            if(isset($_SESSION['name'])){
                                echo '<a href="' .BASEURL. '/chat" class="font-semibold hover:text-orange-400">Chatroom</a>';
                            }
                        ?>
                        

                        <a href="<?= BASEURL ?>/about" class="font-semibold hover:text-orange-400">About</a>
                    </div>

                    <?php
                        if(!isset($_SESSION['name'])){
                            echo
                            '
                            <div class="hidden lg:flex gap-3 lg:min-w-0 lg:flex-1 lg:justify-end">
                                <a href="'. BASEURL .'/auth/login" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Log in</a>
                                <a href="'. BASEURL .'/auth/signup" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-slate-100 shadow-sm hover:bg-orange-500 bg-orange-400">Sign up</a>
                            </div>
                            ';
                        }else{
                            echo
                            '
                            <div class="hidden lg:flex gap-3 lg:min-w-0 lg:flex-1 lg:justify-end">
                                <a href="'. BASEURL .'/auth/login" class="flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                <svg class="w-6 h-6 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                '. $_SESSION['name'] .'
                                
                                </a>
                                
                                <a href="'. BASEURL .'/auth/logout" class="flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                Log out
                                </a>
                            </div>
                            ';
                        }
                    ?>

                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div role="dialog" class="hidden" id="mobile-menu" aria-modal="true">
                    <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
                        <div class="flex h-9 items-center justify-between">
                            <div class="flex">
                                <a href="<?= BASEURL ?>" class="-m-1.5 p-1.5 flex gap-2 items-center">
                                    <img class="h-8" src="<?= BASEURL ?>/img/chatto-logo.png" alt="">
                                    <span class="text-xl font-bold">Chatto</span>
                                </a>
                            </div>
                            <div class="flex">
                                <button type="button" id="close-menu-btn" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x-mark -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7  hover:bg-gray-400/10">Home</a>

                                    <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7  hover:bg-gray-400/10">Mahasiswa</a>

                                    <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7  hover:bg-gray-400/10">About</a>

                                </div>
                                <div class="py-6">
                                    <a href="#" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6  hover:bg-gray-400/10">Log in</a>
                                    <a href="<?= BASEURL ?>/auth/signup" class="-mx-3 block rounded-lg py-2.5 px-3 text-slate-100 font-semibold leading-6 hover:bg-orange-500 bg-orange-400 my-3">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>