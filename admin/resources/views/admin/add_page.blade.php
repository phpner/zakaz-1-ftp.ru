@extends('admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редоктировать шабку сайта</div>

                    <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Верх</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Низ</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Логотип</label>
                                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                                Edit Image
                                            </button>
                                            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog  modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Медиа файлы</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="laradrop" laradrop-csrf-token="VLXOjvgaji3EbYNhoUQS3YOUAJdvvOthbjrTeQYC" ></div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <textarea name='big-text'   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

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
            jQuery('.laradrop').laradrop({
                onInsertCallback: function (src){
                    jQuery('#avatar').attr('src', src);
                    $('#myModal').modal('toggle');
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