<?php $this->load->view('template/header'); ?>

    <title>Editing a person</title>
    </head>

    <body id="inputs">
    <?php
    echo form_open('PersonsController/update_person');
    echo form_hidden('old_PersonID', $old_PersonID);
    echo form_label('Person ID');
    $data = array(
        'name' => 'PersonID',
        'value' => $records[0]->PersonID
    );
    echo "<br/>";
    echo form_input($data);
    echo "<br>";

    echo form_label('First name');
    $data = array(
        'name' => 'FirstName',
        'value' => $records[0]->FirstName
    );
    echo "<br/>";
    echo form_input($data);
    echo "<br>";

    echo form_label('Last name');
    $data = array(
        'name' => 'LastName',
        'value' => $records[0]->LastName
    );
    echo "<br/>";
    echo form_input($data);
    echo "<br>";

    echo form_label('Email');
    $data = array(
        'name' => 'Email',
        'value' => $records[0]->Email
    );
    echo "<br/>";
    echo form_input($data);
    echo "<br>";

    echo form_submit('Edit', 'Edit');
    echo form_close();
    ?>
    </body>

<?php $this->load->view('template/footer'); ?>