$(document).ready(function() {
  showDatabase();
});

function searchAmazon() {
  var term = document.getElementById("search").value;
  $.ajax({
      method: "GET",
      url: `http://localhost:8000/request.php?item_id=${term}`
    }).done(function(data) {
      showResults(data);
    })
}

function showResults(data) {
  $('.asin').html(`${data.ASIN}`);
  $('.title').html(`${data.Title}`);
  $('.mpn').html(`${data.MPN}`);
  $('.price').html(`${data.Price}`);
  $('.add').html(`<button class="btn btn-success" onClick="addToDB()">Add to Database</button>`);
}

function addToDB() {
  var data1 = $('.asin').html();
  var data2 = $('.title').html();
  var data3 = $('.mpn').html();
  var data4 = $('.price').html();

  //this is where the stuff gets added to the DB

  $.ajax({
      method: "POST",
      url: 'http://localhost:8000/save.php',
      data: {asin: data1, title: data2, mpn: data3, price: data4}
    }).done(function(info) {
      showDatabase();
    })
}

function showDatabase() {
  $.ajax({
      method: "GET",
      url: 'http://localhost:8000/show.php'
    }).done(function(dbresults) {
      $('.table-results').html(dbresults);
    })
}
