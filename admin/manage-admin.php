<?php
include('partials/menu.php');
?>
<section class="menu content">
  <div class="wrapper">
    <div class="main-content">
      <div class="wrapper">
        <h1>Manage Admin</h1>
        <br><br>
        <?php
        if (isset($_SESSION['add'])) {
          echo $_SESSION['add']; //Displaying Session Message
          unset($_SESSION['add']); //REmoving Session Message
        }

        if (isset($_SESSION['delete'])) {
          echo $_SESSION['delete'];
          unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update'])) {
          echo $_SESSION['update'];
          unset($_SESSION['update']);
        }

        if (isset($_SESSION['user-not-found'])) {
          echo $_SESSION['user-not-found'];
          unset($_SESSION['user-not-found']);
        }

        if (isset($_SESSION['pwd-not-match'])) {
          echo $_SESSION['pwd-not-match'];
          unset($_SESSION['pwd-not-match']);
        }

        if (isset($_SESSION['change-pwd'])) {
          echo $_SESSION['change-pwd'];
          unset($_SESSION['change-pwd']);
        }

        ?>
        <br><br><br>

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