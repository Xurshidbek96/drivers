@extends('admin.layouts.layout')

@section('drivers')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Haydovchi ma'lumotlari</h3>
                    <a class="create__btn" href="{{route('admin.drivers.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

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

                        <tr>
                            <td>O'rtacha bahosi : </td>
                            <td><b>{{$driver->rating->overall ?? 'berilmagan'}}</b></td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
