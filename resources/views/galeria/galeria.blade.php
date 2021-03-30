@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<h1>Benvingut a galeria</h1>

<div class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Galeria</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row photos">
            @foreach ($imatges as $imatge)
            
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href={{$imatge->carpeta}}{{$imatge->imatge}} data-lightbox="photos"><img class="img-fluid" src={{$imatge->carpeta}}{{$imatge->imatge}} alt="Tennis"></a></div>
    
            @endforeach
            
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
{{$imatges->links()}}


@endsection