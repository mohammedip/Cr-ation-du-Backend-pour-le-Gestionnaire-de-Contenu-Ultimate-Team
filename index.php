<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soccer team builder</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="relative bg-cover bg-center bg-black grid">

    <div class="absolute inset-0 bg-black opacity-50"></div>

    <section id="equipe" class=" relative grid gap-6 mb-6 ">
        <div  class="terain grid stadium1 grid-cols-9 grid-rows-4 items-center place-items-center bg-cover h-[1100px]  ">         
               
                        <div id="RW" class="card Card card11 RW  "></div>
                        <div id="ST" class="card Card card10 ST "></div>
                        <div id="LW" class="card Card card9 LW  "></div>
                        <div id="CM1" class="card Card card8 CM1 "></div>
                        <div id="CM2" class="card Card card7 CM2 "></div>
                        <div id="CM3" class="card Card card6 CM3  "></div>
                        <div id="LB" class="card Card card5 LB  "></div>
                        <div id="CB1" class="card Card card4 CB1 "></div>
                        <div id="CB2" class="card Card card3 CB2 "></div>
                        <div id="RB" class="card Card card2 RB  "></div>
                        <div id="GK" class="card Card card1 GK "></div>
                         
        </div>

        <div class="bontouch relative grid grid-cols-3 gap-2 place-items-center lg:grid-cols-6 lg:gap-x-6">
          <div class="card  chgm1 p-10 relative grid place-items-center ">
                <div
                class="flex text-center flex-col  absolute top-11 left-6"
              >
                <span class="rating font-bold text-[25px]"></span>
                <span class="position font-medium"></span>
              </div>
              <img
                src=""
                alt=""
                class="photo absolute top-12 left-8 "
              /> 
              <div
              class="flex text-center flex-col  absolute top-14 right-5"
            >
              <button  ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
              <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
              <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
            </div>
              <div
                class="name absolute bottom-16  font-semibold player-name-card "
              >
              </div>
              <div
                class="hidden playerId absolute bottom-16  font-semibold player-name-card "
              >
              </div>
              <div
                class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
              >
                <div class="flex flex-col ">
                  <span class="text-[10px]">PAC</span>
                  <span class="pace text-[12px]"></span>
                </div>
                <div class="flex flex-col text-center">
                  <span class="text-[10px]">SHO</span>
                  <span class="shooting text-[12px]"></span>
                </div>
                <div class="flex flex-col ">
                  <span class="text-[10px]">PAS</span>
                  <span class="passing text-[12px]"></span>
                </div>
                <div class="flex flex-col ">
                  <span class="text-[10px]">DRI</span>
                  <span class="dribbling text-[12px]"></span>
                </div>
                <div class="flex flex-col ">
                  <span class="text-[10px]">DEF</span>
                  <span class="defending text-[12px]"></span>
                </div>
                <div class="flex flex-col ">
                  <span class="text-[10px]">PHY</span>
                  <span class="physical text-[12px]"></span>
                </div>
            </div>
            <div
                class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
              > 
              <img
                src=""
                alt=""
                class="logo h-5 w-7 "
              />
              <img
                src=""
                alt=""
                class="flag h-4 w-6 "
              /> 
                
                </div>
          </div>
          <div class="card  chgm2 p-10 relative grid place-items-center">
                            <div
                            class="flex text-center flex-col  absolute top-11 left-6"
                          >
                            <span class="rating font-bold text-[25px]"></span>
                            <span class="position font-medium"></span>
                          </div>
                          <img
                            src=""
                            alt=""
                            class="photo absolute top-12 left-8 "
                          /> 
                          <div
                          class="flex text-center flex-col  absolute top-14 right-5"
                        >
                          <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                          <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                    <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                        </div> 
                          <div
                            class="name absolute bottom-16  font-semibold player-name-card "
                          >
                          </div><div
                            class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                          >
                          </div>
                          <div
                            class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                          >
                            <div class="flex flex-col ">
                              <span class="text-[10px]">PAC</span>
                              <span class="pace text-[12px]"></span>
                            </div>
                            <div class="flex flex-col text-center">
                              <span class="text-[10px]">SHO</span>
                              <span class="shooting text-[12px]"></span>
                            </div>
                            <div class="flex flex-col ">
                              <span class="text-[10px]">PAS</span>
                              <span class="passing text-[12px]"></span>
                            </div>
                            <div class="flex flex-col ">
                              <span class="text-[10px]">DRI</span>
                              <span class="dribbling text-[12px]"></span>
                            </div>
                            <div class="flex flex-col ">
                              <span class="text-[10px]">DEF</span>
                              <span class="defending text-[12px]"></span>
                            </div>
                            <div class="flex flex-col ">
                              <span class="text-[10px]">PHY</span>
                              <span class="physical text-[12px]"></span>
                            </div>
                        </div>
                        <div
                            class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                          > 
                          <img
                            src=""
                            alt=""
                            class="logo h-5 w-7 "
                          />
                          <img
                            src=""
                            alt=""
                            class="flag h-4 w-6 "
                          /> 
                            
                            </div>
          </div>
          <div class="card  chgm3 p-10 relative grid place-items-center">
                        <div
                        class="flex text-center flex-col  absolute top-11 left-6"
                      >
                        <span class="rating font-bold text-[25px]"></span>
                        <span class="position font-medium"></span>
                      </div>
                      <img
                        src=""
                        alt=""
                        class="photo absolute top-12 left-8 "
                      /> 
                      <div
                      class="flex text-center flex-col  absolute top-14 right-5"
                    >
                      <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                      <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                    <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                    </div> 
                      <div
                        class="name absolute bottom-16  font-semibold player-name-card "
                      >
                      </div><div
                        class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                      >
                      </div>
                      <div
                        class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                      >
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAC</span>
                          <span class="pace text-[12px]"></span>
                        </div>
                        <div class="flex flex-col text-center">
                          <span class="text-[10px]">SHO</span>
                          <span class="shooting text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAS</span>
                          <span class="passing text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DRI</span>
                          <span class="dribbling text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DEF</span>
                          <span class="defending text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PHY</span>
                          <span class="physical text-[12px]"></span>
                        </div>
                    </div>
                    <div
                        class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                      > 
                      <img
                        src=""
                        alt=""
                        class="logo h-5 w-7 "
                      />
                      <img
                        src=""
                        alt=""
                        class="flag h-4 w-6 "
                      /> 
                        
                        </div>
          </div>
          <div class="card  chgm4 p-10 relative grid place-items-center">
                          <div
                          class="flex text-center flex-col  absolute top-11 left-6"
                        >
                          <span class="rating font-bold text-[25px]"></span>
                          <span class="position font-medium"></span>
                        </div>
                        <img
                          src=""
                          alt=""
                          class="photo absolute top-12 left-8 "
                        /> 
                        <div
                        class="flex text-center flex-col  absolute top-14 right-5"
                      >
                        <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                        <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                  <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                      </div> 
                        <div
                          class="name absolute bottom-16  font-semibold player-name-card "
                        >
                        </div><div
                          class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                        >
                        </div>
                        <div
                          class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                        >
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAC</span>
                            <span class="pace text-[12px]"></span>
                          </div>
                          <div class="flex flex-col text-center">
                            <span class="text-[10px]">SHO</span>
                            <span class="shooting text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAS</span>
                            <span class="passing text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DRI</span>
                            <span class="dribbling text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DEF</span>
                            <span class="defending text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PHY</span>
                            <span class="physical text-[12px]"></span>
                          </div>
                      </div>
                      <div
                          class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                        > 
                        <img
                          src=""
                          alt=""
                          class="logo h-5 w-7 "
                        />
                        <img
                          src=""
                          alt=""
                          class="flag h-4 w-6 "
                        /> 
                          
                          </div>
          </div>
          <div class="card  chgm5 p-10 relative grid place-items-center">
                        <div
                        class="flex text-center flex-col  absolute top-11 left-6"
                      >
                        <span class="rating font-bold text-[25px]"></span>
                        <span class="position font-medium"></span>
                      </div>
                      <img
                        src=""
                        alt=""
                        class="photo absolute top-12 left-8 "
                      /> 
                      <div
                      class="flex text-center flex-col  absolute top-14 right-5"
                    >
                      <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                      <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                    </div> 
                      <div
                        class="name absolute bottom-16  font-semibold player-name-card "
                      >
                      </div><div
                        class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                      >
                      </div>
                      <div
                        class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                      >
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAC</span>
                          <span class="pace text-[12px]"></span>
                        </div>
                        <div class="flex flex-col text-center">
                          <span class="text-[10px]">SHO</span>
                          <span class="shooting text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAS</span>
                          <span class="passing text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DRI</span>
                          <span class="dribbling text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DEF</span>
                          <span class="defending text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PHY</span>
                          <span class="physical text-[12px]"></span>
                        </div>
                    </div>
                    <div
                        class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                      > 
                      <img
                        src=""
                        alt=""
                        class="logo h-5 w-7 "
                      />
                      <img
                        src=""
                        alt=""
                        class="flag h-4 w-6 "
                      /> 
                        
                        </div>
          </div>
          <div class="card  chgm6 p-10 relative grid place-items-center">
                          <div
                          class="flex text-center flex-col  absolute top-11 left-6"
                        >
                          <span class="rating font-bold text-[25px]"></span>
                          <span class="position font-medium"></span>
                        </div>
                        <img
                          src=""
                          alt=""
                          class="photo absolute top-12 left-8 "
                        /> 
                        <div
                        class="flex text-center flex-col  absolute top-14 right-5"
                      >
                        <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                        <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                  <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                      </div> 
                        <div
                          class="name absolute bottom-16  font-semibold player-name-card "
                        >
                        </div><div
                          class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                        >
                        </div>
                        <div
                          class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                        >
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAC</span>
                            <span class="pace text-[12px]"></span>
                          </div>
                          <div class="flex flex-col text-center">
                            <span class="text-[10px]">SHO</span>
                            <span class="shooting text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAS</span>
                            <span class="passing text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DRI</span>
                            <span class="dribbling text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DEF</span>
                            <span class="defending text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PHY</span>
                            <span class="physical text-[12px]"></span>
                          </div>
                      </div>
                      <div
                          class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                        > 
                        <img
                          src=""
                          alt=""
                          class="logo h-5 w-7 "
                        />
                        <img
                          src=""
                          alt=""
                          class="flag h-4 w-6 "
                        /> 
                          
                          </div>
          </div>
          <div class="card  chgm7 p-10 relative grid place-items-center">
                          <div
                          class="flex text-center flex-col  absolute top-11 left-6"
                        >
                          <span class="rating font-bold text-[25px]"></span>
                          <span class="position font-medium"></span>
                        </div>
                        <img
                          src=""
                          alt=""
                          class="photo absolute top-12 left-8 "
                        /> 
                        <div
                        class="flex text-center flex-col  absolute top-14 right-5"
                      >
                        <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                        <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                  <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                      </div> 
                        <div
                          class="name absolute bottom-16  font-semibold player-name-card "
                        >
                        </div><div
                          class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                        >
                        </div>
                        <div
                          class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                        >
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAC</span>
                            <span class="pace text-[12px]"></span>
                          </div>
                          <div class="flex flex-col text-center">
                            <span class="text-[10px]">SHO</span>
                            <span class="shooting text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAS</span>
                            <span class="passing text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DRI</span>
                            <span class="dribbling text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DEF</span>
                            <span class="defending text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PHY</span>
                            <span class="physical text-[12px]"></span>
                          </div>
                      </div>
                      <div
                          class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                        > 
                        <img
                          src=""
                          alt=""
                          class="logo h-5 w-7 "
                        />
                        <img
                          src=""
                          alt=""
                          class="flag h-4 w-6 "
                        /> 
                          
                          </div>
          </div>
          <div class="card  chgm8 p-10 relative grid place-items-center">
                        <div
                        class="flex text-center flex-col  absolute top-11 left-6"
                      >
                        <span class="rating font-bold text-[25px]"></span>
                        <span class="position font-medium"></span>
                      </div>
                      <img
                        src=""
                        alt=""
                        class="photo absolute top-12 left-8 "
                      /> 
                      <div
                      class="flex text-center flex-col  absolute top-14 right-5"
                    >
                      <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                      <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                    </div> 
                      <div
                        class="name absolute bottom-16  font-semibold player-name-card "
                      >
                      </div><div
                        class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                      >
                      </div>
                      <div
                        class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                      >
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAC</span>
                          <span class="pace text-[12px]"></span>
                        </div>
                        <div class="flex flex-col text-center">
                          <span class="text-[10px]">SHO</span>
                          <span class="shooting text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAS</span>
                          <span class="passing text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DRI</span>
                          <span class="dribbling text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DEF</span>
                          <span class="defending text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PHY</span>
                          <span class="physical text-[12px]"></span>
                        </div>
                    </div>
                    <div
                        class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                      > 
                      <img
                        src=""
                        alt=""
                        class="logo h-5 w-7 "
                      />
                      <img
                        src=""
                        alt=""
                        class="flag h-4 w-6 "
                      /> 
                        
                        </div>
          </div>
          <div class="card  chgm9 p-10 relative grid place-items-center">
                      <div
                      class="flex text-center flex-col  absolute top-11 left-6"
                    >
                      <span class="rating font-bold text-[25px]"></span>
                      <span class="position font-medium"></span>
                    </div>
                    <img
                      src=""
                      alt=""
                      class="photo absolute top-12 left-8 "
                    /> 
                    <div
                    class="flex text-center flex-col  absolute top-14 right-5"
                  >
                    <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                    <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
              <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                  </div> 
                    <div
                      class="name absolute bottom-16  font-semibold player-name-card "
                    >
                    </div><div
                      class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                    >
                    </div>
                    <div
                      class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                    >
                      <div class="flex flex-col ">
                        <span class="text-[10px]">PAC</span>
                        <span class="pace text-[12px]"></span>
                      </div>
                      <div class="flex flex-col text-center">
                        <span class="text-[10px]">SHO</span>
                        <span class="shooting text-[12px]"></span>
                      </div>
                      <div class="flex flex-col ">
                        <span class="text-[10px]">PAS</span>
                        <span class="passing text-[12px]"></span>
                      </div>
                      <div class="flex flex-col ">
                        <span class="text-[10px]">DRI</span>
                        <span class="dribbling text-[12px]"></span>
                      </div>
                      <div class="flex flex-col ">
                        <span class="text-[10px]">DEF</span>
                        <span class="defending text-[12px]"></span>
                      </div>
                      <div class="flex flex-col ">
                        <span class="text-[10px]">PHY</span>
                        <span class="physical text-[12px]"></span>
                      </div>
                  </div>
                  <div
                      class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                    > 
                    <img
                      src=""
                      alt=""
                      class="logo h-5 w-7 "
                    />
                    <img
                      src=""
                      alt=""
                      class="flag h-4 w-6 "
                    /> 
                      
                      </div>
          </div>
          <div class="card  chgm10 p-10 relative grid place-items-center">
                    <div
                    class="flex text-center flex-col  absolute top-11 left-6"
                  >
                    <span class="rating font-bold text-[25px]"></span>
                    <span class="position font-medium"></span>
                  </div>
                  <img
                    src=""
                    alt=""
                    class="photo absolute top-12 left-8 "
                  /> 
                  <div
                  class="flex text-center flex-col  absolute top-14 right-5"
                >
                  <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                  <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
            <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                </div> 
                  <div
                    class="name absolute bottom-16  font-semibold player-name-card "
                  >
                  </div><div
                    class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                  >
                  </div>
                  <div
                    class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                  >
                    <div class="flex flex-col ">
                      <span class="text-[10px]">PAC</span>
                      <span class="pace text-[12px]"></span>
                    </div>
                    <div class="flex flex-col text-center">
                      <span class="text-[10px]">SHO</span>
                      <span class="shooting text-[12px]"></span>
                    </div>
                    <div class="flex flex-col ">
                      <span class="text-[10px]">PAS</span>
                      <span class="passing text-[12px]"></span>
                    </div>
                    <div class="flex flex-col ">
                      <span class="text-[10px]">DRI</span>
                      <span class="dribbling text-[12px]"></span>
                    </div>
                    <div class="flex flex-col ">
                      <span class="text-[10px]">DEF</span>
                      <span class="defending text-[12px]"></span>
                    </div>
                    <div class="flex flex-col ">
                      <span class="text-[10px]">PHY</span>
                      <span class="physical text-[12px]"></span>
                    </div>
                </div>
                <div
                    class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                  > 
                  <img
                    src=""
                    alt=""
                    class="logo h-5 w-7 "
                  />
                  <img
                    src=""
                    alt=""
                    class="flag h-4 w-6 "
                  /> 
                    
                    </div>
          </div>
          <div class="card  chgm11 p-10 relative grid place-items-center">
                          <div
                          class="flex text-center flex-col  absolute top-11 left-6"
                        >
                          <span class="rating font-bold text-[25px]"></span>
                          <span class="position font-medium"></span>
                        </div>
                        <img
                          src=""
                          alt=""
                          class="photo absolute top-12 left-8 "
                        /> 
                        <div
                        class="flex text-center flex-col  absolute top-14 right-5"
                      >
                        <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                        <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                  <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                      </div> 
                        <div
                          class="name absolute bottom-16  font-semibold player-name-card "
                        >
                        </div><div
                          class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                        >
                        </div>
                        <div
                          class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                        >
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAC</span>
                            <span class="pace text-[12px]"></span>
                          </div>
                          <div class="flex flex-col text-center">
                            <span class="text-[10px]">SHO</span>
                            <span class="shooting text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PAS</span>
                            <span class="passing text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DRI</span>
                            <span class="dribbling text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">DEF</span>
                            <span class="defending text-[12px]"></span>
                          </div>
                          <div class="flex flex-col ">
                            <span class="text-[10px]">PHY</span>
                            <span class="physical text-[12px]"></span>
                          </div>
                      </div>
                      <div
                          class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                        > 
                        <img
                          src=""
                          alt=""
                          class="logo h-5 w-7 "
                        />
                        <img
                          src=""
                          alt=""
                          class="flag h-4 w-6 "
                        /> 
                          
                          </div>
          </div>
          <div class="card  chgm12 p-10 relative grid place-items-center">
                        <div
                        class="flex text-center flex-col  absolute top-11 left-6"
                      >
                        <span class="rating font-bold text-[25px]"></span>
                        <span class="position font-medium"></span>
                      </div>
                      <img
                        src=""
                        alt=""
                        class="photo absolute top-12 left-8 "
                      /> 
                      <div
                      class="flex text-center flex-col  absolute top-14 right-5"
                    >
                      <button ><i class="iconeUpdate fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
                      <button ><i class="btnDelete fa-solid fa-trash" style="color: #fe0101;"></i></button>
                <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
                    </div> 
                      <div
                        class="name absolute bottom-16  font-semibold player-name-card "
                      >
                      </div><div
                        class="hidden playerId absolute bottom-16  font-semibold player-name-card "
                      >
                      </div>
                      <div
                        class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
                      >
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAC</span>
                          <span class="pace text-[12px]"></span>
                        </div>
                        <div class="flex flex-col text-center">
                          <span class="text-[10px]">SHO</span>
                          <span class="shooting text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PAS</span>
                          <span class="passing text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DRI</span>
                          <span class="dribbling text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">DEF</span>
                          <span class="defending text-[12px]"></span>
                        </div>
                        <div class="flex flex-col ">
                          <span class="text-[10px]">PHY</span>
                          <span class="physical text-[12px]"></span>
                        </div>
                    </div>
                    <div
                        class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
                      > 
                      <img
                        src=""
                        alt=""
                        class="logo h-5 w-7 "
                      />
                      <img
                        src=""
                        alt=""
                        class="flag h-4 w-6 "
                      /> 
                        
                        </div>
                      </div>
        </div>

    </section>

    <script src="script.js"></script>
  </body>
</html>
