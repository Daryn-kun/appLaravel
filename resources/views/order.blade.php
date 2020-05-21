@extends('layouts.master')

@section('title', __('main.purchase'))

@section('content')
        <h1>@lang('main.confirm_order'):</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>@lang('main.total') <b>{{$order->getFullPrice()}} ₸</b></p>
                <form action="{{route('basket-confirm')}}" method="POST">
                    <div>
                        <p>@lang('main.your_data'):</p>

                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">@lang('main.name'): </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">@lang('main.phone_number'): </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                        <br>
                        @csrf
                        <br>
                        <input type="submit" class="btn btn-success" value="@lang('main.confirm_order')">
                    </div>
                </form>
            </div>
        </div>
@endsection

