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
.main-title {
  text-align: center;
  font-size: 30px;
  border: 2px solid black;
  padding: 10px 20px;
  margin: 10px auto 60px;
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
.pricing{
    padding-bottom: var(--section-padding-bottom);
}

    .container {
  padding-left: 15px;
  padding-right: 15px;
  margin-left: auto;
  margin-right: auto;
}
.pricing .container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 40px;
  width: 100%;
}
.pricing .box {
  box-shadow: 0 12px 20px 0 rgb(0 0 0 / 13%), 0 2px 4px 0 rgb(0 0 0 / 12%);
  position: relative;
  text-align: center;
  background-color: white;
  transition: var(--main-transition);
  -webkit-transition: var(--main-transition);
  -moz-transition: var(--main-transition);
  -ms-transition: var(--main-transition);
  -o-transition: var(--main-transition);
  z-index: 1;
}
.pricing .box::before,
.pricing .box::after {
  content: "";
  width: 0;
  height: 50%;
  background-color: #f6f6f6;
  position: absolute;
  z-index: -1;
  transition: var(--main-transition);
  -webkit-transition: var(--main-transition);
  -moz-transition: var(--main-transition);
  -ms-transition: var(--main-transition);
  -o-transition: var(--main-transition);
}
.pricing .box::before {
  left: 0;
  top: 0;
}
.pricing .box::after {
  bottom: 0;
  right: 0;
}
.pricing .box:hover::before,
.pricing .box:hover::after {
  width: 100%;
}
@media (min-width: 1200px) {
  .pricing .popular {
    top: -20px;
  }
}
.pricing .box.popular .label {
  position: absolute;
  writing-mode: vertical-rl;
  background-color: var(--main-color);
  right: 20px;
  font-size: 18px;
  color: white;
  font-weight: bold;
  padding: 10px 10px 35px 10px;
  width: 40px;
}
.pricing .box.popular .label::before {
  content: "";
  border-style: solid;
  border-width: 20px;
  border-color: transparent transparent white transparent;
  position: absolute;
  bottom: 0;
  right: 0;
}
.pricing .box h3 {
  margin: 15px 0;
  font-size: 25px;
  letter-spacing: -1px;
}
.pricing .box img {
  width: 80px;
  margin-bottom: 30px;
}
.pricing .box .price {
  margin-bottom: 20px;
}
.pricing .box .price .amount {
  display: block;
  color: var(--main-color);
  font-weight: bold;
  font-size: 45px;
  margin-bottom: 5px;
}
.pricing .box .price .time {
  color: #777;
}
.pricing .box ul {
  text-align: left;
  list-style: none;
}
.pricing .box ul li {
  border-top: 1px solid #eee;
  padding: 9px;
}

.pricing .box a {
  border: 2px solid var(--main-color);
  border-radius: 6px;
  display: block;
  width: fit-content;
  margin: 12px auto 14px;
  padding: 11px 15px;
  font-weight: bold;
  color: var(--main-color);
  transition: var(--main-transition);
  -webkit-transition: var(--main-transition);
  -moz-transition: var(--main-transition);
  -ms-transition: var(--main-transition);
  -o-transition: var(--main-transition);
}
.pricing .box a:hover {
  color: white;
  background-color: var(--main-color-alt);
  border-color: var(--main-color-alt);
}

  </style>
</head>
<!-- pricing -->
<div class="pricing" id="pricing">
      <h2 class="main-title">Pricing Plans</h2>
      <div class="container">
        <div class="box">
          <h3>Basic Level</h3>
          <img src="images/hosting-basic.png" alt="">
          <div class="price">
            <span class="amount">150 LE</span>
            <span class="time">Per Month</span>
          </div>
          <ul>
            <li>Basic information</li>
            <li>Basic Support</li>
          </ul>
          <a href="#">Choose Plan</a>
        </div>
        <div class="box popular">
          <div class="label">Most Popular</div>
          <h3>Advanced Level</h3>
          <img src="images/hosting-advanced.png" alt="">
          <div class="price">
            <span class="amount">200 LE</span>
            <span class="time">Per Month</span>
          </div>
          <ul>
            <li>Advenced information</li>
            <li>Advanced Support</li>
          </ul>
          <a href="#">Choose Plan</a>
        </div>
        <div class="box">
          <h3>Professional Level</h3>
          <img src="images/hosting-professional.png" alt="">
          <div class="price">
            <span class="amount">300 LE</span>
            <span class="time">Per Month</span>
          </div>
          <ul>
            <li>Professional Level</li>
            <li>Professional Support</li>
          </ul>
          <a href="#">Choose Plan</a>
        </div>
      </div>
    </div>
    @endsection