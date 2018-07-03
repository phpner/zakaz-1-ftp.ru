@extends('admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавить товар</div>

                    <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#divan" role="tab" aria-controls="divan" aria-selected="true">Диваны</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ugol-devan" role="tab" aria-controls="ugol-devan" aria-selected="false">Угловые диваны</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#kreslo" role="tab" aria-controls="kreslo" aria-selected="false">Кресла-кровати</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ugol-devan" role="tab" aria-controls="kreslo-for-relax" aria-selected="false">Кресла для отдыха</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="divan" role="tabpanel" aria-labelledby="home-tab">
                                    <h2 style="padding:10px" class="text-center badge-info">Добавить товар в раздел "Диваны"</h2>
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
                                            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="harak">Характеристика товара</label>
                                            <textarea name='harak'   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="descr">Описание товара</label>
                                            <textarea name='descr'   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Цена товара</label>

                                            <div class="input-group">
                                                <input type="text" name="price" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">руб.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="file">Картинка товара</label>
                                            <input type="file" name="file" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                            Edit Image
                                        </button>
                                        <input type="hidden" name="cate" value="divan">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="ugol-devan" role="tabpanel" aria-labelledby="ugol-devan">
                                    <h2 style="padding: 10px" class="text-center  badge-info">Добавить товар в раздел "Угловые диваны"</h2>
                                </div>
                                <div class="tab-pane fade" id="kreslo" role="tabpanel" aria-labelledby="kreslo">
                                    <h2 style="padding: 10px" class="text-center  badge-info">Добавить товар в раздел "Кресла-кровати"</h2>

                                </div>
                                <div class="tab-pane fade" id="kreslo-for-relax" role="tabpanel" aria-labelledby="kreslo-for-relax">
                                    <h2 style="padding: 10px" class="text-center  badge-info">Добавить товар в раздел "Кресла для отдыха"</h2>

                                </div>

                                </div>
                            </div>


                </div>
            </div>
        </div>
    </div>
    <!--Model-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">My Media Manager</h4>
                </div>
                <div class="modal-body">

                    <div class="laradrop" laradrop-csrf-token="sMfv86amdJ9yymKXsyZ32pKvrcsyAMNRi7yrCI5F" ></div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <!--end Model-->
@endsection
@section('sctipt')
    <script>
            jQuery(document).ready(function(){

                jQuery('.laradrop').laradrop({
                    onInsertCallback: function (src){
                        jQuery('#avatar').attr('src', src);
                        $('#myModal').modal('toggle');
                    },
                    containersUrl : '/mebel/laradrop/containers',
                    fileMoveHandler :'/mebel/laradrop/move',
                    fileCreateHandler: '/mebel/laradrop/create',
                    fileSrc : '/mebel/laradrop',
                    fileDeleteHandler: '/mebel/laradrop/0',
                    fileHandler : '/mebel/laradrop',
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