<?php $this->load->view('template/header'); ?>

<title>Viewing a person</title>
</head>

<body>

<p>
    <a href="<?php echo site_url('home'); ?>"class="button">Home</a>
    <a href="<?php echo site_url('person/add_view'); ?>"class="button">Add Person</a>
</p>

<table id="persons_events">
    <thead>
    <tr>
        <th>Person ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Action</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($records as $r): ?>
        <tr>
            <td> <?php echo $r->PersonID; ?></td>
            <td> <?php echo $r->FirstName; ?></td>
            <td> <?php echo $r->LastName; ?></td>
            <td> <?php echo $r->Email; ?></td>
            <td><a href="<?php echo site_url('person/edit/' . $r->PersonID . ''); ?>"class="button">Edit</a>
                <a href="<?php echo site_url('person/delete/' . $r->PersonID . ''); ?>" class="button">Delete</a>
            </td>


        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
<?php $this->load->view('template/footer'); ?>

