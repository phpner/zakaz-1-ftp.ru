@extends('admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавить товар</div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="divan" role="tabpanel" aria-labelledby="home-tab">
                                <h2 style="padding: 10px" class="text-center  badge-warning">Редактирование {{{$items[0]->title}}}</h2>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="/mebel/update/{{$items[0]->id}}" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название товара</label>
                                        <input type="text" name="title" value="{{$items[0]->title}}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="harak">Характеристика товара</label>
                                        <textarea name='harak'   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" rows="3" >{{$items[0]->harak}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="descr">Описание товара</label>
                                        <textarea name='descr'   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" rows="3" >{{$items[0]->descr}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Цена товара</label>
                                        <div class="input-group">
                                            <input type="text" name="price" value="{{$items[0]->price}}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">руб.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Картинка товара</label>
                                        <input type="file" name="file" value="{{$items[0]->file_name}}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                    </div>
                                    <input type="hidden" name="cate" value="{{$items[0]->cate}}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
@section('sctipt')
    <script>
        jQuery(document).ready(function($){

        });
    </script>
@endsection()