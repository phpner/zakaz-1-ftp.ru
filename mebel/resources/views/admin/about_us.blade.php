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
                                <h4 style="padding: 10px" class="text-center  badge-warning">Редактирование: {{{$items[0]->title}}}</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="/mebel/about_us_save" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название раздела</label>
                                        <input type="text" name="title" value="{{$items[0]->title}}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Заголовок 1</label>
                                        <input type="text" name="title1" value="{{$items1[0]->title}}" class="form-control{{ $errors->has('title1') ? ' is-invalid' : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="harak">Текст под Заголовок 1</label>
                                        <textarea name='text1'   class="form-control{{ $errors->has('text1') ? ' is-invalid' : '' }}" rows="3" >{{$items1[0]->text}}</textarea>
                                    </div>
                                    <div class="block-img" data-razdel="razdel-1">
                                        <img style="display:block" class="img-circle razdel-1" src="{{$items1[0]->img_url}}" /> <br><br>
                                        <button type="button" class="my-bnt btn {{ $errors->has('img-url1') ? 'btn-danger' : 'btn-primary' }} btn-lg" data-toggle="modal" data-target="#myModal">
                                            Картинка для блок 1
                                        </button>
                                        <input class="img-url razdel-1" type="hidden" name="img-url1" value="{{$items1[0]->img_url}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Заголовок 2</label>
                                        <input type="text" name="title2" value="{{$items2[0]->title}}" class="form-control{{ $errors->has('title2') ? ' is-invalid' : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="harak">Текст под Заголовок 2</label>
                                        <textarea name='text2'   class="form-control{{ $errors->has('text2') ? ' is-invalid' : '' }}" rows="3" >{{$items2[0]->text}}</textarea>
                                    </div>
                                    <div class="block-img" data-razdel="razdel-2">
                                        <img style="display:block" class="img-circle razdel-2" src="{{$items2[0]->img_url}}" /> <br><br>
                                        <button type="button" class="my-bnt btn {{ $errors->has('img-url2') ? 'btn-danger' : 'btn-primary' }} btn-lg" data-toggle="modal" data-target="#myModal">
                                            Картинка для блок 2
                                        </button>
                                        <input class="img-url razdel-2" type="hidden" name="img-url2" value="{{$items2[0]->img_url}}">
                                    </div>
                                    <br>
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                    <a href="/mebel/admin" class="btn btn-info">Отмена</a>
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
            // определяем раздел
            $("button").on('click',function () {
                window.metar = $(this).parent().attr('data-razdel');
            });
            $(".del-item").on('click',function (e){
                confirm("Удалить товар?") ? '' :  e.preventDefault();
            });
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

            jQuery('.laradrop').laradrop({
                containersUrl : '/mebel/laradrop/containers',
                fileMoveHandler :'/mebel/laradrop/move',
                fileCreateHandler: '/mebel/laradrop/create',
                fileSrc : '/mebel/laradrop',
                fileDeleteHandler: '/mebel/laradrop/0',
                fileHandler : '/mebel/laradrop',
                breadCrumbRootText: 'Картинки', // optional
                actionConfirmationText: 'Удалить?',
                onInsertCallback: function (src){
                    var razdel = window.metar;
                    var str = src.src.replace("_thumb_", "");

                    jQuery("."+razdel).attr('src', str );
                    $('.'+razdel+'.img-url').attr('value', str);
                    $("."+razdel+'.img-circle').css('display','block');
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