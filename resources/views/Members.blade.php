<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        *::-webkit-scrollbar {
           display: none;
        }
        .block {
            display: block;
        }
    </style>
</head>
<body>
   <div class="header bg-black fixed w-full text-white">
       <nav class="w-full px-5 py-5 text-white">
           <ul class="flex justify-between">
               <div class="logos flex gap-5 rounded-br-3xl">
                   <img src="pics/logos.png" alt="not displayed" class="w-14 h-14 rounded-tl-full rounded-br-full rounded-bl-full animate-bounce">
                   <span class="hidden lg:block md:hidden mt-3">Ineza-Family</span>
               </div>
               <div class="flex gap-5 mt-1">
                   <li style="text-decoration:underline;text-decoration-thickness:5px;text-decoration-color:lightgreen;" class="animate-pulse">Members</li>
               </div>
               <div class="dark">
                   <img src="pics/dark.png" alt="" class="cursor-pointer mt-2 w-10 h-5 rounded-tl-full rounded-br-full rounded-bl-full">
               </div>
           </ul>
       </nav>
   </div>

<div class="users w-full lg:w-9/12 absolute mt-40 p-3 bg-gray-200 rounded-lg shadow-md lg:ml-52 overflow-x-auto">
       <div class="plus bg-black text-white p-1 rounded-lg w-10 h-10 text-center ml-1 mb-4">
           <a href="/create">+</a>
       </div>
       <div class="designed shadow-lg p-1 rounded-lg">
           <table class="min-w-full bg-white rounded-lg overflow-hidden">
               <thead>
                   <tr class="bg-gray-800 text-white">
                       <th class="px-4 py-2">#</th>
                       <th class="px-4 py-2">ID</th>
                       <th class="px-4 py-2">F-Name</th>
                       <th class="px-4 py-2">L-Name</th>
                       <th class="px-4 py-2">Gender</th>
                       <th class="px-4 py-2">More</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($participants as $index => $participant)
                   <tr class="text-center border-b">
                       <td class="px-4 py-2">#</td>
                       <td class="px-4 py-2">{{ $participant->id }}</td>
                       <td class="px-4 py-2">{{ $participant->Fname }}</td>
                       <td class="px-4 py-2">{{ $participant->Lname }}</td>
                       <td class="px-4 py-2">{{ $participant->Gender }}</td>
                       <td class="px-4 py-2">
                           <a href="{{ route('participants.show' , $participant->id) }}"><button id="view" class="border border-green-500 rounded-lg p-1">View</button></a>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
           @if ($participants->isEmpty())
           <p class="text-center mt-4">No participants found.</p>
           @endif
       </div>
   </div>

   <div class="block lg:hidden footer p-5 fixed bottom-0 w-full bg-black text-white">
       <p class="text-center">Ineza-Family &copy; 2025 All rights reserved</p>
   </div>
</body>
</html>
