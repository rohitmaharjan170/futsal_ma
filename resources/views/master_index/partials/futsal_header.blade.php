    <div class="futsal_header">
        <div class="container-fluid">
            <div class=" d-flex justify-content-end">
                <div class="d-flex flex-column">
                    <h1 class="heading-1">Register your Futsal !!<br> and get your booking started with <span style="color: #d82958">Futsal_ma</span></h1>
                    <p class="para" >Enjoy your day with fast internet  served with a cup of Coffee </p>
                    @if(Auth::user())
                    <a href="{{ URL::to('reserv/') }}">
                    <input type="button" value="Reservation: Book a Table" class="btn btn-danger"></a>
                    @else
                    <input disabled type="button" value="Login first to make a Reservation" class="btn btn-danger">
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
    color: #d18523;
    margin-bottom: 8%;

}
.futsal_header .btn{
    margin-bottom: 15%;
    margin-left: 10%;
    width: 50%;
    padding: 2% 5%;
}

</style>


