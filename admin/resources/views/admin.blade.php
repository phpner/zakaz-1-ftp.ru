@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Все тавары</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(isset($date))
                        @foreach($date as $dat)
                                <br> {{$dat->title}} <a href="/mebel/edit/{{$dat->id}}"> <span class="badge badge-success">edit</span></a> <a class="del-item" href="/mebel/del/{{$dat->id}}"><span class="badge badge-danger">[X]</span></a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        jQuery.(document).ready(function () {
            $(".del-item").on('click',function (e){
                e.preventdefault()
                console.log();
            });
        });
    </script>

@endsection