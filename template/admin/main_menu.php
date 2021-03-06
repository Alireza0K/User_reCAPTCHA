<?php
include "navbar.php";
?>
<div class=" container" dir="ltr">
    <h2 dir="ltr">Hello <span class="badge bg-secondary"><?php echo $Current_user_name;?></span></h2>
    <br>
    <div class="col d-flex justify-content-center">
        <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Correct User
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Correct User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <b>in this tab : </b><br>
                The plugin collects users who have the correct email
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
        <th scope="col" class="">id</th>
        <th scope="col">User name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pagination_complete as $user_data):?>
            <tr>
                <th scope="row"><?php echo $user_data->ID; ?></th>
                <td class="table-secondary"><?php echo $user_data->user_nicename; ?></td>
                <td class="table-success"><?php echo $user_data->user_email; ?></td>
                <td class="table-success"><a href="<?php echo add_query_arg(["Action"=>"Send_email","which-user"=>$user_data->ID]);?>" class="btn btn-success">Send Email</a></td>
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