@extends('layouts.app')

@section('title', 'ALQALAM UNIVERSITY')
<header class="header-banner">
    <div class="logo-container">
        <img src="{{ asset('image/Alqalam.png') }}" alt="School Image" class="school-logo">
        <div class="text-container">
            <h1 class="school-name">AL-QALAM UNIVERSITY</h1>
            <p class="school-motto">"Knowledge is Light"</p> <!-- Add your school motto here -->
        </div>
    </div>
    <div class="nav-links">
        <div class="dropdown">
            <button class="dropbtn">Departments</button>
            <div class="dropdown-content">
                <a href="#">Software Engineering & Cyber Security</a>
                <a href="#">Computer Science & Information Technology</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Courses</button>
            <div class="dropdown-content">
                <a href="#">Course 1</a>
                <a href="#">Course 2</a>
                <a href="#">Course 3</a>
                <a href="#">Course 4</a>
                <a href="#">Course 5</a>
                <a href="#">Course 6</a>
                <a href="#">Course 7</a>
                <a href="#">Course 8</a>
                <a href="#">Course 9</a>
                <a href="#">Course 10</a>
            </div>
        </div>
    </div>
</header>
@section('content')

{{-- <div class="header-section">
    <img src="{{ asset('image/Alqalam.png') }}" alt="School Image" class="school-image">
</div> --}}

<div class="articles-section">
    <h2>College of Computing and Information Science</h2>
    <div class="marquee">
        <div class="articles">
            <div class="article">
                <h3>MSSN</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat justo eget mi laoreet, a volutpat ex blandit.</p>
            </div>
            <div class="article">
                <h3>AUK-PRESS</h3>
                <p>Nullam fringilla, erat nec suscipit bibendum, ligula est varius purus, id vehicula nunc justo eget orci.</p>
            </div>
            <div class="article">
                <h3>ASECS</h3>
                <p>Fusce at ullamcorper lorem. Duis vulputate eros nec eros malesuada, a posuere libero cursus.</p>
            </div>
        </div>
    </div>
</div>
<footer class="footer-banner">
    <div class="footer-content">
        <p>&copy; 2024 Alqalam University Katsina. All rights reserved.</p>
        <p>Batagarawa, Katsina, Nigeria</p>
        <p>Email: info@alqalamuniversity.edu</p>
    </div>
</footer>
@endsection
