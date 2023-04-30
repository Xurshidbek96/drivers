@extends('admin.layouts.layout')

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
                        <a class="create__btn" href="{{route('admin.drivers.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.drivers.update', $driver->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="driver_id" value="{{ $driver->id }}" class="form-control"> <br>

                        <strong> Uztrucking.org orqali bosib o'tilgan masofa (km) :</strong>
                        <input type="number" name="distance_uztracking" value="{{ $driver->distance_uztracking }}" class="form-control"> <br>

                        <h3> Haydovchiga baho berish</h3>

                        <strong> Vaqtida kelishi :</strong>
                        <select name="price1" class="form-control">
                            @if(isset($rating->price1))<option value="{{$rating->price1}}">{{$rating->price1}}</option>@endif
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <strong> Vaqtida yetkazish :</strong>
                        <select name="price2" class="form-control">
                            @if(isset($rating->price2))<option value="{{$rating->price2}}">{{$rating->price2}}</option>@endif
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <strong> Yuk mashina tozaligi :</strong>
                        <select name="price3" class="form-control">
                            @if(isset($rating->price3))<option value="{{$rating->price3}}">{{$rating->price3}}</option>@endif
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <strong> Haydovchi muomulasi :</strong>
                        <select name="price4" class="form-control">
                            @if(isset($rating->price4))<option value="{{$rating->price4}}">{{$rating->price4}}</option>@endif
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <input type="submit" value="Saqlash">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
