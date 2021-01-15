    <div class="futsal_header">
        <div class="container-fluid">
            <div class=" d-flex justify-content-end">
                <div class="d-flex flex-column">

                @if(Auth::user())
                @if (auth()->user()->u_role_id==3)

                    <h1 class="heading-1">Book A Futsal NOW !!<br> and start your futsal plan going with <span style="color: #d82958">Futsal_ma</span></h1>
                    <p class="para" >Get your friends connected with the internet and innovation. Get exlusive feature becoming your futsal player !! </p>
                    
                @elseif (auth()->user()->u_role_id==1)
                    <h1 class="heading-1">What's up Super Admin !!<br> Hope you are doing good... <span style="color: #d82958">Futsal_ma</span></h1>
                    <p class="para" >Manage your futsal_ma system more efficiently and faset with just one click !! </p>

                @elseif (auth()->user()->u_role_id==2)
                    <h1 class="heading-1">Register your Futsal !!<br> and get your booking started with <span style="color: #d82958">Futsal_ma</span></h1>
                    <p class="para" >Get your futsal connected with the internet and innovation. Get exlusive feature becoming your futsal admin !! </p>
                @endif

            @else

            <h1 class="heading-1">Register your Futsal !!<br> and get your booking started with <span style="color: #d82958">Futsal_ma</span></h1>
                    <p class="para" >Get your futsal connected with the internet and innovation. Get exlusive feature becoming your futsal admin !! </p>

            @endif
                    
                   

            @if(Auth::user())
                @if (auth()->user()->u_role_id==3)

                    <a href="{{ URL::to('futsalbooking') }}">
                    <input type="button" value="Book a Futsal" class="btn btn-primary"></a>

                    <a href="{{ URL::to('playerdashboard') }}">
                    <input type="button" value="Player Dashboard" class="btn btn-success"></a>
                    
                @elseif (auth()->user()->u_role_id==1)
                    <a href="{{ URL::to('superdashboard') }}">
                    <input type="button" value="Super Dashboard" class="btn btn-success"></a>

                @elseif (auth()->user()->u_role_id==2)
                    <a href="{{ URL::to('futsaldashboard') }}">
                    <input type="button" value="Futsal Dashboard" class="btn btn-success"></a>
                @endif

            @else

            <a href="{{ URL::to('loginfutsal') }}">
            <input type="button" value="Login to your Fustal" class="btn btn-success"></a>

             <a href="{{ URL::to('registerfutsal') }}">
            <input type="button" value="Register your Futsal" class="btn btn-danger"></a>

            @endif
                    
                </div>

            </div>
        </div>
    </div>


<style>
        
.futsal_header .container-fluid{
    background-image: url("{{ asset('/image/futsal_header.jpg') }}");
    background-size: cover;
    background-attachment: fixed;
}
.futsal_header .heading-1{
    margin-top: 15%;
    margin-bottom: 4%;
    font-family: "Righteous";
    width: 80%;
    color: #d18523;
}
.futsal_header .para{

    width: 80%;
    font-size: 16px;
    font-family: 'Ubuntu';
    text-align: center;
    color: #d18523;
    margin-bottom: 8%;

}
.futsal_header .btn{
    margin-bottom: 2%;
    margin-left: 16%;
    width: 50%;
    padding: 2% 5%;
}

</style>


