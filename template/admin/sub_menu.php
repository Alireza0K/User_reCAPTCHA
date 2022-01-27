<?php
include "navbar.php";
?>
<div class=" container" dir="ltr">
    <br>
    <div class="col d-flex justify-content-center">
        <button type="button" class="btn btn-lg  btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Bad User
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bad User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <b>in this tab : </b><br>
                    this plugin check users email and 
                    Collect users with the wrong email. 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach($pagination_complete as $data_as_complete_pagination ):?>
        <tr>
            <th scope="row"><?php echo $data_as_complete_pagination->ID; ?></th>
            <td class="table-secondary"><?php echo $data_as_complete_pagination->user_nicename; ?></td>
            <td class="table-danger"><?php echo $data_as_complete_pagination->user_email; ?></td>
            <th>
                <a href="<?php echo add_query_arg(['Action' => 'Eliminate_bad_user' , 'Item' => $data_as_complete_pagination->ID ]); ?>" class="btn btn-primary">Eliminate</a>
            </th>
        </tr
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