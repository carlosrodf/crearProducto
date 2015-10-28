<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        {!! Form::open() !!}
        {!! Form::label('Id del producto:') !!}
        {!! Form::text('id') !!}
        <br>
        {!! Form::label('Nombre:') !!}
        {!! Form::text('producto') !!}
        <br>
        {!! Form::label('Precio:') !!}
        {!! Form::text('precio') !!}
        <br>
        {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
    </body>
</html>
