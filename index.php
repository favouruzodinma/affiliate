<?php include_once('header.php');

    function LimitText($text,$limit, $dot=' ...'){
        if(str_word_count($text, 0)>$limit){
            $word = str_word_count($text, 2);
            $pos = Array_keys($word);
            $text=substr($text, 0 , $pos[$limit]). $dot;
        }
    return $text;
    }
?>
<body>

<div class="navbar-area sticky-top">

<div class="mobile-nav">
<a href="index.php" class="logo">
<img src="assetss/img/logo-two.png" alt="Logo">
</a>
</div>

<div class="main-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.php">
<img src="assetss/img/logo.png" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">

<li class="nav-item">
<a href="#become an affiliate" class="nav-link dropdown-toggle">Become An Affiliate <i class="icofont-simple-down"></i></a>
</li>
<li class="nav-item">
<a href="#become a publisher" class="nav-link dropdown-toggle">Earn As a Publisher <i class="icofont-simple-down"></i></a>
</li>
<li class="nav-item">
<a href="#testimonies" class="nav-link">Testimonies</a>
</li>
<li class="nav-item">
<a href="#FAQ" class="nav-link">F.A.Q</a>
</li>
</ul>
</div>
<div class="side-nav">
<a class="donate-btn" href="./admin/web/login.php">
Admin
<i class="icofont-sign-in"></i>
</a>
</div>
</nav>
</div>
</div>
</div>


<div class="banner-area">
<div class="d-table">
<div class="d-table-cell">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="banner-content">
<h1>We Distribute High Value Digital Products
</h1>
<p>Let our network of high performing affiliates help you connect with millions of paying customers.</p>
<div class="banner-btn-area">
<a class="common-btn" href="#">Get Start A Fundraising</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="about-area pt-100 pb-70">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="about-img">
    <img src="affiliate marketin.jpeg" alt="About">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="about-content">
    <div class="section-title">
    <!-- <span class="sub-title">About us</span> -->
    <h2>What Is Affiliate Marketing?</h2>
    </div>
    <span class="about-span">Affiliate marketing is an advertising method used by brands to attempt to mitigate wasteful spending in their marketing budget. It can be frustrating for a business to pay thousands for clicks or impressions only to win a handful of customers..</p>
    <div class="about-btn-area">
    <a class="common-btn" href="#">Get Started</a>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="about-area pt-100 pb-70">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="about-content">
    <div class="section-title">
    <!-- <span class="sub-title">About us</span> -->
    <h2>How to Get Started With Affiliate Marketing</h2>
    </div>
    <span class="about-span">If you’ve ever bought something an influencer recommended online, you’ve come across an affiliate marketing business. Online creators often build partnerships with brands to promote its products and services. In return, they earn a commission for each sale. .</p>
    <div class="about-btn-area">
    <a class="common-btn" href="#">Get Started</a>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
        <div class="about-img">
        <img src="affiliate marketing.png" alt="About">
        </div>
        </div>
    </div>
    </div>
</div>
    

<section id="become an affiliate"  class="dream-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">Fulfill our dream</span>
<h2>Some Affiliate Courses Listed On Our Platform.</h2>
</div>
<div class="row">
<?php
$sql = $conn->query("SELECT * FROM affiliate_course");
if($sql->num_rows>0){
            $num=1;
while($row=$sql->fetch_assoc()){ ?>
<div class="col-sm-6 col-lg-4">
<div class="dream-item">
<h3>
<a href="<?php echo $row['url'] ?>"><?php echo $row['affiliate_title'] ?></a>
</h3>
<p><?php echo LimitText(html_entity_decode($row['description']),15) ?></p>
<h4><strong
    >Price: &#8358;</strong><?php echo number_format($row['price'],2) ?> <a href="<?php echo $row['url'] ?>">See Full Details</a></h4>
<span class="sub-span"><?php echo $num++;?></span>
</div>
</div>
<?php }}else{ ?>
        <span style="color:red;" class="text-center display-5 "> Affiliate Marketing Courses Not Available!!</span>
<?php }?>
</div>
</div>
</section>

 <!-- become a publisher  -->

 <section id="become a publisher"  class="dream-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">Fulfill our dream</span>
<h2>Some Amazon Kdp courses Listed On Our Platform.</h2>
</div>
<div class="row">
<?php
$sql = $conn->query("SELECT * FROM amazon");
if($sql->num_rows>0){
            $num=1;
while($row=$sql->fetch_assoc()){ ?>
<div class="col-sm-6 col-lg-4">
<div class="dream-item">
<h3>
<a href="<?php echo $row['url'] ?>"><?php echo $row['amazon_title'] ?></a>
</h3>
<p><?php echo LimitText(html_entity_decode($row['description']),15); ?></p>
<h4><strong
    >Price: &#8358;</strong><?php echo number_format($row['prices'],2) ?> <a href="<?php echo $row['url'] ?>">See Full Details</a></h4>
<span class="sub-span"><?php echo $num++;?></span>
</div>
</div>
<?php }}else{ ?>
        <span style="color:red;" class="text-center display-5 "> Amazon Kpd Courses Not Available!!</span>
<?php }?>

</div>
</div>
</section>
  <!-- end become a publisher  -->

 <!-- affiliates Testimonies  -->
 <div class="gallery-area ptb-100" id="testimonies">
    <div class="container">
        <h4 class="text-center pb-5">Testmonies from Affilites</h4>
    <div class="row">
    <?php
    $sql = $conn->query("SELECT * FROM testimonies ");
    if($sql->num_rows>0){
    while($row=$sql->fetch_assoc()){ ?>
    <div class="col-sm-6 col-lg-4">
    <div class="gallery-item">
    <a href="./admin/web/<?php echo $row['tes_img'] ?>" data-lightbox="roadtrip" >
    <img src="./admin/web/<?php echo $row['tes_img'] ?>" style=" width: 100%;
    height: 500px;" class="rounded mx-auto  d-block0" alt="Gallery">
    <i class="icofont-eye"></i>
    </a> 
    </div>
    </div>
    <?php }}else{ ?>
        <span style="color:red;" class="text-center display-5"> Testimonies Will be Available on Friday!!</span>
    <?php }?>
    </div>
    </div>
 </div>
 <!-- affiliate Testimonies end  -->


 <!-- frequently asked questions  -->
 <div id="FAQ" class="faq-area pt-100 pb-70">
    <div class="container">
    <h2 class="text-center pb-5">Frequently Ask Questions.</h2>
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="faq-img">
    <img src="https://www.postaffiliatepro.com/wp/urlslab-download/2c8c08544bc21ccb65aeeddc6eae78e1/thirdman-thinking-600x400.jpg.webp" alt="FAQ">
    </div>
    </div>
    <div class="col-lg-6">
    <ul class="accordion">
    <li>
    <a>
        What is affiliate marketing, and how does it work?
    <i class="icofont-plus"></i>
    <i class="icofont-minus two"></i>
    </a>
    <p>That is one of the most common affiliate marketing questions! Affiliate marketing is a pretty straightforward marketing method where companies ask third-party bloggers, influencers, or even their customers, to recommend their products or services to other people via affiliate offers. Those people are called affiliates, and their main job is to convince people to do a specific action – like buying a service subscription or signing up to a newsletter. 
    You may not have realized it, but a large majority of bloggers, influencers, and YouTubers are earning money through affiliate marketing – for example, by posting a review about a new fitness gadget they used recently and adding a link where you can buy it yourself. However, you don’t actually need to have hundreds and thousands of followers to start affiliate marketing – you can start with affiliate marketing even if you don’t have a blog or social account yet!  
    </p>
    </li>
    <li>
    <a>
        How do I become an affiliate marketer?
    <i class="icofont-plus"></i>
    <i class="icofont-minus two"></i>
    </a>
    <p>The best part about affiliate marketing is that virtually anyone can start doing it, regardless of age, marketing experience, location, or budget. All that’s needed is a topic you are passionate about and a bit of time and effort spent on growing your affiliate channel. If you already have your own blog, a following on social media, or a video channel running, that makes things a bit easier – you can use those places to start making money with affiliate marketing immediately. And really, you won’t have to work in a much different way than before – virtually the only difference will be that you will be recommending relevant products or services to your followers every so often.
    You should get an affiliate marketing course that can direct you properly. </p>
    </li>
    <li>
    <a>
        What is the best way to start making money online with Affiliate Marketing?
    <i class="icofont-plus"></i>
    <i class="icofont-minus two"></i>
    </a>
    <p>The best way to start making money online with Affiliate Marketing is using Social Media Platforms. But, you should start by upskilling your knowledge by learning about Affiliate Marketing, which will prepare you to work as a professional Affiliate Marketer by guiding you through the essentials, concepts, Dos and Don'ts including the best practices. Note: To avoid a spammy atmosphere, affiliate links are often not allowed on social media platforms/networks.</p>
    </li>
    <li>
    <a>
        Can you really make significant money using Affiliate Marketing?
    <i class="icofont-plus"></i>
    <i class="icofont-minus two"></i>
    </a>
    <p>Yes, but it takes weeks, months and years of consistent efforts with commitment.</p>
    </li>
        <li>
        <a>
            How can you learn Affiliate Marketing?
        <i class="icofont-plus"></i>
        <i class="icofont-minus two"></i>
        </a>
        <p>There are numerous courses available on the Internet. You can review them in detail and learn Affiliate Marketing from them. Getting training from a successful affiliate or a mentor is advantageous for you since they have previously completed the phases you are in. Furthermore, they know in and out of the Affiliate Marketing journey.</p>
        </li>
        <li>
        <a>
            How do you become a successful affiliate?
        <i class="icofont-plus"></i>
        <i class="icofont-minus two"></i>
        </a>
        <p>Upskilling your knowledge of Affiliate Marketing, taking action, following in the footsteps of a successful affiliate or mentor, being consistent and committed to work with a business mindset, making investments to scale opportunities, and continuously learning about ongoing trends in the Affiliate Marketing journey to stay ahead of the competition are all ways to become a successful affiliate.</p>
        </li>
        <li>
        <a>
            How difficult is Affiliate Marketing?
        <i class="icofont-plus"></i>
        <i class="icofont-minus two"></i>
        </a>
        <p>Affiliate Marketing is simple if you approach it with a business attitude. You don't need to create any products or services; they already exist, and all you have to do now is advertise them to your target market or network.</p>
        </li>
    </ul>
    </div>
    </div>
    </div>
</div>
 <!-- frequently asked question end  -->
    


 
<div class="go-top">
<i class="icofont-arrow-up"></i>
<i class="icofont-arrow-up"></i>
</div>
<?php
include_once('footer.php');
include_once('scripts.php');

?>
</body>

<!-- Mirrored from templates.hibootstrap.com/findo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 08:48:43 GMT -->
</html>