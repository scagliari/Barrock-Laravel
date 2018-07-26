


  document.formulario.onsubmit=function(evento){


    var nombre = document.getElementById('nombre').value;
    var reNombre = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/

    var reMail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/
    var email = document.getElementById("email").value;

    var rePass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
    var pass = document.getElementById("password").value;

    var passConfirm = document.getElementById("password2").value;

    if (!reNombre.test(nombre)) {
        swal("Debe ingresar Nombre y Apellido","Por favor, ingrese un valor válido","error")
        evento.preventDefault()
        return;
    }

    if (!reMail.test(email)) {
      swal("El E-Mail no puede quedar vacío", "Por favor complete el correo", "error")
      evento.preventDefault()
      return;
    }

    if (!rePass.test(pass)) {
      swal("Ups.. Ocurrió un error!!!","La contraseña debe contener: 8 caracteres como mínimo, un número y una mayúscula.","error")
      evento.preventDefault()
      return;

    }

    if (pass != passConfirm) {
      swal("OMG!!! Ha ocurrido un error", "Las contraseñas no son iguales", "error")
      evento.preventDefault()
      return;
    }


    document.formulario.submit()
  }




  /*
  Este archivo que se llama jquery.js tiene que estar guardado en la carpeta: public/js

  Estos dos links hay que pegarlos abajo del form de register.blade.php

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>


  */
