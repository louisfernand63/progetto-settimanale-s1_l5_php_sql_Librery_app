<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card h-100 w-100">

        <div class="image-container">
            <div class="first">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="discount">-20%</span>
                    <span id="wishlist" class="bi bi-heart-fill text-danger"></span>
                </div>
            </div>
            <img src="<?php echo $book['imaggine']; ?>" class="img-fluid rounded thumbnail-image"
                alt="<?php echo $book['titolo']; ?>">
        </div>

        <div class="product-detail-container p-2">

            <div class="d-flex justify-content-between align-items-center">
                <h6 class="fs-6 font-weight-bold w-75">
                    <?php echo $book['titolo']; ?>
                </h6>
                <div class="d-flex flex-column mb-2">
                    <span class="new-price">$27.99</span>
                    <small class="old-price text-right">$35.99</small>
                </div>
            </div>
            <!-- Autore -->
            <div class="d-flex justify-content-between align-items-center">
                <blockquote class="author-name" data-author-id="<?php echo $book['id_autore']; ?>">
                    <?php echo $book['autore']; ?>
                </blockquote>
            </div>
            <!-- Genere  -->
            <div class="d-flex justify-content-between align-items-center pt-1">
                <div class="color-select d-flex">
                    <?php
                    $genre = $book['genere'];
                    $icon_class = '';

                    switch ($genre) {
                        case 'Fantasy':
                            $icon_class = 'fas fa-dragon';
                            break;
                        case 'Romance':
                            $icon_class = 'bi bi-heart';
                            break;
                        default:
                            $icon_class = 'fas fa-space-shuttle';
                            break;
                    }
                    ?>
                    <button type="button" class="btn creme" style="padding: 8px 12px;"><i
                            class="<?php echo $icon_class; ?>"></i></button>

                    <a href='RimuovereLibro.php?id=<?php echo $book['id']; ?>' class="btn red ml-2"><i
                            class="bi bi-file-earmark-x"></i></a>
                    <a href='modificazione_libro.php?id=<?php echo $book['id']; ?>' class="btn blue ml-2"><i
                            class="bi bi-pencil-square"></i></a>
                </div>
                <div class="d-flex">
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center pt-1">
                <div> <i class="bi bi-star "></i> <span class="rating-number">4.9</span> </div>
                <span class="buy">Acquista ora</span>
            </div>
        </div>
    </div>
</div>