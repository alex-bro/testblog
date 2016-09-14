<div class="abv_widget_wrapper">
    <?php echo $args['before_widget']; ?>
    <?php if ( ! empty( $title ) ) { ?>
        <?php echo $args['before_title'] . $title . $args['after_title']; ?>
    <?php } ?>
    <?php $this->getCategory($instance['category']); ?>
    <?php echo $args['after_widget']; ?>
</div>

