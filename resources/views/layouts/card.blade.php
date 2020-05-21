<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">@lang('main.properties.new')</span>
            @endif
            @if($product->isRec())
                <span class="badge badge-warning">@lang('main.properties.rec')</span>
            @endif
            @if($product->isHit())
                <span class="badge badge-danger">@lang('main.hit_sales')</span>
            @endif
        </div>
        <img src="{{Storage::url($product->image)}}" alt="{{$product->__('name')}}">
        <div class="caption">
            <h3>{{$product->__('name')}}</h3>
            <p>{{$product->price}} ₸</p>
            <p>
            <form action="{{route('basket-add', $product)}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">@lang('main.add_cart')</button>
                <a href="{{route('product', [$product->category->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">@lang('main.details')</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>
