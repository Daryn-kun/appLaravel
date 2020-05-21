@extends('layouts.master')

@section('title', __('main.main_page'))

@section('content')
    @include('layouts.slider');

    <h1>@lang('main.all_products')</h1>
        <form method="GET" action="{{route('index')}}">
            <div class="filters row">
                @include('auth.layouts.error', ['fieldName' => 'price_from'])
                @include('auth.layouts.error', ['fieldName' => 'price_to'])
                <div class="col-sm-6 col-md-3">
                    <label for="price_from">@lang('main.price_from') <input type="text" name="price_from" id="price_from" size="6"
                                                          value="{{request()->price_from}}" style="height: 20px">
                    </label>
                    <label for="price_to"> @lang('main.price_to') <input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}" style="height: 20px">
                    </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="hit">
                        <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> @lang('main.properties.hit') </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="new">
                        <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> @lang('main.properties.new') </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="recommend">
                        <input type="checkbox" name="rec" id="rec" @if(request()->has('rec')) checked @endif> @lang('main.properties.rec') </label>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                    <a href="{{route('index')}}" class="btn btn-warning">@lang('main.reset')</a>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach($products as $product)
                @include('layouts.card', compact('product'))
            @endforeach
        </div>
        {{$products->links()}}


@endsection
