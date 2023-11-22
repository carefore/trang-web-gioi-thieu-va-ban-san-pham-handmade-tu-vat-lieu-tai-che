$(document).ready(function() {
  $('#productForm').submit(function(event) {
    event.preventDefault();

    var productName = $('#productName').val();
    var productDescription = $('#productDescription').val();
    var productPrice = $('#productPrice').val();

    $.ajax({
      type: 'POST',
      url: 'save_product.php',
      data: {
        productName: productName,
        productDescription: productDescription,
        productPrice: productPrice
      },
      success: function(response) {
        $('#message').html(response);
        $('#productForm')[0].reset();
      }
    });
  });
});
