<?php 
function my_breadcrumbs() { 
	// Navx breadcrumbs display
	if(function_exists('bcn_display')):
    ?>

		<section class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="BreadcrumbList col-lg-12" itemscope itemtype="http://schema.org/BreadcrumbList">
						<?php bcn_display(); ?>
					</div>
				</div>
			</div>
		</section>

		<!-- <style>
			.breadcrumbs{
			  background: #ebebeb;
			  padding: 40px 15px 38px;
			  color: #5b5b5b;
			  font-size: 18px;
			}

			.breadcrumbs ul{
			  padding: 0;
			  margin: 0;
			  display: flex;
			}

			.breadcrumbs ul li{
			  list-style-type: none;
			}

			.breadcrumbs a{
			  color: #5b5b5b!important;
			  background: #fff;
			  padding: 2px 5px;
			  margin-right: 15px;
			  position: relative;
			  text-decoration: underline!important;
			  margin-bottom: 5px;
			  display: inline-block;
			}

			.breadcrumbs .breadcrumb_last:after,
			.breadcrumbs a:after{
			  content: '';
			  height: 0;
			  width: 0;
			  background: transparent;
			  border-top: 15px solid transparent;
		      border-bottom: 15px solid transparent;
		      border-left: 10px solid #fff;
			  position: absolute;
			  right: -9px;
			  top: 0;
			}

			.breadcrumbs .breadcrumb_last{
			  background: #EBEDEC;
			  padding: 2px 5px;
			  margin-right: 15px;
			  position: relative;
			  margin-bottom: 5px;
			  display: inline-block;
			}

			.breadcrumbs a:hover{
			  text-decoration: none!important;
			}

			.breadcrumbs ul li:last-child a{
			  text-decoration: none!important;
			}

			.BreadcrumbList>span:last-child a{
			  text-decoration: none!important;
			}

			.BreadcrumbList>span:last-child a:after{
			  display: none;
			}

			@media screen and (max-width: 768px) {
			  .breadcrumbs .breadcrumb_last:after{
			    display: none;
			  }
			}

			@media screen and (max-width: 578px) {
				.breadcrumbs ul{
					flex-wrap: wrap;
				}

				.breadcrumbs .breadcrumb_last:after,
				.breadcrumbs a:after{
					display: none;
				}
			}
		</style> -->	

    <?php
    endif; ?>

<?php
}