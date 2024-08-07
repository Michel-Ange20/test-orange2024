<!-- Header Page -->
<?php
$title = "Api" ;
include('header.php'); ?>
<!-- End Header -->
<?php if(isset($alert) && isset($response)): ?>
<div class="alert <?= $alert;?>" role="alert" style="margin-top:50px">
  <?= $response; ?>
</div>
<?php endif; ?>

<div class="container" style="margin-top:50px">
  <div class="row">
    <div class="col-lg-12">
    <form class="needs-validation" novalidate method="GET" action="add">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Title</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="title" value="" name="values[title]" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Auteur</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Auteur" value="" name="values[auteur]" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Content</label>
      <div class="input-group">
        <!--div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div-->
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required name="values[content]">
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <!--div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div-->
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
    </div>
  </div>

</div>

  <!-- Footer Page -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->