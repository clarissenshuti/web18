<?php $this->load->view('template/header'); ?>
    <title>Adding a person</title>
    </head>
    <body id="inputs">
    <?php

    echo form_open('PersonsController/add_person');
    echo form_label('Person ID.');
    echo "<br/>";
    echo form_input(array('id' => 'PersonID', 'name' => 'PersonID'));
    echo "<br/>";

    echo form_label('First name');
    echo "<br/>";
    echo form_input(array('id' => 'FirstName', 'name' => 'FirstName'));
    echo "<br/>";

    echo form_label('Last name');
    echo "<br/>";
    echo form_input(array('id' => 'LastName', 'name' => 'LastName'));
    echo "<br/>";

    echo form_label('Email');
    echo "<br/>";
    echo form_input(array('id' => 'Email', 'name' => 'Email'));
    echo "<br/>";
    echo form_submit(array('id' => 'submit', 'value' => 'Add'));
    echo form_close();
    ?>
    </body>
<?php $this->load->view('template/footer'); ?>