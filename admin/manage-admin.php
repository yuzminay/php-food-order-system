<?php
include('partials/menu.php');
?>
<section class="menu content">
  <div class="wrapper">
    <div class="main-content">
      <div class="wrapper">
        <h1>Manage Admin</h1>
        <br><br>
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <table class="tbl-full">
          <tr>
            <th>S.N</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Actions</th>
          </tr>
          <tr>
            <td>1.</td>
            <td>Sam</td>
            <td>sam</td>
            <td>
              <a href="" class="btn-secondary">Update Admin</a>
              <a href="" class="btn-danger">Delete Admin</a>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Sam</td>
            <td>sam</td>
            <td>
              <a href="" class="btn-secondary">Update Admin</a>
              <a href="" class="btn-danger">Delete Admin</a>
            </td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Sam</td>
            <td>sam</td>
            <td>
              <a href="" class="btn-secondary">Update Admin</a>
              <a href="" class="btn-danger">Delete Admin</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<?php
include('partials/footer.php');
?>