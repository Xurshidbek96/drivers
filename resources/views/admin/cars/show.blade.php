@extends('admin.layouts.layout')

@section('cars')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> yuk mashina ma'lumotlari</h3>
                    <a class="create__btn" href="{{route('admin.cars.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Haydovchi : </p>
                                </td>
                                <td><b>{{ $car->driver->name ?? 'biriktirilmagan' }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Yuk moshinasi raqami : </p>
                                </td>
                                <td><b>{{ $car->car_number }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Yuk moshinasi markasi : </p>
                                </td>
                                <td><b>{{ $car->brand }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Tigach raqami : </p>
                                </td>
                                <td><b>{{ $car->luggage_number }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Tigach sig'imi : </p>
                                </td>
                                <td><b>{{ $car->luggage_capacity }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ishlab chiqarilgan yili : </p>
                                </td>
                                <td><b>{{ $car->made_date }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Avtotransport holati : </p>
                                </td>
                                <td><b>{{ $car->status }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Yoqilg'isi : </p>
                                </td>
                                <td><b>{{ $car->fuel }}</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
