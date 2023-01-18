<html lang="en">
<head>
    <title>PHP Mysql Select2 Autocomplete With Ajax Example</title>
    <script src="js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="js/select2.min.css" rel="stylesheet" />
    <script src="js/select2.min.js"></script>
</head>
<body>
    <div class="row mt-5">
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header bg-info text-center text-white">
                    <h6 class="m-0">PHP Mysql Select2 Autocomplete With Ajax Example - MyWebtuts.com</h6>
                </div>
                <div class="card-body" style="height: 280px;">
                    <div>
                        <select class="postName form-control" name="postName" multiple></select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $('.postName').select2({
            placeholder: 'Select a post',
            ajax: {
                url: 'fetch.php',
                dataType: 'json',
                delay: 250,
                data: function (data) {
                    return {
                        searchTerm: data.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results:response
                    };
                },
                cache: true
            }
        });
    </script>
    
</body>
</html>
