@extends('driver.layouts.layout')

@section('drivers')
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
                        <a class="create__btn" href="{{route('driver.dashboard')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('driver.update', $driver->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Login :</strong>
                        <input type="text" name="name" value="{{ $driver->name }}" class="form-control"> <br>

                        <strong> Ism Familyasi :</strong>
                        <input type="text" name="full_name" value="{{ $driver->full_name }}" class="form-control"> <br>

                        <strong> Telefon raqami :</strong>
                        <input type="text" name="phone" value="{{ $driver->phone }}" class="form-control"> <br>

                        <strong> Id karta :</strong>
                        <input type="text" name="id_card" value="{{ $driver->id_card }}" class="form-control"> <br>

                        <strong> Haydovchilik toifasi :</strong>
                        <select name="type" id="" class="form-control">
                            <option value="{{ $driver->type }}">{{ $driver->type }}</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        
                        <strong> Ish joyi :</strong>
                        <input type="text" name="workplace" value="{{ $driver->workplace }}" class="form-control"> <br>

                        <strong> Ish tajribasi :</strong>
                        <input type="text" name="workplace" value="{{ $driver->workplace }}" class="form-control"> <br>

                        <strong> Rasm(3 x 4) png,jpg :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <strong> Uztrucking.org a'zo bo'lgan sana :</strong>
                        <input type="date" name="member_date_uztracking" value="{{ $driver->member_date_uztracking }}" class="form-control"> <br>

                        <strong> Pasport yoki id karta nusxasi (pdf) :</strong>
                        <input type="file" name="pasport_copy" class="form-control"> <br>

                        <strong> Haydovchilik guvohnomasidan nusxa (pdf) :</strong>
                        <input type="file" name="sertificate_copy" class="form-control"> <br>

                        <strong> Mehnat davtarchasidan nusxa (pdf) :</strong>
                        <input type="file" name="workbook_copy" class="form-control"> <br>

                        <strong> Avtotransport texpasporti (pdf) :</strong>
                        <input type="file" name="car_document" class="form-control"> <br>

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
