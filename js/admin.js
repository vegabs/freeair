// ALUMNOS
$("#btnCrearAlumno").click(function () {
  $("#verAlumnos").hide();
  $("#verCrearAlumno").fadeIn(500);
});

$("#btnEditarAlumno").click(function () {
	console.log("hola");
	$("#verAlumnos").hide();
	$("#verEditarAlumno").fadeIn(500);
  });

$("#formAlumnos").submit(function (e) {
  e.preventDefault();
  $.ajax({
	type: "POST",
	url: "../../sql/buscar_alumno.php",
	data: $(this).serialize(),
	success: function (response) {
	  $("#payment-form").prop("disabled", true);
	  $("#contentVerAlumnos").html(response);
	},
  });
});

$("#formCrearAlumno").submit(function (e) {
  e.preventDefault();
  $.ajax({
	type: "POST",
	url: "../../sql/crear_alumno.php",
	data: $(this).serialize(),
	success: function (response) {
	  $('#formCrearAlumno').trigger("reset");
	  $("#payment-form").prop("disabled", true);
	  $("#contentCrearAlumno").html(response);
	},
  });
});


// SECCIONES
$("#formBuscarSecciones").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../../sql/buscar_seccion.php",
      data: $(this).serialize(),
      success: function (response) {
        $("#payment-form").prop("disabled", true);
        $("#contentBusquedaSeccion").html(response);
      },
    });
  });

  $("#formCrearSeccion").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../../sql/crear_seccion.php",
      data: $(this).serialize(),
      success: function (response) {
        $('#formCrearSeccion').trigger("reset");
        $("#payment-form").prop("disabled", true);
        $("#contentCrearSeccion").html(response);
      },
    });
  });

  $("#btnCrearSeccion").click(function () {
    $("#verSecciones").hide();
    $("#verCrearSeccion").fadeIn(500);
  });

  // AFORO COVID
  $("#formAforo").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../../sql/buscar_aforo.php",
      data: $(this).serialize(),
      success: function (response) {
        $("#payment-form").prop("disabled", true);
        $("#contentVerAforo").html(response);
      },
    });
  });
