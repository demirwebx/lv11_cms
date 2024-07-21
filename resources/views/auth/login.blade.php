@extends('auth.layouts.app')
@push('title', 'Giriş Yap')
@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="E-posta Adresiniz" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Parolanız">
        <button type="submit">Giriş Yap</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
