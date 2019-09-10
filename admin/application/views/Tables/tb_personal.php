<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>CONTAC PERSON</th>
			<th>EMAIL</th>
			<th>POINT</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($personal as $users) : ?>
		<tr>
			<th><?= $no++?></th>
			<td><?php echo $users->name ?></td>
			<td><?php echo $users->address ?></td>
			<td><?php echo $users->contact_person ?></td>
			<td><?php echo $users->email ?></td>
			<td><?php echo $users->point ?></td>
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
		<?php endforeach ?>
	</tbody>
</table>

<hr>

<!-- Pagination -->
<nav aria-label="Page navigation example" class="mt-4 d-flex justify-content-center">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php  ?>
    <?php for( $i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item <?php if($i == $active) { echo 'active'; } ?>" ><a class="page-link" onClick="toPage(<?= $i; ?>)" ><?= $i; ?></a></li>
    <?php endfor ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<!-- end Pagination -->