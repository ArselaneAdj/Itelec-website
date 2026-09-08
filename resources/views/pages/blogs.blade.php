@extends('layouts.app')

@section('title', 'blogs')

@section('content')

    <section class="blogs">
        <div class="blogs-start">
            <div class="blogs-start-text">
                <h1>Blogs</h1>
                <p>Join hundreds of students and professionals who have transformed their careers and are now working with leading companies across Algeria and beyond.</p>
            </div>
        </div>
    </section>
    <section class="recent">
        <h2>Recent blogs</h2>
        <div class="popular-info">
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    </section>
    <style>

        .recent{
                padding: 80px;
                h2{
                    font-size: 30px;
                    font-weight: 600;
                    text-align: left;
                }
            }           
        .blogs{
            background-image: linear-gradient(to bottom, rgba(173, 163, 163, 0), rgba(255, 255, 255, 255)), url('/images/about-bg.png');
            .blogs-start-text{
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 100px 200px;
            min-height: 500px;
            h1{
                font-size: 30px;
                font-weight: 600;
                padding-bottom: 30px;
            }
            p{
                font-size: 14px;
                font-weight: 400;
            }
        }
        }
        
    </style>
@endsection