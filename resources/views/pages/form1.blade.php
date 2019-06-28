@extends('layouts.app')
<link href="{{asset('css/loan2.css')}}" rel="stylesheet" />
@section('content')

<!--background-->
    <h1>Fomu Ya Mzunguuko</h1>
    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Taarifa Za Mpokeaji</h2>
            <div class="book-form agileits-login">
            <form action="{{route('receive.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="agileits_reservation_grid">
                        <div class="phone_email" style="">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="name" placeholder="Jina Kamili La mpokeaji " required="">
                            </div>
                        </div>
                        <div class="span1_of_1">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <select id="country" name="sex" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="">Jinsia :</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female </option>
    
                                </select>
                            </div>
                        </div>
                        <!--
                            <div class="span1_of_1 phone_email1">
                                <div class="book_date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <input id="datepicker" name="Text" type="text" value="" placeholder="Tarehe Ya Kupokea  " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
    
                                </div>
                            </div>
    
    -->
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Barua Pepe" required="">
                            </div>
                        </div>
                        <div class="phone_email" style="">
                            <div class="form-text">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" name="simu" placeholder="Namba Ya Simu " required="">
                            </div>
                        </div>


                        <div class="span1_of_1 phone_email">
                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker1" name="tarehe_kupokea" type="text" value=""
                                    placeholder="Tarehe Ya Kupokea Pesa" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
    
                            </div>
                        </div>

    
    

                        <div class="phone_email" style="">
                            <div class="form-text">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                                <input type="text" name="hela" placeholder="Kiasi cha Pesa  " required="">
                            </div>
                        </div>
                        <div class="phone_email" style="">
                            <div class="form-text">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <input type="text" name="eneo_analoishi" placeholder="Eneo unaloishi " required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="text" name="muda_kuishi" placeholder="Umeishi Kwa Mda Gani" required="">
                            </div>
                        </div>
    
                        <div class="phone_email" style="">
                            <div class="form-text">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <input type="text" name="eneo_analoishi" placeholder="Eneo unaloishi " required="">
                            </div>
                        </div>


                        <div class="span1_of_1" style="">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <select id="country" name='makazi' onchange="change_country(this.value)" class="frm-field required">
                                    <option >Umiliki Wa Makazi </option>
                                    <option value="Kwako">Kwako </option>
                                    <option value="Umepanga">Umepanga </option>
    
                                </select>
                            </div>
    
                        </div>
                        <div class="span1_of_1" style="">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <select id="country" name="njia_kupokea" onchange="change_country(this.value)" class="frm-field required">
                                    <option >Njia Ya Kupokea Pesa</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Account">Account </option>

                                </select>
                            </div>

                        </div>

                        <div class="wrapper">
                            <div class="cmd">
                                <div class="title-bar">Maelezo Mengine </div>
    
                                <textarea class="textarea" name="mengine" placeholder="Mengine Eleza Hapa ......."></textarea>
                            </div>
                        </div>



                        <div class="clear"></div>
    
                        <div class="clear"></div>
                    </div>
    
                    <div class="clear"></div>
              
            </div>
    
        </div>
    
        <!--        another form -->
        <div class="book-appointment">
            <h2>2:Uongozi</h2>
            <div class="book-form agileits-login">
               
                    <div class="agileits_reservation_grid">
                        <div class="phone_email" style="">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="jina" placeholder="Jina Kamili " required="">
                            </div>
                        </div>
    
    
    
    
                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="cheo" placeholder="Cheo" required="">
                            </div>
                        </div>
                        <div class="span1_of_1 phone_email">
                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker1" name="tarehe" type="text" value="" placeholder="Tarehe "
                                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                                    required="">
    
                            </div>
                        </div>


                        <div class="span1_of_1 phone_email">
                            <div class="book_date">
                               <button type="submit" class="btn btn-primary">Submit Button</button>
                            </div>
                        </div>






                        <div class="clear"></div>
    
                        <div class="clear"></div>
                    </div>
    
                    <div class="clear"></div>
                </form>
            </div>
    
        </div>
    
    
    
    </div>



    <!-- testimonial-plugin -->
    <script src="{{asset('js/mislider.js')}}"></script>
    <script>
        jQuery(function($) {
                var slider = $('.mis-stage').miSlider({
                    //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                    stageHeight: 320,
                    //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                    slidesOnStage: false,
                    //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                    slidePosition: 'center',
                    //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                    slideStart: 'mid',
                    //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                    slideScaling: 150,
                    //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                    offsetV: -5,
                    //  Center slide contents vertically - Boolean. Default: false
                    centerV: true,
                    //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                    navButtonsOpacity: 1,
                });
            });
    </script>
    <!-- //testimonial-plugin -->
    <!-- numscroller-js-file -->
    <script src="{{asset('js/numscroller-1.0.js')}}"></script>
    <!-- //numscroller-js-file -->
    <!-- smooth scrolling -->
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth scrolling -->
    <!-- move-top -->
    <script src="{{asset('js/move-top.js')}}"></script>
    <!-- easing -->
    <script src="{{asset('js/easing.js')}}"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="{{asset('js/Gold Stone.js')}}"></script>

@endsection