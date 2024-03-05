<?php
                if (is_home()) {
                    get_template_part('template-parts/site-banner');
                } else {
                    get_template_part('template-parts/site-banner-home');
                }
?>