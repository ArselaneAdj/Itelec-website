<div class="sidenav">
    <h2>Categories</h2>
    <a href="#">All Trainings</a>
    <a href="#">Cisco Systems</a>
    <a href="#">CompTIA</a>
    <a href="#">Microsoft Azure</a>
    <a href="#">Cybersecurity</a>
    <a href="#">Web Development</a>
    <a href="#">Artificial Intelligence</a>
    <a href="#">Telecommunications</a>
    <a href="#">Security Systems</a>
</div>
<div class="main">
    <input placeholder="Search for a training" type="text"><br>
    <span># Trainings found</span>
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

    </div>
</div>


<style>
    .sidenav h2{
        font-size: 25px;
        font-weight: 600;

    }
    .sidenav {
        padding: 50px;
  height: 100%; 
  width: 350px;
  position: fixed; 
  z-index: 1;
  left: 0;
  overflow-x: hidden; 
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: black;
}

.main {
  margin-left: 300px;
  padding: 50px;
}
.main input{
    border: black solid 1px;
    padding: 5px 10px 5px 10px;
    border-radius: 5px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>