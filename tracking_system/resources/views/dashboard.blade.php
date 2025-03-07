<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=folder" />
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 bg-white p-5 shadow-md">
            <div class="mb-6">
                <div class="flex justify-center">
                    <img src="{{ asset('css/images/DTI_PH_new_logo.png') }}" alt="DTI Logo" class="w-32 h-32 object-contain mb-4">
                </div>
            </div>
            <nav>
                <ul>
                    <li class="mb-3">
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                       <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24">
<path d="M 4 4 C 2.9057453 4 2 4.9057453 2 6 L 2 18 C 2 19.094255 2.9057453 20 4 20 L 20 20 C 21.094255 20 22 19.094255 22 18 L 22 8 C 22 6.9057453 21.094255 6 20 6 L 12 6 L 10 4 L 4 4 z M 4 6 L 9.171875 6 L 11.171875 8 L 20 8 L 20 18 L 4 18 L 4 6 z"></path>
</svg>

                            <span class="ml-3">Inventory</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                     <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/30/workstation.png" alt="workstation"/>
                            <span class="ml-3">Equipments</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                        <img width="25" height="25" src="https://img.icons8.com/windows/32/activity-history.png" alt="activity-history"/>
                            <span class="ml-3">History</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                       <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/30/book.png" alt="book"/>
                            <span class="ml-3">Logbook</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Dashboard</h2>
                <button class="p-2 bg-gray-200 rounded-full">✉️</button>
            </header>
            
            <!-- Summary Cards -->
            <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow text-center">Replacement</div>
                <div class="bg-white p-4 rounded-lg shadow text-center">Request</div>
                <div class="bg-white p-4 rounded-lg shadow text-center">Borrow</div>
            </div>

            <!-- Table -->
            <div class="bg-white p-4 rounded-lg shadow">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="p-2 text-left">Name</th>
                            <th class="p-2 text-left">Request Type</th>
                            <th class="p-2 text-left">Quantity</th>
                            <th class="p-2 text-left">Details</th>
                            <th class="p-2 text-left">Equipment Type</th>
                            <th class="p-2 text-left">Recent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-2">John Doe</td>
                            <td class="p-2">Borrow</td>
                            <td class="p-2">3</td>
                            <td class="p-2">Laptop</td>
                            <td class="p-2">Electronics</td>
                            <td class="p-2">Today</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
