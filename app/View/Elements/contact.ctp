<div class = "contact">
    <div class = "content text-center">
        <h2>Contact</h2>
        <?php echo $this->Html->link('anna.wygant@gmail.com', 'mailto:anna.wygant@gmail.com', array('class' => 'btn'));
        echo $this->Html->link('+1 (408) 355-3815', 'tel:+14083553815', array('class' => 'btn')); ?>
        <!-- TODO: This target _blank attribute is invalid -->
        <p><?php
            $githubImg = $this->Html->Image('github.png', array('alt' => 'Anna Wygant\'s Github'));
            echo $this->Html->link($githubImg, 'https://github.com/doodleygroover', array('target' => '_blank', 'escape' => false));
            //echo $this->Html->Image('github.png', array('url'=>'https://github.com/doodleygroover', 'target' => '_blank'));
            ?>
        </p>
        <?php
        // Save this awesome form for a real server that lets apache mail things
        /*
        echo $this->Form->create('Mail', array(
            'action' => 'send'
        ));
        echo $this->Form->input('name', array('required' => 'true'));
        echo $this->Form->input('email', array('required' => 'true'));
        echo $this->Form->input('message', array('type' => 'textarea', 'required' => 'true'));
        echo $this->Form->submit('Send');
        echo $this->Form->end();
        */
        ?>
    </div>
</div>