@extends('layouts.app')

@section('title', 'Our Programs')

@section('content')
<div class="container-fluid">
        <div class="row"><br></div>
        <div class="row types-of-programs justify-content-center">
            <div class="col-10">
                <h5 class="program-header">Our Programs</h5>
                <p class="programs-intro">ORCA Rowing partners with <a href="http://www.usrowing.org/freedom-rows/"
                        target="_blank">Freedom Rows </a> to provide disabled veterans an
                    opportunity to learn to rows or get back out on the water. We have been working with Freedom Rows
                    from our inception and we are happy to be able to offer veterans in our community a discounted
                    monthly membership rate as well as grants to participate in regattas all around the United States.
                </p>
                <p class="programs-intro">We have a wide variety of veterans that row with us ranging from able bodied
                    rowers all the way to
                    double amputees. Serving our veterans is a cause that is close to our heart and we want to give
                    everyone the ability of getting out on the water! If you have any questions about our program,
                    please feel free to <a href="/contact">contact us</a>.</p>
                <p class="programs-intro"> In addition to our Veterans program, we also have recreational and
                    competitive Masters rowing. Our
                    crew currently supports novice rowers all the way up to rowers training for the Paralympics!
                    Each member will be grouped with other individuals at the same skill level. Novice and recreational
                    rowers will be paired with other individuals who are novice rowers, so our other more experience
                    rowers can continuously train at a high level. </p>
                <p class="programs-intro">Scheduled practice times will be Monday and Wednesday at 5:30am and Saturday
                    at 8:00am. All other
                    practices will need to be cleared with a board member.</p>
                </p>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-2">
                <div class="card bg-dark" style="width: 13rem;height: 100px">
                    <div class="card-body">
                        <h5 class="card-title">Master's Program</h5>
                        <p class="card-text">$50.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-dark" style="width: 13rem;height: 100px">
                    <div class="card-body">
                        <h5 class="card-title">Veteran's Program</h5>
                        <p class="card-text">$30.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-dark" style="width: 13rem;height: 100px">
                    <div class="card-body">
                        <h5 class="card-title">Adaptive Program</h5>
                        <p class="card-text">$50.00/month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><br></div>
        <div class="row"><br></div>
    </div>
@endsection
