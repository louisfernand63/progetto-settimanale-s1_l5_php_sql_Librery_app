<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card h-100 w-100">
        <!-- Image Container -->
        <div class="image-container">
            <div class="first">
                <div class="d-flex justify-content-between align-items-center"> 
                    <span class="discount">-25%</span> 
                    <span id="wishlist" class="bi bi-heart-fill text-danger"></span> 
                </div> 
            </div> 
            <img src="<?php echo $book['image_path']; ?>" class="img-fluid rounded thumbnail-image" alt="<?php echo $book['titolo']; ?>"> 
        </div>
        <!-- Product Detail Container -->
        <div class="product-detail-container p-2">
            <!-- Title and Price -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="fs-6 font-weight-bold w-75"><?php echo $book['titolo']; ?></h6>
                <div class="d-flex flex-column mb-2"> 
                    <span class="new-price">$3.99</span> 
                    <small class="old-price text-right">$5.99</small> 
                </div>
            </div>
            <!-- Author -->
            <div class="d-flex justify-content-between align-items-center">
                <blockquote class="author-name" data-author-id="<?php echo $book['autore_id']; ?>"><?php echo $book['autore']; ?></blockquote> 
            </div>
            <!-- Genre  -->
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
                    <button type="button" class="btn creme" style="padding: 8px 12px;"><i class="<?php echo $icon_class; ?>"></i></button> <!-- Assuming this button is for genre -->
                    <!-- Action buttons -->
                    <a href='rimuovi_libro.php?id=<?php echo $book['id']; ?>' class="btn red ml-2"><i class="bi bi-file-earmark-x"></i></a>
                    <a href='modifica_libro.php?id=<?php echo $book['id']; ?>' class="btn blue ml-2"><i class="bi bi-pencil-square"></i></a>
                </div>
                <div class="d-flex">  <!-- Additional space for potential future elements -->
                </div>
            </div>
            <!-- Rating and Buy -->
            <div class="d-flex justify-content-between align-items-center pt-1">
                <div> <i class="bi bi-star "></i> <span class="rating-number">4.8</span> </div> 
                <span class="buy">BUY +</span>
            </div>
        </div>
    </div>
</div>