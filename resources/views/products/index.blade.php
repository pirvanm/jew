@extends('layout')

@section('content')
    <h2>Our users.</h2>
    <hr>

    <!-- Varianta statica, nu ar trebuii sa fie in foreach  -->
    <!-- Varianta statica , incarca poza direct din public / images / numele date de tine  -->
             <!-- <img src="{{ asset('/images/'.'colier.jpg') }}"> -->
    @foreach ($products as $product)
        <div class="mt-4">
            <h2 class="mr-0 pr-0">{{ $product->title }}</h2>
            <h2 class="mr-0 pr-0">
                
            

             <!-- Varianta dinamica, incarca poza din baza de date din colona image  -->
             <!-- <img src="{{ asset('/images/'.$product->image) }}"> -->
            {{ $product->image }}</h2>
         
            @foreach ($product->categories as $category)
                <span class="badge bg-secondary">{{ $category->title }}</span>
            @endforeach
        </div>
    @endforeach
@endsection