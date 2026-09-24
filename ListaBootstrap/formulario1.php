<?php
// Formulário 1
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['firstName'] ?? '';
    $last_name  = $_POST['lastName'] ?? '';
    $username   = $_POST['username'] ?? '';
    $city       = $_POST['city'] ?? '';
    $state      = $_POST['state'] ?? '';
    $zip        = $_POST['zip'] ?? '';
    $agree      = isset($_POST['gridCheck']) ? 'Sim' : 'Não';

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 700px;">
    <form method="POST" action="">
        <div class="row mb-3">
            <div class="col">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" value="Mark">
            </div>
            <div class="col">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" value="Otto">
            </div>
            <div class="col">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div>
            <div class="col">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State">
            </div>
            <div class="col">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="gridCheck" name="gridCheck">
            <label class="form-check-label" for="gridCheck">Agree to terms and conditions</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit form</button>
    </form>
</div>
</body>
</html>
