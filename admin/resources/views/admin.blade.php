@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Все товары</div>
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
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#kreslo-for-relax" role="tab" aria-controls="kreslo-for-relax" aria-selected="false">Кресла для отдыха</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="divan" role="tabpanel" aria-labelledby="home-tab">
                            <h2 style="padding: 10px" class="mt-3 mb-3 text-center  badge-info">Раздел "Диваны"</h2>
                            <table class="table table-striped table-striped">
                                <thead class="">
                                <tr>
                                    <th scope="col">Название</th>
                                    <th scope="col">Редактировать</th>
                                    <th scope="col">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($date))
                                    @foreach($date as $dat)
                                        @if($dat->cate == "divan")
                                            <tr>
                                                <th scope="row">{{$dat->title}}</th>
                                                <th> <a href="/mebel/edit/{{$dat->id}}"> <span class="btn btn-success">edit</span></a> </th>
                                                <th><a class="del-item" href="/mebel/del/{{$dat->id}}"><span class="  btn btn-danger">[X]</span></a></th>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="ugol-devan" role="tabpanel" aria-labelledby="ugol-devan">
                            <h2 style="padding: 10px" class="mt-3 mb-3 text-center  badge-info">Раздел "Угловые диваны"</h2>
                            <table class="table table-striped">
                                <thead class="">
                                <tr>
                                    <th scope="col">Название</th>
                                    <th scope="col">Редактировать</th>
                                    <th scope="col">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($date))
                                    @foreach($date as $dat)
                                        @if($dat->cate == "ugl-divan")
                                            <tr>
                                                <th scope="row">{{$dat->title}}</th>
                                                <th> <a href="/mebel/edit/{{$dat->id}}"> <span class="btn btn-success">edit</span></a> </th>
                                                <th><a class="del-item" href="/mebel/del/{{$dat->id}}"><span class="  btn btn-danger">[X]</span></a></th>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kreslo" role="tabpanel" aria-labelledby="kreslo">
                            <h2 style="padding: 10px" class="mt-3 mb-3 text-center  badge-info">Раздел "Кресла-кровати"</h2>
                            <table class="table table-striped">
                                <thead class="">

                                <tr>
                                    <th scope="col">Название</th>
                                    <th scope="col">Редактировать</th>
                                    <th scope="col">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($date))
                                    @foreach($date as $dat)
                                        @if($dat->cate == "kreslo-krovat")
                                            <tr>
                                                <th scope="row">{{$dat->title}}</th>
                                                <th> <a href="/mebel/edit/{{$dat->id}}"> <span class="btn btn-success">edit</span></a> </th>
                                                <th><a class="del-item" href="/mebel/del/{{$dat->id}}"><span class="  btn btn-danger">[X]</span></a></th>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="kreslo-for-relax" role="tabpanel" aria-labelledby="kreslo-for-relax">
                            <h2 style="padding: 10px" class="mt-3 mb-3 text-center  badge-info">Раздел "Кресла для отдыха"</h2>
                            <table class="table table-striped">
                                <thead class="">

                                <tr>
                                    <th scope="col">Название</th>
                                    <th scope="col">Редактировать</th>
                                    <th scope="col">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($date))
                                    @foreach($date as $dat)
                                        @if($dat->cate == "kreslo-relax")
                                            <tr>
                                                <th scope="row">{{$dat->title}}</th>
                                                <th> <a href="/mebel/edit/{{$dat->id}}"> <span class="btn btn-success">edit</span></a> </th>
                                                <th><a class="del-item" href="/mebel/del/{{$dat->id}}"><span class="  btn btn-danger">[X]</span></a></th>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sctipt')
    <script>
        jQuery(document).ready(function () {
            $(".del-item").on('click',function (e){
               confirm("Удалить товар?") ? '' :  e.preventDefault();
            });
        });
    </script>

@endsection