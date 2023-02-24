@extends('layouts/layoutMaster')

@section('page-script')
    <script src="{{ asset('assets/js/sekolah-informasi.js') }}"></script>
@endsection

@section('title', 'Informasi Umum')

@section('content')

    <div>
        <h2>Informasi Umum Page</h2>
        <form action="/informasi" method="post" class="row justify-center">
            <p>Request >>> Auto Respond</p>
            @foreach ($data as $value)
                <div class="input-group mb-2">
                    <input class="input-group-text col-12 col-md-2 col-lg-1" type="text" placeholder="Request"
                        value="{{ $value->Request }}" />
                    <textarea class="form-control col-12 col-md-10" placeholder="Auto Respond">{{ str_replace('<', '', str_replace('>', '', $value->AutoRespon)) }}</textarea>
                </div>
            @endforeach
            <div>
                <a class="btn btn-outline-primary">+</a>
            </div>
        </form>
    </div>

@endsection
