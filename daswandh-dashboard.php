<?php

include('config.php');

$sql = "SELECT * FROM daswandh";
$result = mysqli_query($con, $sql) or die("Query Failed!");


echo '<h3>Manage Daswandh Form</h3>
      <table class="dash-table">
        <thead>
          <tr>
            <th class="dash-th">Id</th>
            <th class="dash-th">Role</th>
            <th class="dash-th">Name</th>
            <th class="dash-th">Father'."'s". 'Name</th>
            <th class="dash-th">Address</th>
            <th class="dash-th">Email</th>
            <th class="dash-th">Date</th>
            <th class="dash-th">Phone</th>
            <th class="dash-th">Amount</th>
            <th class="dash-th">Image</th>
            <th class="dash-th">Action</th>
          </tr>
        </thead>
        <tbody>';

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>
          <tr>
            <td class="dash-td"><?php echo $row['id']; ?></td>
            <td class="dash-td"><?php echo $row['role']; ?></td>
            <td class="dash-td"><?php echo $row['name']; ?></td>
            <td class="dash-td"><?php echo $row['father']; ?></td>
            <td class="dash-td"><?php echo $row['address']; ?></td>
            <td class="dash-td"><?php echo $row['mail']; ?></td>
            <td class="dash-td"><?php echo $row['date']; ?></td>
            <td class="dash-td"><?php echo $row['phone']; ?></td>
            <td class="dash-td"><?php echo $row['amount']; ?></td>
            <td class="dash-td">  <a href="<?php echo $row['image']; ?>" target="_blank">
    <img src="<?php echo $row['image']; ?>"
         alt="Photo"
         width="60"
         height="60"
         style="object-fit: cover; border-radius: 8px; cursor: pointer;">
  </a>

                </td>
            <td class="dash-td">
              <i class="fas fa-edit action-icon edit"></i>
              <i class="fas fa-trash action-icon delete"></i>
            </td>
          </tr>
<?php
    }
}
else{
    echo '<tr><td colspan="6" class="dash-td text-center">No data found.</td></tr>';
}
echo '</tbody></table>';

?>