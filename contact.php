<?php 
$page = 'contact';
include('inc/header.php')?>

<section id="contact_form">
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
                <textarea name="mesage" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" name="submit" value="Message Us">
        </form>
    </div>
</section>


<?php include('inc/footer.php')?>
