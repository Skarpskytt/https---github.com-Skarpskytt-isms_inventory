<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white p-5 shadow-md">
            <div class="mb-6">
                <div class="flex justify-center">
                    <img src="images/DTI_PH_new_logo.svg" alt="DTI Logo" class="h-120 w-120 mb-4">
                </div>
               
                
            </div>
            <nav>
                <ul>
                    <li class="mb-3"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">📂 Inventory</a></li>
                    <li class="mb-3"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">🖥 Equipments</a></li>
                    <li class="mb-3"><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">⏳ History</a></li>
                    <li><a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">📖 Logbook</a></li>
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
                        <!-- Add rows dynamically -->
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
