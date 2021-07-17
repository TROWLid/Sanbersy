var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

var listItems = document.getElementById("listBarang");

function printItems(array) {
	var holder = "";
	for (var i = 0; i < array.length; i++) {
		holder += `<div class ="col-4 mt-2"> 
				   <div class="card" style="width: 18rem;">
				       <img src="img/${array[i][4]}" class="card-img-top" height="200px" width="200px" alt="...">
				       <div class="card-body">
				           <h5 class="card-title " id="itemName">${array[i][1]}</h5>
				           <p class="card-text " id="itemDesc">${array[i][3]}</p>
				           <p class="card-text ">Rp ${array[i][2]}</p>
				           <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
				       </div>
				   </div>
				   </div>`
	}
	listItems.innerHTML = holder;

}
printItems(items);

function filter(kword) {
	var filteredItems = [];
	for (var x = 0; x < items.length; x++) {
		var iFilt = items[x];
		var isMatch = iFilt[1].toLowerCase().includes(kword.toLowerCase())
		if(isMatch == true){
			filteredItems.push(iFilt)
		}
	}
	return filteredItems;
}

var formSearch = document.getElementById("formItem");
formSearch.addEventListener("submit", function(event){
	event.preventDefault()
	var keyword = document.getElementById("keyword").value

	var filteredItems2 = filter(keyword);
	printItems(filteredItems2);
})

var inputSearch = document.getElementById("keyword");
inputSearch.addEventListener("keyup", function(e){
	var val = event.target.value

	var filterDgnKeyup = filter(val)
	printItems(filterDgnKeyup)
})


var tmbh = document.getElementById("addCart");
var hsl = document.getElementById("cart");
var no = parseInt(1);

tmbh.onclick = function(){
	hsl.innerHTML = `<i class="fas fa-shopping-cart"></i>(${no++})`;
}