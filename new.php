<?php

  include 'header.php';

?>
<div class="uk-container ">
  <div class="uk-grid">
    <div class="uk-width-1-3@m">
    </div>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default">
          <div class="uk-card-body">
            <h3 style="text-align: center;">New Contact</h3>
          <form method="POST" action="/create.php" id="new" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="contact_first">First</label>
                    <input class="form-control" type="text" name="first" id="contact_first" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_last">Last</label>
                    <input class="form-control" type="text" name="last" id="contact_last" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_title">Title</label>
                    <input class="form-control" type="text" name="title" id="contact_title" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_phone">Phone</label>
                    <input class="form-control" type="text" name="phone" id="contact_phone" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_email">Email</label>
                    <input class="form-control" type="text" name="email" id="contact_email" value=""/>
                  </div>

                  <div class="form-group">
                    <label for="contact_address">Address</label>
                    <input class="form-control" type="text" name="address" id="contact_address" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_city">City</label>
                    <input class="form-control" type="text" name="city" id="contact_city" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_state">State</label>
                    <input class="form-control" type="text" name="state" id="contact_state" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_zip">Zip</label>
                    <input class="form-control" type="text" name="zip" id="contact_zip" value="" />
                  </div>

                  <div class="form-group">
                    <label for="contact_notes">Note</label>
                    <textarea class="form-control" name="notes" form="new" id="contact_note" value="" ></textarea>
                  </div>

                  <input type="hidden" name="image" value="default.jpg">

                  <div class="form-group">
                    <label for="contact_image">Image</label>
                    <input style="border: 0px solid lightgray !important; padding: 0px !important; color: white;" type="file" name="file" />
                  </div>

            <button class="uk-button uk-button-danger uk-width-1-1" style="background-color: #FFD6BA">Create New</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
