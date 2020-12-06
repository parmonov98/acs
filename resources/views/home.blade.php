@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Assalomu alaykum!  Siz ACS ga xush kelibsiz!
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    {{-- <h4></h4> --}}

                    Bu tizim sizga barcha davlat tashkilotlari bilan ishlashda qulay imkoniyatlar yaratib beradi.
                    Bular:
                    <ul>
                        <li>Tashkilotlar ga murojaat qilishni osonlashtiradi</li>
                        <li>Sizning har bir murojaatingiz javobgar shaxs belgilanadi</li>
                        <li>Murojaatni ko'rib chiqish muddati tugaganda avtomatik tarzda kerakli tashkilot yoki shaxsga yo'natiriladi.</li>
                        <li>Murojaatlaringiz to'g'risida o'zgarishlar Telegram va Emailingizga keladi.</li>
                        <li>O'zingiz istalgan paytda murojaatni holatini kuzatib borishingiz mumkin.</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
