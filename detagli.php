<?php
session_start();
include('navbar.php');
include 'databaseaccess.php';

if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];

    $query = "SELECT * FROM libri WHERE id = $book_id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $book = mysqli_fetch_assoc($result);
        ?>
        <section class="py-5">
            <div class="container">
                <div class="row gx-5">
                    <aside class="col-lg-6">
                        <div class="border rounded-4 mb-3 d-flex justify-content-center">
                            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="">
                                <img src="<?php echo $book['image_path']; ?>" alt="<?php echo $book['titolo']; ?>"
                                    style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit">
                            </a>
                        </div>
                    </aside>
                    <main class="col-lg-6">
                        <div class="ps-lg-3">
                            <h4 class="title text-dark">
                                <?php echo $book['titolo']; ?>
                            </h4>
                            <div class="d-flex flex-row my-3">
                                <div class="text-warning mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-1">4.9</span>
                                </div>


                            </div>
                            <div class="mb-3">
                                <span class="h5">$27.99</span>
                            </div>
                            <p></p>
                            <div class="row">
                                <dt class="col-3">Autore:</dt>
                                <dd class="col-9">
                                    <?php echo $book['autore']; ?>
                                </dd>
                            </div>
                            <div class="row">
                                <dt class="col-3">Genere:</dt>
                                <dd class="col-9">
                                    <?php echo $book['genere']; ?>
                                </dd>
                            </div>
                            <div class="row">
                                <dt class="col-3">Anno Pubblicazione:</dt>
                                <dd class="col-9">
                                    <?php echo $book['anno_pubblicazione']; ?>
                                </dd>
                            </div>

                            <hr />
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantità</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1"
                                        data-mdb-ripple-color="dark">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border border-secondary" placeholder="14"
                                        aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                    <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2"
                                        data-mdb-ripple-color="dark">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <a href="#" class="btn btn-warning shadow-0">Acquista ora</a>
                            <a href="#" class="btn btn-primary shadow-0"><i class="me-1 fa fa-shopping-basket"></i>Aggiungi al
                                carello</a>
                            <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"><i
                                    class="me-1 fa fa-heart fa-lg" data-book-id="<?php echo $book['id']; ?>"></i>Salva</a>
                        </div>
                    </main>
                </div>
            </div>
        </section>
        <?php


    } else {
        echo "Libro non trovato.";
    }
} else {
    echo "ID del libro non fornito.";
}

include('footer.php');
?>