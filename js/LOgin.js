$(function () {
    // effect on click
      var pcs = $("#picture");
      $(".flip").on("click", pcs, function (event) {
          event.preventDefault();
          pcs.toggleClass("flipPicture");
      });
    // date and developer
    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth();
    var dNum = date.getDate();
    var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var d = days[date.getDay()];
    $(".row #date").text(d +" / "+ dNum +" / "+ m +" / "+ y).append("<span class='trade'> &nbsp;&copy; petarr</span>");
  });