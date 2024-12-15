const addItem =document.getElementById("addItem")
const btnCancel =document.getElementById("form-cancel")
const btnSave =document.getElementById("player-save-btn")
const btnClose =document.getElementById("close")
const playerForm=  document.getElementById("modal-task")

function addMainplayer(player){
  let statistique=["PAC","SHO","PAC","DRI","DEF","PHY"]
  var id=""
  switch(player.position) {
    case "RW":
    id= "RW"
      break;
    case "ST":
      id= "ST"
      break;
      case "LW":
      id= "LW"
      break;
      case "CM1":
      id= "CM1"
      break;
      case "CM2":
      id= "CM2"
      break;
      case "CM3":
      id= "CM3"
      break;
      case "LB":
      id= "LB"
      break;
      case "CB1":
      id= "CB1"
      break;
      case "CB2":
      id= "CB2"
      break;
      case "RB":
      id= "RB"
      break;
      case "GK":
      id= "GK"
      statistique=["DIV","HAN","KIC","REF","SPD","POS"]
      break;
  } 
  
  const cardMainplayer =document.getElementById(id)
  cardMainplayer.innerHTML=`
  <div class="card p-10 relative grid place-items-center">
     <div
      class="flex text-center flex-col  absolute top-11 left-6"
    >
      <span class="rating font-bold text-[25px]">${player.rating}</span>
      <span class="position font-medium">${player.position}</span>
    </div>
    <img
      src="${player.photo}"
      alt=""
      class="photo absolute top-12 left-8 "
    /> 
    <div
           class="flex text-center flex-col  absolute top-14 right-5"
         >
          <button ><i class="iconeUpdate  fa-solid fa-pen-to-square" style="color: #0ca201;"></i></button>
           <button ><i class=" btnDelete  fa-solid fa-trash" style="color: #fe0101;"></i></button>
          <button ><i class="iconeChangement fa-solid fa-repeat" style="color: #2900f5;"></i></button>    
    </div>
    <div
      class="name absolute bottom-16  font-semibold player-name-card "
    >${player.name}</div><div
      class="hidden playerId absolute bottom-16  font-semibold player-name-card "
    >${player.playerId}</div>
    <div
      class="flex flex-row gap-2 absolute bottom-10 left-5 font-semibold leading-3"
    >
      <div class="flex flex-col ">
        <span class="text-[10px]">${statistique[0]}</span>
        <span class="pace text-[12px]">${player.pace}</span>
      </div>
      <div class="flex flex-col text-center">
        <span class="text-[10px]">${statistique[1]}</span>
        <span class="shooting text-[12px]">${player.shooting}</span>
      </div>
      <div class="flex flex-col ">
        <span class="text-[10px]">${statistique[2]}</span>
        <span class="passing text-[12px]">${player.passing}</span>
      </div>
      <div class="flex flex-col ">
        <span class="text-[10px]">${statistique[3]}</span>
        <span class="dribbling text-[12px]">${player.dribbling}</span>
      </div>
      <div class="flex flex-col ">
        <span class="text-[10px]">${statistique[4]}</span>
        <span class="defending text-[12px]">${player.defending}</span>
      </div>
      <div class="flex flex-col ">
        <span class="text-[10px]">${statistique[5]}</span>
        <span class="physical text-[12px]">${player.physical}</span>
      </div>
  </div>
  <div
      class=" flex flex-row justify-self-center gap-2 absolute bottom-4 left-16 player-name-card font-semibold "
    > 
    <img
      src="${player.logo}"
      alt=""
      class="logo h-5 w-7 "
    />
    <img
      src="${player.flag}"
      alt=""
      class="flag h-4 w-6 "
    /> 
      
      </div>
  </div>`
}
function switchTable(tableToShow,table1ToHide,table2ToHide,item){
  document.getElementById(tableToShow).classList.remove("hidden")
  document.getElementById(table1ToHide).classList="w-full border-collapse text-center hidden"
  document.getElementById(table2ToHide).classList="w-full border-collapse text-center hidden"
  addItem.textContent=item
}

addItem.addEventListener("click",()=>{
  playerForm.classList.remove("hidden")
})
btnCancel.addEventListener("click",(event)=>{
  event.preventDefault();
  playerForm.classList.add("hidden")
})
btnClose.addEventListener("click",(event)=>{
  event.preventDefault();
  playerForm.classList.add("hidden")
})
btnSave.addEventListener("click",(event)=>{
  event.preventDefault();
})

