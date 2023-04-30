@extends('admin.layouts.layout')

@section('dashboard')
active
@endsection


@section('content')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1> {{Auth::user()->name}}</h1>
                <h5>@if(Auth::user()->id == 1)
                    Siz super adminsiz
                @endif</h5>
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

        @if(Auth::user()->id != 1)
            <p> Barcha adminlar uchun dastlabki parol: <b>admin12345</b>. Parolni admin o'zi profilga o'tib o'zgartirish mumkin </p>
        @endif
    </main>
    <!-- MAIN -->

@endsection
