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
<body class="select-none">
   <div class="header bg-black top-0 fixed w-full text-white">
       <nav class="w-full px-5 py-5 text-white">
           <ul class="flex justify-between">
               <div class="logos flex gap-5 rounded-br-3xl">
                   <img src="pics/logos.png" alt="not displayed" class="w-14 h-14 rounded-tl-full rounded-br-full rounded-bl-full animate-bounce">
                   <span class="hidden lg:block md:hidden mt-2 text-2xl">Ineza-Family</span>
               </div>
               <div class="flex gap-5 mt-1">
                   {{-- <li style="text-decoration:underline;text-decoration-thickness:5px;text-decoration-color:lightgreen;" class="animate-pulse">Members</li> --}}
               </div>
               <div class="dark">
                   {{-- <img src="pics/dark.png" alt="" class="cursor-pointer mt-2 w-10 h-5 rounded-tl-full rounded-br-full rounded-bl-full"> --}}
               </div>
           </ul>
       </nav>
    </div>

    <div class="add bg-green-500 p-4 mt-28 ml-5 rounded-full w-16 right-2 h-16 text-center fixed top-0">
        <a href="{{route('participants.create')}}" class="text-2xl text-white">+</a>
    </div>

<div class="flex flex-wrap gap-5 w-full justify-center mt-32 lg:mt-40 mb-20">
    @foreach ($participants as $participant)
    <div class="max-w-lg w-full md:w-80 lg:w-96 rounded-lg overflow-hidden shadow-2xl bg-white m-4">
        <p class="text-center text-xl font-bold bg-gray-300 capitalize">{{$participant->Fname}}'s Details</p>
        <img class="w-40 h-40 border-8 border-gray-700 rounded-full mx-auto mt-4" src="{{ asset('storage/' . $participant->profile_picture) }}" alt="Profile Image">
        <div class="px-2 py-2 text-center bg-gray-300 rounded-lg m-2">
            <div class="font-bold text-2xl mb-2 bg-gray-800 rounded-lg p-5 text-white">
                {{ $participant->Fname }} {{ $participant->Lname }}
            <p class="text-gray-200 text-base">Gender: {{ $participant->Gender }}</p>
            </div>

        </div>
        <br>
        <button class="text-center bg-green-500 px-5 text-white py-1 rounded-tr-lg"><a href="{{route('participants.show' , $participant->id)}}">More</a></button>
    </div>
    @endforeach
    
    @if ($participants->isEmpty())
        <p class="text-center mt-4">No participants found.</p>
    @endif
</div>

<div class="block lg:hidden footer p-5 fixed bottom-0 w-full bg-black text-white">
       <p class="text-center">Ineza-Family &copy; 2025 All rights reserved</p>
</div>
</body>
</html>
