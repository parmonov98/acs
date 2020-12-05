@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Ma'lumotlarni o'zgartirish") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {!! form($profileForm) !!}


                    <script>
                        // jQuery document ready
$(document).ready(function() {
   $("[name='passport_serial']").keyup(function () {
    $(this).val($(this).val().toUpperCase());
   });
});
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
