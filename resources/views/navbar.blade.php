<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">
                <img src="{{ asset('/Images/Quiz-256.webp')}}" alt="logo" width="30" height="24" class="d-inline-block align-text-top"> &nbsp;&nbsp;Quizzer
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">
                        <img src="{{ asset('/Images/real_estate_property_house_home-256.webp')}}" alt="logo" width="22" height="17" class="d-inline-block align-text-top">
                        صفحه اصلی
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">
                    <img src="{{ asset('/Images/640_-_Admin_Roles-256.webp')}}" alt="logo" width="22" height="17" class="d-inline-block align-text-top">
                        پنل ادمین
                    </a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('/Images/UI_3_-20-256.webp')}}" alt="logo" width="22" height="17" class="d-inline-block align-text-top">
                        آزمون ها
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">آزمون اطلاعات عمومی</a></li>
                        <li><a class="dropdown-item" href="#">آزمون هوش</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>