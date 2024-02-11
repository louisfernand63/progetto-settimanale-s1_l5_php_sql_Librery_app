<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBooks</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.php">

</head>

<body>

    <header class="head">
        <div class="logo border-bottom">
            <img class="w-100" src="assets/images/logo.svg" alt="" />
            <a class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <div id="navbarSupportedContent" class="navcol pt-0 d-none d-lg-block">
            <ul>
                <li class="border-bottom">
                    <a href="index.php"><i class="bi bi-house-door fs-6 me-2"></i> Home</a>
                </li>
                <li class="border-bottom">
                    <a href=""><i class="bi fs-6 me-2 bi-window-stack"></i>
                        <i class="bi fs-6 bi-google-play"></i> Applications</a>
                </li>

                <li class="border-bottom">
                    <a href="index.html"><i class="bi me-2 fs-6 bi-controller"></i> Games</a>
                </li>
                <li class="border-bottom">
                    <a href="index.html"><i class="bi me-2 fs-6 bi-journal-bookmark"></i> Books</a>
                </li>
                <li class="border-bottom">
                    <a href="index.html"><i class="bi me-2 fs-6 bi-music-note-beamed"></i> Music</a>
                </li>
                <li class="border-bottom">
                    <a href="index.html"><i class="bi fs-6 me-2 bi-film"></i> Movies</a>
                </li>
                <li class="border-bottom">
                    <a href="index.html"><i class="bi me-2 fs-6 bi-card-image"></i> Wallpapers</a>
                </li>
                <li class="border-bottom">
                    <a href="about.html"><i class="bi me-2 fs-6 bi-info-square"></i> About Us</a>
                </li>
                <li class="border-bottom">
                    <a href="contact.html"><i class="bi me-2 bi-chat-left-dots"></i> Contact Us</a>
                </li>

                <li class="nav-item">
                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add new book</button>
                </li>

            </ul>
        </div>
    </header>
    <div class="main-content">
        <div class="nav-bar sticky-top sticky-top-xl bg-white shadow-sm w-100 p-3">
            <div class="row  align-items-center">
                <div class="col-md-4">
                    <div class="input-group mb-0">
                        <form class="form-inline input-group align-items-center mb-0 " action="search.php" method="GET">
                            <input class="form-control border-end-0  mr-sm-2" type="search" placeholder="Search"
                                aria-label="Search" name="query">
                            <button class="btn" type="submit">
                                <span class="input-group-text sit border-start-0" id="basic-addon2">
                                    <i class="bi bi-search">
                                    </i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 mb-0">
                    <li>
                        <ul class="colLeft">
                            <?php include 'dropdown.php'; ?>
                        </ul>
                    </li>
                </div>


                <div class="col-md-4 d-lg-flex justify-content-lg-end align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Name Lastname
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Cart</a>
                            <a class="dropdown-item" href="#">My Books</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Book</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addBookForm" action="aggiungi_libro.php" method="post">
                                <div class="form-group">
                                    <label for="bookTitle">Title:</label>
                                    <input type="text" class="form-control" id="bookTitle" name="titolo" required>
                                </div>
                                <div class="form-group">
                                    <label for="bookAuthor">Author:</label>
                                    <input type="text" class="form-control" id="bookAuthor" name="autore" required>
                                </div>
                                <div class="form-group">
                                    <label for="publicationYear">Publication Year:</label>
                                    <input type="text" class="form-control" id="publicationYear"
                                        name="anno_pubblicazione" required>
                                </div>
                                <div class="form-group">
                                    <label for="bookGenre">Genre:</label>
                                    <input type="text" class="form-control" id="bookGenre" name="genere" required>
                                </div>
                                <div class="form-group">
                                    <label for="bookImage">Image Path:</label>
                                    <input type="text" class="form-control" id="bookImage" name="image_path" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Book</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </nav>