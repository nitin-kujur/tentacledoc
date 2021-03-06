<?php  
/*
Template Name: Blank Template
*/ 
?>

<?php //get_header(); // Loads the header.php template. ?>
<?php //include 'blank_header.php';?>

<!-- <main <?php //hybrid_attr( 'content' ); ?>> -->

	<?php if ( !is_front_page() && !is_singular() && !is_404() ) : // If viewing a multi-post page ?>

		<?php locate_template( array( 'misc/loop-meta.php' ), true ); // Loads the misc/loop-meta.php template. ?>

	<?php endif; // End check for multi-post page. ?>

	<?php if ( have_posts() ) : // Checks if any posts were found. ?>

		<?php while ( have_posts() ) : // Begins the loop through found posts. ?>

			
			<?php the_post(); // Loads the post data. ?>  

			<?php //hybrid_get_content_template(); // Loads the content/*.php template. ?> 

			<?php $title = wp_title('', 0); //echo $title;?>

			 
			<div class="panel panel-default">
        <div class="panel-heading"><h4><?php echo preg_replace("/(\+&nbsp;)/", "", $title);?></h4></div>
       	<div class="panel-body">
        	<?php the_content();?>           
        </div>
      </div>

      <!-- <p>Suggestions: <span id="txtHint"></span></p> -->
			<?php include 'getMenu.php';?>

			<?php if ( is_singular() ) : // If viewing a single post/page/CPT. ?>

				<?php //comments_template( '', true ); // Loads the comments.php template. ?>

			<?php endif; // End check for single post. ?>

		<?php endwhile; // End found posts loop. ?>

		<?php locate_template( array( 'misc/loop-nav.php' ), true ); // Loads the misc/loop-nav.php template. ?>

	<?php else : // If no posts were found. ?>

		<?php locate_template( array( 'content/error.php' ), true ); // Loads the content/error.php template. ?>

	<?php endif; // End check for posts. ?>

<!--</main><!-- #content -->

<?php //get_footer(); // Loads the footer.php template. ?>
<?php //include 'blank_footer.php';?>