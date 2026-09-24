<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $partnerName    = $_POST['partnerName'] ?? '';
    $partnerEmail   = $_POST['partnerEmail'] ?? '';
    $partnerLegalName = $_POST['partnerLegalName'] ?? '';
    $partnerMobile  = $_POST['partnerMobile'] ?? '';
    $partnerAddress = $_POST['partnerAddress'] ?? '';
    $startDate      = $_POST['startDate'] ?? '';
    $expiryDate     = $_POST['expiryDate'] ?? '';
    $minLoan        = $_POST['minLoan'] ?? '';
    $maxLoan        = $_POST['maxLoan'] ?? '';
    $interestRate   = $_POST['interestRate'] ?? '';
    $depositAmount  = $_POST['depositAmount'] ?? '';

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 800px;">
    <h2 class="text-center mb-4">Sample Form</h2>
    <form method="POST" action="">
        <div class="row mb-3">
            <div class="col-md-3 col-form-label">Partner Name</div>
            <div class="col-md-3"><input type="text" class="form-control" name="partnerName"></div>
            <div class="col-md-3 col-form-label">Partner Email ID</div>
            <div class="col-md-3"><input type="email" class="form-control" name="partnerEmail"></div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-form-label">Partner Legal Name</div>
            <div class="col-md-3"><input type="text" class="form-control" name="partnerLegalName"></div>
            <div class="col-md-3 col-form-label">Partner Mobile</div>
            <div class="col-md-3"><input type="text" class="form-control" name="partnerMobile"></div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-form-label">Partner Address</div>
            <div class="col-md-9"><textarea class="form-control" name="partnerAddress" rows="3"></textarea></div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-form-label">Contract Start Date</div>
            <div class="col-md-3"><input type="date" class="form-control" name="startDate" placeholder="Date Start"></div>
            <div class="col-md-3 col-form-label">Contract Expiry Date</div>
            <div class="col-md-3"><input type="date" class="form-control" name="expiryDate" placeholder="Date End"></div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-form-label">Minimum Loan Amount</div>
            <div class="col-md-3"><input type="number" class="form-control" name="minLoan"></div>
            <div class="col-md-3 col-form-label">Maximum Loan Amount</div>
            <div class="col-md-3"><input type="number" class="form-control" name="maxLoan"></div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3 col-form-label">Interest Rate</div>
            <div class="col-md-3"><input type="text" class="form-control" name="interestRate"></div>
            <div class="col-md-3 col-form-label">Deposit Amount</div>
            <div class="col-md-3"><input type="text" class="form-control" name="depositAmount"></div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</body>
</html>
