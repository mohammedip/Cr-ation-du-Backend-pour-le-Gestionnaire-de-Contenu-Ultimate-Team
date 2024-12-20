const addItem =document.getElementById("addItem")
const btnCancel =document.getElementById("form-cancel")
const btnClose =document.getElementById("close")
const form=  document.getElementById("modal-task")
const playerInputs=  document.querySelector("modal-body")
const nationalityInputs=  document.querySelector("modal-body")
const clubInputs=  document.querySelector("modal-body")
const formTitle =document.getElementById("formTitle")
const selectPosition=document.getElementById("Position")
const imgForm=  document.getElementById("img_form")
const UploadImg=document.getElementById("upImg")
const playerForm=document.getElementById("player_form")
const btnSave=document.getElementById("player-save-btn")
const btnUpdateForm=document.getElementById("updateForm")
const showUpdateBtns=document.querySelectorAll(".showUpdateBtn")





function switchTable(tableToShow,table1ToHide,table2ToHide,table3ToHide,item){

  document.getElementById(tableToShow).classList.remove("hidden")
  document.getElementById(table1ToHide).classList="w-full border-collapse text-center hidden"
  document.getElementById(table2ToHide).classList="w-full border-collapse text-center hidden"
  document.getElementById(table3ToHide).classList="w-full border-collapse text-center hidden"
  addItem.textContent=item
  switchInputForm(item)
}
  function switchInputForm(item){
  
  formTitle.textContent=item
  
  if(item==="Add Player"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    imgForm.classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"

    document.getElementById("pace-label").textContent="Pace"
    document.getElementById("shooting-label").textContent="Shooting"
    document.getElementById("passing-label").textContent="Passing"
    document.getElementById("dribbling-label").textContent="Dribbling"
    document.getElementById("defending-label").textContent="Defending"
    document.getElementById("physical-label").textContent="Physical"

    form.action="./CRUD/playerCRUD.php"
    btnUpdateForm.href="./CRUD/playerCRUD.php?id='.$id.'"

    selectPosition.disabled = false;
    selectPosition.value = "RW";

  }else if(item==="Add Nationality"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    imgForm.classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"

    form.action="./CRUD/nationalityCRUD.php"
    btnUpdateForm.href="./CRUD/nationalityCRUD.php?id='.$id.'"

  }else if(item==="Add Club"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    imgForm.classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"

    form.action="./CRUD/clubCRUD.php"
    btnUpdateForm.href="./CRUD/clubCRUD.php?id='.$id.'"

  }else if(item==="Add GoalKeeper"){

    document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] "
    document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
    document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden "
    imgForm.classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"

    document.getElementById("pace-label").textContent="Diving"
    document.getElementById("shooting-label").textContent="Handling"
    document.getElementById("passing-label").textContent="Kicking"
    document.getElementById("dribbling-label").textContent="Reflexes"
    document.getElementById("defending-label").textContent="Speed"
    document.getElementById("physical-label").textContent="Positioning"

    form.action="./CRUD/goalkeeperCRUD.php"
    btnUpdateForm.href="./CRUD/goalkeeperCRUD.php?id='.$id.'"

    selectPosition.disabled = true;
    selectPosition.value = "GK";

  }
}

addItem.addEventListener("click",()=>{
  form.classList.remove("hidden")
  switchInputForm(addItem.textContent)
   
})
btnCancel.addEventListener("click",(event)=>{
  event.preventDefault();
  form.classList.add("hidden")
  btnUpdateForm.classList="hidden"
  btnSave.classList.remove("hidden")

})
btnClose.addEventListener("click",(event)=>{
  event.preventDefault();
  form.classList.add("hidden")
  btnUpdateForm.classList="hidden"
  btnSave.classList.remove("hidden")

})
btnSave.addEventListener("click",(event)=>{
  selectPosition.disabled = false;

})

btnUpdateForm.addEventListener("click",(event)=>{
  selectPosition.disabled = false;

})
UploadImg.addEventListener("click",()=>{
  document.getElementById("player_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
  document.getElementById("nationality_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden"
  document.getElementById("club_form").classList="modal-body space-y-4 mt-4 overflow-y-auto max-h-[83vh] hidden "
  imgForm.classList.remove("hidden")
  form.classList.remove("hidden")
  formTitle.textContent="Upload Photo"

})

showUpdateBtns.forEach((showUpdateBtn)=>{
  showUpdateBtn.addEventListener("click",()=>{

    form.classList.remove("hidden")
    switchInputForm(addItem.textContent)
btnUpdateForm.classList.remove("hidden")
btnSave.classList.add("hidden")
  })
})

