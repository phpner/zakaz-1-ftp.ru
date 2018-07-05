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
                                <h4 style="padding: 10px" class="text-center  badge-warning">Редактирование {{{$items[0]->title}}}</h4>
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
                                        <label for="harak">Описание товара</label>
                                        <textarea name='descr'   class="form-control{{ $errors->has('descr') ? ' is-invalid' : '' }}" rows="3" >{{$items[0]->descr}}</textarea>
                                    </div>
                                    <div class="block-img">
                                        <img style="display:block" class="img-circle" id="avatar" src="{{$items[0]->file_url}}" /> <br><br>
                                        <button type="button" class="btn {{ $errors->has('img-url') ? 'btn-danger' : 'btn-primary' }} btn-lg" data-toggle="modal" data-target="#myModal">
                                            Картинка
                                        </button>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="price">Цена товара</label>
                                        <div class="input-group">
                                            <input type="text" name="price" value="{{ $items[0]->price }}" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">руб.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">выберите категорию</label>
                                    <select  name="cate" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                        <option <?php echo $items[0]->cate == "divan" ? 'selected' : '';?>  value="divan">Диваны</option>
                                        <option <?php echo $items[0]->cate == "ugl-divan" ? 'selected' : '';?>  value="ugl-divan">Угловые диваны</option>
                                        <option <?php echo $items[0]->cate == "kreslo-krovat" ? 'selected' : '';?>  value="kreslo-krovat">Кресла-кровати</option>
                                        <option <?php echo $items[0]->cate == "kreslo-relax" ? 'selected' : '';?>  value="kreslo-relax">Кресла для отдыха</option>
                                    </select>
                                    <br>
                                    <br>
                                    <input class="img-url" type="hidden" name="img-url" value="{{$items[0]->file_url}}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                    <a href="/mebel/admin" class="btn btn-info">Отмена</a>
                                    <a  href="/mebel/del/{{$items[0]->id}}" class="btn btn-danger del-item">Удалить</a>
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