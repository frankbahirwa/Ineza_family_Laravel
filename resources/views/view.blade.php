<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Participant</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen select-none">
<div class="header bg-black top-0 fixed w-full text-white">
    <nav class="w-full px-5 py-5 text-white">
        <ul class="flex justify-between">
            <div class="logos flex gap-5 rounded-br-3xl">
                <img src="{{ asset('pics/logos.png') }}" alt="not displayed" class="w-14 h-14 rounded-tl-full rounded-br-full rounded-bl-full animate-bounce">
                <span class="hidden lg:block md:hidden mt-3">Ineza-Family</span>
            </div>
            <div class="flex gap-5 mt-1">
                {{-- <li style="text-decoration:underline;text-decoration-thickness:5px;text-decoration-color:lightgreen;" class="animate-pulse">Members</li> --}}
                
            </div>
            <div class="dark">
                {{-- <img src="{{ asset('pics/dark.png') }}" alt="" class="cursor-pointer mt-2 w-10 h-5 rounded-tl-full rounded-br-full rounded-bl-full"> --}}
            </div>
        </ul>
    </nav>
</div>

<div class="w-full lg:w-9/12 absolute flex justify-center mt-40 p-3 bg-gray-200 rounded-lg shadow-md mb-32">

<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md m-5">
<h2 class="text-2xl font-bold mb-6 text-center capitalize">{{ $participants->Fname }}'s Details</h2>
        <div class="mb-4 ml-20">
            @if ($participants->profile_picture)
                <img src="{{ asset('storage/' . $participants->profile_picture) }}" alt="Profile Picture" class="w-32 h-32 rounded-full ml-12 border-8 border-gray-500">
            @endif
        </div>
   <div class="hh p-3 bg-gray-300 rounded-lg">
    <div class="details flex justify-center flex-col bg-gray-700 w-full rounded-lg p-5 text-white">
        <div class="mb-4 flex gap-5">
             <label class="block font-bold mb-2 text-white">First Name: </label>
             <p class="text-lg font-bold capitalize">{{ $participants->Fname }}</p>
         </div>
         <div class="mb-4 flex gap-5">
             <label class="block font-bold mb-2 text-white">Last Name: </label>
             <p class="text-lg font-bold">{{ $participants->Lname }}</p>
         </div>
         <div class="mb-4 flex gap-5">
             <label class="block font-bold mb-2 text-white">Gender: </label>
             <p class="text-lg font-bold">{{ $participants->Gender }}</p>
         </div>
        </div>
   </div>
         <br>
        <div class="text-center">
            <a href="{{ route('participants.index') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 w-20">Back</a>

        </div>

        <br>

        <div class="text-center">
            <a href="{{ route('participants.edit' , $participants->id) }}"><button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Upadte Member</button></a>
            <form action="{{ route('participants.destroy', $participants->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this participant?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Delete Member</button>
            </form>
            
            
        </div>
    </div>
</div>

<div class="block lg:hidden footer p-5 fixed bottom-0 w-full bg-black text-white">
    <p class="text-center">Ineza-Family &copy; 2025 All rights reserved</p>
</div>
</body>
</html>
