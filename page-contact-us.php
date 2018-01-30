<?php $page_name = "contact-us" ?>
<?php include('header.php'); ?>

<section class="hero">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="hero-title">Get in touch</div>
                    <p class="hero-text">We'd love to hear from you</p>
                </div>
                <div class="col-md-7">
                    <img class="img-responsive hero-img right" src="images/hero-contact.png" width="578">
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Want to learn more about or new and exclusive FastTrack Nationally recognised Diploma in Health and Social Care</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lets-talk">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">Want to learn more?<br><b>Let's talk!</b></div>
                <div class="extra-info">
                    <p>Call 03301170175 </p>
                    <p>Or send us a message</p>
                </div>
                <div class="info-bottom">
                    <div class="heading">Book a 15 Minute Chat!</div>
                    <p>Get the clarity you need.</p>
                    <a href="#" class="btn green">Book a time to chat</a>
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <input type="text" class="form-control" name="name" id="name-field" placeholder="Name"> 
                    <input type="text" class="form-control" name="care" id="care-field" placeholder="Care Home"> 
                    <input type="number" class="form-control" name="number" id="number-field" placeholder="Contact Number"> 
                    <input type="email" class="form-control" name="email" id="email-field" placeholder="Email"> 
                    <textarea type="textarea" class="form-control" name="message" placeholder="Message"></textarea>
                     <button type="submit" value="submit" name="submit" class="btn purple right">Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>