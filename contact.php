<?php include 'includes/header.php' ?>

<div class="page-title">
	<div class="page-title2">
		<h1>Contact</h1>
	</div>
</div>

<div class="contact group">
<div class="container">
	<div class="grid-half">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6107.8523282660135!2d-76.28453716264649!3d40.054748651541765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c624a63f01816f%3A0xffa6e5b146f26571!2s1038+New+Holland+Ave%2C+Lancaster%2C+PA+17601!5e0!3m2!1sen!2sus!4v1424196944657" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="grid-half  contact-form">
 <form action="contact-proc.php" method="post" class="contact-form" name="contact-form" id="contactForm">
              <div><label>Name:</label><span class="fa fa-user"></span><input name="name" type="text" placeholder="John Doe" required></div>
              <div><label>Email:</label><span class="fa fa-envelope"></span><input name="email" type="email" placeholder="example@gmail.com" required></div>
              <div><label>Phone:</label><span class="fa fa-phone"></span><input name="phone" type="text" onKeyPress="javascript:return maskInput(this.value,this,'3,7','-');" onblur="javascript:return maskInput(this.value,this,'3,7','-');" maxlength="12" placeholder="xxx-xxx-xxxx" required></div>
              <div><label>Company:</label><span class="fa fa-building"></span><input name="company" type="text" placeholder="Martin CFS" required></div>
              <div class="text-area"><label>Message:</label><textarea name="message" placeholder="We look forward to hear from you!" ></textarea></div>
              <div class="captcha"><label>Security:</label><span class="fa fa-lock"></span><input type="captcha" name="captcha" placeholder="xxxx" captcha /><img class="captcha-img" src="/img/captcha.png" alt="Captcha" /></div> 
              <div class="message"><div class="alert"></div></div> 
              <input class="submit" type="submit" name="submit" value="Submit">
            </form>
	</div>
	</div>
</div>

<div class="image-container group">
<div class="container group"  id="owl-demo2">
	<div class="item"><img src="img/office-relocation-1.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/office-relocation-2.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/office-relocation-3.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/office-relocation-4.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/it-relocation-1.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/it-relocation-2.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/warehouse-3.jpg" alt="Office Relocation"></div>
	<div class="item"><img src="img/warehouse-4.jpg" alt="Office Relocation"></div>
</div>
</div>

<?php include 'includes/footer.php' ?>