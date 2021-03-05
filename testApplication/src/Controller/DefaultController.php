<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/index.php")
     */

    public function index(){
        return new Response (
            '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="src/app/front/styles.css"> -->
</head>
<body>

<form id="submissionForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
    <div class="form-group row">
        <label for="apiKey" class="col-sm-2 col-form-label">API key</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apiKey" name="apiKey" placeholder="API key">
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="city" name="city" placeholder="city">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <input type="submit" value="Submit" id="but_submit" class="btn btn-primary"/>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>'
        );
    }
}