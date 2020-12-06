@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="alert alert-warning">
            Diqqat siz jo'natgan murojaat albatta ko'rib chiqiladi va unga qonun doirasida javob beriladi!
        </div>

        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row py-2">
                <div class="col-sm-8">
                  <input type="search" placeholder="kiriting.." name="search" class="form-control searchbox-input" required="">
                </div>
                <div class="col-sm-4 text-right">
                  <a href="{{route('newAppeal')}}" class="btn btn-primary">Yangi Murojaat</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card appeal-block " style="position: relative;">
                        <a href="#" style="position: absolute; top: 0; right: 0;" class="badge badge-secondary p-2">Ko'rib chiqilyapti</a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Murojaat nomi 1</a>
                            </h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                               <b>Tashkilot</b>:  <a href="#">Tashkilot nomi</a>, <b>yaratilgan</b>: 10.10.2020.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card appeal-block " style="position: relative;">
                        <a href="#" style="position: absolute; top: 0; right: 0;" class="badge badge-primary p-2">Hal qilindi</a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Murojaat nomi 2</a>
                            </h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                               <b>Tashkilot</b>:  <a href="#">Tashkilot nomi</a>, <b>yaratilgan</b>: 10.10.2020.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card appeal-block " style="position: relative;">
                        <a href="#" style="position: absolute; top: 0; right: 0;" class="badge badge-secondary p-2">Yuqoriga yo'naltirildi</a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Murojaat nomi 3</a>
                            </h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                               <b>Tashkilot</b>:  <a href="#">Tashkilot nomi</a>, <b>yaratilgan</b>: 10.10.2020.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card appeal-block " style="position: relative;">
                        <a href="#" style="position: absolute; top: 0; right: 0;" class="badge badge-secondary p-2">Sudga oshirildi</a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Murojaat nomi 4</a>
                            </h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                               <b>Tashkilot</b>:  <a href="#">Tashkilot nomi</a>, <b>yaratilgan</b>: 10.10.2020.
                            </small>
                        </div>
                    </div>
                </div>


            </div>
            <script>
                // jQuery document ready
$(document).ready(function() {

    $('.searchbox-input').on('keyup',function () {
        console.log(filter);
        //$('.card').show();
        var filter = $(this).val(); // get the value of the input, which we filter on
        console.log(filter);
        $('.appeal-block').each(function () {
            if(!$(this).find('.card-title').text().includes(filter)){
                $(this).addClass('d-none');
            }else{
                $(this).removeClass('d-none');
            }
        });
    });
});
            </script>
        </div>
    </div>
</div>
@endsection
