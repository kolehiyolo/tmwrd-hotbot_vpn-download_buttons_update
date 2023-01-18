<?php include_once(dirname(__FILE__). '/../config/config.php'); ?>
<?php include('inc-cookie.php'); ?>

<script>
    /* const queryParams = new URLSearchParams(window.location.search.substring(1));
    let hasTune = false;
    let tuneParamsJson = "";
    if (queryParams.has('affiliate_id')) {
        hasTune = true;
        const affiliateId = queryParams.get('affiliate_id');
        setCookie('affiliateId', affiliateId, 30);
        tuneParamsJson = JSON.stringify(Object.fromEntries(queryParams));
        setCookie('tuneParams', tuneParamsJson, 30);
    } */

    const hasCJ = <?=($GLOBALS['hasCj'] ? 'true' : 'false')?>;
</script>
