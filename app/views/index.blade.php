@extends('layout')

@section('content')

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">DEPOT WAREHOUSE Software</h1>
        <p class="splash-subhead">
            Software that handles the junk, so you can get back to doing cool things
        </p>
    </div>
</div>


<div class="content-wrapper">
    <a id="about" class="anchor"></a>
    <div class="content section-1">
        <h2 class="content-header is-centered">What we do</h2>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-3">
                <h3 class="content-subhead">Write beautiful code</h3>
                <p>
                    We hope we have a long-lasting relationship with you, but if you ever hire on another developer
                    they'll be overjoyed with the quality of the codebase they received. We write solid, testable
                    code to make changes and feature additions a breeze.
                </p>
            </div>
	    <div class="l-box pure-u-1 pure-u-md-1-3">
                <h3 class="content-subhead">Testing</h3>
                <p>
			You wouldn't buy a car that hasn't had safety testing, you wouldn't purchase prescription drugs
			that haven't had clinical trials, so why would you use software that isn't proven to work? All
			software we build is tested to ensure correctness and efficiency.
                </p>
            </div>
	<div class="l-box pure-u-1 pure-u-md-1-3">
                <h3 class="content-subhead">End-to-end Web</h3>
                <p>
			Often clients don't simply need a web site, or blog. They need an ecosystem of software to enable
			them to do what they want. Whether that's a full API and OAuth2 implementation to integrate with
			third party applications, native mobile apps for better ease of use, or admininstration interfaces
			to easily control your data, we've got you covered.
                </p>
            </div>

        </div>
    </div>

    <div class="content section-2">
        <a id="contact" class="anchor"></a>
        <h2 class="content-header is-centered">
            <i class="fa fa-envelope"></i>
            Drop us a line
        </h2>

        <div class="l-box-lrg is-centered">
           <h2>Send an email to <a href="mailto:troy@depotwarehouse.net">
			troy@depotwarehouse.net</a></h2> 
    </div>
</div>

    <div class="footer l-box is-centered">
        &copy; DEPOT WAREHOUSE Software Inc. 2014
    </div>
</div>

@stop
