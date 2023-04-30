@extends('driver.layouts.layout')

@section('rating')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Berilgan baho</h3>
                    <a class="create__btn" href="{{route('driver.dashboard')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Vaqtida kelish : </p>
                                </td>
                                <td><b>{{ $rating->price1 ?? 'berilmagan' }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Vaqtida yetkazish : </p>
                                </td>
                                <td><b>{{ $rating->price2 ?? 'berilmagan'}}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Yuk mahsina tozaligi : </p>
                                </td>
                                <td><b>{{ $rating->price3 ?? 'berilmagan'}}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Muomula : </p>
                                </td>
                                <td><b>{{ $rating->price4 ?? 'berilmagan'}}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>O'rtacha baho : </p>
                                </td>
                                <td><b>{{ $rating->overall ?? 'berilmagan'}}</b></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
