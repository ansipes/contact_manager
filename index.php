<?php

  include 'header.php';
  $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;

  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p><strong>Contact Deleted!</strong> The contact was removed.</p>
</div>
<?php endif; ?>

<div class="uk-container">

<div class="uk-grid">




    <?php foreach($contacts as $contact) : // Makes a card for every contact inside the table. ?>


<div class="uk-width-1-3@m" style="margin-top: 40px;">
        <div class="uk-card uk-card-default">


          <div class="uk-card-media-top">
                          <img src="uploads/<?= $contact['image']; ?>" alt="">
                      </div>
            <div class="uk-card-body">

                <ul uk-accordion>
    <li class="uk-open">
        <h3 class="uk-accordion-title"><?= $contact['title']; ?> <?= $contact['first']; ?> <?= $contact['last']; ?></h3>
        <div class="uk-accordion-content" aria-hidden="true" hidden="hidden">
            <p class="light"><?= $contact['notes']; ?></p>
        </div>
    </li>
</ul>
<hr/>

                <div class="uk-grid">
                  <div class="uk-width-1-4">
                    <div title="Call" uk-tooltip>
                      <a  href="tel://<?= $contact['phone']; ?>"><span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </div>
                    </span></a>
                  </div>
                  <div class="uk-width-1-4">
                    <div title="Email" uk-tooltip>
                      <a  href="mailto:<?= $contact['email']; ?>"><span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                      </span></a>
                    </div>
                  </div>
                  <div class="uk-width-1-4">
                    <div title="Map" uk-tooltip>
                      <a href="https://www.google.com/maps/place/<?= $contact['address']; ?>+<?= $contact['city']; ?>+<?= $contact['state']; ?>+<?= $contact['zip']; ?>" target="_blank"><span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-location-arrow fa-stack-1x fa-inverse"></i>
                    </span></a>
                    </div>
                  </div>
                  <div class="uk-width-1-4">
                    <div title="Edit" uk-tooltip>
                      <a style="color: #FFD6BA;" href="/edit.php?id=<?= $contact['id']; ?>"><span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span></a>
                  </div>
                  </div>
                </div>
            </div>
        </div>
</div>
    <?php endforeach; ?>
</div>

</div>


<?php include 'footer.php'; ?>
