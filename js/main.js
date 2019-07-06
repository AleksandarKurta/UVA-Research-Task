function filterTable() {
    let filterCity = document.getElementById("city").value.toUpperCase();
    let filterBeds = document.getElementById("beds").value.toUpperCase();
    let filterBaths = document.getElementById("baths").value.toUpperCase();

    let sqftFrom = Number(document.getElementById("sqftFrom").value.toUpperCase());
    let sqftTo = Number(document.getElementById("sqftTo").value.toUpperCase());

    let priceFrom = Number(document.getElementById("priceFrom").value.toUpperCase());
    let priceTo =  Number(document.getElementById("priceTo").value.toUpperCase());

    let div = document.getElementById("search");
    let arr = [];

    let rows = document.querySelector("#myTable tbody").rows;
    let rowsLength = rows.length;
    for (let i = 0; i < rowsLength; i++) {
        let firstCol = rows[i].cells[1].textContent.toUpperCase();
        let secondCol = rows[i].cells[4].textContent.toUpperCase();
        let thirdCol = rows[i].cells[5].textContent.toUpperCase();
        let fourthCol = Number(rows[i].cells[6].textContent.toUpperCase());
        let fifthCol = Number(rows[i].cells[9].textContent.toUpperCase());
        if(firstCol.indexOf(filterCity) > -1 && secondCol.indexOf(filterBeds) > -1 && thirdCol.indexOf(filterBaths) > -1 && between(fourthCol, sqftFrom, sqftTo) && between(fifthCol, priceFrom, priceTo)) {
            rows[i].style.display = "";
        }else{
            rows[i].style.display = "none";
            arr.push(rows[i]);
            arr.length === rowsLength ? div.innerHTML = "<h3>No results matching your search criteria</h3>" : div.innerHTML = ""; 
        }    
    }
}

function between(x, min, max) {
    if(!min && !max){
        return true;
    }else if(!max){
        return x >= min; 
    }else if(!min){
        return x <= max;
    }else{
        return x >= min && x <= max;
    }
}
