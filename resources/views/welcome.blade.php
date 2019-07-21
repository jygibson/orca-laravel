
@extends('layouts.app')

@section('title','Orlando Rowing Community Association')


        @section('content')

            <div class="container-fluid">
                    <div class="row">
                        <div class="col header">
                            <h1 id="orca-title"> Orlando Rowing Community Association</h1>
                            <h3 id="orca-subtitle"> Rising with the sun since 2018</h3>
                        </div>
                    </div>
                    <div class="row"><br></div>
                    <div class="row"><br></div>
                    <div class="row justify-content-center no-gutters">
                        <div class="col-4">
                            <img id="crest" src="{{ asset('css/images/LOGO FINAL 1.1.jpg') }}">
                        </div>
                        <div class="col-4 about">
                            <p> Welcome to the Orlando Rowing Community Association (ORCA), where we have been rising and rowing with the
                                sun since 2018. ORCA Rowing is a Masters (adult) rowing club that is dedicated to providing a safe, fun, and exciting rowing experience for everyone.</p>
                               <a href="/programs"><button class="btn learn-more-btn btn-outline-warning my-2 my-sm-0" type="submit">Learn More About Our Programs</button></a>

                        </div>
                    </div>
                </div>

                </div>
        @endsection

