@extends('layouts.master')

@section('title', $product->__('name'))
@section('content')
    <script>
        $(document).ready(function(){
            PopUpHide();
        });
        function PopUpShow(){
            $("#popup1").show();
        }
        function PopUpHide(){
            $("#popup1").hide();
        }

    </script>

    <h1>{{$product->__('name')}}</h1>
    <h2>{{$product->category->__('name')}}</h2>
    <p>Цена: <b>{{$product->price}} ₸</b></p>

    <div class="imagehover">
        <img src="{{Storage::url($product->image)}}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <button onclick="PopUpShow()" class="btn btn-success" role="button">@lang('main.3d_model')</button>
        </div>
    </div>

    <p>{{$product->__('description')}}</p>
    <form action="{{route('basket-add', $product)}}" method="POST">
        <button type="submit" class="btn btn-success" role="button">@lang('main.add_cart')</button>
        @csrf
    </form>

    <div class="b-popup" id="popup1">
        <div class="b-popup-content">

            <div class="sketchfab-embed-wrapper">
                <iframe id="3d" title="A 3D model" width="640" height="480" src="{{$product->model_3d}}" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            </div>

            <button onclick="PopUpHide()" class="btn btn-success" role="button">@lang('main.close_3d_model')</button>
        </div>
    </div>
@endsection
