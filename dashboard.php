<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-gray-800 text-white h-screen">
            <div class="p-4 text-center font-bold text-lg border-b border-gray-700">
                My Dashboard
            </div>
            <nav class="mt-6">
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Players</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Flags</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Clubs</a>
                
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Add Item
                </button>
            </header>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Users</h2>
                    <p class="text-2xl font-bold mt-2">1,245</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Revenue</h2>
                    <p class="text-2xl font-bold mt-2">$34,500</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Sales</h2>
                    <p class="text-2xl font-bold mt-2">650</p>
                </div>
            </div>

            <!-- Table Section -->
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-lg font-semibold mb-4">Recent Transactions</h2>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4">ID</th>
                            <th class="py-2 px-4">Customer</th>
                            <th class="py-2 px-4">Amount</th>
                            <th class="py-2 px-4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">#001</td>
                            <td class="py-2 px-4">John Doe</td>
                            <td class="py-2 px-4">$150</td>
                            <td class="py-2 px-4 text-green-500">Completed</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-4">#002</td>
                            <td class="py-2 px-4">Jane Smith</td>
                            <td class="py-2 px-4">$200</td>
                            <td class="py-2 px-4 text-yellow-500">Pending</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-4">#003</td>
                            <td class="py-2 px-4">Alex Johnson</td>
                            <td class="py-2 px-4">$300</td>
                            <td class="py-2 px-4 text-red-500">Failed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
