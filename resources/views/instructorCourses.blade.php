
@extends('layouts.app')


@section('content')
<head>
    <style>
        .card-header {
            color:#54257a;
            font-weight: bold;
        }
        .courses {
            display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 40px;
        }
        .courses .box {
    box-shadow: 0 2px 15px rgb(0 0 0 / 10%);
    background-color: white;
    border-radius: 6px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}
.courses .box:hover{
    transform: translateY(-8px);
    box-shadow: 0 2px 15px rgb(0 0 0 / 20%);
}
.courses .box .text {
    padding: 20px;
    border-bottom: 1px solid #e6e6e7;
}
.courses .box .text p {
    color: #777;
}
.courses .box .info {
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.courses .box .info a {
    color: #54257a;
    font-weight: bold;
    text-decoration: none;
}
.courses .box .info i {
    color: #54257a;
}
.courses .box:hover .info i {
    animation: moving-arrow linear 0.6s infinite;
}
@keyframes moving-arrow {
  100% {
    transform: translateX(10px);
  }
}

/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #54257a;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #777;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 767px) {
  .sidebar {
    width: 100%;
    position: relative;
    margin-bottom: 16px;
    text-align: center;
  }
  
}

    </style>
        <link rel="stylesheet" href="css/all.min.css" />
</head>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="/home">Home</a>
  <a href="/allCourses">Catalog</a>
  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                                        Logout
 </a>
</div>

<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">{{ ('Instructor Courses') }}</div>

                <div class="card-body courses">        
@foreach ($instructors->courses as $c) 
             <div class="courses">
                 <div class="box">
                      <div class="text">
                        <h3>{{$c->name}}</h3>
                      </div>
                </div>
             </div>

               @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
