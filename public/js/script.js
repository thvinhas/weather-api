getWather();

document.getElementById('search').addEventListener('keyup', function (event) {

  if (event.keyCode === 13) {
    let value = document.getElementById('search').value;
    getWather(value);
  }
});

function getWather(search = null) {
  jQuery.ajax({
    type: "get",
    url: "/getWather",
    data: { country: search },
    dataType: "json",
    success: function (response) {
      if (response.cod != 200) {
        alert("To make it more precise put the city's name or its part, comma, the name of the county or 2-letter country code.")
      } else {
        document.getElementById('forecast').innerText = 'forecast for ' + timeConverter(response.list[0].dt) + ' in ' + response.list[0].name;
        document.getElementById('temperature').innerText = response.list[0].main.temp + '°C';
        document.getElementById('feelsLike').innerText = response.list[0].main.feels_like + '°C';
        document.getElementById('humidity').innerText = response.list[0].main.humidity + '%';
        document.getElementById('maxTemperature').innerText = response.list[0].main.temp_max + '°C';
        document.getElementById('minTemperature').innerText = response.list[0].main.temp_min + '°C';
      }
    }
  });
}

function timeConverter(UNIX_timestamp) {
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = date + '/' + month + '/' + year;
  return time;
}