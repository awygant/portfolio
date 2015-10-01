<script type = "text/javascript">
    $(document).ready(function(){
        $('.irrelevantBtn').click(function(){
            $('.irrelevant').slideToggle();
        });
    });
</script>

<h1>Relevant Skills</h1>

<div class = "portfolio-item">
    <div class = "left-column"><?php echo $this->Html->Image("skills/responsive.png"); ?></div>
    <div class = "right-column">
        <h2>Responsive Web Design</h2>
        <p>Start to finish, I can conceptualize, wireframe, design, and develop for all screen sizes. I'm a firm believer in avoiding heavy Javascript code for rendering elements; instead, I let CSS handle the dirty work of keeping all screen sizes happy.</p>
        <p>Go ahead, shrink your browser window. I dare you.</p>
    </div>
</div>

<div class = "portfolio-item">
    <div class = "left-column"><?php echo $this->Html->Image("skills/knowledge.png"); ?></div>
    <div class = "right-column">
        <h2>Thorough Understanding</h2>
        <p>I learned programming the hard way - from scratch. While frameworks and plugins are useful time savers, they aren't exactly my crutch. </p>
        <p>Need to program with tr's and td's for an incredibly outdated environment? I've got you covered. Got a tricky bug that just keeps getting away from you? I'll hunt it down and give it the old rolled up newspaper treatment.</p>
    </div>
</div>

<div class = "portfolio-item">
    <div class = "left-column"><?php echo $this->Html->Image("skills/attention.png"); ?></div>
    <div class = "right-column">
        <h2>Attention to Detail</h2>
        <p>I'm constantly scrutinizing my designs looking for ways to improve the usability, look-and-feel, and overall performance of a site or application.</p>
        <p>There's a pixel out on my monitor and it's been driving me nuts. Expect a pixel-perfect design. Unless you're looking at that particular pixel.</p>
    </div>
</div>


<div class = "portfolio-item">
    <div class = "left-column"><?php echo $this->Html->Image("skills/html-css.png"); ?></div>
    <div class = "right-column">
        <h2>Modern Web Standards</h2>
        <p>I keep an eye on web trends and the latest SEO practices so my sites don't get left in the dust. </p><p>I jump at the opportunity to work with brand new features and meet the challenge to implement them in a responsive, backwards-compatible environment.</p>
    </div>
</div>


<div class = "portfolio-item">
    <div class = "left-column"><?php echo $this->Html->Image("skills/analytics.png"); ?></div>
    <div class = "right-column">
        <h2>Marketing & Analytics</h2>
        <p>I've worked with large social media campaigns to harvest data from and deliver content to millions of users. I'm on the bleeding edge of online personalization tech. I contributed to the world's first one-to-one photo-immersive advertising network.</p>
        <p>I possess the highly sought-after ability to navigate the Facebook Analytics interface and make sense of data from large campaigns. Or, give me a log file from one of your sites and I'll write custom reporting software.</p>
    </div>
</div>

<div class = "text-center">
    <?php echo $this->Html->link('Click Me', 'javascript:;', array('class' => 'btn irrelevantBtn')) ?>
</div>

<div class = "irrelevant">
    <div class = "h1">Irrelevant Skills</div>
    <div class = "text-center">
        <h2>Faceplant</h2>
        <p>Skateboard, snowboard, scooter, or just getting out of bed.</p>
        <h2>Fish Keeping</h2>
        <p>You hire me, you're hiring Archimedes, too. We're a package deal.</p>
        <h2>Slow Cooking</h2>
        <p>Do you like your chili smokey, spicy, or sweet? How about all three?</p>
    </div>

</div>
