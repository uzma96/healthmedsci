@extends('journal.layout')

@section('content')
    <div class="agileits_w3layouts_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29213.89233648214!2d90.41723130000001!3d23.7567726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1494185221704" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="w3_agileits_keep_touch">
        <div class="container">
            <div class="col-md-4 w3_agileits_keep_touch_left">
                <div class="wthree_keep_touch">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p>(+000) 123 456 345</p>
            </div>
            <div class="col-md-4 w3_agileits_keep_touch_left">
                <div class="wthree_keep_touch">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <p>3432 Main Street, ASE Lorance, <span>2 New York City, USA</span></p>
            </div>
            <div class="col-md-4 w3_agileits_keep_touch_left">
                <div class="wthree_keep_touch">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <a href="mailto:info@trademarket.com">info@trademarket.com</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <h3>Contact Us</h3>
            <div class="agile_contact_grids">
                <form action="#" method="post">
                    <div class="col-md-6 wthree_contact_left_grid">
						<span class="input input--kuro">
							<input class="input__field input__field--kuro" type="text" id="input-7" placeholder=""
                                   required="">
							<label class="input__label input__label--kuro" for="input-7">
								<span class="input__label-content input__label-content--kuro">Name</span>
							</label>
						</span>
                        <span class="input input--kuro">
							<input class="input__field input__field--kuro" type="email" id="input-8" placeholder=""
                                   required="">
							<label class="input__label input__label--kuro" for="input-8">
								<span class="input__label-content input__label-content--kuro">Email</span>
							</label>
						</span>
                        <span class="input input--kuro">
							<input class="input__field input__field--kuro" type="text" id="input-9" placeholder=""
                                   required="">
							<label class="input__label input__label--kuro" for="input-9">
								<span class="input__label-content input__label-content--kuro">Subject</span>
							</label>
						</span>
                    </div>
                    <div class="col-md-6 wthree_contact_left_grid">
                        <textarea name="Message" placeholder="Message..." required=""></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@stop