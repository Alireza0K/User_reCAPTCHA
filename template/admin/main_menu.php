<?php
wp_enqueue_script("bootstrap_bundle");
wp_enqueue_script("bootstrap_min");
wp_enqueue_style("bootstrap_min_css");
include "navbar.php";
?>
<div class=" container">
    <h2 dir="ltr" class=" display-4 ">Hello <button class="btn btn-success btn-lg">user</button></h2>
    <br>
    <div class="col d-flex justify-content-center">
    <h2  class="btn btn-outline-secondary btn-lg d-flex justify-content-center">Correct User</h2>
    </div>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col" class="">id</th>
        <th scope="col">User name</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pagination_complete as $user_data):?>
            <tr>
                <th scope="row"><?php echo $user_data->ID; ?></th>
                <td class="table-secondary"><?php echo $user_data->user_nicename; ?></td>
                <td class="table-success"><?php echo $user_data->user_email; ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
    </table>
   
    <div class="col d-flex justify-content-center">
        <nav aria-label="..." dir="ltr">
            <ul class="pagination">
                <?php for($i=1; $i <= $number_of_pagination; $i++):?>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="<?php echo add_query_arg(["page"=>"main-menu","item"=>"$i"]); ?>" > <?php echo $i;?> </a>
                    </li>
                <?php endfor?>
            </ul>
        </nav>
    </div>
</div>