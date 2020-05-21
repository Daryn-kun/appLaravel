@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать товар' . $product->name)
@else
    @section('title', 'Добавить товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать Товар
                <bold>{{$product->name}}</bold>
            </h1>
        @else
            <h1>Добавить Товар</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'code'])
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($product) ? $product->code : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{$product->name}}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name_en" class="col-sm-2 col-form-label">Название en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name_en'])
                        <input type="text" class="form-control" name="name_en" id="name_en"
                               value="@isset($product){{$product->name_en}}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'category_id'])
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @isset($product)
                                        @if($product->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description'])
                        <textarea name="description" id="description" cols="72"
                                  rows="7">@isset($product){{$product->description}}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description_en" class="col-sm-2 col-form-label">Описание en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description_en'])
                        <textarea name="description_en" id="description_en" cols="72"
                                  rows="7">@isset($product){{$product->description_en}}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'price'])
                        <input type="text" class="form-control" name="price" id="price"
                               value="@isset($product){{$product->price}}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="model_3d" class="col-sm-2 col-form-label">Ссылка на 3д модель: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="model_3d" id="model_3d"
                               value="@isset($product){{$product->model_3d}}@endisset">
                    </div>
                </div>
                <br>
                @foreach([
                 'hit' => 'Хит',
                 'new' => 'Новинка',
                 'rec' => 'Рекомендуемые',
                ] as $field => $title)
                    <div class="form-check row">
                        <label for="code" class="col-sm-2 col-form-label">{{$title}}: </label>
                        <div class="col-sm-6">
                            <input type="checkbox" class="form-check" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field ===1)
                                   checked="checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

