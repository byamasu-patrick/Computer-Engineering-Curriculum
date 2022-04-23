window.onload = () => {
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    var current = 1;
    // bullet[current - 1].classList.add("active");
    // progressCheck[current - 1].classList.add("active");
    // progressText[current - 1].classList.add("active");
    showTab(0);
    hideTab(1);
    //current += 1;   
    
    nextBtn.addEventListener("click", function(event){
       if (current < 8) {
            event.preventDefault();
            // checkValidation();
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            showTab(current);
            hideTab(current - 1);
            current += 1;
       }
       else{
            
       }
    });

    prevBtn.addEventListener("click", function(event){
        event.preventDefault();
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        hideTab(current - 1);
        showTab(current - 2);
        current -= 1;
    });
}

function showTab(elementNumber){
    var tab = document.getElementsByClassName("tab");
    console.log(tab);
    tab[elementNumber].style.display = "block";
}
function hideTab(elementNumber){
    var tab = document.getElementsByClassName("tab");
    console.log(tab);
    tab[elementNumber].style.display = "none";
}

function validateInput(input){
    if(input.getAttribute('type') == 'email') {
        if(input.value.match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            return false;
        }
        return true;
    }
    else{
        if(input.value === ""){
            return false;
        }
        return true;
    }
}

function checkValidation(){
    var input = document.getElementsByClassName("input-val");
    var checkInfo = [];
    for (let index = 0; index < input.length; index++) {
        checkInfo[index] = validateInput(input[index]);
    }
    return checkInfo;
}