<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar / Sidebar -->
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-gray-800 text-white flex flex-col justify-between">
            <!-- Bagian atas Sidebar -->
            <div>
                <div class="p-5 text-center text-xl font-semibold">
                    Dashboard
                </div>
                <ul class="mt-5">
                    <li>
                        <a href="{{ route('admin') }}" class="flex items-center p-3 hover:bg-gray-700 rounded-lg">
                            Admin
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded-lg">
                            Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded-lg">
                            Pendidikan
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Bagian bawah Sidebar untuk Logout -->
            <div>
                <ul>
                    <!-- Form logout -->
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="p-3">
                            @csrf
                            <button type="submit" class="flex items-center w-full p-3 hover:bg-gray-700 rounded-lg">
                                <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3"></path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 p-6">
            @yield('content') <!-- Konten halaman yang spesifik akan muncul di sini -->
        </div>
    </div>
    
</body>
</html>
