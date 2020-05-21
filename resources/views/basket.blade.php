@extends('layouts.master')

@section('title', __('main.cart'))

@section('content')

        <h1>@lang('main.cart')</h1>
        <p>@lang('main.order_reg')</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>@lang('main.name')</th>
                    <th>@lang('main.quantity')</th>
                    <th>@lang('main.price')</th>
                    <th>@lang('main.cost')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{route('product', [$product->category->code, $product->code])}}">
                                <img height="56px" src="{{Storage::url($product->image)}}">
                                {{$product->__('name')}}
                            </a>
                        </td>
                        <td><span class="badge">{{$product->pivot->count}}</span>
                            <div class="btn-group form-inline">
                                <form action="{{route('basket-remove', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-danger"
                                            href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                                <form action="{{route('basket-add', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-success"
                                            href=""><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{$product->price}} ₸</td>
                        <td>{{$product->getPriceForCount()}} ₸</td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="3">@lang('main.total')</td>
                    <td>{{$order->getFullPrice()}} ₸</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{route('basket-place')}}">@lang('main.purchase')</a>
            </div>
        </div>
@endsection

