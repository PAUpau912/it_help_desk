<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/Assistechx.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ticket</title>
    <link rel="stylesheet" href="/assets/css/ticket.css">
</head>
<body>
     <!-- HEADER -->
     <header class="header-container">
        <a href="dashboard.php" class="logo">
            <img src="/assets/img/Assistechx.jpg" alt="Assistechx Logo">
            <span>Assistechx</span>
        </a>

        <div class="header-buttons">
            <a href ="dashboard.php"><img class="back-btn" src="/assets/img/arrow-left.svg"></a>
        </div>
    </header>
    <!-- FORM CONTAINER -->
    <div class="form-container">
        <form>
            <h4>Full Name</h4>
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                        <label for="firstName">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                        <label for="lastName">Last Name</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="department" placeholder="Department">
                        <label for="department">Department</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <label for="email">Email</label>
                    </div>
                </div>
            </div>

            <h4>Problem Category</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1">
                        <label class="form-check-label" for="check1">Computer</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check2">
                        <label class="form-check-label" for="check2">Network</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check3">
                        <label class="form-check-label" for="check3">Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check4">
                        <label class="form-check-label" for="check4">Phone</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check5">
                        <label class="form-check-label" for="check5">Others</label>
                    </div>
                </div>
                <h4>Please Specify</h4>
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea1" placeholder="Specify your problem" style="height: 100px;"></textarea>
                    <label for="floatingTextarea1">Specify your problem</label>
                </div>
            </div>

            <h4>Priority</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="priorityLow">
                        <label class="form-check-label" for="priorityLow">Low</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="priorityMedium">
                        <label class="form-check-label" for="priorityMedium">Medium</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="priorityHigh">
                        <label class="form-check-label" for="priorityHigh">High</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="priorityUrgent">
                        <label class="form-check-label" for="priorityUrgent">Urgent</label>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>