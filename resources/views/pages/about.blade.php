@extends('layouts.app')

@section('title', 'About')

@section('content')

    <section class="about">
        <div class="about-hero">
            <h1>Empowering Professionals Through Field-Focused Training</h1>
            <div class="about-hero-buttons">
                <x-navbar.navbar-button href="{{ url('/trainings') }}">Explore Trainings</x-navbar.navbar-button>
                <x-navbar.navbar-button href="{{ url('/trainings') }}">Contact us</x-navbar.navbar-button>
            </div>
        </div>
    </section>
    <section class="about-content">
        <div class="about-content-text">
            <div class="about-content-text-left">
                <h2>About us</h2>
                <img src="{{ asset('images/about-images.png') }}" alt="comptia">
            </div>
            <div class="about-content-text-right">
                <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p><br>
                <p>Our mission is clear: to bridge the gap between academic education and industry requirements by providing 100% hands-on, internationally-oriented training programs led by expert instructors. We don’t just teach theory — we prepare fresh graduates and professionals with the real skills, projects, and industry exposure they need to succeed in today’s competitive job market.</p><br>
                <p>Through strong partnerships with active companies in the field, we offer our trainees valuable internship opportunities and direct recruitment pathways, turning ambition into successful careers.</p>
            </div>
        </div>
        <div class="stats">
            <div>
                <h3>5</h3>
                <p>Years in the market</p>
            </div>
            <div>
                <h3>500+</h3>
                <p>Students trained</p>
            </div>
            <div>
                <h3>70%</h3>
                <p>Employment rate</p>
            </div>
            <div>
                <h3>95%</h3>
                <p>Certification success rate</p>
            </div>
        </div>
        <style>
            .stats{
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                text-align: center;
                > * {
                    padding: 50px;
                }
                h3{
                    font-size:30px;
                    font-weight: 600;
                }
                p{
                    font-size: 14px;
                    font-weight: 400;
                    color: #737373;
                }
            }
        </style>
    </section>
    <section class="created">
        <div class="created-start">
            <h2>How Itelec was created</h2>
            <p>Join hundreds of students and professionals who have transformed their careers and are now working with leading companies across Algeria and beyond.</p>
        </div>
        <div class="diagram">
            <div class="history">
                <div>
                    <p>2020</p>
                    <img src="{{ asset('images/cisco.png') }}" alt="">
                    <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-  edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p>
                </div>
                <span class="try"></span>
            </div>
            <div class="history r">
                <div>
                    <p>2020</p>
                    <img src="{{ asset('images/cisco.png') }}" alt="">
                    <p>ITELEC is a premier technical training center founded in 2022 by industry professionals with extensive field experience. We specialize in delivering high-quality, practical training in cutting-  edge digital and technical domains including Cybersecurity, Networking, Cloud Computing, Web Development, Artificial Intelligence, and Audiovisual Technologies.</p>
                </div>
            </div>
        </div>
        <style>
            .diagram{
                display: flex;

                .try {
                    width: 0;
                    height: 1000px;
                    border-left: 2px dashed black;
                }
                .history{
                    display: flex;
                }
                .r{
                    margin-top: 500px ;
                }
            }
        </style>
        <style>
            .created{
                background-color: #F8F8F8;
                padding: 50px;
            }
            .created-start{
                text-align: center;
                h2{
                    font-size:30px;
                    font-weight:600;
                }
                p{
                    font-size:14px;
                    font-weight:400;
                    max-width: 770px;
                    margin: 0 auto;
                }
            }
        </style>
    </section>
    <section class="instructors-section">
        <div class="instructors-start">
            <h2>Our instructors</h2>
            <x-navbar.navbar-button href="{{ url('/trainings') }}">Join our team</x-navbar.navbar-button>
        </div>
        <div class="instructors">
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
            <div class="instructor">
                <img src=" {{asset('images/sonatrach.png')}} " alt="">
                <h3>david david</h3>
                <p>developer</p>
                <i class="bi bi-linkedin"></i>
            </div>
        </div>
        <div class="instructors-end">
            <p>All our <span>instructors</span> are active <span>professionals</span> who <span>work daily in the industry, not just full-time teachers.</span>They bring up-to-date, real-market experience and deep knowledge of current technologies, challenges, and market demands directly into every training session.</p>
            <x-navbar.navbar-button href="{{ url('/trainings') }}">Explore Trainings</x-navbar.navbar-button>
        </div>
    </section>
    <section class="contact-us">
        <div class="contact-left">
            <h2>Contact us</h2>
            <div class="contact-left-info">
                <i class="bi bi-telephone"></i>
                <div class="contact-left-info-right">
                    <p>Call us</p>
                    <span>+1 400 500 600</span>
                </div>
            </div>
            <div class="contact-left-info">
                <i class="bi bi-envelope"></i>
                <div class="contact-left-info-right">
                    <p>Write an email</p>
                    <span>hello@example.com</span>
                </div>
            </div>
            <div class="contact-left-info">
                <i class="bi bi-geo-alt"></i>
                <div class="contact-left-info-right">
                    <p>Visit our office</p>
                    <span>192 Griffin Street, Gilbert, AZ 32521</span>
                </div>
            </div>
            <div>
                <p>Follow us</p>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
        <div class="form-section">
            <form action="" class="contact-form">
                <h2>Send us a message</h2>

                <label for="name">Name</label>
                <input name="name" type="text" placeholder="Name">

                <label for="email">Email</label>
                <input name="email" type="email" placeholder="Email">

                <label for="message">Message</label>
                <input name="message" type="text-area" placeholder="Type your message">

                <button>Send message</button>

                <p>We reply in under than 24H</p>
            </form>
        </div>
    </section>
    <style>
        .form-section{
            background-image: url('/images/contact.png');
            padding: 5px;
            border-radius: 10px;
        }
        form{
            border-radius: 10px;
            width: 500px;
            padding: 10px;
            background-color: white;
            display: flex;
            flex-direction: column;
            gap: 20px;
            h2{
                font-size:18px;
                font-weight:500;
            }
            label{
                font-size: small;
            }
            input{
                padding: 20px;
                border: 1px solid #FFFFFF;
            }
            button{
                background-color: #1D4ED8;
                color: white;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 10px;
            }
        }
        .contact-us{
            display: flex;
            justify-content: space-around;
            .contact-left{
                display: flex;
                flex-direction: column;
               
                h2{
                    font-size:30px;
                    font-weight: 600;
                }
                .contact-left-info{
                    display: flex;
                    justify-content: space-around;
                    padding: 20px;
                    gap: 20px;
                    .contact-left-info-right{
                        display: flex;
                        flex-direction:column;
                        width:500px;
                        p{
                            font-weight: 400;
                        }
                    }
                }

            }
        }
    </style>
    <style>
            .instructors-end{
                padding: 100px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 30px;
                span{
                    font-weight:600;
                    color:black;
                }
                p{
                    text-align:center;
                    font-size:22px;
                    font-weight:400;
                    max-width:80%;
                    color:#727272;

                }

            }
            .instructors{
                display: flex;
                justify-content: space-around;
                overflow-x: auto;
                gap: 20px;
                
                .instructor{
                    min-width: 300px;
                    display: flex;
                    flex-direction:column;
                    gap:10px;
                    padding: 10px;
                    border: 1px solid #DFDFDF;
                    border-radius: 20px;
                    h3{
                        font-size: medium;
                        font-weight:500;
                    }
                    p{
                        color: #737373;
                    }
                }
            }
            .instructors-start{
                display: flex;
                justify-content: space-between;
                padding: 50px;
                > :nth-child(2){
                    background-color: white;
                    color: black;
                    border: 1px solid black;
                }
                h2{
                    font-size:30px;
                    font-weight:600;
                }
            }
        </style>
    <style>

        .about-content-text{
            padding: 50px;
            display: flex;
            gap:50px;
            .about-content-text-left{
                flex: 0 0 30%;
                display: flex;
                gap:50px;
                flex-direction: column;
                h2{
                    text-align: left;
                    font-size: 30px;
                    font-weight: 600;
                }
                p{
                    font-size:16px;
                    font-weight: 400;
                }
            }
            .about-content-text-right{
                display: flex;
                flex-direction: column;
                gap: 30px;
            }
        }
    </style>
    <style>
        .about{
            background-image: linear-gradient(to bottom, rgb(0, 0, 0,0), rgba(255, 255, 255, 255)), url('/images/about-bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 500px; 
            display: flex;
            justify-content: center; /* Horizontal */
            align-items: center; /* Vertical */
            text-align: center;
            h1{
                font-size:39px;
                max-width:770px;
            }
            
        }
        .about-hero-buttons{
                display: flex;
                justify-content: center; /* Horizontal */
                align-items: center; /* Vertical */
                text-align: center;
                gap: 20px;
                padding-top: 50px;
                > * {width: 35%;}
                > :nth-child(2){
                    background-color: white;
                    color: black;
                }
                
                    
        }
    </style>
@endsection