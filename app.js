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
}
