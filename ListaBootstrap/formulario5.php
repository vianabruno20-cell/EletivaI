<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'] ?? '';
    $lastName  = $_POST['lastName'] ?? '';
    $username  = $_POST['username'] ?? '';
    $email     = $_POST['email'] ?? '';
    $address   = $_POST['address'] ?? '';
    $address2  = $_POST['address2'] ?? '';
    $country   = $_POST['country'] ?? '';
    $state     = $_POST['state'] ?? '';
    $zip       = $_POST['zip'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 600px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Billing address</h4>
            <form method="POST" action="">
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                    </div>
                    <div class="col">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                </div>

                <div class="mb-3">
                    <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                </div>

                <div class="row mb-4">
                    <div class="col-md-5">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" name="country">
                            <option selected>Choose...</option>
                            <option value="BR">Brasil</option>
                            <option value="US">Estados Unidos</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" name="state">
                            <option selected>Choose...</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
