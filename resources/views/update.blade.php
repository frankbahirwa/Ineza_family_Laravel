<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Family Member</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="header bg-black top-0 fixed w-full text-white">
    <nav class="w-full px-5 py-5 text-white">
        <ul class="flex justify-between">
            <div class="logos flex gap-5 rounded-br-3xl">
              <img src="pics/logos.png" alt="not displayed" class="w-14 h-14 rounded-tl-full rounded-br-full rounded-bl-full animate-bounce">
              <span class="hidden lg:block md:hidden mt-3 ">Ineza-Family</span>
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

<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md m-5">
    <h2 class="text-2xl font-bold mb-6 text-center">Edit Family Member</h2>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('participants.update' , $participants->id ) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label for="Fname" class="block text-gray-700 font-bold mb-2">First Name</label>
        <input type="text" id="Fname" name="Fname" value="{{ $participants->Fname }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>
      <div class="mb-4">
        <label for="Lname" class="block text-gray-700 font-bold mb-2">Last Name</label>
        <input type="text" id="Lname" name="Lname" value="{{ $participants->Lname }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>
      <div class="mb-4">
        <label for="Gender" class="block text-gray-700 font-bold mb-2">Gender</label>
        <select id="Gender" name="Gender" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
          <option value="male" {{ $participants->Gender == 'male' ? 'selected' : '' }}>Male</option>
          <option value="female" {{ $participants->Gender == 'female' ? 'selected' : '' }}>Female</option>
          <option value="other" {{ $participants->Gender == 'other' ? 'selected' : '' }}>Other</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="profile_picture" class="block text-gray-700 font-bold mb-2">Profile Picture</label>
        <input type="file" name="profile_picture" value="{{ $participants->profile_picture }}" id="profile_picture" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <!-- @if ($participants->profile_picture)
            <img src="{{ asset('storage/' . $participants->profile_picture) }}" alt="Profile Picture" class="mt-2 w-20 h-20 rounded-full">
        @endif -->
      </div>
      <div class="text-center">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Update Member</button>
      </div>
    </form>
</div>

<div class="block lg:hidden footer p-5 fixed bottom-0 w-full bg-black text-white">
       <p class="text-center">Ineza-Family &copy; 2025 All rights reserved </p>
</div>
</body>
</html>
