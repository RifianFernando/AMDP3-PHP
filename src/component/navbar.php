<?php
function createTemplate()
{
    if (isset($_SESSION['username'])) {
        $check = <<<HTML
            <a class="nav-link" href=""><b>Dashboard</b></a>
        HTML;
    } else {
        $check = <<<HTML
            <a class="nav-link" aria-current="page" href="./login.php"><i class="bi bi-box-arrow-in-right"></i><b>Login</b></a>
            <a class="nav-link" aria-current="page" href=""><i class="bi bi-box-arrow-in-right"></i><b>Register</b></a>
        HTML;
    }

    return <<<HTML
            <nav class=" d-flex justify-content-between bg-danger ps-4 pe-4">
                <a class="navbar-brand d-flex align-items-center text-white" href="./home.php"><b>UniEat</b></a>

                <div class="d-flex p-3 gap-3 w-50">
                    <input type="text" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary bg-warning ps-4 pe-4" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>

                <div class="d-flex flex-md-row align-items-center gap-3" id="navbarSupportedContent">
                    {$check}
                    
                </div>
            </nav>
    HTML;
}
