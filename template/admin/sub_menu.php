<?php
wp_enqueue_script("bootstrap_bundle");
wp_enqueue_script("bootstrap_min");
wp_enqueue_style("bootstrap_min_css");
include "navbar.php";
?>
<div class=" container">
    <br>
    <div class="col d-flex justify-content-center">
    <h2  class="btn btn-outline-danger btn-lg d-flex justify-content-center">Bad User</h2>
    </div>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach($pagination_complete as $data_as_complete_pagination ):?>
        <tr>
            <th scope="row"><?php echo $data_as_complete_pagination->ID; ?></th>
            <td class="table-secondary"><?php echo $data_as_complete_pagination->user_nicename; ?></td>
            <td class="table-danger"><?php echo $data_as_complete_pagination->user_email; ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
    
    <div class="col d-flex justify-content-center">
        <nav aria-label="..." dir="ltr">
            <ul class="pagination">
            <?php for($i=1; $i <= $number_of_pagination; $i++):?>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="<?php echo add_query_arg(["page"=>"first-submenu","item"=>"$i"]); ?>" > <?php echo $i;?> </a>
                    </li>
                <?php endfor?>
            </ul>
        </nav>
    </div>
    
</div>