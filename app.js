function searchAmazon(id) {
  return $.ajax({
      method: "GET",
      url: `http://localhost:8000/request.php?item_id=${id}`
    }).done(function(data) {
      showResults(data);
    })
}

function showResults(data) {
  $('.asin').html(` ${data.ASIN}`);
  $('.title').html(` ${data.Title}`);
  $('.mpn').html(` ${data.MPN}`);
  $('.price').html(` ${data.Price}`);
  $('.add').html(`<button class="btn btn-success" onClick="addToDB()">Add to Database</button>`);
}

function addToDB() {
  var asin = $('.asin').html();
  var title = $('.title').html();
  var mpn = $('.mpn').html();
  var price = $('.price').html();

  //this is where the stuff gets added to the DB

}
