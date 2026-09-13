@extends('layouts.app')

@section('title', 'training')

@section('content')


    <section class="training-start">
        <div class="training-start-left">
            <a href="/">All trainings</a>
            <img src="{{ asset('images/cisco-trainins.png') }}" alt="">
            <h1>Enterprise Network Architecture Principles</h1>
            <p>This INE course, taught by CCIE Keith Bogart, provides network engineers pursuing the Cisco CCNP ENCOR certification with a clear and practical understanding of modern enterprise network architecture.<br/>Through detailed exploration of hierarchical campus design models, learners will study Access, Distribution, and Core layer functions.</p>
            <div><i class="bi bi-star-fill"></i>4.9 Rating • <i class="bi bi-people"></i>140 Graduator</div>
        </div>
        <div class="training-start-right">
            <img src="{{ asset('images/media.png') }}" alt="">
            <h2>About Training</h2>
            <span><i class="bi bi-calendar-event"></i> Duration: 30 Days  -  Flexible scheduling</span>
            <span><i class="bi bi-clock"></i> Total: 48 Hours</span>
            <span><i class="bi bi-hand-index"></i> 100% Practical</span>
            <span><i class="bi bi-patch-check"></i> Certificate of completion</span>
            <h2>Instructor</h2>
            <div class="tutor">
                <img src="{{ asset('images/student-avatar.png') }}" alt="">
                <div>
                    <h3>Zakaria TADRIST</h3>
                    <p>Expert in Computer Networks & Telecommunications</p>
                </div>
            </div>
            <div class="price-section">
                <p class="price">Start from</p>
                <span class="price1">4,000 DA </span>
                <span class="price2"> 3,750 DA</span>
            </div>
            <span class="time-left">21 hours left at this price!</span>
            <a href="/">Register Now !</a>
            <p class="group">Next group start on 15 August</p>
        </div>
    </section>
    <section class="training-details">
        <div class="details-collapse">
            <h2>Training program</h2>
            <span>~40 Hours</span>
            <div class="collapse">
                <details>
                    <summary>Networking essentials (20%)</summary>

                    <p>
                        Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB
                    </p>
                </details>
                <details>
                    <summary>IP Connectivity (20 %)</summary>

                    <p>
                        Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB
                    </p>
                </details>
                <details>
                    <summary>Network Access (25 %)</summary>

                    <p>
                        Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB
                    </p>
                </details>
                <details>
                    <summary>Network Access v2.0 (10 %)</summary>

                    <p>
                        Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB
                    </p>
                </details>
                <details>
                    <summary>Networking essentials 20%</summary>

                    <p>
                        Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB
                    </p>
                </details>
                <details>
                    <summary>Security Fundamentals (15 %)</summary>

                    <p>
                        Networking Basics | OSI & TCP/IP models | LAN & Switches | Physical Layer|  Mediums | Ethernet Frame | MAC address | Switch Operations | Cisco IOS CLI | Basic conf | Duplex Speed | ARP | LAB
                    </p>
                </details>
            </div>
        </div>
    </section>
     <style>

                .training-start{
                    display: flex;
                    justify-content: space-between;
                    padding: 60px;
                }
                .training-start-left{
                    max-width: 60%;
                    display: flex;
                    flex-direction: column;
                    justify-content: left;
                    gap: 21px;
                    img{
                        width: 150px;
                        height: auto;
                    }
                    a{
                        font-weight: 500;
                    }
                    h1{
                        font-size: 30px;
                        font-weight: 600;
                    }
                    p{
                        font-size: 16px;
                        font-weight: 400;
                    }
                }
            </style>
            
    <style>
        @media (max-width: 770px){
            .training-start{
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    padding: 60px;
                }
                .training-start-left{
                    max-width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: left;
                    gap: 21px;
                    img{
                        width: 100%;
                        height: auto;
                    }
                    a{
                        font-weight: 500;
                    }
                    h1{
                        font-size: 30px;
                        font-weight: 600;
                    }
                    p{
                        font-size: 16px;
                        font-weight: 400;
                    }
                }
        }
    </style>
    <style>
        .training-details{
            padding: 60px;
            max-width: 60%;
            .details-collapse{
                background-color: #F7F7F7;
                border: solid 1px #E5E5E5;
                padding: 16px;
                border-radius: 10px;
                h2{
                    font-size: 24px;
                }
                span{
                    font-size: 14px;
                }
                details{
                    padding-top: 20px;
                    padding-bottom: 20px;
                    text-decoration: none;
                    p{
                        padding-top: 10px;
                        font-size: 14px;
                        color: #414141;
                    }
                    summary{
                        font-size: 16px;
                        color: #0A0A0A;
                        list-style: none;
                        cursor: pointer;

                        &::-webkit-details-marker {
                            display: none;
                        }
                    }
                }
                
            }
        }
    </style>
    <style>
        .training-start{
            background-color: #E4EEFF;
            background-image: url('/images/star.png');
            background-position: top right;
            background-repeat: no-repeat;
        }
        .training-start-right {
            background-color: white;
            max-width: 30%;
            display: flex;
            flex-direction: column;
            border: solid 1px #E5E5E5;
            border-radius: 10px;
            > *:not(:first-child){
                padding: 20px;
            }
            .tutor{
                display: flex;
                gap: 10px;
                p{
                    color: #6F6F6F;
                }
            }
            h2{
                font-size: 16px;
                font-weight:normal;

            }
            span{
                font-size: 14px;
                font-weight: 400;
            }
            .price1{
                font-size: 16px;
                color: #6F6F6F;
                text-decoration: line-through;

            }
            .price2{
                font-size: 26px;
                color: #1D4ED8;
            }
            .price{
                font-size: 13px;
                color: #747474;
            }
            .price-section{
                display: flex;
                gap: 14px;
                align-items: center;

            }
            .time-left{
                color: #FF8D28;
                font-size: 14px;
                text-align: center;
            }
            a{
                background-color: #1D4ED8;
                width: 80%;
                color: white;
                align-self: center;
                text-align: center;
                border-radius: 10px;
            }
            .group{
                text-align: center;
                color: #0A0A0A;
                font-size: 14px;
            }
        }
        @media (max-width: 768px){
            .training-start-right {
            background-color: white;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            border: solid 1px #E5E5E5;
            border-radius: 10px;
            > *:not(:first-child){
                padding: 20px;
            }
            .tutor{
                display: flex;
                gap: 10px;
                p{
                    color: #6F6F6F;
                }
            }
            h2{
                font-size: 16px;
                font-weight:normal;

            }
            span{
                font-size: 14px;
                font-weight: 400;
            }
            .price1{
                font-size: 16px;
                color: #6F6F6F;
                text-decoration: line-through;

            }
            .price2{
                font-size: 26px;
                color: #1D4ED8;
            }
            .price{
                font-size: 13px;
                color: #747474;
            }
            .price-section{
                display: flex;
                gap: 14px;
                align-items: center;

            }
            .time-left{
                color: #FF8D28;
                font-size: 14px;
                text-align: center;
            }
            a{
                background-color: #1D4ED8;
                width: 80%;
                color: white;
                align-self: center;
                text-align: center;
                border-radius: 10px;
            }
            .group{
                text-align: center;
                color: #0A0A0A;
                font-size: 14px;
            }
        }
        }
    </style>
    <section class="training-overview">
        <h2>Training overview</h2>
        <div class="training-overview-infos">
            <div class="infos-left">
                <h3>Who needs this training</h3>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Interactive workshops for hands-on learning</span>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors</span>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Networking opportunities</span>
            </div>
            <div class="infos-right">
                <h3>What you'll learn</h3>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
                <span><i class="bi bi-check-circle-fill checkmark"></i> Expert instructors with industry</span>
            </div>
        </div>
    </section>
    <style>
        .checkmark{
            color: #E4EEFF;
        }
        .training-overview{
            padding: 60px;
            h2{
                font-size: 24px;
                font-weight: 600;
            }
            h3{
                font-size: 18px;
                font-weight: 500;
            }
            .training-overview-infos{
                padding-top: 40px;
                display: flex;
                gap: 54px;
                span{
                    font-size: 16px;
                    font-weight: 400;
                    color: #434343;
                }
                .infos-left{
                    display: flex;
                    flex-direction: column;
                    gap: 34px; 
                }
                .infos-right{
                    display: flex;
                    flex-direction: column;
                    gap: 34px; 
                }
            }
        }
        
    </style>
    <section class="end">
        <div class="plans">
            <div class="plans-card">
                <h3>August 2026</h3>
                <span><i class="bi bi-geo-alt"></i> On site training</span>
                <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
                <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
                <span><i class="bi bi-person"></i> 50 Seats left</span>
                <span><i class="bi bi-cash"></i> 4,OOO DA</span>
                <a href="/">Register Now !</a>
            </div>
            <div class="plans-card">
                <h3>August 2026</h3>
                <span><i class="bi bi-geo-alt"></i> On site training</span>
                <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
                <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
                <span><i class="bi bi-person"></i> 50 Seats left</span>
                <span><i class="bi bi-cash"></i> 4,OOO DA</span>
                <a href="/">Register Now !</a>
            </div>
            <div class="plans-card">
                <h3>August 2026</h3>
                <span><i class="bi bi-geo-alt"></i> On site training</span>
                <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
                <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
                <span><i class="bi bi-person"></i> 50 Seats left</span>
                <span><i class="bi bi-cash"></i> 4,OOO DA</span>
                <a href="/">Register Now !</a>
            </div>
            <div class="plans-card">
                <h3>August 2026</h3>
                <span><i class="bi bi-geo-alt"></i> On site training</span>
                <span><i class="bi bi-calendar-fill"></i> Starting date: 15 August</span>
                <span><i class="bi bi-calendar-date"></i> Monday, Tuesday, Friday</span>
                <span><i class="bi bi-person"></i> 50 Seats left</span>
                <span><i class="bi bi-cash"></i> 4,OOO DA</span>
                <a href="/">Register Now !</a>
            </div>
        </div>
    </section>
    <section class="students">
        <h2>What our students think about us</h2>
        <div class="students-tests">
            <div class="student-test">
                <p>"Shadcn UI Kit for Figma has completely transformed our design process. It’s incredibly intuitive and saves us so much time. The components are beautifully crafted and customizable.”</p>
                <div class="student-info">
                    <img src="{{ asset('images/student-avatar.png') }}" alt="comptia">
                    <div>
                        <p>arslan</p>
                        <p>developer</p>
                    </div>
                </div>
            </div>
            <div class="student-test">
                <p>"Shadcn UI Kit for Figma has completely transformed our design process. It’s incredibly intuitive and saves us so much time. The components are beautifully crafted and customizable.”</p>
                <div class="student-info">
                    <img src="{{ asset('images/student-avatar.png') }}" alt="comptia">
                    <div>
                        <p>arslan</p>
                        <p>developer</p>
                    </div>
                </div>
            </div>
            <div class="student-test">
                <p>"Shadcn UI Kit for Figma has completely transformed our design process. It’s incredibly intuitive and saves us so much time. The components are beautifully crafted and customizable.”</p>
                <div class="student-info">
                    <img src="{{ asset('images/student-avatar.png') }}" alt="comptia">
                    <div>
                        <p>arslan</p>
                        <p>developer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="#">Register Now!</a>
        </div>
    </section>
    <section class="popular">
        <div class="popular-start">
            <h2>Our most popular trainings</h2>
        </div>
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
        .students{
            padding: 60px;
            .container{
                a{
                        display: flex;
                        justify-content: center;
                         margin: 0 auto;
                        background-color: #1D4ED8;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        border-radius: 10px;
                        color: white;
                        max-width: 370px;
                    }
            }
            h2{
                text-align: left;
            }
        }
        .end{
            padding: 60px;
            .plans{
                display: flex;
                gap: 24px;
                .plans-card{
                    min-width: 300px;
                    display: flex;
                    flex-direction: column;
                    border: solid 1px #E5E5E5;
                    border-radius: 10px;
                    padding: 18px;
                    gap: 20px;
                    h3{
                        font-size: 18px;
                        font-weight: 600;
                        padding-bottom: 20px;
                    }
                    span{
                        font-size: 14px;
                        font-weight: 400;
                    }
                    a{
                        text-align: center;
                        background-color: #1D4ED8;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        border-radius: 10px;
                        color: white;
                    }
                }
            }
        }
        @media (max-width:770px){
            .end{
            padding: 60px;
            .plans{
                display: flex;
                flex-direction: column;
                gap: 24px;
                .plans-card{
                    min-width: 300px;
                    display: flex;
                    flex-direction: column;
                    border: solid 1px #E5E5E5;
                    border-radius: 10px;
                    padding: 18px;
                    gap: 20px;
                    h3{
                        font-size: 18px;
                        font-weight: 600;
                        padding-bottom: 20px;
                    }
                    span{
                        font-size: 14px;
                        font-weight: 400;
                    }
                    a{
                        text-align: center;
                        background-color: #1D4ED8;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        border-radius: 10px;
                        color: white;
                    }
                }
            }
            
        }
        .training-details{
            padding: 60px;
            max-width: 100%;
            .details-collapse{
                background-color: #F7F7F7;
                border: solid 1px #E5E5E5;
                padding: 16px;
                border-radius: 10px;
                h2{
                    font-size: 24px;
                }
                span{
                    font-size: 14px;
                }
                details{
                    padding-top: 20px;
                    padding-bottom: 20px;
                    text-decoration: none;
                    p{
                        padding-top: 10px;
                        font-size: 14px;
                        color: #414141;
                    }
                    summary{
                        font-size: 16px;
                        color: #0A0A0A;
                        list-style: none;
                        cursor: pointer;

                        &::-webkit-details-marker {
                            display: none;
                        }
                    }
                }
                
            }
        }
        .training-overview{
            padding: 60px;
            h2{
                font-size: 24px;
                font-weight: 600;
            }
            h3{
                font-size: 18px;
                font-weight: 500;
            }
            .training-overview-infos{
                padding-top: 40px;
                display: flex;
                flex-direction: column;
                gap: 54px;
                span{
                    font-size: 16px;
                    font-weight: 400;
                    color: #434343;
                }
                .infos-left{
                    display: flex;
                    flex-direction: column;
                    gap: 34px; 
                }
                .infos-right{
                    display: flex;
                    flex-direction: column;
                    gap: 34px; 
                }
            }
        }
        
    }
    
        
            
    
    </style>

@endsection