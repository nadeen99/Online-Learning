@extends('layouts.app')


@section('content')
<head>
    <style>
        :root {
  --main-color: #7635aa;
  --main-color-alt: #6c4286;
  --section-padding-top: 100px;
  --section-padding-bottom: 50px;
  --main-transition: 0.3s;
  --section-background: #ececec;
}
.container {
  padding-left: 15px;
  padding-right: 15px;
  margin-left: auto;
  margin-right: auto;
}
        /* Small */
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
/* Medium */
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
/* Large */
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

.main-title {
  text-align: center;
  font-size: 30px;
  border: 2px solid black;
  padding: 10px 20px;
  margin: 0 auto 30px;
  width: fit-content;
  position: relative;
  transition: var(--main-transition);
  -webkit-transition: var(--main-transition);
  -moz-transition: var(--main-transition);
  -ms-transition: var(--main-transition);
  -o-transition: var(--main-transition);
  z-index: 1;
  text-transform: uppercase;
}
.main-title::before,
.main-title::after {
  content: "";
  width: 12px;
  height: 12px;
  background-color: var(--main-color);
  position: absolute;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
.main-title::before {
  left: -30px;
}
.main-title::after {
  right: -30px;
}
.main-title:hover::before {
  z-index: -1;
  animation: left-move 0.3s linear forwards;
  -webkit-animation: left-move 0.3s linear forwards;
}
.main-title:hover::after {
  z-index: -1;
  animation: right-move 0.3s linear forwards;
  -webkit-animation: right-move 0.3s linear forwards;
}
.main-title:hover {
  color: white;
  border-color: white;
  transition-delay: 0.3s;
  box-shadow: 0 2px 15px rgb(0 0 0 / 10%);
}

@keyframes left-move {
  50% {
    left: 0;
    width: 12px;
    height: 12px;
  }
  100% {
    width: 100%;
    height: 100%;
    left: 0;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
  }
}
@keyframes right-move {
  50% {
    right: 0;
    width: 12px;
    height: 12px;
  }
  100% {
    width: 100%;
    height: 100%;
    right: 0;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
  }
}


/* Start videos */
.videos{
    padding-bottom: var(--section-padding-bottom);
}

.videos .holder {
  display: flex;
  justify-content: center;
  background-color: var(--section-background);
  border: 1px solid #ddd;
  height: 100vh;
}
@media (max-width: 991px) {
  .videos .holder {
    flex-direction: column;
  }
}
.videos .holder .list {
  background-color: white;
  min-width: 300px;
}
.videos .holder .list .name {
  background-color: #f4f4f4;
  font-weight: bold;
  font-size: 17px;
  padding: 20px;
  display: flex;
  justify-content: space-between;
}
.videos .holder .list ul li {
  padding: 7px;
  border-top: 1px solid var(--section-background);
  cursor: pointer;
  transition: var(--main-transition);
  -webkit-transition: var(--main-transition);
  -moz-transition: var(--main-transition);
  -ms-transition: var(--main-transition);
  -o-transition: var(--main-transition);
}
.videos .holder .list ul li span {
  display: block;
  margin: 10px 0 0;
  color: #777;
}
.videos .holder .list ul li:hover {
  color: var(--main-color);
  background-color: #fafafa;
}
.videos .preview {
  background-color: #e2e2e2;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width:100%;
}
.videos .preview img {
  max-width: 100%;
}
.videos .preview .info {
  padding: 20px;
  font-size: 17px;
  background-color: white;
  font-weight: 500;
  margin-top: 10px;
}
.instructor {
    display: flex;
    gap: 45px;
    margin: 30px;
}
.instructor a {
    color: #777;
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
    text-transform: capitalize;
    display: flex;
    align-items: center;
}
.instructor a span {
    margin-right: 10px;
}
.duration {
    font-weight: bold;
    font-size: 20px;
    text-transform: capitalize;
    margin-bottom:40px;
}
/* End videos */

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

@if(session()->has('success'))
<div class="alert alert-success text-center">
                    <strong>{{session()->get('success')}}</strong>
                </div>
            @endif
 <div class="videos" id="videos">
      <div class="container">
        <h2 class="main-title">{{$courses->name}}</h2>
        <h3>Instructors</h3>
        <div class="instructor">
      @foreach ($courses->instructors as $c) 

            <a href="{{route('instructorCourses',$c->id)}}">
                <span class="material-symbols-outlined">person</span> 
                {{$c->name}}</a>
      @endforeach
      </div>
      <h3 class="duration">Course Duration: {{$courses->duration}}</h3>
      <h3>Course Videos</h3>
        <div class="holder">
          <div class="list">
            <div class="name">
            core curriculum
              <i class="fas fa-random"></i>
            </div>
            <ul>
                @foreach($courses->videos as $video)
              <li>{{$video->title}}<span>{{$video->duration}}</span>
              <span><a href="{{$video->link}}" target="iframe-video">Watch</a></span>
            </li>
              @endforeach
            </ul>
          </div>
          <div class="preview">
            <iframe width="100%" height="100%" src="" frameborder="0" name="iframe-video"></iframe>
            <div class="info">Everything About {{$courses->name}}</div>
          </div>
        </div>
      </div>
    </div>

        @endsection
