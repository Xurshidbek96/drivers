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
                        <h3>Yangi Admin qo'shish</h3>
                        
                        <a class="create__btn" href="{{route('admin.users.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.users.store')}}" method="POST">
                        <p> yaratilgan barcha adminlar uchun parol : admin12345 </p>
                        @csrf
                        <strong> Login :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong> email :</strong>
                        <input type="email" name="email" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
