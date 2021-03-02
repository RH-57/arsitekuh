

<!-- Begin Page Content -->
<div class="container-fluid">
	<table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th> 
                <th>Nama</th> 
                <th>Email</th>
                <th>Tanggal</th> 
                <th>Subject</th> 
                <th>Pesan</th>
                <td>Status</td>
        </thead>
        <?php foreach ($contact as $p): {
        	
        } ?>
        <tbody>
         	<td><?php echo $p->id_contact; ?> </td>
         	<td><?php echo $p->name; ?> </td>
         	<td><?php echo $p->email; ?> </td>
         	<td><?php echo $p->date; ?> </td>
         	<td><?php echo $p->subject; ?> </td>
         	<td><?php echo $p->message; ?> </td>
            <td></td>
            <td><button class="btn btn-primary"> Update</button></td>
        </tbody>
    <?php endforeach; ?>
    </table>          
</div>
          

  <!-- Content Row -->
  
<!-- End of Main Content -->


