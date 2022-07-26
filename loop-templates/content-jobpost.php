<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container px-md-0">
   <div class="breadcrumb blog text-primary px-0"><a href="<?php echo get_home_url(); ?>/careers">< Careers</a></div><!-- Breadcrumbs -->
</div>
<div class="container px-md-0" id="listings">
    <div class="listings mb-5 pb-5">
        <?php the_field('greenhouse_config'); ?>
        <div class="listings-extension"></div>
    </div>
</div>

<form style="display:none; ">
    <input type="hidden" name="validThrough" value=""/>
    <input type="hidden" name="baseSalary" value=""/>
    <input type="hidden" name="jobLocation.address.streetAddress" value=""/>
    <input type="hidden" name="employmentType" value=""/>
    <input type="hidden" name="jobLocation.address.postalCode" value=""/>
</form>

<script type="text/javascript">
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const jobId = urlParams.get('gh_jid');
    console.info(jobId);

    if (jobId) {
        gtag('event', 'page_view', {
                page_title : 'Job Listing - ' + jobId,
                page_path: `careers/job-listing/?gh_jid=${jobId}`,
                page_location: 'https://beta.udigstudio.com/careers/job-listing/?gh_jid=' + jobId,
                send_to: '275769733',
            }
        );
        gtag('event', 'page_view', {
                page_title : 'Job Listing - ' + jobId,
                page_path: `careers/job-listing/?gh_jid=${jobId}`,
                page_location: 'https://beta.udigstudio.com/careers/job-listing/?gh_jid=' + jobId,
                send_to: 'G-5C0X3KZVX3',
            }
        );
        gtag('event', 'page_view', {
                page_title : 'Job Listing - ' + jobId,
                page_path: `careers/job-listing/?gh_jid=${jobId}`,
                page_location: 'https://beta.udigstudio.com/careers/job-listing/?gh_jid=' + jobId,
                send_to: 'UA-38516124-4',
            }
        );
    }
   
</script>