@extends('admin.master.main')
@section('content')

    <div class="container mt-5">
        <form action="{{route('admin.boshqarma.store')}}" method="POST">
            @csrf
            @method('post')

        </form>
    </div>

@endsection
