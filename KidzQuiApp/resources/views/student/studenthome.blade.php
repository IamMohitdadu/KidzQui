<!--
/**
* File: studenthome.blade.php
* Path: resources/views/student/studenthome.blade.php
* Purpose: The base layout for the display of student app
* Created On: 30-03-2017
* Last Modified On: 30-03-2017
* Author: MOHIT DADU
*/
-->

@extends('layouts.student')

@section('title', 'Home')

@section('header')

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

@stop

@section('content')

<!--students-->
  <div class="students">
    <div class="row well">
      <div class="col-md-12"><center>
        <button type="button" class="btn btn-primary btn-circle btn-xl" type="submit">Level 1</button>
        <button class="btn btn-primary btn-circle btn-xl" type="submit">Level 2</button>
        <button class="btn btn-primary btn-circle btn-xl" type="submit">Level 3</button>
        </center></div><br>
      <div class="col-md-12"><center>
        <button class="btn btn-primary btn-circle btn-xl" type="submit">Level 4</button>
        <button class="btn btn-primary btn-circle btn-xl" type="submit">Level 5</button>
      </center></div>
      <div class="col-md-12">
        <button type="button" class="btn btn-info btn-lg col-md-2" style="margin-left: 40%">Start Quiz </button>
      </div>
    </div>
  </div>
<!--//students-->
<!--best-->
  <div class="best">
    <div class="container">
      <div class="col-md-12 best-left wow fadeInLeft animated" data-wow-delay=".5s">
        <h3>Tutorials</h3>

        @foreach($records as $record)

        <div class="bes-top">
          <div class="bes-lft">
            <div class="history-grid-image">
            <img src={{ asset("KidzQuiApp/resources/assets/images/t8.jpg") }} class="img-responsive zoom-img" alt="">
          </div>
          </div>
          <div class="bes-rgt">
            <h4><a href="singlepage">{{ $record->getField('tutorialTitle_kqt') }}</a></h4>
            <p>{{ $record->getField('tutorialDescription_kqt') }}</p>
          </div>
            <div class="clearfix"></div>
        </div>
        <br>
        @endforeach

      </div>
      <div class="clearfix"></div>
    </div>
  </div>
<!--best-->

@stop

@section('footer')

  <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  <!--//end-animate-->

@stop