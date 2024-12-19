<?php
    include("./CRUD/Read.php");

?>

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
        <aside class="w-64 bg-gray-800 text-white ">
            <div class="p-4 text-center font-bold text-2xl border-b border-gray-700">
                Admin
            </div>
            <nav class="mt-6 ">
                <button id="btnNationalities" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("nationalityTable","playerTable","clubTable","goalKeeperTable","Add Nationality")'>Nationalities</button>
                <button id="btnClubs" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("clubTable","nationalityTable","playerTable","goalKeeperTable","Add Club")'>Clubs</button>
                <button id="btnPlayers" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("playerTable","nationalityTable","clubTable","goalKeeperTable","Add Player")'>Players</button>
                <button id="btnGoalKeepers" class=" block py-2.5 px-4 hover:bg-gray-700 w-full text-left" onclick='switchTable("goalKeeperTable","clubTable","nationalityTable","playerTable","Add GoalKeeper")'>GoalKeeper</button>
            </nav>
        </aside>

        <main class="flex-1 p-6">
            <header class=" mb-6">
                <h1 class=" text-4xl font-semibold">Dashboard</h1>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6 text-center">
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Players</h2>
                    <p class="text-2xl font-bold mt-2"><?php echo $player_count; ?></p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">GoalKeeper</h2>
                    <p class="text-2xl font-bold mt-2"><?php echo $goalkeeper_count; ?></p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Nationality</h2>
                    <p class="text-2xl font-bold mt-2"><?php echo $nationality_count; ?></p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-lg font-semibold">Clubs</h2>
                    <p class="text-2xl font-bold mt-2"><?php echo $club_count; ?></p>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <div class="flex justify-between items-center mb-5">
                    <button id="upImg" type="button" class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer hover:bg-blue-600"> Upload Photo</button>
                    <div class="relative">
                        <i class="fa fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                        <input
                            class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-500 rounded-md pl-10 pr-3 py-2 
                            transition duration-300 ease-in-out focus:outline-none focus:border-black hover:border-black shadow-sm focus:shadow"
                            placeholder="Search" />
                    </div>
                     <button id="addItem" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Player</button>
                </div>
               

                <table id="playerTable" class="w-full border-collapse text-center ">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4 hidden">id</th>
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

                        <?php 
                                        
                                        foreach ($playerData as $row){
                                            $id=$row['player_id'];
                                            echo '<tr class="border-b">
                                            <td class="py-2 px-4 hidden">'.$row['player_id'].'</td>
                                            <td class="py-2 px-4 flex justify-center"> <img src="'.$row['img'].'" alt="" class="w-12"/> </td>
                                            <td class="py-2 px-4">'.$row['nom'].'</td>
                                            <td class="py-2 px-4">'.$row['posiition'].'</td>
                                            <td class="py-2 px-4">'.$row['nationality'].'</td>
                                            <td class="py-2 px-4">'.$row['club'].'</td>
                                            <td class="py-2 px-4 ">'.$row['rating'].'</td>
                                            <td> 
                                                <button ><i class="showUpdateBtn fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                                <a href="./CRUD/Delete.php?id='.$id.'&table=player" ><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></a>
                                            </td>    
                                        </tr>';
                                        }
                        ?>
                        
                    </tbody>
                </table>
                <table id="goalKeeperTable" class="w-full border-collapse text-center hidden">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4">Player</th>
                            <th class="py-2 px-4">Name</th>
                            <th class="py-2 px-4">nationality</th>
                            <th class="py-2 px-4">Club</th>
                            <th class="py-2 px-4">Rating</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    <?php 
                                        
                                        foreach ($goalkeeperData as $row){
                                            $id=$row['goalkeeper_id'];
                                            echo '<tr class="border-b">
                                            <td class="py-2 px-4 hidden">'.$row['goalkeeper_id'].'</td>
                                            <td class="py-2 px-4 flex justify-center"> <img src="'.$row['img'].'" alt="" class="w-12"/> </td>
                                            <td class="py-2 px-4">'.$row['nom'].'</td>
                                            <td class="py-2 px-4">'.$row['nationality'].'</td>
                                            <td class="py-2 px-4">'.$row['club'].'</td>
                                            <td class="py-2 px-4 ">'.$row['rating'].'</td>
                                            <td> 
                                                <button><i class="showUpdateBtn fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                                <a href="./CRUD/Delete.php?id='.$id.'&table=goalkeeper"><i class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 fa-solid fa-trash" ></i></a>
                                            </td>    
                                        </tr>';
                                        }
                        ?>
                        
                    </tbody>
                </table>
                <table id="nationalityTable" class="w-full border-collapse text-center hidden">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="py-2 px-4 hidden">id</th>
                            <th class="py-2 px-4">Nationality</th>
                            <th class="py-2 px-4">Flag</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                        
                                foreach ($nationalityData as $row){
                                    $id=$row['nationality_id'];
                                echo '<tr class="border-b">
                                        <td class="py-2 px-4 hidden">'.$row['nationality_id'].'  </td>
                                        <td class="py-2 px-4">'.$row['nationality'].'</td>
                                        <td class="py-2 px-4 flex justify-center"><img src="'.$row['flaag'].'" alt="" class="w-12"/></td>
                                        <td> 
                                            <button ><i class="showUpdateBtn fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                            
                                        </td>    
                                    </tr>';
                                        }
                        ?>
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
                    <?php 
                               
                            foreach ($clubData as $row){
                                $id=$row['club_id'];
                                echo '
                                <tr class="border-b">
                                    <td class="py-2 px-4 hidden">'.$row['club_id'].'</td>
                                    <td class="py-2 px-4 ">'.$row['club'].' </td>
                                    <td class="py-2 px-4 flex justify-center"><img src="'.$row['img'].'" alt="" class="w-12"/></td>
                                    <td> 
                                        <button ><i class="showUpdateBtn fa-solid fa-pen-to-square px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" ></i></button>
                                        
                                    </td>    
                                </tr>';
                                        }
                        ?>
                    </tbody>
                </table>
               
            </div>

            <div class="task-modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 " id="modal-task">
                    <div class="modal-dialog bg-white rounded-lg shadow-lg min-w-[620px] max-w-[620px]">
                        <div class="modal-content ">
                        <form method="POST" id="form-player" class="p-4" enctype="multipart/form-data" action="./CRUD/Add.php">
                            
                            <div class="modal-header flex justify-between items-center border-b  pb-1">
                            <h5 id="formTitle" class="text-lg font-semibold">Add Player</h5>
                            <button id="close"><i class="fa-solid fa-xmark fa-xl" style="color: #8a8f99;"></i></button>
                            </div>
                            <!-- img form -->

                            <div id="img_form" class="modal-body space-y-4 mt-4 flex justify-center  p-3 max-h-[83vh] hidden">
                               
                                <input type="file" id="profile-photo" name="profile-photo" accept="image/*" class="hidden" />
                                <label for="profile-photo" class="px-4 py-2 bg-gray-200 text-slate-700 rounded cursor-pointer hover:bg-gray-300">
                                    Upload Photo
                                </label>
                            </div>    

                            <!--Nationality_form-->

                            <div id="nationality_form" class="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden">
                                <div>
                                    <label for="Nationality-name" class="block text-lg font-medium text-gray-700">Nationality</label>
                                    <input type="text" name="Nationality-name" id="Nationality-name" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>

                                <div>
                                    <label for="flag-photo" class="block text-lg font-medium text-gray-700">Flag</label>
                                    <input type="url" name="flag-photo" id="flag-photo" placeholder="Flag URL" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                            </div>

                            <!--Club_form-->

                            <div id="club_form" class="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden">
                                <div>
                                    <label for="club-name" class="block text-lg font-medium text-gray-700">Club</label>
                                    <input type="text" name="club" id="club-name" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>

                                <div>
                                    <label for="img-club" class="block text-lg font-medium text-gray-700">logo</label>
                                    <select
                                    id="img-club" name="logo"
                                    class=" border text-sm rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500 block p-2.5">
                                    <option value="" disabled selected hidden>
                                    Choose a logo
                                    </option>
                                    <?php 
                                    
                                    foreach ($imgData as $row){
                                        echo '<option value="'.$row['id_img'].'" >'.$row['name_img'].'</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>

                            <!--player_form-->

                            <div id="player_form" class="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden ">
                            
                            <input type="hidden" id="player-id">

                            <!-- Name -->
                            <div>
                                <label for="player-name" class="block text-lg font-medium text-gray-700">Name</label>
                                <input type="text" name="player-name" id="player-name" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <!-- Photo -->
                            <div>
                                <label for="player-photo" class="block text-lg font-medium text-gray-700">Photo</label>
                                <select
                                    id="player-photo" name="player-photo"
                                    class=" border text-sm rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500 block p-2.5">
                                    <option value="" disabled selected hidden>
                                    Choose a profile
                                    </option>
                                    <?php 
                                    
                                    foreach ($imgData as $row){
                                        echo '<option value="'.$row['id_img'].'" >'.$row['name_img'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Position -->
                            <div>
                                <label for="player-position" class="block text-lg font-medium text-gray-700">Position</label>
                                <select
                                    id="Position" name="player-position"
                                    class=" border text-sm rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500 block p-2.5">
                                    <option value="" disabled selected hidden>
                                    Choose the position
                                    </option>
                                    <option value="RW">Right Winger</option>
                                    <option value="ST">Striker</option>
                                    <option value="CB2">Center Back2</option>
                                    <option value="CB1">Center Back1</option>
                                    <option value="LW">Left Winger</option>
                                    <option class="hidden" value="GK">Goalkeeper</option>
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
                                <select
                                    id="player-nationality" name="player-nationality"
                                    class=" border text-sm rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500 block p-2.5">
                                    <option value="" disabled selected hidden>
                                    Choose a nationality
                                    </option>
                                    <?php 
                                    
                                    foreach ($nationalityData as $row){
                                        echo '<option value="'.$row['nationality_id'].'" >'.$row['nationality'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- Club -->
                            <div>
                                <label for="player-club" class="block text-lg font-medium text-gray-700">Club</label>
                                <select
                                    id="player-club" name="player-club"
                                    class=" border text-sm rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500 block p-2.5">
                                    <option value="" disabled selected hidden>
                                    Choose a Club
                                    </option>
                                    <?php 
                                    
                                    foreach ($clubData as $row){
                                        echo '<option value="'.$row['club_id'].'" >'.$row['club'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Statistiques -->
                            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                                <div>
                                <label for="player-rating" class="block text-lg font-medium text-gray-700">Rating</label>
                                <input type="number" name="player-rating" id="player-rating" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-pace" id="pace-label" class="block text-lg font-medium text-gray-700">Pace</label>
                                <input type="number" name="player-pace" id="player-pace" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-shooting" id="shooting-label" class="block text-lg font-medium text-gray-700">Shooting</label>
                                <input type="number" name="player-shooting" id="player-shooting" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-passing" id="passing-label" class="block text-lg font-medium text-gray-700">Passing</label>
                                <input type="number" name="player-passing" id="player-passing" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-dribbling" id="dribbling-label" class="block text-lg font-medium text-gray-700">Dribbling</label>
                                <input type="number" name="player-dribbling" id="player-dribbling" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-defending" id="defending-label" class="block text-lg font-medium text-gray-700">Defending</label>
                                <input type="number" name="player-defending" id="player-defending" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                <label for="player-physical" id="physical-label" class="block text-lg font-medium text-gray-700">Physical</label>
                                <input type="number" name="player-physical" id="player-physical" min="0" max="100" class="w-full px-3 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                            </div>
                            </div>

                            <!-- Footer -->
                             <?php
                             echo 
                            '<div class="modal-footer flex justify-end space-x-3 pt-4 border-t">
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md shadow hover:bg-gray-200" id="form-cancel">Cancel</button>
                            <a href="./CRUD/Update.php?id='.$id.'" id="updateForm" class="hidden"><i class=" fa-solid fa-pen-to-square px-5 py-3 bg-green-500 text-white rounded hover:bg-green-600" ></i></a>
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600" id="player-save-btn">Save</button>
                            </div>'
                            ?>
                        </form>
                        </div>
                    </div>
            </div>

        </main>
    </div>
    <script src="script.js"></script>

</body>
</html>
