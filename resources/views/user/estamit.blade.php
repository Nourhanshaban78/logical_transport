<div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get free Estimate</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing.</p>
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="{{url('estimate')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select name="type" class="wide" >
                                            <option data-display="Product type" >Product type</option>
                                            <option value="small">small</option>
                                            <option value="standard">standard</option>
                                            <option value="high">high</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select name="size"  class="wide" >
                                            <option data-display="Product size">Product size</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">Xl</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select  name="city" class="wide" >
                                            <option data-display="City of departure">City of departure</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Medrid">Medrid</option>
                                            <option value="Beijing">Beijing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select name="delivery" class="wide" >
                                            <option data-display="Delivery city" >City of departure</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Roma">Roma</option>
                                            <option value="Paris">Paris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="submit">Send Estimate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>