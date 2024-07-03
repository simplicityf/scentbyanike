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


    let field = document.getElementById('card-list');
    console.log(field);
  
    let list = Array.from(field.children);
    console.log(list);

    let select = document.getElementById("select");
    let ar =  [];

    for(let i of list) {
        const last = i.lastElementChild;
        const x = last.textContent.trim();
        const y = Number(x.substring(1));
        i.setAttribute('data-price', y);
        ar.push(i);
    }

    select.onchange = sortingValue;

    function sortingValue() {

        if(this.value  == 'Default') {
            while (field.firstChild){
                field.removeChild(field.firstChild);
            }
            field.append(...ar);
        }
        if(this.value == 'LowToHigh') {
            sortElem(field, li, true);
        }

        if(this.value == 'HighToLow') {
            sortElem(field, li, false);
        }

    /*const cards = cardContainer.getElementsByClassName('card');
    console.log('cards');

    for(let i=0; i < cards.length; i++) {
        let title = cards[i].querySelector(".card-title");
        console.log('title');

            cards[i].innerHTML = title.sort(asc);
         
    }*/
}

function sortElem() {
    let dm,  sortli;
    dm= asc? 1 : -1;
    sortli = li.sort((a,b)=>{
        const ax = a.getAttribute('data-price');
        const bx = b.getAttribute('data-price');

        return ax > bx ? (1*dm) : (-1*dm);
    });

    while(field.firstChild){
        field.removeChild(field.firstChild);
    }
    field.append(...sortli);
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
