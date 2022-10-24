@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-top: 30px;">
        <div class="col-3" style="padding-left: 200px;padding-top: 15px;">
            <img src="img/olimem2.jpg" alt="" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9" style="padding-left: 100px;">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>freecodecamp</h1>
                <a href="#">add new post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right: 35px;"><strong>153 </strong>posts</div>
                <div style="padding-right: 35px;"><strong>23k </strong>followers</div>
                <div style="padding-right: 35px;"><strong>212 </strong>following</div>
            </div>
            <div class="pt-3" style="font-weight: bold;">freeCodeCamp.org</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem unde impedit nemo quas fugit.</div>
            <div><a href="#" style="color: blue; font-weight: bold; text-decoration: none;">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5 p-5">
        <div class="col-4">
            <img src="img/messi.jpg" alt="" class="w-100" style="height: 250px;">
        </div>
        <div class="col-4">
            <img src="img/messi.jpg" alt="" class="w-100" style="height: 250px;">
        </div>
        <div class="col-4">
            <img src="img/messi.jpg" alt="" class="w-100" style="height: 250px;">
        </div>
    </div>
</div>
@endsection