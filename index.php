<?php get_header(); ?>
</head>

<body>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

	<script>
	alert("jdksjdsk");

	function hello()
		alert("dsjdksj");
	}
	</script>

<?php get_footer(); ?>

</body>
</html>