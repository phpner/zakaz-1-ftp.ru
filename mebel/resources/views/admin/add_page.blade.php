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
                                    <h2 style="padding:10px" class="text-center badge-info">Добавить товар</h2>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="post" action="{{route('add_page_post')}}" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Название товара</label>
                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="harak">Описание товара</label>
                                            <textarea name='descr'   class="form-control{{ $errors->has('descr') ? ' is-invalid' : '' }}" rows="3" >{{ old('descr') }}</textarea>
                                        </div>
                                        <div class="block-img">
                                            <img style="display:<?php echo (old('img-url')) ? 'block' : 'none' ;?>" class="img-circle" id="avatar" src="{{ old('img-url') }}" /> <br><br>
                                            <button type="button"  class="button-relax my-bnt  open-med btn {{ $errors->has('img-url') ? 'btn-danger' : 'btn-primary' }} btn-lg" data-toggle="modal" data-target="#myModal">
                                                Картинка
                                            </button>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-4 offset-md-1">
                                            <div class="input-group ">
                                                    <label for="price">Цена товара</label>
                                                    <input type="text" name="price" value="{{ old('price') }}" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">руб.</span>
                                                    </div>
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">выберите категорию</label>
                                                <select  name="cate" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                                    <option  value="divan">Диваны</option>
                                                    <option value="ugl-divan">Угловые диваны</option>
                                                    <option value="kreslo-krovat">Кресла-кровати</option>
                                                    <option value="kreslo-relax">Кресла для отдыха</option>
                                                </select>
                                            </div>

                                        </div>
                                        <br><br>
                                        <input class="img-url" type="hidden" name="img-url" value="{{old('img-url')}}">
                                        {{ csrf_field() }}
                                        <button  type="submit" class="btn btn-primary ">Сохранить</button>
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
            jQuery(document).ready(function(){
                tinymce.init({
                    selector: 'textarea',
                    height: 200,
                    skin: "lightgray",
                    theme: 'modern',
                    menubar: false,
                    language: 'ru',
                    plugins: [
                        'advlist autolink lists link image charmap print preview anchor textcolor',
                        'searchreplace visualblocks code fullscreen',
                        'insertdatetime media table contextmenu paste code help wordcount'
                    ],
                    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                    content_css: [
                        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                        '//www.tinymce.com/css/codepen.min.css']
                });


                    $('.laradrop').laradrop({
                        containersUrl : '/mebel/laradrop/containers',
                        fileMoveHandler :'/mebel/laradrop/move',
                        fileCreateHandler: '/mebel/laradrop/create',
                        fileSrc : '/mebel/laradrop',
                        fileDeleteHandler: '/mebel/laradrop/0',
                        fileHandler : '/mebel/laradrop',
                        breadCrumbRootText: 'Картинки', // optional
                        actionConfirmationText: 'Удалить?',
                        onInsertCallback: function (src){
                            var str = src.src.replace("_thumb_", "");
                            jQuery('#avatar').attr('src', str );
                            $('.img-url').attr('value', str);
                            $('.img-circle').css('display','block');
                            jQuery('#myModal').modal('hide');
                        },

                        onErrorCallback: function(jqXHR,textStatus,errorThrown){
                            // if you need an error status indicator, implement here
                            alert('An error occured: '+ errorThrown);
                        },
                        onSuccessCallback: function(serverData){
                            // if you need a success status indicator, implement here
                        }
                    });

            });
    </script>
@endsection()