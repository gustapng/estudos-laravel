@extends('layouts.default')

@section('title')
    'Site RD'
@endsection

@section('content')
<h1>
    User
</h1>

<pre>
{{ $user->name }}
{{ $user->email }}
</pre>
@endsection



@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('js/user.js') }}"></script>
@endpush

