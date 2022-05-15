const tiles = {
	brick_60: {
		article: 'brick_60', 
		name: 'Кирпич, 60мм',
 		price: {
 			grey: 310,
 			red: 380,
 			black: 400,
 			yellow: 450
 		},
 		palletQty: 9.6,
	},
	brick_80: {
		article: 'brick_80',
		name: 'Кирпич, 80мм',
 		price: {
 			grey: 380,
 			red: 460,
 			black: 480,
 			yellow: 550
 		},
 		palletQty: 7.68,
	},
	brick_100: {
		article: 'brick_100',
		name: 'Кирпич, 100мм',
 		price: {
 			grey: 470,
 			red: 580,
 			black: 600,
 			yellow: 670
 		},
 		palletQty: 5.76,
	},
	reel_60: {
		article: 'reel_60',
		name: 'Катушка, 60мм',
 		price: {
 			grey: 330,
 			red: 400,
 			black: 420,
 			yellow: 470
 		},
 		palletQty: 8.57,
	},	
	old_town_60: {
		article: 'old_town_60',
		name: 'Старый город, 60мм',
 		price: {
 			grey: 340,
 			red: 410,
 			black: 430,
 			yellow: 480
 		},
 		palletQty: 0,
	},			
};

const colors = {
	grey: {
		article: 'grey',
		name: 'Серый'
	},
	red: {
		article: 'red',
		name: 'Красный'
	},
	black: {
		article: 'black',
		name: 'Черный'
	},
	yellow: {
		article: 'yellow',
		name: 'Желтый'
	}
}

let currentTileType;
let currentColor;
let sqrt = 0;
let delivering = false;
let mounting = false;

let costs = {
	costDelivering: 0,
	costMounting: 0,
	currentTilePrice: 0
};

Object.defineProperty(costs, 'costDelivering', {
	get: () => {
		return (delivering ? 3200 : 0 )
	},
});

Object.defineProperty(costs, 'costMounting', {
	get: () => {
		if(sqrt > 0){
			return (mounting ? (sqrt * 1000) : 0) 	
		} else {
			return 0;
		}
	},
});
Object.defineProperty(costs, 'currentTilePrice', {
	get: () => {
		if(currentColor !== undefined && currentTileType !== undefined) {
			return currentTileType.price[currentColor.article];	
		} else {
			return 0;
		}
	},
});

document.getElementById('sqrt').value = '';
document.getElementById('deliveringChekbox').checked = false;
document.getElementById('mountingChekbox').checked = false;

const tileChoise = (element) => {
	if(currentTileType !== undefined){
		document.getElementById(currentTileType.article).setAttribute('class', 'tile')
	}
	document.getElementById(element.article).setAttribute('class', 'tile frame');
	currentTileType = element;
	sum();
}

const colorChoise = (element) => {
	if(currentColor !== undefined){
		document.getElementById(currentColor.article).setAttribute('class', 'color');
	}
	document.getElementById(element.article).setAttribute('class', 'color frame');
	currentColor = element;

	sum();
}

const sqrtChange = () => {
	if(document.getElementById('sqrt').value <= 0){
		sqrt = 0;	
	} else {
		sqrt = document.getElementById('sqrt').value
		if(costs.costMounting != NaN || costs.costMounting > 0) {
		} else {
		}
	}	
	sum();
}

const toggle = (variable) => {
	switch (variable) {
		case 'delivering':
		delivering = !delivering;
		sum();	
		break;

		case 'mounting':
		mounting = !mounting;
		sum();
		break;
	}
}

const sum = () => {
	document.getElementById('sum').innerHTML = (costs.currentTilePrice * sqrt) + costs.costDelivering + costs.costMounting;
}



