<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
@extends('master_index.partials.header')
@section('title','Player Dashboard')

<body>


@include('master_index.partials.navbar')



@extends('master_index.partials.body')

@section('content1')
<div class="container">

      <!--body-->
      <div class="main-body">
        <!--side bar-->
        <div class="side-bar">
            <!--sidebar-->
            <!--profile pics-->
             <div class="prof"> 
                <img src="pic/1.jpg" alt="" width="100%" height="40%">
                <h6><a href="">changecover</a></h6>
                <div class="prof_pic">
                    <img src="pic/2.png" alt="" >
                </div>
                <br><br><br>
                <div class="prof_name">
                <h2>{{$currentPlayer->p_first_name}} {{$currentPlayer->p_middle_name}} {{$currentPlayer->p_last_name}}</h2>
                <h4><i class="far fa-clock"></i>&nbsp; register date August6,2020</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    70%
                    </div>

                </div>
                    </div>
                    <!--profile pic end-->
                    <!--dashboard-->
                    <div class="dashboard">
                    <a href="" class="active"><i class="fa fa-bars"></i>&nbsp;&nbsp;Dashboard</a>
                    <a href="">player information</a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    </div>
            </div>
            <!--dashbaord end-->
            <!--sidebar end-->
        </div>
        <!--side bar end-->
        <!--another side-->
        <div class="side-body">
            <div class="grid-contain">
                <div class="grind1">
                    <div class="grindimg"><i class="fas fa-user" ></i></div>
                    <div class="grindtxt"><h2>job</h2><br><h6>haha</h6></div>
                </div>
            </div>
            <div class="grid-contain">
              <div class="grind1">
                  <div class="grindimg"><i class="fas fa-user"></i></div>
                  <div class="grindtxt"><h2>job</h2><br><h6>haha</h6></div>
              </div>
           </div>
          <div class="grid-contain">
            <div class="grind1">
                <div class="grindimg"><i class="fas fa-user"></i></div>
                <div class="grindtxt"><h2>job</h2><br><h6>haha</h6></div>
            </div>
        </div>
        
      <!--another side end-->
    </div>
</div>
      <!--body end-->
      <!--script-->
      <script>
        /*top-navbar navbar script*/
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      /*navabar script end*/
      /*navbar script*/
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      /*navabar script end*/
      </script>



</div>



    <style>
        body 
        {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        /*top nav bar*/
        .top {
        overflow: hidden;
        background-color: #333;
        }

        .top a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 10px 12px;
        text-decoration: none;
        font-size: 13px;        
        }
        .side a{
          float:right;
        }

        .top a.active {
        background-color: #242524;
        color: white;
        }

        .top .icon {
        display: none;
        }

        @media screen and (max-width: 600px) {
        .top a:not(:first-child) {display: none;}
        .top a.icon {
        float: right;
        display: block;
        }
        }

        @media screen and (max-width: 600px) {
        .top.responsive {position: relative;}
        .top.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
        }
        .top.responsive a {
        float: none;
        display: block;
        text-align: left;
        }
        }
        /*top nav bar end*/
        /*nav-bar*/

        .topnav {
        overflow: hidden;
        background-color: #333;
        }

        .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 16px 16px;
        text-decoration: none;
        font-size: 17px;
        }
        .side a{
          float:right
        }

        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        .topnav a.active {
        background-color: #242524;
        color: white;
        }

        .topnav .icon {
        display: none;
        }

        @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
        float: right;
        display: block;
        }
        }

        @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
        }
        .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
        }
        }       
        /*nav-bar end*/
        /*main body*/
        .main-body{
            width:100%;
            height:100%;
            grid-template-columns: 25% 75%;
            display: grid;
            grid-gap: 5%;

        }
        /*sidebar*/
        .side-bar{
            width:100%;
            height:100%;
        }
        /*profile*/
        .prof{
            margin-top:2%;
            margin-left: 2%;
            width:98%;
            height:100%;
            color:black;
            position:relative;
        }
        .prof a{
            color:black;
        }
        .prof h6{
            position : absolute;
            top:0%;
            left:80%;
            text-decoration: none;
            font-weight: normal;
            font-size: x-small;

        }
        .prof_pic img{
            border-radius: 50%;
            width:50%;
            position: absolute;
            top:28%;
            left:25%;
        }
        .prof_name
        {
            text-align: center;
        }
        .prof_name h6{
            font-weight: normal;
            font-size: x-small;
        }
        progress{
            padding-top: 10%;
            width:100%;
            color:black;
        }
        /*profile end*/
        /*dashbiard*/
        .dashboard{
        overflow: hidden;
        background-color: #333;
        }

        .dashboard a {
        display: block;
        color: #f2f2f2;
        padding: 16px 16px;
        text-decoration: none;
        font-size: 17px;
        width:100%;
        }
        .side a{
          float:right
        }

        .dashboard a:hover {
        background-color: #ddd;
        color: black;
        }

        .dashboard a.active {
        background-color:#42413d;
        color: white;
        }

        .dashboard .icon {
        display: none;
        }

        /*dashboard end*/
        /*sidebar end*/
        /*sidebody*/
        .side-body{
          height:auto;
          width:100%;
        }
        /*sidebody end*/
        /*sidebody ko grid*/
        .grid-contain {
            display: grid;
            height: 20%;
            width:31%;
            float:left;
            margin-left: 1%;
            }

        .grid-contain > div {
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
            height:100%;
            width:100%;
        }
        /*sidebody ko grid sakyo*/
        /*sidebody ko vitra grind*/
        .grind1
        {
          width:100%;
        }
        .grindimg{
          height:100%;
          width:50%;
          float:left;
          background-color: green;
          text-align: center;
         }
        .grindtxt{
          height:100%;
          width:50%;
          float:right;
          background-color:whitesmoke;
        }
        /*sidebody ko vitra grind sakyo*/
        /*main body end*/
        
    </style>
@endsection




</body>
</html>