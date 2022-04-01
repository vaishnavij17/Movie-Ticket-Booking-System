<?php 
  include 'admin/db_connect.php';
  $movies = $conn->query("SELECT * FROM movies ");
?>

<header class="masthead">
	<div class="container-fluid">	

			<div id="movies">	

	<?php while($row=$movies->fetch_assoc()): ?>
        <div class="movie-item">
          <img class="" src="assets/img/<?php echo $row['cover_img']  ?>" alt="<?php echo $row['title'] ?>" >
          <div class="mov-det">
            <!-- <h5><?php echo $row['description']?></h5> -->
            <!-- <button type="button" data-id="<?php echo $row['id'] ?>">Reserve Seat</button> -->
          </div>
        </div>
    <?php endwhile; ?>

	</div>

	</div>	
</header>
