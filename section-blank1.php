<?php
global $smof_data;
global $i;
?>

<!-- ========== BLANK1 SECTION ========== -->

<li id="blank1" class="section<?php echo $i; ?>">
    <?php if ($smof_data['blank1_switch'] == 1) { ?>

        <section class="blank1_intro intro"

            <?php if ($smof_data['blank1_intro_img']) { ?>

                style="background-image: url(<?php echo $smof_data['blank1_intro_img']; ?>);"

            <?php } ?>>
            <div class="black_over">
                <div class="container text_center">
                    <div class="intro_pad">
                        <?php if ($smof_data['blank1_intro_h1']) { ?>
                            <h1><?php printf(__($smof_data['blank1_intro_h1'])); ?></h1>
                        <?php } ?>
                        <?php if ($smof_data['blank1_intro_h2']) { ?>
                            <h2><?php printf(__($smof_data['blank1_intro_h2'])); ?></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <section class="blank1_main man_box">
        <div class="blank1_top top_box"></div>
        <div class="blank1_mid mid_box">
            <div class="container">
                <?php if ($smof_data['blank1_title']) { ?>
                    <h3 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['blank1_title'])); ?></h3>
                <?php } ?>
                <?php if ($smof_data['blank1_subtitle']) { ?>
                    <div
                        class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['blank1_subtitle'])); ?></div>
                <?php } ?>

                <div class="section_exc">
                    <?php
                    if ($smof_data['blank1_excerpt'] != "Select page") {
                        $page = get_posts(array('name' => $smof_data['blank1_excerpt'], 'post_type' => 'page'));
                        if ($page) {
                            echo do_shortcode($page[0]->post_content);
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
        <div class="blank1_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
        </div>
    </section>
</li>