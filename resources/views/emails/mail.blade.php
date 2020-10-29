<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <h5>Hola {{ $name }},</h5>
            <br>
            <p>Mi nombre es <b>{{ $nombre }}</b> y quiero comentarte lo siguiente:</p>
            <br>
            <i>{{ $mensaje }}</i>
            <br>
            <br>
            <p>y mi respuesta a cada una de las preguntas que hay en la página son las siguientes:</p>
            <div class="row d-flex justify-content-around">
                <div class="col-9 align-self-center">
                    <p><b>1. Área dolorosa/parte del cuerpo afectada</b></p>
                    <p>{{ $pregunta1 }}</p>
                    <br>
                    <p><b>2. ¿Cuál es tu principal preocupación debido a este problema?</b></p>
                    <p>{{ $pregunta2 }}</p>
                    <br>
                    <p><b>3. ¿Que actividades no puedes realizar o están limitadas por este problema?</b></p>
                    <p>{{ $pregunta3 }}</p>
                    <br>
                    <p><b>4. ¿Cuanto tiempo llevas sufriendo por este problema?</b></p>
                    <p>{{ $pregunta4 }}</p>
                    <br>
                    <p><b>5. La meta principal que te gustaría que te ayudara a lograr es:</b></p>
                    <p>{{ $pregunta5 }}</p>
                    <br>
                    <p>Mi número de contacto es: {{ $telefono }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
