<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-100">
    <div class="flex">
        <aside class="w-64 bg-gray-800 text-white h-screen">
            <div class="p-4 text-center font-bold text-lg border-b border-gray-700">
                My Dashboard
            </div>
            <nav class="mt-6 ">
                <button id="btnPlayers" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("playerTable","nationalityTable","clubTable","Add Player")'>Players</button>
                <button id="btnNationalities" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("nationalityTable","playerTable","clubTable","Add Nationality")'>Nationalities</button>
                <button id="btnClubs" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("clubTable","nationalityTable","playerTable","Add Club")'>Clubs</button>
            </nav>
        </aside>

        <main class="flex-1 p-6">
            <header class=" mb-6">
                <h1 class=" text-4xl font-semibold">Dashboard</h1>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6 text-center">
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Players</h2>
                    <p class="text-2xl font-bold mt-2">1,245</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">GolKeper</h2>
                    <p class="text-2xl font-bold mt-2">500</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Nationality</h2>
                    <p class="text-2xl font-bold mt-2">650</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Clubs</h2>
                    <p class="text-2xl font-bold mt-2">650</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <div class="flex justify-between items-center mb-5">
                    <h2 class=" text-xl font-semibold mb-4">Recent Transactions</h2>
                    <button id="addItem" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Player</button>
                </div>
                <table id="playerTable" class="w-full border-collapse text-center">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4">Player</th>
                            <th class="py-2 px-4">Name</th>
                            <th class="py-2 px-4">Position</th>
                            <th class="py-2 px-4">nationality</th>
                            <th class="py-2 px-4">Club</th>
                            <th class="py-2 px-4">Rating</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4 flex justify-center"> <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="" class="w-12"/> </td>
                            <td class="py-2 px-4">#001</td>
                            <td class="py-2 px-4">$150</td>
                            <td class="py-2 px-4">Completed</td>
                            <td class="py-2 px-4">$150</td>
                            <td class="py-2 px-4 ">25</td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td>    
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-4 flex justify-center"> <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="" class="w-12"/></td>
                            <td class="py-2 px-4">#002</td>
                            <td class="py-2 px-4">$200</td>
                            <td class="py-2 px-4">Pending</td>
                            <td class="py-2 px-4">$200</td>
                            <td class="py-2 px-4">14</td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td> 
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-4 flex justify-center"> <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="" class="w-12"/></td>
                            <td class="py-2 px-4">#003</td>
                            <td class="py-2 px-4">$300</td>
                            <td class="py-2 px-4">Failed</td>
                            <td class="py-2 px-4">$300</td>
                            <td class="py-2 px-4">47</td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                <table id="nationalityTable" class="w-full border-collapse text-center hidden">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4">Nationality</th>
                            <th class="py-2 px-4">Flag</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">#001  </td>
                            <td class="py-2 px-4 flex justify-center"><img src="https://cdn.sofifa.net/flags/ar.png" alt="" class="w-12"/></td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td>    
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-4"> #002</td>
                            <td class="py-2 px-4  flex justify-center"><img src="https://cdn.sofifa.net/flags/ar.png" alt="" class="w-12"/></td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td> 
                        </tr>
                        
                    </tbody>
                </table>
                <table id="clubTable" class="w-full border-collapse text-center hidden">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4">Club</th>
                            <th class="py-2 px-4">Logo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4 ">#001  </td>
                            <td class="py-2 px-4 flex justify-center"><img src="https://cdn.sofifa.net/meta/team/239235/120.png" alt="" class="w-12"/></td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td>    
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-4">#002 </td>
                            <td class="py-2 px-4 flex justify-center"><img src="https://cdn.sofifa.net/meta/team/239235/120.png" alt="" class="w-12"/></td>
                            <td> 
                                <button  ><i class=" fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                <button ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></button>
                            </td> 
                        </tr>
                        
                    </tbody>
                </table>
               
            </div>

            <div class="task-modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 " id="modal-task">
                    <div class="modal-dialog bg-white rounded-lg shadow-lg min-w-[620px] max-w-[620px]">
                        <div class="modal-content ">
                        <form method="POST" id="form-player" class="p-4">
                            <!-- Header -->
                            <div class="modal-header flex justify-between items-center border-b pb-3">
                            <h5 class="text-lg font-semibold">Add Player</h5>
                            <button id="close"><i class="fa-solid fa-xmark fa-xl" style="color: #8a8f99;"></i></button>
                            </div>

                            <!-- Body -->
                            <div class="modal-body space-y-4 mt-4 overflow-y-auto max-h-[85vh] ">
                            <!-- Hidden Input -->
                            <input type="hidden" id="player-id">

                            <!-- Name -->
                            <div>
                                <label for="player-name" class="block text-lg font-medium text-gray-700">Name</label>
                                <input type="text" id="player-name" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <!-- Photo -->
                            <div>
                                <label for="player-photo" class="block text-lg font-medium text-gray-700">Photo</label>
                                <input type="url" id="player-photo" placeholder="Photo URL" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <!-- Position -->
                            <div>
                                <label for="player-position" class="block text-lg font-medium text-gray-700">Position</label>
                                <select
                                    id="Position"
                                    class=" border text-sm rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500 block p-2.5">
                                    <option value="" disabled selected hidden>
                                    Choose the position
                                    </option>
                                    <option value="RW">Right Winger</option>
                                    <option value="ST">Striker</option>
                                    <option value="CB2">Center Back2</option>
                                    <option value="CB1">Center Back1</option>
                                    <option value="LW">Left Winger</option>
                                    <option value="GK">Goalkeeper</option>
                                    <option value="CM1">Central Defensive Midfielder1</option>
                                    <option value="CM2">Central Defensive Midfielder2</option>
                                    <option value="CM3">Central Defensive Midfielder3</option>
                                    <option value="LB">Left Back</option>
                                    <option value="RB">Right Back</option>
                                </select>
                            </div>

                            <!-- Nationality -->
                            <div>
                                <label for="player-nationality" class="block text-lg font-medium text-gray-700">Nationality</label>
                                <input type="text" id="player-nationality" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <!-- Club -->
                            <div>
                                <label for="player-club" class="block text-lg font-medium text-gray-700">Club</label>
                                <input type="text" id="player-club" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                                <div>
                                <label for="player-rating" class="block text-lg font-medium text-gray-700">Rating</label>
                                <input type="number" id="player-rating" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-pace" class="block text-lg font-medium text-gray-700">Pace</label>
                                <input type="number" id="player-pace" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-shooting" class="block text-lg font-medium text-gray-700">Shooting</label>
                                <input type="number" id="player-shooting" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-passing" class="block text-lg font-medium text-gray-700">Passing</label>
                                <input type="number" id="player-passing" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-dribbling" class="block text-lg font-medium text-gray-700">Dribbling</label>
                                <input type="number" id="player-dribbling" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-defending" class="block text-lg font-medium text-gray-700">Defending</label>
                                <input type="number" id="player-defending" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-physical" class="block text-lg font-medium text-gray-700">Physical</label>
                                <input type="number" id="player-physical" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                            </div>
                            </div>

                            <!-- Footer -->
                            <div class="modal-footer flex justify-end space-x-3 pt-4 border-t">
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md shadow hover:bg-gray-200" id="form-cancel">Cancel</button>
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600" id="player-save-btn">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>

        </main>
    </div>
    <script src="script.js"></script>

</body>
</html>

<?php
    include("DBConnexion.php");
    
?>