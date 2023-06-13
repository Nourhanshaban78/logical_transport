
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>

       
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                    @foreach ($data as $data)
                        <div class="single_service">
                       
                            <div class="thumb">
                                <img height="400" width="500" src="transimage/{{$data->image}}" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">{{$data->name}}</a></h3>
                                <p>{{$data->Speciality}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
       
    </div>