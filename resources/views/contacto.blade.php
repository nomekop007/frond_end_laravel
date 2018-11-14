
@extends('plantilla')

@section('contenido')
<br>
<br>
<br>
<br>
<h1>
    contactos
</h1>

{{ json_encode($datos)}}
<br>
<br>
nombre : <h6>{{$datos['nombre']}}</h6>
<br>
Email : <h6>{{$datos['email']}}</h6>
<br>
Sujeto : <h6>{{$datos['sujeto']}}</h6>
<br>
mensaje : <h6>{{$datos['msg']}}</h6>
<br>

@stop

