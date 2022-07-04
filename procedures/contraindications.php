<div class="row align-items-center ms-0 me-0 px-2 py-5 g-3 text-center">
    <div class="col procedure__description p-3">
        <h4 class="my-2 p-2">ПРОТИВОПОКАЗАНИЯ</h4>
        <div class="contr my-2 p-2"><?php 
            foreach ($results as $contr) {
                if ($contr['contraindications'] != NULL) {
                    echo $contr['contraindications'];
                }
            }
            ?>
        </div>
    </div>
</div>