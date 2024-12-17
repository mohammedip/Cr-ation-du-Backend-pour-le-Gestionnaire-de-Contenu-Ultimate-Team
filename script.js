const addItem =document.getElementById("addItem")
const btnCancel =document.getElementById("form-cancel")
const btnClose =document.getElementById("close")
const playerForm=  document.getElementById("modal-task")
const playerInputs=  document.querySelector("modal-body")
const nationalityInputs=  document.querySelector("modal-body")
const clubInputs=  document.querySelector("modal-body")
const formTitle =document.getElementById("formTitle")
const selectPosition=document.getElementById("Position")



function switchTable(tableToShow,table1ToHide,table2ToHide,table3ToHide,item){

  document.getElementById(tableToShow).classList.remove("hidden")
  document.getElementById(table1ToHide).classList="w-full border-collapse text-center hidden"
  document.getElementById(table2ToHide).classList="w-full border-collapse text-center hidden"
  document.getElementById(table3ToHide).classList="w-full border-collapse text-center hidden"
  addItem.textContent=item
  formTitle.textContent=item
  if(item==="Add Player"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"

    document.getElementById("pace-label").textContent="Pace"
    document.getElementById("shooting-label").textContent="Shooting"
    document.getElementById("passing-label").textContent="Passing"
    document.getElementById("dribbling-label").textContent="Dribbling"
    document.getElementById("defending-label").textContent="Defending"
    document.getElementById("physical-label").textContent="Physical"

    selectPosition.disabled = false;

  }else if(item==="Add Nationality"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"

  }else if(item==="Add Club"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
  }else if(item==="Add GoalKeeper"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden "


    document.getElementById("pace-label").textContent="Diving"
    document.getElementById("shooting-label").textContent="Handling"
    document.getElementById("passing-label").textContent="Kicking"
    document.getElementById("dribbling-label").textContent="Reflexes"
    document.getElementById("defending-label").textContent="Speed"
    document.getElementById("physical-label").textContent="Positioning"

    selectPosition.disabled = true;
    selectPosition.value = "GK";

  }
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


