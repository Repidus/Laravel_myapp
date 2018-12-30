@extends('layouts.master')

@section('content')
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert("나는 자식 view의 'script' section입니다.");
    </script>
@endsection