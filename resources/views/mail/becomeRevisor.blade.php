
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("Reusefy - Solicitud De Revisor")}}</title>
</head>
<body>
    <div>
        <h1>{{__("Un usuario quiere trabajar con nosotros")}}</h1>
        <h2>{{__("A continuación sus datos")}}:</h2>
        <p><b>{{__("Nombre")}}:</b> {{$user->name}}</p>
        <p><b>{{__("Email")}}:</b> {{$user->email}}</p>
        <p>{{__("Si quieres que forme parte de nuestro equipo pulse aquí")}}</p>
        <a href="{{route('revisor.make',$user)}}">{{__("Aceptar solicitud")}}</a>
    </div>
</body>
</html>
