// ASISTENCIA
$("#formAsistencia").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "../../sql/estudiante/ver_asistencia.php",
    data: $(this).serialize(),
    success: function (response) {
      $("#payment-form").prop("disabled", true);
      $("#contentVerAsistencia").html(response);
    },
  });
});


// VENTILACION
$("#formVentilacion").submit(function (e) {
    console.log("ddfd");
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "../../sql/estudiante/ver_ventilacion.php",
    data: $(this).serialize(),
    success: function (response) {
      $("#payment-form").prop("disabled", true);
      $("#contentVerVentilacion").html(response);
    },
  });
});

$(document).on('click', '#apply', function(){ 
    console.log("hola");
});

// $("#formVerVentilacionItem").submit(function (e) {
//   console.log("llegue");
//   e.preventDefault();
//   $.ajax({
//     type: "POST",
//     url: "../../sql/estudiante/ver_timeline.php",
//     data: $(this).serialize(),
//     success: function (response) {
//       $("#payment-form").prop("disabled", true);
//       $("#contentVerVentilacionItem").html(response);
//     },
//   });
// });






