<?php echo $this->Html->css('owl.carousel.css'); ?>
<?php echo $this->Html->script('owl.carousel.min.js'); ?>
<?php echo $this->Html->script('lightbox.js'); ?>
<?php echo $this->Html->script('gallery.js'); ?>

<h1>Projects</h1>


<?php // TODO: Make portfolio-item an element, move all this stuff to a database? ?>
<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/speedsters/speedsters-tilt.png', array('alt' => 'Speedsters Ultimate Racer')); ?>
    </div>
    <div class = "right-column">
        <h2>Speedsters Snack Promo</h2>
        <p>Task: Distribute the all-new Speedsters snack brand among its target audience and generate social media buzz.</p>
        <p>Result: Developed a custom branded application that allows users to picture themselves in fantasy sports car scenes, with a prize for the most viral photo.</p>
        <p>The application involves several steps:</p>
        <ul>
            <li>Upload the user's selfie to Flashfoto API</li>
            <li>Receive the segmented face and hair result from Flashfoto API</li>
            <li>Query a MySQL scenes database for a list of scenes and their mount data</li>
            <li>Run custom logic to resize and mount the head to specific (x, y) coordinates between the background and foreground of the scene</li>
            <li>Package the mount data as a JSON object and use Flashfoto API to flatten the image</li>
            <li>Store the resulting image, along with user data, in the database</li>
        </ul>
        <p>Using the CakePHP MVC framework, I integrated Facebook sharing components, Flashfoto's REST API, and a MySQL database to deliver a reliable and dynamic experience.</p>

        <?php
         echo $this->Html->link('See Demo', 'http://staging-voting-1.fotam.com/', array(
            'class'=>'btn',
            'target' => '_blank'
        ));
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <div class = "mockups">
            <div class = "laptop">
                <div>
                    <?php echo $this->Html->Image('projects/speedsters/leaderboard.jpg', array('alt' => 'Speedsters Ultimate Racer - Leaderboard'));?>
                </div>
            </div>
            <div class = "tablet">
                <div>
                    <?php echo $this->Html->Image('projects/speedsters/results.jpg', array('alt' => 'Speedsters Ultimate Racer - Photo Creation Results')); ?>
                </div>
            </div>
            <div class = "phone">
                <div>
                    <?php echo $this->Html->Image('projects/speedsters/upload.jpg', array('alt' => 'Speedsters Ultimate Racer - Upload'));?>
                </div>
            </div>
        </div>

        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>

        <div>
            <div class = "card">
                <div class = "imgContainer">
                    <?php echo $this->Html->Image('projects/speedsters/mockups/iphone-upload.jpg', array('alt' => 'Speedsters Ultimate Racer - Upload'));?>
                </div>
                <div class = "desc">
                    <h4>Upload Interface</h4>
                    <p>This app implements several methods from Flashfoto's API, starting with a photo upload.</p>
                </div>
            </div>
            <div class = "card">
                <div class = "imgContainer">
                    <?php echo $this->Html->Image('projects/speedsters/mockups/macbook-leaderboard.jpg', array('alt' => 'Speedsters Ultimate Racer - Leaderboard'));?>
                </div>
                <div class = "desc">
                    <h4>It's a Race to the Top!</h4>
                    <p>The leaderboard shows the top ten leaders in the photo sharing contest.</p>
                </div>
            </div>
            <div class = "card">
                <div class = "imgContainer">
                    <?php echo $this->Html->Image('projects/speedsters/mockups/ipad-results.jpg', array('alt' => 'Speedsters Ultimate Racer - View Photo Creations'));?>
                </div>
                <div class = "desc">
                    <h4>Fantasy Scenes</h4>
                    <p>Once the user picks their favorite photo, he or she can share to Facebook to enter the sweepstakes.</p>
                </div>
            </div>
            <div class = "card">
                <div class = "imgContainer">
                    <?php echo $this->Html->Image('projects/speedsters/custom-icons.jpg', array('alt' => 'Speedsters Ultimate Racer - Custom Iconography'));?>
                </div>
                <div class = "desc">
                    <h4>Custom Icons</h4>
                    <p>A custom icon set I made to assist instruction text on the upload page.</p>
                </div>
            </div>
        </div>



    </div>
</div>



<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/wireframes/wireframes-tilt.png', array('alt' => 'Beautiful, detailed mockups.')); ?>
    </div>
    <div class = "right-column">
        <h2>Detailed Mockups and Wireframe Documentation</h2>
        <p>Task: Design a location-based interactive events application. Specify all functionality in the wireframe document.</p>
        <p>Result: I created a pixel-perfect mobile first interface that leads the user to the end goal of contributing a photo for a particular event space. I wrapped the interface design in a comprehensive and detailed PDF outlining button functionality, specific interactions, menu behavior, and more.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/wireframes/interface-flow.jpg', array('alt' => 'Interface Flow Diagram')); ?>
            </div>
            <div class = "desc">
                <h4>Interface Flow</h4>
                <p>This diagram shows the path of typical application use cases, including failure cases.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/wireframes/detailed-interface-description.jpg', array('alt' => 'Interface Mockups and Detailed Descriptions')); ?>
            </div>
            <div class = "desc">
                <h4>Interface Descriptions</h4>
                <p>An example of the level of detail to expect from my wireframes.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/wireframes/menu-contexts.jpg', array('alt' => 'User Menu in Different Contexts')); ?>
            </div>
            <div class = "desc">
                <h4>Accounting for Context</h4>
                <p>All user scenarios are accounted for and reflected in the menu option documentation.</p>
            </div>
        </div>
        <?php echo $this->Html->link('Download Full Wireframe Docs', array('action' => 'download', 'Anna_Wygant_Wireframe_Sample.pdf'), array('class' => 'btn')); ?>
    </div>
</div>



<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/reporting/reporting-tilt.png', array('alt' => 'From Log Files to Beautiful Reports')); ?>
    </div>
    <div class = "right-column">
        <h2>Log Scraping and Reporting</h2>
        <p>Task: Parse thousands of lines of log data and deliver readable app usage insights to the client.</p>
        <p>Result: I wrote a parser in Java that accepts a monthly log file and a partner ID as parameters, and outputs data about that specific partner. </p>
        <p>The application is for a marketing promo called "Picture Yourself in a Lexus", where users upload their own faces into Lexus-related scenes. When finished, the user can flatten ("merge") the photo to share with friends.</p>
        <p>My command line Java tool outputs the total number of users, scene views, photo uploads, photo shares, and other useful insights. It even offers view and download data on a per scene basis.</p>
        <p>My next task was to compile this information with Facebook ad campaign data into a PDF report for the client. The final report offers extra insight into which models were the most popular, and which ads influenced app behavior.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>
        <?php //TODO: Put card blocks into an element ?>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/reporting/ad-results.jpg', array('alt' => 'Report - Ad Results'));?>
            </div>
            <div class = "desc">
                <h4>Top Performers and Ad Results</h4>
                <p>At first glance, the client gets to see which car model scenes performed the best. Graphs underneath show demographic trends from the Facebook ads, broken down by campaign.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/reporting/popularity-and-insights.jpg', array('alt' => 'Report - Popularity and Insights'));?>
            </div>
            <div class = "desc">
                <h4>App Insights</h4>
                <p>An in-depth look at scene popularity and app decisions offers detailed insight into how people are using the site.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/reporting/raw-data.jpg', array('alt' => 'Report - Raw Data'));?>
            </div>
            <div class = "desc">
                <h4>Data Table</h4>
                <p>A complete look at how each car model performed one month compared to the previous month.</p>
            </div>
        </div>

    </div>

</div>




<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/ff-labs/home-tilt.png', array('alt' => 'Flashfoto, Inc. Becomes Flashfoto Labs ')); ?>
    </div>
    <div class = "right-column">
        <h2>Rebranding of Flashfoto, Inc.</h2>
        <p>Task: Rebrand Flashfoto, Inc. as Flashfoto Labs. Create a new logo and develop a responsive, intuitive corporate website. Organize information about the company’s products, services, and intellectual property.</p>
        <p>Result: The addition of the word ‘Labs’ to the company name indicated a strong need for scientific elements throughout the design. By impelenting clean, thin lines within a bold color scheme, I brought simplicity and elegance to this standout design.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>
        <?php //TODO: Put card blocks into an element ?>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/ff-logo.png', array('alt' => 'Flashfoto Labs - Hexagonal Logo'));?>
            </div>
            <div class = "desc">
                <h4>Logo</h4>
                <p>For the computer vision technology company specializing in photo manipulation, I created a geometric logo that hints towards vision and cameras.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/home.jpg', array('alt' => 'Flashfoto Labs - Homepage'));?>
            </div>
            <div class = "desc">
                <h4>Home Screen</h4>
                <p>A simple and concise home screen navigation with large tap targets.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/solutions.jpg', array('alt' => 'Flashfoto Labs - Solutions'));?>
            </div>
            <div class = "desc">
                <h4>Secondary Navigation</h4>
                <p>A carousel-style showcase offers users an "at-a-glance" look at products and allows users to read further by tapping anywhere on a row.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/case-study.jpg', array('alt' => 'Flashfoto Labs - Case Study'));?>
            </div>
            <div class = "desc">
                <h4>In-Depth</h4>
                <p>An in-depth page displays information in an easily digestible vertical-scroll format.</p>
            </div>
        </div>

    </div>

</div>

<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/ltdn-site/ltdn-tilt.png', array('alt' => 'Los Tigres del Norte')); ?>
    </div>
    <div class = "right-column">
        <h2>Los Tigres del Norte Band Site</h2>
        <p>Task: Design a fresh, responsive website that includes the all-new Jefe de Jefes logo. Follow content guidelines to ensure compatibility with a pre-existing CMS.</p>
        <p>Result: Delivered two unique designs for the band to choose from. The first is bold and modern, consisting of new-age typography including a hashtag cloud and vibrant gradient art. The second gives off a more traditional feel with vintage looks, real-life textures, and a natural color scheme.</p>
        <p>This iconic latin band went with the latter option that represents the group's timelessness and universal appeal.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ltdn-site/jefe-de-jefes.jpg', array('alt' => 'Los Tigres del Norte - Jefe de Jefes Logo'));?>
            </div>
            <div class = "desc">
                <h4>Jefe de Jefes Logo</h4>
                <p>Given the nickname after the rise of their hit album Jefe de Jefes ("Boss of Bosses"), Los Tigres del Norte asked me to create a logo to be used on their website, in social media, and on merchandise.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ltdn-site/design-1.jpg', array('alt' => 'Los Tigres del Norte - Modern Homepage Design'));?>
            </div>
            <div class = "desc">
                <h4>Modern Entertainment</h4>
                <p>This homepage design brings an exciting concert atmosphere to the site and engages with a hashtag cloud hero image.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ltdn-site/design-2.jpg', array('alt' => 'Los Tigres del Norte - Traditional Elements Homepage Design'));?>
            </div>
            <div class = "desc">
                <h4>Keeping it Classy</h4>
                <p>Since the band's inception in 1968, Los Tigres del Norte have grown to become universally beloved members of the latin community. This vintage design pays homage to the group's norteño roots and western style.</p>
            </div>
        </div>
    </div>
</div>



<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/tiger/tiger-tilt.png', array('alt' => 'Singing Tiger - Close up')); ?>
    </div>
    <div class = "right-column">
        <h2>Singing Tiger</h2>
        <p>What started out as a concept for a virtual singing greeting card for a client ended up as a colorful art piece inspired by the work of designer <?php echo $this->Html->link('Andreas Preis', 'http://designerpreis.com/', array('target'=>'_blank')); ?>.</p>
        <p>Check out the full gallery for more iterations of this piece.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/tiger/line-art.jpg', array('alt' => 'Singing Tiger - Line Art'));?>
            </div>
            <div class = "desc">
                <h4>Line Art</h4>
                <p>Completed the piece with additional line art and patterns.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/tiger/color.jpg', array('alt' => 'Singing Tiger - In Color'));?>
            </div>
            <div class = "desc">
                <h4>Color Fields</h4>
                <p>Digitally translated the sketch and decided on a color scheme.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/tiger/sketch.jpg', array('alt' => 'Singing Tiger - Sketch'));?>
            </div>
            <div class = "desc">
                <h4>Sketch</h4>
                <p>Original sketch.</p>
            </div>
        </div>
    </div>
</div>


<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/fotam/fotam-tilt.png', array('alt' => 'Fotam T-Shirt')); ?>
    </div>
    <div class = "right-column">
        <h2>Fotam T-Shirt Design</h2>
        <p>During my time at Flashfoto, I was a core part of the development team for revolutionary events software. The application, dubbed "Fotam", served as a central upload hub and gallery for photos taken at any event. The photos then automatically appeared in a crowdsourced slideshow that scaled to any display size.</p>
        <p>The Fotam platform was adopted by none other than the Latin music legends, Los Tigres del Norte. We installed our slideshow at several LTDN concerts and had success using it as a photo aggregation mechanism for special media campaigns.</p>
        <p>Because the application was better utilized over mobile device networks rather than DSLRs, identifying ourselves as legitimate photographers at concerts with tens of thousands of people became a challenge. Our solution? Come up with some fancy T-shirts.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <p class = "info"><span class = "infoGlyph"></span>Click on any photo.</p>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/fotam/fotam-tshirt.jpg', array('alt' => 'Fotam T-Shirt Mockup'));?>
            </div>
            <div class = "desc">
                <h4>T-shirt</h4>
                <p>A T-shirt identifying us as part of the official crew.</p>
            </div>
        </div>
    </div>
</div>


<div id = "lightbox">
    <div style = "position:static">
        <p class = "info"><span class = "infoGlyph"></span>Drag left/right to navigate. Tap anywhere to close.</p>
        <div id = "lightboxImg" class = "owl-carousel"></div>
    </div>
</div>