@extends('_includes._main')
@section('content')


        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="title">
                        <h1>WATER HEATING SYSTEMS</h1>
                    </div>
                    <ul class="bread-crumb clearfix pull-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Services</li>
                        <li>WATER HEATING SYSTEMS</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-details -->
        <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">  
                <div>
                 We provide both flat plate and evacuated tube solar water heating systems to meet both individual and commercial hot water requirements. Our systems are sourced from high standardized European markets and are supported by local highly trained technical workforce for installation and maintenance services.
                <br>
                These systems enables one to save up 70% of water heating electricity bills using free heat energy from the sun.
                <br>
                 </div>  
                    <div class="col-lg-6 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar default-sidebar">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h5>Main Services</h5>
                                    <div class="icon-box"><img src="assets/images/icons/icon-54.png" alt=""></div>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="{{url('led')}}" class="current"><i class="fas fa-angle-right"></i><span>Led Lighting Solutions</span></a></li>
                                        <li><a href="{{url('inverter')}}"><i class="fas fa-angle-right"></i><span>Inverter Power Backup Systems</span></a></li>
                                        <li><a href="{{url('heater')}}"><i class="fas fa-angle-right"></i><span>Water Heating Systems</span></a></li>
                                        <li><a href="{{url('solar')}}"><i class="fas fa-angle-right"></i><span>Solar Power Systems</span></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget downloads-widget">
                            <figure class="main-image"><img src="assets/images/Flat-plate-solar-water-heating-system.png" alt=""></figure>
                                
                            </div>
                            <div class="sidebar-content">
                            <figure class="main-image"><img src="assets/images/Evacuated-tube-solar-water-heating-system.png" alt=""></figure>
                            <div class="content-one">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <figure class="main-image"><img src="assets/images/service/service-15.jpg" alt=""></figure>
                            <div class="content-one">
                                <div class="text">
                                    <h2>Flat plate solar water heating system</h2>
                                    <p>
                                    Flat-plate collectors capture the energy from the sun. There are different designs, but for the most part they use heat transfer fluid. Once cold water has been collected in the storage tank, the flat-plate collector starts looping the fluid through the cold water and heats it up.<br>
                                    <br>
                                    But this only happens after the radiation energy has been transformed into thermal energy through the collector. After the fluid has been heated it will start to circulate. The collector plate consists of a copper sheet and tubing. The surface is coated with a dark material, specifically to increase absorbency efficiency.

                                    The collector is also very well insulated in order to prevent heat from escaping.</p>
                                    
                                </div>
                            
                            </div>
                            <div class="content-two">
                                <div class="text">
                                    <h3>Evacuated tube solar water heating system (pressurized and non-pressurized)</h3>
                                    <p>Evacuated tube comprises of a smaller glass tube suspended within a larger glass tube. The air is then pumped out of the space between the small inner tube and the larger outer tube creating a vacuum thermal insulation layer. This vacuum layer is absolutely key since it reduces heat loss from the solar collector.
                                    <br>
                                    An absorber plate absorbs the heat and transfers it to a heat transfer fluid. In passive systems, convection drives the movement of the heating fluid around the solar collector, when the transfer liquid gets heated it evaporates and turns to steam.
                                    <br>
                                    This rises to the top of the evacuated tube solar collector the heat is transferred via a heat exchanger, the transfer liquid, having given up its heat to the heat exchanger then condenses and falls back down the evacuated tube where the process can start again</p>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        @endsection
