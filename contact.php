<?php 
$page = 'contact';
include('inc/header.php')?>

<section id="contact_form" class="clearfix">
    <div class="container">
        <h3 class="l-heading">
            <span class="text_primary">Contact </span>Us
        </h3>
        <form action="contact.php" method="post">
            <div class="form_group">
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div class="form_group">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div class="form_group">
                <label for="">Name</label>
                <textarea name="mesage" id="" cols="30" rows="20"></textarea>
            </div>
            <input type="submit" name="submit" value="Message Us">
        </form>
    </div>
</section>

<section id="contact_info" class="clearfix">
    <div class="container">
        <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h3> Location</h3>
            <p>891 Layman Court, Atlanta GA 30328</p>
        </div>
        <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h3>Phone Number</h3>
            <p>(678)-322-5600</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope fa-3x"></i>
            <h3>Email Address</h3>
            <p>revelhotelresort@gmailc.om</p>
        </div>
    </div>
</section>

<?php include('inc/footer.php')?>
