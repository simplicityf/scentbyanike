function validateForm() {

    let x= document.forms ["myForm"] ["name","email","message"].value;
    if (x=="") {alert ("Please fill out the forms");
        return false;
    }
    }
    
    function viewMore() {
        document.getElementById("view2").style.display="none";
        document.getElementById("view3").style.display="block";
        document.getElementById("view1").style.display="block";
    }
    
    function viewLess() {
        document.getElementById("view2").style.display="block";
        document.getElementById("view3").style.display="none";
        document.getElementById("view1").style.display="none"; 
    }
    
     
    function search() {
        //DOM Manipulation
        const input = document.getElementById('filter').value.toUpperCase();
        const cardContainer = document.getElementById('card-list');
        console.log(cardContainer);
        
        const cards = cardContainer.getElementsByClassName('card');
        console.log('cards');
    
        for(let i=0; i < cards.length; i++) {
            let title = cards[i].querySelector(".card-body h4.card-title");
            console.log('title');
    
         if(title.innerText.toUpperCase().indexOf(input) > -1) {
            cards[i].style.display = "block";
         } else {
            cards[i].style.display = "none";
         }
        
         }
    
        }
    
        