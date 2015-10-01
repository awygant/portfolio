<div class = "contact">
    <div class = "content">
        <h2>Contact</h2>
        <?php
        echo $this->Form->create('Mail', array(
            'action' => 'send'
        ));
        echo $this->Form->input('name', array('required' => 'true'));
        echo $this->Form->input('email', array('required' => 'true'));
        echo $this->Form->input('message', array('type' => 'textarea', 'required' => 'true'));
        echo $this->Form->submit('Send');
        echo $this->Form->end();
        ?>
    </div>
</div>