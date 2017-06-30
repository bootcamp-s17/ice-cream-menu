//Find all icecream cards inside our menu div and store them
var icecreamCards = $('#menu').find('.icecream-card');
var icecreamCardsPrice = $('#menu').find('.icecream-card').find('.icecream-price');
var icecreamCardsTotal = $('#menu').find('.icecream-card').find('.icecream-total');
var toppingsPrice = $('#menu').find('.icecream-card').find('.topping-price');
var icecreamCardsCount = icecreamCards.length;

var basketItems = [];

for (var i = 0; i < icecreamCardsCount; i++){
	//Set current item price to icecream's initial price, which was pulled from the db
	icecreamCardsTotal[i].value = icecreamCardsPrice[i].value;

}

function addRemoveTopping(event){
	var toppingPrice = parseFloat($(event.target).parent().parent().find('.topping-price')[0].value);
	var icecreamTotal = ($(event.target).parent().parent().parent().parent().parent().parent().parent().parent().find('.icecream-total')[0]);

	if (!event.target.checked){
		icecreamTotal.value = (parseFloat(icecreamTotal.value) - toppingPrice).toString();
		// console.log(icecreamTotal);
		// console.log(toppingPrice);
	} else {
		icecreamTotal.value = (parseFloat(icecreamTotal.value) + toppingPrice).toString();
		// console.log(icecreamTotal);
		// console.log(toppingPrice);
	}
}

function addRemoveServing(event){
	var servingPrice = parseFloat($(event.target).parent().parent().find('.serving-price')[0].value);
	// console.log(servingPrice);
	var icecreamTotal = ($(event.target).parent().parent().parent().parent().parent().parent().parent().parent().find('.icecream-total')[0]);
	// console.log((icecreamTotal.value));

	if (!event.target.checked){
		icecreamTotal.value = (parseFloat(icecreamTotal.value) - servingPrice).toString();
		// console.log(icecreamTotal);
		// console.log(toppingPrice);
	} else {
		icecreamTotal.value = (parseFloat(icecreamTotal.value) + servingPrice).toString();
		// console.log(icecreamTotal);
		// console.log(toppingPrice);
	}
}

function addToBasket(event) {
	// console.log($(event.target).parent().parent().find('#icecream-name')[0].innerText); //name
	// console.log(parseFloat($(event.target).parent().parent().find('.icecream-total')[0].value)); //total
	// console.log($(event.target).parent().parent().parent().parent().parent().find('.topping-checkbox')); //toppings

	var name = $(event.target).parent().parent().find('#icecream-name')[0].innerText;
	var servings = $(event.target).parent().parent().parent().parent().parent().find('.serving-name');
	var servingsChecked = $(event.target).parent().parent().parent().parent().parent().find('.serving-checkbox');
	var total = parseFloat($(event.target).parent().parent().find('.icecream-total')[0].value);
	var toppings = $(event.target).parent().parent().parent().parent().parent().find('.topping-name');
	var toppingsChecked = $(event.target).parent().parent().parent().parent().parent().find('.topping-checkbox');
	for (var i = 0; i < toppings.length; i++){
		if (toppingsChecked[i].checked) {
			toppings[i] = toppings[i].innerText;
		} else {
			toppings[i] = "";
		}
	}
	for (var i = 0; i < servings.length; i++){
		if (servingsChecked[i].checked) {
			servings[i] = servings[i].innerText;
		} else {
			servings[i] = "";
		}
	}
	// console.log(toppings);
	basketItems.push({'name': name,
					  'toppings': toppings,
					  'servings': servings,
					  'total': total});
	console.log(basketItems);
	updateTotal(basketItems);
}

function updateTotal(basket) {
	var orderTotal = $('#order-total')[0];
	console.log(orderTotal);
	var tempTotal = 0;
	for (var i = 0; i < basket.length; i++){
		// console.log(basket[i]['total']);
		tempTotal += basket[i]['total'];
	}

	orderTotal.value = tempTotal.toString();
}