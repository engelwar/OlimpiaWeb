<!DOCTYPE html>
<html>
<head>
    <title>LIBRERÍA Y PAPELERÍA OLIMPIA S.R.L.</title>
    <!-- CSS -->
</head>
<body>
    <h4>{{ $details['title'] }}</h4>
    <p><b>Nombre: </b>{{ $details['name'] }}</p>
    <p><b>Email: </b>{{ $details['email'] }}</p>
    <p><b>Telefono: </b>{{ $details['phone'] }}</p>
    <p><b>Mensaje: </b>{{ $details['message'] }}</p>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>