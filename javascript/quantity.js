let addBtn = document.querySelector("#addBtn");
let subBtn = document.querySelector("#subBtn");
let quantity = document.querySelector("#quantity");

addBtn.addEventListener('click', () => {
    quantity.value = parseInt(quantity.value) + 1;
})

subBtn.addEventListener('click', () => {
    if (quantity.value <=0) {
        quantity.value = 0;
    } 
    else {
        quantity.value = parseInt(quantity.value) - 1;
    }
})