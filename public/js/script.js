jQuery.ajax({
  type: "get",
  url: "/getWather",
  data: "data",
  dataType: "json",
  success: function (response) {
    document.getElementById('forecast').innerText = 'forecast for today in ' + response.list[0].name;
    document.getElementById('temperature').innerText = response.list[0].main.temp;
  }
});

function fToC(fahrenheit) {
  var fTemp = fahrenheit;
  var fToCel = (fTemp - 32) * 5 / 9;
  return fToCel;

}