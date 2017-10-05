<?php /*Template Name: user profile*/?>
<?php get_header(); ?>
<div class="recycling-form">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3 class="title">Product Form</h3>
        <hr class="line1">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Seller Information</a></li>
    <li role="presentation"><a  href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Product Information and Recieving Money</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
       <div class="row">
               <div class="col-md-6">
                 <label for="seller-name">
                   Name :
                 </label>
                 <input type="text" name="seller-name" placeholder="Your Name">

                 <label for="saler-number-phone">
                   Mobile Number :
                 </label>
                 <input type="number" name="saler-number-phone" placeholder="0097259xxxxxxx">

                 <label for="address">
                   Your Address :
                 </label>
                 <select name="address" class="dropdown">
                   <option value="gaza" class="gaza-option">Gaza Strip</option>
                   <option value="west-bank" class="west-bank-option">West Bank</option>
                 </select>

                 <fieldset class="province">
                 <label for="province">
                  province :
                 </label>
                 <input type="text" name="province" placeholder="province">
                 </fieldset>
               </div>
               <div class="col-md-6">
                 <img src="<?php echo get_theme_file_uri('/assets/images/user-profile/1.jpg'); ?>" class="img-responsive right-img">
               </div>
             </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <div class="row">
               <div class="col-md-6">
                <fieldset>
                <label for="product-category">
                   Category :
                 </label>
                 <select name="product-category" class="dropdown">
                   <option value="mobile">Mobile</option>
                   <option value="labtop">Labtop</option>
                   <option value="tablet">Tablet</option>
                 </select>
                 </fieldset>

                 <fieldset>
                 <label for="product-name">
                    Name :
                 </label>
                 <input type="text" name="product-name" placeholder="Product Name">
                 </fieldset>

                 <fieldset>
                 <label for="product-price">
                    Price :
                 </label>
                 <input type="text" name="product-price" placeholder="0$">
                 </fieldset>

                 <fieldset>
                <label for="product-color">
                    Color :
                 </label>
                 <select name="product-color" class="dropdown">
                   <option value="black">Black</option>
                   <option value="silver">Silver</option>
                   <option value="gold">Gold</option>
                   <option value="blue">Blue</option>
                   <option value="weight">Weight</option>
                   <option value="red">Red</option>
                   <option value="other">Other</option>
                 </select>
                 </fieldset>

                 <fieldset>
                <label for="type-of-screen">
                   Type Of Screen :
                 </label>
                 <select name="type-of-screen" class="dropdown">
                   <option value="with-touch">With Touch</option>
                   <option value="with-out-touch">With Out Touch</option>
                 </select>
                 </fieldset>

                 <fieldset>
                <label for="storage">
                   Storage :
                 </label>
                 <select name="storage" class="dropdown">
                 <option value="4G" >4 G-byte</option>
                 <option value="8G">8 G-byte</option>
                 <option value="16G">16 G-byte</option>
                 <option value="32G">32 G-byte</option>
                 <option value="64G">64 G-byte</option>
                 <option value="128G">128 G-byte</option>
                 <option value="132G">132 G-byte</option>
                 <option value="up-to">Up to 132 G-byte</option>
                 </select>
                 </fieldset>

                 <fieldset>
                   <label for="description">
                     Description about the product :
                   </label>
                   <textarea name="description" placeholder="Product Description">
                   </textarea>
                 </fieldset>

                 <p class="note">
                   <b>Note : </b>Enter your mobile description (Cover status - Ram - Camera accurancy - Pattery status - SIM).
                 </p>
               <h5 class="choose">Choose your way to receiving money :</h5>
               <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/user-profile/cash.png') ?>" class="img-responsive reciving-way"></a>
               <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/user-profile/pay-pal.png') ?>" class="img-responsive reciving-way"></a>
               <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/user-profile/visa.png') ?>" class="img-responsive reciving-way"></a>
               <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/user-profile/master.ico') ?>" class="img-responsive reciving-way"></a>
               <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/user-profile/bank-transfer.png')?>" class="img-responsive reciving-way"></a>
               <input type="submit" value="Submit" name="submit" class="submit sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">
               </div>
               <div class="col-md-6">
                 <img src="<?php echo get_theme_file_uri('/assets/images/user-profile/1.jpg'); ?>" class="img-responsive right-img">
               </div>
             </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>

<?php get_footer(); ?>