@extends('admin.layouts.layout')

@section('teachers')
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
                        <h3>Yangi Mentor qo'shish</h3>
                        <a class="create__btn" href="{{route('teacher.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Ism Familyasi :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong> Kasbi :</strong>
                        <input type="text" name="positsion" class="form-control"> <br>

                        <strong> Tg Link :</strong>
                        <input type="text" name="tg_link" class="form-control"> <br>

                        <strong> FB Link :</strong>
                        <input type="text" name="fb_link" class="form-control"> <br>

                        <strong> Ins Link :</strong>
                        <input type="text" name="ins_link" class="form-control"> <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
