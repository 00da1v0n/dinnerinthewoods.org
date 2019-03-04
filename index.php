<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dinner in the Woods 2019 - Tickets on sale March 15th!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link rel="stylesheet" href="/css/site.css">

    <!-- Linked Data for the event -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Event",
      "location": {
        "@type": "Place",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Mukwonago",
          "addressRegion": "WI",
          "postalCode": "53149",
          "streetAddress": "W336 S8455 Hwy E"
        },
        "name": "Nature's Classroom Institute of Wisconsin"
      },
      "name": "Dinner in the Woods",
      "startDate": "2019-06-01T17:30-06:00",
      "endDate": "2019-06-02T00:00-06:00",
      "description": "Annual Dinner in the Woods at Nature's classroom. Live Music. Local Food. Live & Silent Auctions"
    }
    </script>
</head>

<body>

<div class="website">
    <div class="gridStyle container">
        <div class="py-5 text-center">
            <h4 class="pad-25-top">Nature's Classroom Institute & Montessori School Presents</h4>
            <img src="/images/logo.png" alt="Dinner in the Woods Event Logo">
            <h1>Dinner in the Woods</h1>
            <h5>Live Music · Local Food · Live & Silent Auction · Cabanas</h5>
            <h5>Saturday June 1st, 2019 5:00pm-11:30pm</h5>

        </div>

        <?php include('views/step2.php'); ?>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; <?= date('Y'); ?> Natures Classroom Institute of Wisconsin</p>
        </footer>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
