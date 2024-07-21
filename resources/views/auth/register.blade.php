@extends('auth.layouts.app')
@push('title', __('Kayıt Ol'))
@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Adınız" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="E-posta Adresiniz" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Parolanız" value="{{ old('password') }}">
        <input type="password" name="password_confirmation" placeholder="Parola Tekrarı" value="{{ old('password_confirmation') }}">
        <button type="submit">Kayıt Ol</button>
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
