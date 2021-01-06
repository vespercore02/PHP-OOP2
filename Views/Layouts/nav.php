<nav class="navbar navbar-expand navbar-dark bg-dark mb-3" aria-label="Second navbar example">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP OOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
        <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="/oop1">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view.php">View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add.php">Add</a>
        </li>
        </ul>

        <form action="search.php" method="get">
            
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
        </form>
    </div>
    </div>
</nav>