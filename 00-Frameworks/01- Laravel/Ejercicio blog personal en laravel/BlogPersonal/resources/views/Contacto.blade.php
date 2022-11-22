@extends('Layouts.Plantilla')

@section("titulo","inicio")
@section("content")

    <section id="Formulariocontacto">
        <h1>Contacto</h1>
        <form method="post" action="{{route("mensaje")}}">


            
            @csrf
            <p id="titulosFormulario">Nombre</p><input type="text" name="name" class="nombreformulario">
            <p id="titulosFormulario">Apellidos</p><input name="apellidos" type="text" >
            <p id="titulosFormulario">Email</p><input name="email" type="text" >
            <p id="titulosFormulario">Mensaje</p><textarea name="mensaje" class="mensaje" ></textarea>
            
            <div >
                <button type="submit" id="botonenviar" >enviar</button>
            </div> 
                
        </form>

        
    </section>
@endsection