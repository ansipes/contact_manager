<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="uk-container">
  <div class="uk-grid">
    <div class="uk-width-1-3@m">
    </div>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default">
          <div class="uk-card-body">
            <h3 style="text-align: center;">Edit</h3>
            <div class="uk-card-badge"><a href="/delete.php?id=<?= $contact['id']; ?>">Delete</a></div>

          <form method="POST" action="/update.php" id="new">
            <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

                  <div class="form-group">
                    <label for="contact_first">First</label>
                    <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Last</label>
                    <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Title</label>
                    <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Phone</label>
                    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Email</label>
                    <input class="form-control" type="text" name="email" id="contact_email" value="<?= $contact['email']; ?>"/>
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Address</label>
                    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_city">City</label>
                    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_state">State</label>
                    <input class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Zip</label>
                    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Note</label>
                    <textarea class="form-control" name="notes" form="new" id="contact_note"  value="" ><?= $contact['notes']; ?></textarea>
                  </div>

                  <input type="hidden" name="image" value="default.jpg">

                  <div class="form-group">
                    <label for="contact_image">Image</label>
                    <input style="border: 0px solid lightgray !important; padding: 0px !important; color: white;" type="file" name="file" />
                  </div>

            <button class="uk-button uk-button-danger uk-width-1-1">Save Contact</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
