@extends('driver.layouts.layout')

@section('dashboard')
active
@endsection


@section('content')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Driver {{Auth::user()->name }}</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Shaxsiy ma'lumotlar</h3>
                    <img src="/files/{{$driver->img}}" alt="" width="70px">
                </div>
                <table>

                    <tr>
                        <td>Login : </td>
                        <td><b>{{$driver->name}}</b></td>
                    </tr>

                    <tr>
                        <td>Id Karta : </td>
                        <td><b>{{$driver->id_card}}</b></td>
                    </tr>

                    <tr>
                        <td>Telefon  : </td>
                        <td><b>{{$driver->phone}}</b></td>
                    </tr>

                    <tr>
                        <td>Ism familya : </td>
                        <td><b>{{$driver->full_name}}</b></td>
                    </tr>

                    <tr>
                        <td>Haydovchilik toifasi : </td>
                        <td><b>{{$driver->type}}</b></td>
                    </tr>

                    <tr>
                        <td>Ish joyi : </td>
                        <td><b>{{$driver->workplace}}</b></td>
                    </tr>

                    <tr>
                        <td>Uztrucking.org a'zo bo'lgan sana : </td>
                        <td><b>{{$driver->member_date_uztracking }}</b></td>
                    </tr>

                    <tr>
                        <td>Uztrucking.org orqali bosib o'tilgan masofa : </td>
                        <td><b>{{$driver->distance_uztracking }}</b></td>
                    </tr>

                    <tr> 
                        <td>Pasport nusxasi: </td>
                        <td><a href="/files/{{$driver->pasport_copy}}" target="_blank"> Yuklash </a></td>
                    </tr>

                    <tr> 
                        <td>Haydovchilik guvohnomasi: </td>
                        <td><a href="/files/{{$driver->pasport_copy}}" target="_blank"> Yuklash </a></td>
                    </tr>

                    <tr> 
                        <td>Mehnat davtarchasidan nusxa : </td>
                        <td><a href="/files/{{$driver->workbook_copy}}" target="_blank"> Yuklash </a></td>
                    </tr>

                    <tr> 
                        <td>Avtotransport texpasporti : </td>
                        <td><a href="/files/{{$driver->car_document}}" target="_blank"> Yuklash </a></td>
                    </tr>
                   
                </table>
            </div>

            <div class="todo">
                <div class="head">
                    <h3>Yuk mashinasi</h3>
                    <i class='bx bx-plus' ></i>
                    <i class='bx bx-filter' ></i>
                </div>

                <table>

                    @if(isset($driver->car))
                    <tr>
                        <td>
                            <p>Yuk moshinasi raqami : </p>
                        </td>
                        <td><b>{{ $driver->car->car_number }}</b></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Yuk moshinasi markasi : </p>
                        </td>
                        <td><b>{{ $driver->car->brand }}</b></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Tigach raqami : </p>
                        </td>
                        <td><b>{{ $driver->car->luggage_number }}</b></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Tigach sig'imi : </p>
                        </td>
                        <td><b>{{ $driver->car->luggage_capacity }}</b></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Ishlab chiqarilgan yili : </p>
                        </td>
                        <td><b>{{ $driver->car->made_date }}</b></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Avtotransport holati : </p>
                        </td>
                        <td><b>{{ $driver->car->status }}</b></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Yoqilg'isi : </p>
                        </td>
                        <td><b>{{ $driver->car->fuel }}</b></td>
                    </tr>
                    @endif
                </table>
                
            </div>
        </div>
    </main>
    <!-- MAIN -->

@endsection
