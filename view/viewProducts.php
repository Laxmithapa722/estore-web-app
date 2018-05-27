<?php
 
 include_once('view/header.php');
?>
<div class="row">

    <div class="col-sm-12 text-center box">View Products: <?= $numRecords ?> Results</div>

</div>


<div class="row">

    <div class="col-sm-12 jumbotron text-center">
        <div class="responsive">
            <table class="table table-striped table-hover text-left">

                <tr>
                    <th>ProductID</th><th>Description</th><th>Category</th><th>Quantity</th>
                    <th>CostPrice</th><th>SellingPrice</th><th colspan="4">Manage</th>
                </tr>
                <?php foreach ($records as $row): ?>

                    <tr>
                        <td><?= $row['ProductID'] ?></td>
                        <td><?= $row['Description'] ?></td>
                        <td><?= $row['Category'] ?></td>
                        <td><?= $row['Quantity'] ?></td>
                        <td><?= $row['CostPrice'] ?></td>
                        <td><?= $row['SellingPrice'] ?></td>                        
                        <td>
                            <a href="?action=viewPhotos&id=<?= $row['ProductID'] ?>" >Photos</a>
                            &nbsp;
                            <a href="?action=addPhoto&id=<?= $row['ProductID'] ?>" >+Photo</a>
                            &nbsp;
                            <a href="?action=editBooking&id=<?= $row['id'] ?>" >Edit</a>
                            &nbsp;
                            <a href="?action=deleteBooking&id=<?= $row['id'] ?>" >Delete</a>
                        </td>
                    </tr>

                <?php endforeach; ?>

                <tr>
                    <td colspan="10" align="left">
                        <a href="?action=addBooking"><button class="btn btn-primary btn-lg">Add Booking</button></a>
                    </td>
                </tr>    
            </table>

        </div>
    </div>

</div>
<?php include_once('view/footer.php'); ?>