



<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fort Conservation</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        
        <style>
          .background{
            background: rgba(0, 0, 0, 0.7) url('images.jfif');
            background-size: cover;
            background-blend-mode: darken;
          }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">


        
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <li><a href="#home"> Home</a></li>
            <li><a href="#about"> About</a></li>

            <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li><a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">List</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        <?php if(Route::has('register')): ?>
                            <li><a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            
            <li><a href="#Feedback"> Feedback</a></li>
            <li><a href="#Contact Us"> Contact Us</a></li>
        </ul>
        
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <section class="background firstSection">
        <div class="box-main" id="home">
            <div class="firstHalf">
                <p class="text-big">Fort Conservation - A Big Challenge</p>
                <p class="text-small">India is known all over the world for its rich culture, art and exemplary architecture. The architecture of Indian forts was an important aiding element to the culture of warfare prevalent in the country. While some Indian forts were merely constructed for defence purposes, some massive fortresses were also built to display power and authority. At the time of wars and sieges, these forts decided the fate of the kingdoms as they were the only thing that stood between victory and defeat. Thus, they were looked upon as symbols of both glory and bloodshed.</p>
            </div>
            <div class="secondHalf">
                <img src="<?php echo e(asset('img/download.jfif')); ?>" >
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="paras">
        <p class="sectionTag text-big">MISSION</p>
        <p class="sectionSubTag text-small">Forts are the buildings or structures famous for their architectural and cultural heritage. They are durable and famous symbols of past. We get lot of historical and political information from them. Forts remind us of our heritage. They are treasure of our nation and symbol of pride of our past civilization. They help us to appreciate our past and the level of development, knowledge and thoughts. In a way, they provide life to our past. They serve as important sources /evidences of history and they enhance tourism.</p>
        </div>
        <div class="thumbnail">
            <img src="<?php echo e(asset('img/fort1.jpg')); ?>" >
        </div>
    </section>

    <section class="section left">
        <div class="paras">
        <p class="sectionTag text-big">AIM</p>
        <p class="sectionSubTag text-small">This website is one step forward toward conservation of forts. We aim to inspire people to motivate them to take part in this noble cause by giving their contribution, by uploading pictures, informing government officials, writing to them to take measures for the forts' conservation </p>
        </div>
        <div class="thumbnail">
            <img src="<?php echo e(asset('img/agraFort.jpg')); ?>" >
        </div>
    </section>

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">GOAL</p>
        <p class="sectionSubTag text-small">Our website acts as a medium in preserving our natural heritage by involving common people. Fort visitors as well as the locals can bring to the notice any sort of vandalism at the forts by clicking those photos. These photos will be accessible to the ASI(Archaeological Survey Of India) Officials.</p>
        </div>
        <div class="thumbnail">
            <img src="<?php echo e(asset('img/images (2).jfif')); ?>" >
        </div>
    </section>

        
    <link rel="stylesheet" href="<?php echo e(asset('css/feedback.css')); ?>">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!--<body class="agileits_w3layouts">-->
    <section class="feedback" id="Feedback">
    <!-- <h1 class="agile_head text-center">MAITRI</h1> -->
	<h2 class="agile_head text-center">PLEASE GIVE YOUR FEEDBACK</h2>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name (optional)" name="name"  />
			<input type="email" placeholder="Your Email (optional)" name="email"/>
			<input type="text" placeholder="Your Number (optional)" name="num"  /><br>
			<center><input type="submit" value="submit Feedback" class="agileinfo" /></center>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
    </section>
			 
	</div>
<!--</body>-->
    

 
    <section class="contact" id="Contact Us">
       <h1 class="text-center">Contact Us</h1>
       <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your Email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate Your Concern"></textarea>
            <button class="btn btn-sm btn-dark">Submit</button>
        </div>
    </section>
    <script src="js/resp.js"></script>



    </body>
</html>
<?php /**PATH C:\Users\AJAY\Desktop\FortConservation\resources\views/welcome.blade.php ENDPATH**/ ?>