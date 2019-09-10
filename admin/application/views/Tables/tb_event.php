<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name Event</th>
            <th>Address</th>
            <!-- <th>Description</th> -->
            <th>Time&Date</th>
            <th>Photo</th>
            <th>Status Event</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach($event as $e)
        {
        ?>
        <tr>
            <th><?= $no++?></th>
            <td><?= $e->name_event?></td>
            <td><?= $e->address?></td>
            <!-- <td><?= $e->description?></td> -->
            <td><?= $e->time?>, <?= $e->date ?></td>
            <td><img src="<?php echo base_url('./upload/'.$e->photo) ?>"  width="100" /></td>
            <td><?= $e->status_event?></td>
            <td><button class="btn btn-danger btn-round">Hapus</button></td>
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
            <li class="page-item <?php if($i == $active) { echo 'active'; } ?>"><a class="page-link" onClick="toPageEvent(<?= $i; ?>)" ><?= $i; ?></a></li>
        <?php endfor ?>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>