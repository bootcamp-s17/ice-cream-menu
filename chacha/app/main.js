let prices = [];
let total = 0;
console.log(prices);



function pullData(){
	$.ajax({
		type: "GET",
		url: 'data.json',
		dataType: 'json',
		success: function(data){
			console.log(data);
			for (let i=0; i < data.length; i++){
				let price ={
					price: data[i].price
				}
				prices.push(price);
			}
		}		
	});	
}

function total(price,state){
	if (state === true){
		toaal += price;
	}else{
		total -=price
	}
};

function toggle(service){
	service.state = !service.state;
};
