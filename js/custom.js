document.addEventListener('DOMContentLoaded', function() {
  if (document.location.href.indexOf('/get-a-quote/') > -1) {
    var container = document.getElementById('product-quantity-container');
    var addButton = document.getElementById('add-more');
  
    addButton.addEventListener('click', function() {
      var productField = document.createElement('select');
      productField.name = 'products[]';
      productField.innerHTML = '<option value="">Select a product</option><option value="C01-001-001-02-0-1 - Product 1">C01-001-001-02-0-1 - Product 1</option><option value="SAT-30-01 - Product 2">SAT-30-01 - Product 2</option><option value="C08-001-001-02-1-1 - Product 3">C08-001-001-02-1-1 - Product 3</option><option value="C08-012-013-01-2-1 - Product 4">C08-012-013-01-2-1 - Product 4</option><option value="B09-35-13 - Product 5">B09-35-13 - Product 5</option>';
      productField.classList.add('product-field'); // Add a CSS class to the product field
  
      var quantityField = document.createElement('input');
      quantityField.type = 'number';
      quantityField.name = 'quantities[]';
      quantityField.min = '1';
      quantityField.classList.add('quantity-field'); // Add a CSS class to the quantity field
  
      var removeButton = document.createElement('button');
      removeButton.type = 'button';
      removeButton.classList.add('remove-button');
      removeButton.textContent = 'Remove';
      removeButton.addEventListener('click', function() {
          container.removeChild(wrapper);
      });
  
      var wrapper = document.createElement('div');
      wrapper.classList.add('product-quantity-wrapper'); // Add a CSS class to the wrapper div
      wrapper.appendChild(productField);
      wrapper.appendChild(quantityField);
      wrapper.appendChild(removeButton);
  
      container.appendChild(wrapper);
    });

    var form = document.getElementById('358');
    form.addEventListener('submit', function() {
        var products = document.querySelectorAll('.product-field');
        var quantities = document.querySelectorAll('.quantity-field');
        var productsQuantities = [];

        for (var i = 0; i < products.length; i++) {
            var product = products[i].value;
            var quantity = quantities[i].value;
            if (product !== '' && quantity !== '') {
                productsQuantities.push(product + ' - ' + quantity);
            }
        }

        document.getElementById('products-quantities').value = productsQuantities.join(', ');
    });
  
  }
  });

  