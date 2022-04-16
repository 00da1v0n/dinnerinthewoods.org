<div class="row">
    <div class="col-md-12 mb-12">
        <div class="mb-12 text-center">
            <br/><br/>
            <h3>Please Purchase Tickets Via the Link Above!</h3>
            <?php
            if (isset($_GET['d'])) {
                $date = new DateTime($_GET['d']);
                echo '<h5>You will be notified when the tickets are on sale.</h5>';
                //echo '<h5>VIP tickets go on sale ' . $date->format('F jS, Y \a\t h:ia') . '</h5>';
            }
            ?>
            <h5>Tickets on Sale Now! Thank you For Your Patronage!</h5>

        </div>
        <br/>
    </div>

</div>