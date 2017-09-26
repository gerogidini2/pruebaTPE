$('#marcas').click(function () {
  $.ajax({
      url: "http://localhost:81/proyectos/pruebaTPE/marcas",
      success: function(result){
        for (var i = 0; i < 100000000; i++) {
        }
        $("#tablas").html(result);
      }
  });
});

$('.celulares').click(function () {
  var id = $(this).data("value");
  $.ajax({
      url: "http://localhost:81/proyectos/pruebaTPE/celulares/"+id,
      success: function(result){
        for (var i = 0; i < 100000000; i++) {
        }
        $("#tablas").html(result);
      }
  });
});

//$('.celulares').click(function () {
//  var x = $(this).data("value");
//      $.ajax({
//          url: "http://localhost:81/proyectos/pruebaTPE/celulares",
//         type: "post",
//         data: "id="+x,
//         success: function(data){
//           for (var i = 0; i < 100000000; i++) {
//           }
//           $("#tablas").html(data);
//         }
//      });
//});
