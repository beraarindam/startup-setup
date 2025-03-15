@php 
    $url = Request::segment(1);
@endphp
<form method="post" class="contact-validation-active" id="contact-form-main">
    <div class="row">
        <div class="col col-lg-12 col-md-6 col-12 mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
        </div>
        <div class="col col-lg-12 col-md-6 col-12 mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
        </div>
        <div class="col col-lg-12 col-12 mb-3">
        <select name="service" class="form-control">
            <option value="website-design" @if($url == 'website-design') selected @endif>Website Design</option>
            <option value="website-development" @if($url == 'website-development') selected @endif>Website Development</option>
            <option value="e-commerce" @if($url == 'e-commerce') selected @endif>E-Commerce</option>
            <option value="ui-ux" @if($url == 'ui-ux') selected @endif>UI/UX</option>
            <option value="wordpress-development" @if($url == 'wordpress-development') selected @endif>WordPress Development</option>
            <option value="website-maintenance" @if($url == 'website-maintenance') selected @endif>Website Maintenance</option>
        </select>

        </div>
        <div class="fullwidth col col-lg-12 col-12 mb-3">
            <textarea class="form-control" name="note" id="note" placeholder="Message..."></textarea>
        </div>
    </div>
    <div class="submit-area">
        <button type="submit" class="theme-btn-s2" style="width:100%;">Send Massege</button>
        <div id="loader">
            <i class="ti-reload"></i>
        </div>
    </div>
    <div class="clearfix error-handling-messages">
        <div id="success">Thank you Massage Sended</div>
        <div id="error"> Error occurred while sending email. Please try again
            later. </div>
    </div>
</form>
