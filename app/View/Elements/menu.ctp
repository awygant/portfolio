<?php echo $this->Html->script('hammer.min.js'); ?>
<script>
    $(function() {
        $('#menuButton').on('click', function() {
            $('#menu').toggleClass('slideLeft');
            $('.container').toggleClass('slideLeft');
        });
    });
    var mc = new Hammer(document.body);
    mc.on("swipeleft", function() {
        if(!$('#menu').hasClass("slideLeft"))
            $('#menuButton').click();
    });
    mc.on("swiperight", function() {
        if($('#menu').hasClass("slideLeft"))
            $('#menuButton').trigger('click');
    });
</script>

<div id="menuButton">
    <div class = "menuTop"></div>
    <div class = "menuMiddle"></div>
    <div class = "menuBottom"></div>
</div>
<div id="menu">
    <div class = "topLogo"></div>
    <ul>
        <li><?php echo $this->Html->link('Home', '/'); ?></li>
        <li><?php echo $this->Html->link('Projects', array('action' => 'projects')); ?></li>
        <li><?php echo $this->Html->link('Skills', array('action' => 'skills')); ?></li>
        <li><?php echo $this->Html->link('Résumé', array('action' => 'resume')); ?></li>
        <li><?php echo $this->Html->link('Bio', array('action' => 'bio')); ?></li>
        <li><?php echo $this->Html->link('Contact', array('action' => 'contact')); ?></li>
    </ul>
</div>