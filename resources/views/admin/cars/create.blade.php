@extends('admin.layouts.layout')

@section('cars')
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
                        <h3>Yangi mashina qo'shish</h3>
                        <a class="create__btn" href="{{route('admin.cars.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admin.cars.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Yuk moshinasi haydovchisi :</strong>
                        <select name="driver_id" class="form-control">
                            @foreach ($drivers as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                        <strong> Yuk moshinasi raqami :</strong>
                        <input type="text" name="car_number" class="form-control"> <br>

                        <strong> Yuk moshinasi markasi :</strong>
                        <input type="text" name="brand" class="form-control"> <br>

                        <strong> Tigach raqami :</strong>
                        <input type="text" name="luggage_number" class="form-control"> <br>

                        <strong> Tigach sig'imi :</strong>
                        <input type="number" name="luggage_capacity" class="form-control"> <br>

                        <strong> Ishlab chiqarilgan yili :</strong>
                        <input type="text" name="made_date" class="form-control"> <br>

                        <strong> Avtotransport holati :</strong>
                        <select name="status" class="form-control">
                            <option>qoniqarsiz</option>
                            <option>qoniqarli</option>
                            <option>yaxshi</option>
                            <option>Juda yaxshi</option>
                        </select>

                        <strong> Yoqilg'isi :</strong>
                        <input type="text" name="fuel" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
