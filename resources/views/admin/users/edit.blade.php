@extends('admin.layouts.layout')

@section('users')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('admin.users.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Login :</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control"> <br>

                        <strong> email :</strong>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control"> <br>

                        <input type="submit" value="O`zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
