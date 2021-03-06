<?php
/**
 * Column main view
 */


// Prevent direct call
if ( !defined( 'WPINC' ) ) die;
if ( !class_exists( 'GW_GoPricing' ) ) die; 

?>

<!-- Column -->
<div class="go-pricing-col">				
		<div class="go-pricing-col-content">
		
		<!-- General Options -->
		<div class="gwa-abox gwa-closed" data-type="general" data-color="#81ae27">
			<div class="gwa-abox-header">
				<div class="gwa-abox-header-icon-general"></div>
				<div class="gwa-abox-title"><?php _e( 'General Options', 'go_pricing_textdomain' ); ?><small><?php _e( 'Global Column Settings', 'go_pricing_textdomain' ); ?></small></div>
				<div class="go-pricing-col-index"><?php printf( '#%d', $x+1 ); ?></div>
				<div class="gwa-abox-ctrl"></div>
			</div>
			<div class="gwa-abox-content-wrap">
				<div class="gwa-abox-content"> 
					<?php $this->get_column_general( $table_data, $x ); ?>	
				</div>
			</div>
		</div>
		<!-- / General Options -->

		<!-- Header Options -->
		<div class="gwa-abox gwa-closed" data-type="header" data-color="#ffbe00">
			<div class="gwa-abox-header">
				<div class="gwa-abox-header-icon-header"></div>
				<div class="gwa-abox-title"><?php _e( 'Header Options', 'go_pricing_textdomain' ); ?><small><?php _e( 'Header Content & Style', 'go_pricing_textdomain' ); ?></small></div>
				<div class="go-pricing-col-index"><?php printf( '#%d', $x+1 ); ?></div>
				<div class="gwa-abox-ctrl"></div>	
			</div>
			<div class="gwa-abox-content-wrap">
				<div class="gwa-abox-content"> 
					<?php $this->get_column_header( $table_data, $x ); ?>
				</div>
			</div>
		</div>
		<!-- / Header Options -->					

		<!-- Body Options -->									
		<div class="gwa-abox gwa-closed" data-type="body" data-color="#d271e6">
			<div class="gwa-abox-header">
				<div class="gwa-abox-header-icon-body"></div>
				<div class="gwa-abox-title"><?php _e( 'Body Options', 'go_pricing_textdomain' ); ?><small><?php _e( 'Body Content & Style', 'go_pricing_textdomain' ); ?></small></div>
				<div class="go-pricing-col-index"><?php printf( '#%d', $x+1 ); ?></div>				
				<div class="gwa-abox-ctrl"></div>
			</div>
			<div class="gwa-abox-content-wrap">
				<div class="gwa-abox-content">
					<?php $this->get_column_body( $table_data, $x, $row_count ); ?>
				</div>
			</div>						
		</div>
		<!-- / Body Options -->	
	
		<!-- Footer Options -->
		<div class="gwa-abox gwa-closed" data-type="footer" data-color="#fa5541">
			<div class="gwa-abox-header">
				<div class="gwa-abox-header-icon-footer"></div>
				<div class="gwa-abox-title"><?php _e( 'Footer Options', 'go_pricing_textdomain' ); ?><small><?php _e( 'Footer Content & Style', 'go_pricing_textdomain' ); ?></small></div>
				<div class="go-pricing-col-index"><?php printf( '#%d', $x+1 ); ?></div>
				<div class="gwa-abox-ctrl"></div>
			</div>
			<div class="gwa-abox-content-wrap">
				<div class="gwa-abox-content">
					<?php $this->get_column_footer( $table_data, $x, $button_count ); ?>
				</div>				
			</div>
		</div>
		<!-- / Footer Options -->
		
		<!-- Column Controls -->
		<div class="gwa-abox">
			<div class="gwa-abox-content">
				<div class="go-pricing-col-ctrl">
					<a href="#" title="<?php esc_attr_e( 'Delete', 'go_pricing_textdomain' ); ?>" data-action="delete-col" data-confirm="<?php esc_attr_e( 'Are you sure you want to delete the column?', 'go_pricing_textdomain' ); ?>" class="gwa-btn-style3 gwa-mr10"><i class="fa fa-ban"></i></a><a href="#" title="<?php esc_attr_e( 'Clone', 'go_pricing_textdomain' ); ?>" data-action="clone-col"  data-confirm="<?php esc_attr_e( 'Are you sure you wanto clone the column?', 'go_pricing_textdomain' ); ?>" class="gwa-btn-style2 gwa-mr10"><i class="fa fa-adjust"></i></a><a href="#" title="<?php esc_attr_e( 'Expand / Collapse', 'go_pricing_textdomain' ); ?>" data-action="expand-col" class="gwa-btn-style4"><i class="fa fa-plus-circle"></i><i class="fa fa-minus-circle"></i></a>
				</div>
			</div>
		</div>
		<!-- / Column Controls -->
																																						
	</div>
	
</div>
<!-- / Column -->	