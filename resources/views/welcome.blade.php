<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Members Registry</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      
        *::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-white">

<div class="header bg-black fixed w-full text-white">
       <nav class="w-full px-5 py-5 text-white">
           <ul class="flex justify-between">
               <div class="logos flex gap-5 rounded-br-3xl">
                   <img src="pics/logos.png" alt="not displayed" class="w-14 h-14 rounded-tl-full rounded-br-full rounded-bl-full animate-bounce">
                   <span class="hidden lg:block md:hidden mt-2 text-2xl">Ineza-Family</span>
               </div>
               <div class="dark">
                   <a href="/home"><button class="border border-gray-500 p-2 rounded-lg bg-gray-500 text-white font-bold px-6">Explore</button></a>
               </div>
           </ul>
       </nav>
   </div>

    <section class="flex items-center justify-center min-h-screen text-center">
 
        <div class="container mx-auto px-5  z-10">
            <h1 class="text-4xl md:text-6xl font-bold animate-pulse">
                Welcome to the Ineza-Family
            </h1>
            <p class="mt-5 text-lg md:text-xl text-black">
                A modern platform to keep track of your family members, share moments, and celebrate connections.
            </p>
            <div class="mt-8">
                <a href="/home" class="bg-green-500 hover:bg-green-400 px-8 py-3 rounded-lg text-lg font-semibold transition duration-300 shadow-lg">
                    Get Started
                </a>
            </div>
        </div>
    </section>

  
    
    <footer class="bg-gradient-to-r from-gray-900 to-black text-gray-200 py-10">
        <div class="container mx-auto px-5 text-center">
            <p>&copy; 2025 Family Registry. All rights reserved.</p>
            <div class="flex justify-center gap-5 mt-5">
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
