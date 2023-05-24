let creatButton = document.getElementById("creat-button");
let creatForm = document.getElementById("creat-form");
let isCreatFormtDislpaying = false;

let updateButton = document.getElementById("update-button");
let updateForm = document.getElementById("update-form");
let isUpdateFormDisplaying = false;

let deleteButton = document.getElementById("delete-button");
let deleteForm = document.getElementById("delete-form");
let isDeleteFormDisplaying = false;


//Toggle
creatButton.onclick = () =>{

//Displaying a form
if(isCreatFormtDislpaying==false){
creatForm.style.display = "block";
isCreatFormtDislpaying = true;


//Hiding a form
}else{
  
creatForm.style.display = "none";
isCreatFormtDislpaying = false;
}
}


//Toggle update form 
updateButton.onclick = function(){

    if(isUpdateFormDisplaying==false){
        updateForm.style.display = "block";
        isUpdateFormDisplaying = true;

    }else{
        updateForm.style.display = "none";
        isUpdateFormDisplaying = false;

    }
}

//Toggle delete form 


deleteButton.onclick = () =>{

    //Displaying a form
    if(isDeleteFormDisplaying==false){
    deleteForm.style.display = "block";
    isDeleteFormDisplaying = true;
    
    
    //Hiding a form
    }else{
      
   deleteForm.style.display = "none";
   isDeleteFormDisplaying = false;
    }
    }
    