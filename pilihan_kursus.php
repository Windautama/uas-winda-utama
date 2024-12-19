<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Course Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-gray-800 text-white p-4 flex justify-between items-center">
   <div class="text-2xl font-bold">
    LOGOIPSUM
   </div>
   <nav class="space-x-4">
    <a class="text-gray-400" href="tb_pendaftaran.php">
     Home
    </a>
    <a class="hover:text-gray-400" href="#">
     pengguna
    </a>
    <a class="hover:text-gray-400" href="#">
     admin
    </a>
    <a class="hover:text-gray-400" href="#">
     pimpinan
    </a>
   </nav>
   <div class="text-xl">
    <i class="fas fa-search">
    </i>
   </div>
  </header>
  <!-- Main Content -->
  <div class="container mx-auto p-4 flex">
   <!-- Sidebar -->
   <aside class="w-1/4 p-4 bg-white rounded-lg shadow-md">
    <div class="mb-4">
     <input class="w-full p-2 border rounded-lg" placeholder="Search..." type="text"/>
    </div>
    <div class="mb-4">
     <h2 class="font-bold mb-2">
      Category
     </h2>
     <div>
      <input id="category-website" type="checkbox"/>
      <label for="category-website">
       Website
      </label>
     </div>
    </div>
    <div class="mb-4">
     <h2 class="font-bold mb-2">
      Price
     </h2>
     <div>
      <input id="price-free" type="checkbox"/>
      <label for="price-free">
       Free
      </label>
     </div>
     <div>
      <input id="price-paid" type="checkbox"/>
      <label for="price-paid">
       Paid
      </label>
     </div>
    </div>
    <button class="w-full bg-green-500 text-white p-2 rounded-lg">
     Clear All Filters
    </button>
   </aside>
   <!-- Course Cards -->
   <div class="w-3/4 p-4">
    <div class="flex justify-end mb-4">
     <select class="p-2 border rounded-lg">
      <option>
       Release Date (newest first)
      </option>
     </select>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
     <!-- Card 1 -->
     <div class="bg-white p-4 rounded-lg shadow-md">
      <img alt="Course image" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://www.computer-course-center.com/assets/img/gallery/details/ruang-kelas-kursus-komputer.jpg" width="300"/>
      <div class="flex items-center mb-2">
       <div class="flex text-yellow-500">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </div>
      </div>
      <h3 class="font-bold mb-2">
       Kursus komputer
      </h3>
      <div class="flex items-center text-gray-500 text-sm mb-2">
       <i class="fas fa-user mr-1">
       </i>
       1,1k
      </div>
      <div class="flex items-center text-gray-500 text-sm">
       <img alt="Instructor image" class="w-6 h-6 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/sIr2c9dnWvZPBhtMtyCsZfe9BDe0FnVotp98imRE3XhQva4nA.jpg" width="30"/>
       By David
      </div>
     </div>
     <!-- Card 2 -->
     <div class="bg-white p-4 rounded-lg shadow-md">
      <img alt="Course image" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://i1.wp.com/ruangmahasiswa.com/wp-content/uploads/2021/01/belajar-bahasa-inggris-online-thumbnail.jpg?fit=750%2C500&ssl=1" width="300"/>
      <div class="flex items-center mb-2">
       <div class="flex text-yellow-500">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </div>
      </div>
      <h3 class="font-bold mb-2">
       Kursus bahasa inggris
      </h3>
      <div class="flex items-center text-gray-500 text-sm mb-2">
       <i class="fas fa-user mr-1">
       </i>
       1,1k
      </div>
      <div class="flex items-center text-gray-500 text-sm">
       <img alt="Instructor image" class="w-6 h-6 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/sIr2c9dnWvZPBhtMtyCsZfe9BDe0FnVotp98imRE3XhQva4nA.jpg" width="30"/>
       By David
      </div>
     </div>
     <!-- Card 3 -->
     <div class="bg-white p-4 rounded-lg shadow-md">
      <img alt="Course image" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1_ckrJrFWKi4WOgZEVOqJSpX28zR2mWgw_w&s" width="300"/>
      <div class="flex items-center mb-2">
       <div class="flex text-yellow-500">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </div>
      </div>
      <h3 class="font-bold mb-2">
       Kursus publik speaking
      </h3>
      <div class="flex items-center text-gray-500 text-sm mb-2">
       <i class="fas fa-user mr-1">
       </i>
       1,1k
      </div>
      <div class="flex items-center text-gray-500 text-sm">
       <img alt="Instructor image" class="w-6 h-6 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/sIr2c9dnWvZPBhtMtyCsZfe9BDe0FnVotp98imRE3XhQva4nA.jpg" width="30"/>
       By David
      </div>
       …