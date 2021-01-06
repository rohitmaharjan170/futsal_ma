    <div class="futsal_header">
        <div class="container-fluid">
            <div class=" d-flex justify-content-end">
                <div class="d-flex flex-column">
                    <h1 class="heading-1">Register your Futsal !!<br> and get your booking started with <span style="color: #d82958">Futsal_ma</span></h1>
                    <p class="para" >Get your futsal connected with the internet and innovation. Get exlusive feature becoming your futsal admin !! </p>
                   

            @if(Auth::user())
                @if (auth()->user()->u_role_id==3)

                    <input disabled type="button" value="You are logged in as Player !!" class="btn btn-danger">

                    <input disabled type="button" value="You are logged in as Player !!" class="btn btn-danger">
                    
                @elseif (auth()->user()->u_role_id==1)
                    <input disabled type="button" value="You are logged in as Super Admin !!" class="btn btn-danger">

                    <input disabled type="button" value="You are logged in as Super Admin !!" class="btn btn-danger">

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


