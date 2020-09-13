// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
	// =============================
	// Private methods and propeties
	// =============================
	cart = [];
	
	// Constructor
	function Item(name, price, count) {
	  this.name = name;
	  this.price = price;
	  this.count = count;
	}
	
	// Save cart
	function saveCart() {
	  sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
	}
	
	  // Load cart
	function loadCart() {
	  cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
	}
	if (sessionStorage.getItem("shoppingCart") != null) {
	  loadCart();
	}
	
  
	// =============================
	// Public methods and propeties
	// =============================
	var obj = {};
	
	// Add to cart
	obj.addItemToCart = function(name, price, count) {
		
	  for(var item in cart) { 
		if(cart[item].name === name) { 
			if(cart[item].count < 2){
				cart[item].count ++;
				saveCart();
				console.log(cart[item].count);
				return;
			}
			else{
				alert("Sorry! You can only add maximun 2 quantity of an item.");
				return;
			}
		} 
	  }
	  var item = new Item(name, price, count);
	  cart.push(item);
	  saveCart(); 
	}
	// Set count from item
	obj.setCountForItem = function(name, count) {
	  for(var i in cart) {
		if (cart[i].name === name) {
		  cart[i].count = count;
		  break;
		}
	  }
	};
	// Remove item from cart
	obj.removeItemFromCart = function(name) {
		for(var item in cart) {
		  if(cart[item].name === name) {
			cart[item].count --;
			if(cart[item].count === 0) {
			  cart.splice(item, 1);
			}
			break;
		  }
	  }
	  saveCart();
	}
  
	// Remove all items from cart
	obj.removeItemFromCartAll = function(name) {
	  for(var item in cart) {
		if(cart[item].name === name) {
		  cart.splice(item, 1);
		  break;
		}
	  }
	  saveCart();
	}
  
	// Clear cart
	obj.clearCart = function() {
	  cart = [];
	  saveCart();
	}
  
	// Count cart 
	obj.totalCount = function() {
	  var totalCount = 0;
	  for(var item in cart) {
		totalCount += cart[item].count;
	  }
	  return totalCount;
	}
  
	// Total cart
	obj.totalCart = function() {
	  var totalCart = 0;
	  for(var item in cart) {
		totalCart += cart[item].price * cart[item].count;
	  }
	  return Number(totalCart.toFixed(2));
	}
  
	// List cart
	obj.listCart = function() {
	  var cartCopy = [];
	  for(i in cart) {
		item = cart[i];
		itemCopy = {};
		for(p in item) {
		  itemCopy[p] = item[p];
  
		}
		itemCopy.total = Number(item.price * item.count).toFixed(2);
		cartCopy.push(itemCopy)
	  }
	  return cartCopy;
	}
  
	// cart : Array
	// Item : Object/Class
	// addItemToCart : Function
	// removeItemFromCart : Function
	// removeItemFromCartAll : Function
	// clearCart : Function
	// countCart : Function
	// totalCart : Function
	// listCart : Function
	// saveCart : Function
	// loadCart : Function
	return obj;
  })();
  
  
  // *****************************************
  // Triggers / Events
  // ***************************************** 
  // Add item
  $('.add-to-cart').click(function(event) {
	event.preventDefault();
	var name = $(this).data('name');
	var price = Number($(this).data('price'));
	shoppingCart.addItemToCart(name, price, 1);
	displayCart();
  });
  
  // Clear items
  $('.clear-cart').click(function() {
	shoppingCart.clearCart();
	displayCart();
  });
  
  
  function displayCart() {
	var cartArray = shoppingCart.listCart();
	var output = "";
	for(var i in cartArray) {
	  output += "<tr>"
		+ "<td>" + cartArray[i].name + "</td>" 
		+ "<td>(" + cartArray[i].price + ")</td>"
		+ "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-dark button-css' title='decrease quantity' data-name=" + cartArray[i].name + ">"+"<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-cart-dash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z'/></svg>"+"</button>"
		+ "<input type='number' class='item-count form-control' readonly data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
		+ "<button class='plus-item btn btn-dark input-group-addon button-css' title='increase quantity' data-name=" + cartArray[i].name + ">"+"<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-cart-plus-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z'/></svg>"+"</button></div></td>"
		+ "<td><button class='delete-item btn btn-dark button-css' title='remove item' data-name=" + cartArray[i].name + ">"+"<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-cart-x-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z'/></svg>"+"</button></td>"
		+ " = " 
		+ "<td>" + cartArray[i].total + "</td>" 
		+  "</tr>";
	}
	$('.show-cart').html(output);
	$('.total-cart').html(shoppingCart.totalCart()); 
	document.getElementById("amount").value = shoppingCart.totalCart(); 
	$('.total-count').html(shoppingCart.totalCount());
  }
  
  // Delete item button
  
  $('.show-cart').on("click", ".delete-item", function(event) {
	var name = $(this).data('name')
	shoppingCart.removeItemFromCartAll(name);
	displayCart();
  })
  
  
  // -1
  $('.show-cart').on("click", ".minus-item", function(event) {
	var name = $(this).data('name')
	shoppingCart.removeItemFromCart(name);
	displayCart();
  })
  // +1
  $('.show-cart').on("click", ".plus-item", function(event) {
	var name = $(this).data('name')
	shoppingCart.addItemToCart(name);
	displayCart();
  })
  
  // Item count input
  $('.show-cart').on("change", ".item-count", function(event) {
	 var name = $(this).data('name');
	 var count = Number($(this).val());
	shoppingCart.setCountForItem(name, count);
	displayCart();
  });
  
  displayCart();
  