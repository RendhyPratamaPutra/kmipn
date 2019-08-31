<table class="table" class="display">
    <thead>
        <tr>
            <th>No</th>
            <th>NAME</th>
            <!-- <th>ADDRESS</th> -->
            <th>CONTACT PERSON</th>
            <th>EMAIL</th>
            <th>POINT</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($community as $users)  
        {
        ?>
        <tr>
            <th><?= $no++?></th>
            <td><?php echo $users->name_community ?></td>
            <!-- <td><?php echo $users->description ?></td> -->
            <td><?php echo $users->contact_person ?></td>
            <td><?php echo $users->status ?></td>
            <td><?php echo $users->legality ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('users/read/'.$users->id_personal),'Read'); 
                echo ' | '; 
                echo anchor(site_url('users/update/'.$users->id_personal),'Update'); 
                echo ' | '; 
                echo anchor(site_url('users/delete/'.$users->id_personal),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
    </tr>
        <?php
        
    }?>
    </tbody>
</table>
<hr>

<nav aria-label="Page navigation example" class="mt-4 d-flex justify-content-center">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php  ?>
        <?php for( $i = 1; $i <= $pages; $i++) : ?>
            <li class="page-item <?php if($i == $active) { echo 'active'; } ?>"><a class="page-link" onClick="toPageCommunity(<?= $i; ?>)" ><?= $i; ?></a></li>
        <?php endfor ?>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>