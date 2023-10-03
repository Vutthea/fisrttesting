
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - ADD NEW POST</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="w-50 mx-auto mt-xl-5">
        <h1 class="d-flex justify-content-center">ADD NEW POST</h1>
        <form method="POST" action="./admin/posts.php" enctype="multipart/form-data">
            <input type="hidden" name="add" value="addpost" />
            <div class="mb-3">
                <label for="title" class="form-label" >Title</label>
                <input type="text" class="form-control" name ="title" required >
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" name = "content" class="form-control"  required>
            </div>
            <div class="mb-3">
                <label for="formFile"  class="form-label">Selete Your image</label>
                <input class="form-control" name="img" id="img" type="file"  required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>